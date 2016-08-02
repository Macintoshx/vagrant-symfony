## Latest Symfony with Vagrant VM + Ansible provisioning

## Out of the box...

* Ubuntu 15.10 64 bit ( + bulk of system soft like `mc`, `curl`, etc.)
* PHP 5.6 ( + modules `intl`, `gd`, `xdebug` etc.)
* Nginx
* MySQL
* Composer
* phpMyAdmin
* PostgreSQL
* Sqlite
* Memcached
* Symfony installer
* Local IP loop on Host machine `/etc/hosts` and Virtual hosts in Nginx already set up too !

## Quick start

### Install

* [Virtualbox 5.0+](https://www.virtualbox.org/) + VirtualBox Extension Pack
* [Vagrant 1.8+](http://www.vagrantup.com/)
additional Vagrant modules will be installed automatically (vagrant-hostmanager, vagrant-vbguest, vagrant-cachier)`
* Install Vagrant plugins  
`vagrant plugin install vagrant-hostmanager vagrant-vbguest vagrant-cachier`  
(these plugins will be checked and installed automatically, but `vagrant up` will fail on the first run, just re-run it if you'll get ` Unknown configuration section` error)
> You don't need to have Ansible installed on host machine. It will be installed on VM and self-provisioning will be launched. So it is possible to run everything on Windows machine. 

### RUN

* Clone this sources from Git
* Run `vagrant up`.
* It will start VM creation and Provisioning. Could take some time 15-30 min... Drink coffee and get back for complete virtual server with Yi2 project ready for play !
* If you got an error regarding Composer and GitHub API requests limitation during provisioning - go to `/provisioning/main.yml`, uncomment var and add your GitHub oAuth token into `github_oauth_token` variable


#### Note for Windows OS users

* Windows Firewall or any Antivirus software can cause some blocks on Vagrant start process. First of all to 'hosts' file modification. Be sure you turned them off (temporary) or set them up properly.
* In case you get `default: warning: connection refused. Retying...` messages and Vagrant never boot successfully - it seems to be a VirtualBox issue. Try to install some older VBox version. It is tested to work on Virtual Box 5.0.20.  
* On Windows 8/8.1/10 some issues are reported due to `Hyper-V` enabled. You should disable it if you experience issues with VirtualBox machines.
* use Git Bash if possible to make `vagrant ssh` working out of the box.

### PLAY

Ok, now if everything went fine you can access these Urls in your browser

* [http://symfony.dev/](http://symfony.dev/)  -  frontend app
* [http://phpmyadmin.dev/](http://phpmyadmin.dev/) - phpMyAdmin

**Note :** These local domains `.dev` will be available on your host machine only if `hosts` file was modified correctly. It should 
be done automatically by `vagrant-hostsmanager` plugin. But if url `http://symfony.dev/` or other is not found by your browser - make sure
your `hosts` file contain correct assignment of VM IP and local domains:  
It should have such lines :
```
192.168.33.33 symfony.dev
192.168.33.33 phpmyadmin.dev
```

> File location. On Linux `/etc/hosts`. On Windows `%SystemRoot%\system32\drivers\etc\hosts`

### Made by [Evgeniy Kuzminov](http://stdout.in). Thanks for support to [Anton Logvinenko](http://anton.logvinenko.name/). Modified to symfony from yii2 by Macintoshx
