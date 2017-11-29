# Class: pecl_stats
#
class pecl_packages {

    package {'libcurl-devel':
      ensure => installed,
      require => [Package['curl']],
    }
    package {'httpd-devel':
          ensure => installed,
    }
    package {'pcre-devel':
              ensure => installed,
    }
    package {'php-devel':
        ensure => installed,
      }
    package {'curl':
      ensure => present,
    }

    exec {'pecl_stats':
      command => '/usr/bin/printf "\n" | /usr/bin/pecl install stats-1.0.3',
      creates => '/usr/lib/php/modules/stats.so',
      require => [Package['libcurl-devel'],Package['curl'], Package['php-devel']],
    }
    file {'pecl_stats.ini':
      ensure  => present,
      path    => '/etc/php.d/pecl_stats.ini',
      content => '; Enable pecl_stats extension module
  extension=stats.so
  ',
      require => Exec['pecl_stats'],
    }

  exec {'pecl_http':
          command => '/usr/bin/printf "\n" | /usr/bin/pecl install http://pecl.php.net/get/pecl_http-1.7.6.tgz',
          creates => '/usr/lib/php/modules/http.so',
          require => [Package['libcurl-devel'],
                      Package['curl'],
                      Package['php-devel'],
                      Package['httpd-devel'],
                      Package['pcre-devel']],
        }
        file {'pecl_http.ini':
          ensure  => present,
          path    => '/etc/php.d/pecl_http.ini',
          content => '; Enable pecl_http extension module
      extension=http.so
      ',
          require => Exec['pecl_http'],
        }
}

