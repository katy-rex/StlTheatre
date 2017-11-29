# Apache
class {'apache':  }
class {'apache::mod::php': }
class {'apache::mod::headers': }
#include apache::mod::cache
#include apache::mod::disk_cache
apache::vhost { 'ssl.local.codingfellowship.com':
    priority         => '10',
    vhost_name       => '*',
    port             => '443',
    docroot          => '/vagrant/site/',
    serveradmin      => 'bracken@lessannoyingcrm.com',
    servername       => 'local.codingfellowship.com',
    serveraliases    => ['codingfellowship'],
    ssl              => true,
    directories => [
            { path           => '/vagrant/site/',
              allow          => 'from all',
              allow_override => 'all',
              php_values     => ['include_path ".:/vagrant/site/config/:/vagrant/site/"'],
             },
          ],
}

apache::vhost { 'local.codingfellowship.com':
    priority         => '11',
    vhost_name       => '*',
    port             => '80',
    docroot          => '/vagrant/site/',
    serveradmin      => 'bracken@lessannoyingcrm.com',
    servername       => 'local.codingfellowship.com',
    serveraliases    => ['codingfellowship'],
    ssl              => false,
    directories => [
            { path           => '/vagrant/site/',
              allow          => 'from all',
              allow_override => 'all',
              php_values     => ['include_path ".:/vagrant/site/config/:/vagrant/site/"'],
             },
          ],
}


# MySQL
class { 'mysql': }
class { 'mysql::server':
  config_hash => { 'root_password' => 'whyareyouusingroot',
                    'bind_address'  => '0.0.0.0'}
}

database { 'cf':
  ensure  => 'present',
  require => Class['mysql::server'],
}

database_user { 'cf@localhost':
  password_hash => mysql_password('password'),
  require => Class['mysql::server'],
}

database_user { 'cf@%':
  password_hash => mysql_password('password'),
  require => Class['mysql::server'],
}

database_grant { 'cf@localhost':
  privileges => ['all'] ,
  require => Class['mysql::server'],
}
database_grant { 'cf@%':
  privileges => ['all'] ,
  require => Class['mysql::server'],
}


class {'lacrmdb':}


# PHP (Puppet Labs)
php::module { [ 'gd' , 'pear','pecl-memcache','mysql','xml','imap','mbstring']: }
php::ini { '/etc/php.ini':
  display_errors      => 'On',
  error_log           => '/vagrant/log/php_error.log',
  file_uploads        => 'On',
  upload_max_filesize => '51M',
  post_max_size       => '51M',
  upload_tmp_dir      => '/tmp',
  memory_limit        => '256M',
  browscap            => '/etc/php.d/php_browscap.ini',
  notify => Service['httpd'],
}
class {'pecl_packages':
    notify => Service['httpd'];
}

package {'php-bcmath':
  ensure => present,
  require => Class['pecl_packages']
}

# random packages
package {'emacs':
  ensure => present,
}

# Disable the firewall
service {'iptables':
    ensure => stopped,
    enable => false,
}

# install browscap
class { 'browscap':}

# vagrant bashrc
file {'vagrant-bashrc':
      path    => '/home/vagrant/.bashrc',
      ensure  => present,
      mode    => 0644,
      owner   => 'vagrant',
      content => '# .bashrc

# Source global definitions
if [ -f /etc/bashrc ]; then
   	. /etc/bashrc
fi

# AWS tools
export JAVA_HOME=/usr/lib/jvm/jre-1.7.0-openjdk
',
}

# sudoers entry for apache
file {'apache-sudoers':
  path    => '/etc/sudoers.d/apache2',
  ensure  => present,
  mode    => 0440,
  owner   => 'root',
  content => 'apache        ALL=(ALL)       NOPASSWD: ALL'
}

