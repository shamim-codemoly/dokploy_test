ssh <your_user>@15.235.147.36

sudo apt update && sudo apt upgrade -y

sudo apt install -y nginx git curl build-essential

curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -

sudo apt install -y nodejs

node -v
npm -v


sudo mkdir -p /var/www/monirulshawn
sudo chown -R $USER:$USER /var/www/monirulshawn
cd /var/www/monirulshawn
npm install
npm run build 

sudo npm install -g pm2

cd /var/www/monirulshawn

pm2 start pnpm --name "store" -- start

overwrite post=========================================
pm2 start pnpm --name "main-nextjs" -- start --env PORT=4000 
pm2 start pnpm --name "admin" -- start --env PORT=4000 

pm2 start "pnpm start" --name "my-nextjs-3001" --env PORT=3001



===================================
need to update port in package.json file like this:

"scripts": {
    "dev": "next dev -p 3002",
    "build": "next build",
    "start": "next start -p 3002"
  },

===================================


cd /var/www/store
PORT=3000 pm2 start "pnpm start" --name "next-store"

cd /var/www/admin
PORT=3002 pm2 start "pnpm start" --name "lemaverick.com"

pm2 startup systemd
pm2 save

pm2 restart main-nextjs

sudo vim /etc/nginx/sites-available/nextjs-app.conf

load config file code ==========================================

sudo ln -s /etc/nginx/sites-available/nextjs-app.conf /etc/nginx/sites-enabled/
sudo ln -s /etc/nginx/sites-available/lemaverick.com /etc/nginx/sites-enabled/

sudo nginx -t

sudo systemctl reload nginx

sudo apt install -y certbot python3-certbot-nginx

sudo certbot --nginx -d admin.monirulshawn.com -d www.admin.monirulshawn.com
sudo certbot --nginx -d shamim.monirulshawn.com -d www.shamim.monirulshawn.com
sudo certbot --nginx -d lemaverick.com -d www.lemaverick.com


https://monirulshawn.com


sudo add-apt-repository ppa:ondrej/php -y
sudo apt update

sudo apt install -y php8.3 php8.3-fpm php8.3-mysql php8.3-mbstring php8.3-xml php8.3-bcmath php8.3-curl php8.3-gd php8.3-zip php8.3-unzip


sudo apt install -y mysql-server

CREATE DATABASE laravel_api;

CREATE USER 'laravel_api_user'@'%' IDENTIFIED WITH mysql_native_password BY '12345678';

GRANT ALL ON laravel_api.* TO 'laravel_api_user'@'%';

FLUSH PRIVILEGES;

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_api
DB_USERNAME=laravel_api_user
DB_PASSWORD=12345678



sudo mkdir -p /var/www/laravel-api
sudo chown -R $USER:$USER /var/www/laravel-api
cd /var/www/laravel-api

composer install

sudo chmod -R 777 .env

php artisan key:generate

sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache

sudo chown -R www-data:www-data /var/www/laravel-api/molyecom-api-backend/storage
sudo chown -R www-data:www-data /var/www/laravel-api/molyecom-api-backend/bootstrap/cache


sudo vim /etc/nginx/sites-available/laravel-api.conf
