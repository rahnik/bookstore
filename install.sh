#!/bin/bash
export DEBIAN_FRONTEND=noninteractive
apt update
apt upgrade
apt install mariadb-server php-mysql
sudo service mysql start