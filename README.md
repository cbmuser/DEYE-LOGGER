# DEYE-LOGGER
Data Logger for the Deye SUN600/800 Inverter

Uses this neat example: https://github.com/turbopixel/deye-inverter-status. 

The goal is to write a log into a mySQL-Database for local statistics. I've used a Raspberry Pi 2W and a secondary WiFi USB-Adapter 
to share the datas in my local network. 
If you want to visualizes the logged data, a Apache WEB-Sever may be a goog choice. Be warned: in this case there are two access-points at the
Raspberry Pi open, block all unused ports and deactivate SSH ! - It's also recommended to use a card with a fresh installation or backup your 
existing Raspian.
We begin:

sudo apt-get update
sudo apt install mariadb-server
sudo mysql_secure_installation
... do your setups

PHP8.2
------
sudo wget -qO /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
sudo echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list
sudo apt update && sudo apt upgrade -y
... this takes almost a while
php -v

mysql -u yourusername -p
... enter your password

create the user, database and table

sudo nano /etc/crontab
... create a CronJob for the logger-script





