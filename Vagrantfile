VAGRANT_IP = "192.168.50.100"
VAGRANT_HOSTNAME = "vagrant.dev"
VAGRANT_BOXNAME = "vagrant dev"

Vagrant.configure('2') do |config|
    config.vm.box = "ubuntu/trusty64"
    config.vm.network :private_network, ip: VAGRANT_IP
    config.vm.hostname = VAGRANT_HOSTNAME
    config.hostsupdater.remove_on_suspend = false
    config.vm.synced_folder ".", "/vagrant", owner: "www-data", group: "www-data", mount_options: ["dmode=775,fmode=775"]
    config.vm.provision :ansible do |ansible|
        ansible.playbook = "ansible/playbook.yml"
        ansible.extra_vars = {
            APPLICATION_ENV: "development",
            APPLICATION_HOSTNAME: VAGRANT_HOSTNAME
        }
    end
    config.vm.provider "virtualbox" do |v|
      v.name = VAGRANT_BOXNAME
    end
end