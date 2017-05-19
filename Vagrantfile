VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.box = "ubuntu/trusty64"
    config.vm.network :private_network, ip: "192.168.50.100"
    config.vm.hostname = "vagrant.dev"
    config.hostsupdater.remove_on_suspend = false
    config.vm.synced_folder ".", "/vagrant", owner: "www-data", group: "www-data", mount_options: ["dmode=775,fmode=775"]
    config.vm.provision :ansible do |ansible|
        ansible.playbook = "ansible/playbook.yml"
        ansible.extra_vars = {
            APPLICATION_ENV: "development",
            APPLICATION_HOSTNAME: "vagrant.dev"
        }
    end
end