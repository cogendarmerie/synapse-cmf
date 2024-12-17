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
    && docker-php-ext-install intl zip

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/html

# Copier les fichiers de l'application dans le conteneur
COPY . .

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances Composer
RUN composer install

# Exposer le port 80
EXPOSE 80

# Définir le fichier d'entrée pour Apache
COPY .docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Démarrer Apache
CMD ["apache2-foreground"]
