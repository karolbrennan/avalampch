# Starter Vagrant/Ansible Box
I created this for my own local development boxes to make it easier to get up and running with new projects.

## Features
+ url rewrite to strip .php extensions (access page.php at just /page)
+ Prebuilt simple navigation system using the Foundation dropdowns
+ Automatic /etc/hosts updater

### Future Improvements
+ Upgrade the default "theme"
+ Fix minor issues with the navigation system
+ Include Foundation, MaterializeCSS and Bootstrap via CDN for easy ability to choose any given framework

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

+ jQuery 2.2.3
+ Foundation JS and CSS 6.2.1
+ Foundation Dropdown / Dropdown Menu Plugins
+ Foundation Icons 3.0
+ Oswald Google Font

## Setup
1. Download the zip of this repo into an empty project folder in your sites directory
2. If desired, you can customize the IP address, VM name and box URL in the Vagrantfile file. To do so, open __Vagrantfile__ and change the variables at the top to whatever values you want.

*Note: This box is set up for local development, hence the APPLICATION_ENV = 'development'*

## Vagrant Up!
Once you've customized your settings - open terminal, cd into your project directory and type the following:

    $ vagrant up

It will run through the installation, and at some point you will be asked for your sudo password in order for it to update the hosts file automatically.

Once the box starts up you'll be able to navigate to the server name you chose!

## Misc. Notes
+ There is a public_html folder which holds anything that can be surfed to, as well as an includes folder that is meant to live outside of the public directory for things we don't want visitors to surf to like the header, footer, and nav files.
+ The public_html folder should be mapped to your www/public_html folder on your server if you choose to use this box and deploy it to the web.