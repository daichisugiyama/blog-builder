#!/bin/bash

sudo apt -y install mariadb-server
sudo systemctl restart mariadb
mysql_secure_installation

# sudo vim /etc/mysql/mariadb.cnf 
# refarence: ./mariadb.cnf
