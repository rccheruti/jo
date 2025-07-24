FROM php:7.4-apache

# Instalar extensões do PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

# Ativar o mod_rewrite do Apache (necessário para CodeIgniter)
RUN a2enmod rewrite

# Permitir .htaccess funcionar
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Definir diretório de trabalho
WORKDIR /var/www/html