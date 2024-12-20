# Utiliser une image officielle PHP comme image de base
FROM php:7.4-apache

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

# Configurer Git pour marquer le répertoire comme sûr
RUN git config --global --add safe.directory /var/www/html

# Supprimer le cache Composer et les dépendances existantes
RUN rm -rf vendor composer.lock && composer clear-cache

# Copier les fichiers composer.lock et composer.json
COPY composer.lock composer.json ./

# Installer les dépendances Composer
RUN composer install --no-scripts --prefer-dist --no-dev

# Ajouter une commande pour créer le fichier bin/console_demo si nécessaire
RUN if [ ! -f bin/console_demo ]; then php bin/console_demo; fi

# Nettoyer et réchauffer le cache Symfony pour l'environnement de développement
RUN php bin/console_demo cache:clear --env=dev
RUN php bin/console_demo cache:warmup --env=dev

# Vérifier la présence de vendor/autoload.php
RUN ls -l vendor && if [ ! -f vendor/autoload.php ]; then echo "vendor/autoload.php is missing"; exit 1; fi

# Exposer les ports 80 et 443
EXPOSE 80 443

# Copier les fichiers de certificat SSL
COPY .docker/apache/ssl/server.crt /etc/ssl/certs/
COPY .docker/apache/ssl/server.key /etc/ssl/private/

# Définir le fichier de configuration pour Apache (HTTP et HTTPS)
COPY .docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Définir les permissions correctes pour le répertoire de travail
RUN chown -R www-data:www-data /var/www/html

# Démarrer Apache
CMD ["apache2-foreground"]
