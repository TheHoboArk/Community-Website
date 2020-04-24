#!/bin/bash

git -C /var/www/ pull;
npm --prefix /var/www run production;