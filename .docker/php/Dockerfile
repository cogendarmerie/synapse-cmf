# Utiliser une image officielle PHP comme image de base
FROM php:7.1-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libssl-dev \
    && docker-php-ext-install intl zip

# Activer les modules Apache nécessaires pour SSL
RUN a2enmod ssl rewrite

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/html

# Copier les fichiers de l'application dans le conteneur
COPY . .

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances Composer
RUN composer install

# Exposer les ports 80 et 443
EXPOSE 80 443

# Copier les fichiers de certificat SSL
COPY .docker/apache/ssl/server.crt /etc/ssl/certs/
COPY .docker/apache/ssl/server.key /etc/ssl/private/

# Définir le fichier de configuration pour Apache (HTTP et HTTPS)
COPY .docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Démarrer Apache
CMD ["apache2-foreground"]
