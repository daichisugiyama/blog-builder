#!/bin/bash

wget https://download.owncloud.org/community/owncloud-10.2.0.zip
unzip owncloud-10.2.0.zip
sudo mv owncloud /var/www/owncloud
sudo chown -R www-data:www-data /var/www/owncloud

# sudo vim /var/www/owncloud/config.php
# refarence: ./config.php

