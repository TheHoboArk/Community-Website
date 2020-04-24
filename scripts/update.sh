# A update script

echo "
source ~/.bash_profile
source ~/.bashrc

cd /var/www/;
git pull;
npm --prefix /var/www run production;
"