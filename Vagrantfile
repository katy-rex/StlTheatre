Vagrant.configure("2") do |config|

  # Set the box to use
  config.vm.box = "lacrm_20120602"
  config.vm.box_url = "https://s3.amazonaws.com/LACRM_devtools/CentOS-6.4-i386-v20130427.box"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.

  if Vagrant::Util::Platform.windows?
    # For some reason normal networking settings break windows
    config.vm.network :forwarded_port, guest: 80, host: 8083
    config.vm.network :forwarded_port, guest: 443, host: 8445
    config.vm.network :forwarded_port, guest: 3306, host: 3309
  else
    config.vm.network :private_network, ip: "192.168.33.12"
  end

  # Make log folder writable
  config.vm.synced_folder "./log", "/vagrant/log",
    owner: "vagrant",
    group: "vagrant",
    mount_options: ["dmode=777,fmode=666"]

  # stupid hack to get around IPv6 problems with CentOS boxes
  config.vm.provision :shell, inline: "if [ ! $(grep single-request-reopen /etc/sysconfig/network) ]; then echo RES_OPTIONS=single-request-reopen >> /etc/sysconfig/network; service network restart; fi"

  # Puppet configuration
  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "manifests"
    puppet.manifest_file  = "init.pp"
    puppet.module_path = "modules"
  end

  # Set the hostname
  config.vm.hostname = "local.codingfellowship.com"

end
