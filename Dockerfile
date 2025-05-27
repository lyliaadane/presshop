# Dockerfile
FROM php:8.2-cli

# Installe les dépendances système
RUN apt-get update && apt-get install -y unzip zip git curl libicu-dev libonig-dev libxml2-dev \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# Installe Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie les fichiers dans le conteneur
WORKDIR /app
COPY . /app

# Installe les dépendances Symfony (avec scripts pour migrations, etc.)
RUN composer install --no-dev --optimize-autoloader

# Exécute les migrations si besoin
RUN php bin/console doctrine:migrations:migrate --no-interaction || true

# Nettoie le cache
RUN php bin/console cache:clear

# Expose le port attendu par Railway
EXPOSE 8080

# Démarre le serveur Symfony sur le bon port
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
