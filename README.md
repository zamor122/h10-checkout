# Helium 10 Checkout 🆕
Checkout, a Wordpress website to simplify signing up for Helium 10
## Steps to run on local
1. Uncomment the local environment variables in docker-compose.yml
2. Run `docker-compose up -d`
3. Run `docker exec h10-checkout chown -R www-data:www-data wp-content/uploads` to allow for picture uploads
4. Enjoy

## Steps for deployment
### <b>Using</b> Docker
1. Copy the `checkout` directory onto desired server and `docker-compose.yml` if using docker

2. Uncomment the production environment variables in docker-compose.yml
2. Run `docker-compose up -d`
3. Run `docker exec h10-checkout chown -R www-data:www-data wp-content/uploads` to allow for picture uploads
4. Enjoy
### <b>Not using</b> Docker
1. Copy the `checkout` directory into the wp-content directory where Wordpress is installed
2. Run `cd wp-content`
3. Run `chown -R www-data:www-data wp-content/uploads` to allow for picture uploads 
    
        a. If there is not uploads directory, create it using within the wp-content directory