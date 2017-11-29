# Class: lacrmdb
#
# This class loads in the DB schema for lacathon.com
#
# Parameters:
#
# Actions:
#   - loads and/or updates lacrm database schema
#
# Requires:
#   - puppet-mysql module
#
# Sample Usage:
#
class lacrmdb {

  file {'/etc/hosts':
    ensure => file,
    owner => 'root',
    group => 'root',
    mode => '644',
    content => '127.0.0.1   localhost localhost.localdomain localhost4 localhost4.localdomain4
::1         localhost localhost.localdomain localhost6 localhost6.localdomain6
127.0.0.1   local.codingfellowship.com',
  }

  exec {'loadDB':
    command => '/usr/bin/perl /vagrant/sqldumps/updateDB.pl',
    require => [File['/etc/hosts'],
                Database['cf'],
                Database_grant['cf@localhost'],
                Apache::Vhost['local.codingfellowship.com'],
                Class['apache'],
                Class['apache::mod::php'],],
  }
}

