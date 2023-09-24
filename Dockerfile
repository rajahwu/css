# Use an official PHP runtime with Apache as a parent image (Debian Buster)
FROM php:8.2-cli

# Set the working directory to /var/www/html/
WORKDIR /var/www/html/

# Copy necessary files and directories
COPY ./public /var/www/html/public/
COPY ./private /var/www/html/private/
COPY ./personal-site /var/www/html/personal-site/
COPY ./src /var/www/html/src/
COPY ./training_modules /var/www/html/training_modules/
COPY index.php /var/www/html/
COPY package.json /var/www/html/
COPY composer.json /var/www/html/
COPY tailwind.config.js /var/www/html/
COPY readme.md /var/www/html/

# Change ownership to Apache user and group
RUN chown -R www-data:www-data /var/www/html

# Install npm and Node.js
RUN apt-get update && apt-get install -y nodejs npm

# Install Composer dependencies
RUN composer install

# Build CSS
RUN npm install
RUN npm run buildcss

# Start the Apache web server
CMD ["apache2ctl", "-D", "FOREGROUND"]
