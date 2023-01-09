#!/bin/sh

set -e

if [ ! -f /var/www/html/wp-config.php ]; then
  curl -O https://wordpress.org/latest.tar.gz
  tar xzf latest.tar.gz
  cp -r wordpress/* /var/www/wordpress
  rm -rf wordpress latest.tar.gz
  # mv /var/www/html /var/www/wordpress
fi
  # Configure wp-config.php
  # mv /var/www/wordpress/wp-config-sample.php /var/www/wordpress/wp-config.php
  # sed -i "s/database_name_here/$MYSQL_DATABASE/g" /var/www/wordpress/wp-config.php
  # sed -i "s/username_here/$MYSQL_USER/g" /var/www/wordpress/wp-config.php
  # sed -i "s/password_here/$MYSQL_PASSWORD/g" /var/www/wordpress/wp-config.php
  # sed -i "s/localhost/$DB_HOST/g" /var/www/wordpress/wp-config.php
wp --path=/var/www/wordpress plugin list


  wp core install --url=localhost --title=WordPress --admin_user=admin --

# Create an admin user


# Create a normal user
wp user create normal_user normal_user@example.com --role=subscriber --user_pass=password

# Create a page
wp post create --post_type=page --post_title='Page Title' --post_content='Page content'


exec "$@"
