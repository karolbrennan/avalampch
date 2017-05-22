# ![Avalampch Logo](https://raw.githubusercontent.com/karolbrennan/avalampch/master/assets/images/logo_300.png)
I created this for quick set up of local development boxes to make it easier to get up and running with new projects.

## Features
+ url rewrite to strip .php extensions (access page.php at /page)
+ Automatic /etc/hosts updater, you just set the url and ip address 

### Future Improvements
+ Create a version that includes MaterializeCSS and a default theme
+ Re-write the navigation system
+ Auto select an IP address that is not in use

## What's in the box?
+ ubuntu/trusty64
+ Apache
+ MySQL
+ PHP, cURL

### Dependencies
+ [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
+ [Ansible](http://ansible.com)
+ [Vagrant](http://vagrantup.com)
+  You may be asked to install hostsupdater - you can do this with the following command:  `vagrant plugin install vagrant-hostsupdater`

#### Libraries
The following libraries are included via CDN

+ NormalizeCSS
+ Catamaran Google Font

## Setup
1. Download the zip of this repo and place it into an empty project folder in your sites directory
2. If desired, you can customize the IP address, VM name and box URL in the Vagrantfile file. To do so, open __Vagrantfile__ and change the variables at the top to whatever values you want.

*Note: This box is set up for local development, hence the APPLICATION_ENV = 'development'*

## Vagrant Up!
Once you've customized your settings - open terminal, cd into your project directory and type the following:

    $ vagrant up

It will run through the installation, and at some point you will be asked for your sudo password in order for it to update the hosts file automatically.

Once the box starts up you'll be able to navigate to the server name you chose ([vagrant.dev](http://vagrant.dev) by default). 