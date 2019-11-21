#!/bin/bash

set -e

main() {
    hugo
    sudo rm -rf /var/www/html/public
    sudo mv ./public /var/www/html/public
    sudo chown -R www-data:www-data /var/www/html/public
}

main
