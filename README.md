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
1. Clone the repo into the directory you want to have the project in 
   
   `$ git clone http://github.com/karolbrennan/avalampch project-directory`
2. Navigate to your project directory 

    `$ cd project-directory`
3. Open the Vagrantfile in your editor (if using nano:)
    
    `$ nano Vagrantfile`
4. Edit the top 3 lines for your personal settings (*optional*)
    
    `VAGRANT_IP = "192.168.50.100"` - the ip you want to use
    
    `VAGRANT_HOSTNAME = "avalampch.dev"` - the url where you want to access your site
    
    `VAGRANT_BOXNAME = "avalampch"` - the name of the virtual machine
    
5. Save your changes (`ctrl + x`) and exit the editor
6. `$ vagrant up` - this will take you through the rest of the set up. At one point you will be asked for your password to update the hosts file. Once it finishes you're ready to surf to your new site! ([vagrant.dev](http://vagrant.dev) by default).

*Note: This box is set up for local development, hence the APPLICATION_ENV = 'development'*