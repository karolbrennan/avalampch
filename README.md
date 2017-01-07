# Starter Vagrant/Ansible Box
I created this for my own little local development boxes. 

## What's in the box?
+ ubuntu/trusty64
+ Apache
+ MySQL
+ PHP, cURL (allows for the stripping of .php extensions)

### Dependencies
+ [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
+ [Ansible](http://ansible.com)
+ [Vagrant](http://vagrantup.com)

#### Libraries
The following libraries are included via CDN

+ jQuery 2.2.3
+ Foundation JS and CSS 6.2.1
+ Foundation Dropdown / Dropdown Menu Plugins
+ Foundation Icons 3.0
+ Oswald Google Font

## Setup
1. Download the zip of this repo into an empty project folder in your sites directory
2. Edit the following files

__ansible/roles/webserver/templates/virtual-hosts.conf.j2__

    ServerName "test.dev"

*Change server name to whatever you want it to be (line 3)*

__Vagrantfile__

    config.vm.network "private_network", ip: "192.168.50.111"

*Change ip on line 5 (if desired)*

    server_name: "test.dev",

*Change server_name on line 9 to match the one in the virtual-hosts file*
*Note: This box is set up for local development, hence the APPLICATION_ENV = 'development'*

__/private/etc/hosts (or wherever your hosts file lives)__

*Add an entry for your vagrant box like this*

        192.168.50.111  test.dev

## Vagrant Up!
Once you've customized your settings - open terminal, cd into your project directory and type the following:

    $ vagrant up

Once the box starts up you'll be able to navigate to the server name you chose in your virtual-hosts file

## Misc. Notes
+ There is a public folder which holds anything that can be surfed to, as well as an includes folder that is meant to live outside of the public directory for things we don't want visitors to surf to like the header, footer, and nav files.
+ The public folder should be mapped to your www/public_html folder on your server if you choose to use this box and deploy it to the web.
