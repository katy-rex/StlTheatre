# Class: browscap
#
# This class installs the browscap file for php to use
#
class browscap {

  exec { '/usr/bin/curl http://browscap.org/stream?q=PHP_BrowsCapINI > /etc/php.d/php_browscap.ini':
    creates => '/etc/php.d/php_browscap.ini',
  }

}
