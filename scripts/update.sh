#!/bin/bash

git -C /var/www/ pull;

npm --prefix /var/www run production;

# To run this: wget -O update.sh https://raw.githubusercontent.com/TheHoboArk/Community-Website/master/scripts/update.sh && bash update.sh