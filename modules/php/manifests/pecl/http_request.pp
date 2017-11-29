# Define: php::module::http_request
#
# Written (poorly) by Bracken M King
#
# Sample Usage :
#  class {'php::http_request':
#     notify => Service['httpd'],
#  }
#
define php::module::http_request (
) {

  require php
  require php::devel
  #require php::pecl

  package {'libcurl-devel':
    ensure => installed,
    require => [Package['curl']],
  }
  package {'php-devel':
      ensure => installed,
    }
  package {'curl':
    ensure => present,
  }

  exec {'pecl_http':
    command => '/usr/bin/printf "\n" | /usr/bin/pecl install pecl_http',
    creates => '/usr/lib/php/modules/http.so',
    require => [Package['libcurl-devel'],Package['curl'],Class['php::pear'], Package['php-devel']],
  }
  file {'pecl_http.ini':
    ensure  => present,
    path    => '/etc/php.d/pecl_http.ini',
    content => '; Enable pecl_http extension module
extension=http.so',
    require => Exec['pecl_http'],
  }

}

