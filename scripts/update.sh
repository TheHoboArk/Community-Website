#!/bin/bash
# A update script

cd /var/www/
git pull
npm --prefix /var/www run production
