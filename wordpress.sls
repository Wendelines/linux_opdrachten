install wordpress, mysql en apache:
  pkg.installed:
    - pkgs:
    - apache2
    - mysql-server
    - php
    - php-mysql
    - python
    - python-mysqldb
    - python-pip
  - skip_suggestions: true

mysql-server:
  pkg:
    - installed
    - reload_modules: true

#install mysql:
#  cmd.run:
#    - name: 'sudo apt-get install -y python3-mysqldb'


aanmaken van database:
  mysql_database.present:
    - name: wordpress_db
  mysql_user.present:
    - name: wendy
    - password: P@ssword12345
  mysql_grants.present:
    - database: "wordpress_db.*"
    - grant: ALL PRIVILEGES
    - user: wendy
    - host: 'localhost'

wordpress installeren:
  cmd.run:
    - name: 'wget -q -O - http://wordpress.org/latest.tar.gz | tar zxf - '
    - cwd: /var/www
    - creates: /var/www/wordpress/index.php
    - runas: root

/var/www/wordpress/wp-config.php:
  file.managed:
    - name: /var/www/wordpress/wp-config.php
    - source: salt://wp-config.php

config file mee geven:
  file.managed:
    - name: /etc/apache2/sites-available/wendy.conf
    - source: salt://apa/wendy.conf

rechten toekennen:
  cmd.run:
    - names:
    - sudo chown -R www-data:www-data /var/www/wordpress
    - sudo find /var/www/wordpress/ -type d -exec chmod 750 {} \;
    - sudo find /var/www/wordpress/ -type f -exec chmod 640 {} \;
    - sudo chmod 755 /var/www/wordpress
    - runas: root

laatste:
  cmd.run:
    - names:
    - sudo a2ensite wendy.conf
    - sudo a2dissite 000-default.conf
    - sudo a2enmod rewrite
    - sudo apache2ctl configtest
    - runas: root

restart:
  cmd.run:
    - name: 'systemctl restart apache2'
    - runas: root
