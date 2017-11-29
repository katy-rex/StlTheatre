Coding Fellowship
=================

This is the repository for coding fellowship code. Everything that is part of the actual website is in the  `/site`
folder. The other directories and files in the root of the project are in place to set up the development environment
with Vagrant and Puppet.

Setting up your dev environment
-------------------------------

We use Vagrant and Puppet to make sure that everyone has a consistent development environment. Vagrant is a framework
for setting up virtual machines (e.g. through VirtualBox) that handles all the port forwarding, shared filesystem, etc.
Puppet is a provisioning tool that we use to handle the installation and configuration of all the packages needed to run
the code. The end result is that you should be able to set up your dev environment relatively easily by proceeding as
follows:
* Install VirtualBox: https://www.virtualbox.org/wiki/Downloads
* Install Vagrant: http://downloads.vagrantup.com/
    * _Note: If the most recent versions aren't working, you may need to try older versions of VirtualBox and Vagrant.
    As of 9/2016, the following versions were working on a Mac environment:_
        * _VirtualBox: 5.0.26_
        * _Vagrant: 1.8.0_
* As an administrator, edit your hosts file (`/etc/hosts` or `c:\WINDOWS\system32\drivers\etc\hosts`) and add the line:
    * For Windows
        * `127.0.0.1 local.codingfellowship.com`
    * For OS X, Linux, or other *nix systems
        * `192.168.33.12   local.codingfellowship.com`
* Download the project files following the read-only setup below
* Open a terminal and cd into the root of the project (where Vagrantfile lives)
* Run `vagrant up` - This command may take quite a while to run as it has to download the image, create a VM, and
    configure the VM. When it's complete you should have a fully functional VM to use for development. To stop the VM,
    open the terminal and use `vagrant suspend` or `vagrant halt`. You can bring the machine back again with
    `vagrant up`. To refresh the VM to the latest configuration, run `vagrant reload`. You can ssh into the VM by
    running `vagrant ssh`
  * _Note: On linux machines, if you get an error saying 'Could not locate the pip command' make sure to install
    pip on your machine (http://www.saltycrane.com/blog/2010/02/how-install-pip-ubuntu/)_
  * _Note: if you get an error saying that Vagrant can't find the VirtualBox binary, you probably need to use an older
    version of VirtualBox._
* Set up the project
  * Make a new file called `config.php` in the `/sites/config` folder. Copy the contents of `config_example.php`
    (in the same directory) and check it line-by-line to make sure none of the settings need to be changed.
* Access your local site
  * After completing the above, you can view your copy of the website, hosted from the VM you just created, in your web
    browser by going to:
    * Windows: http://local.codingfellowship.com:8083
    * OS X, Linux: http://local.codingfellowship.com

Deploying to the public internet
--------------------------------
This part is pretty easy. Any time code is committed to your master branch, it will automatically be deployed to a
publicly accesible subdomain on codingfellowship.com. You should have been asked for a subdomain to use already, but if
you don't know what it is, just ask us. Navigating to http://<your-subdomain>.codingfellowship.com will show you your
deployed code.
