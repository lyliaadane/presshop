# Dockerfile
FROM php:8.2-cli

# Installe les dépendances
RUN apt-get update && apt-get install -y unzip zip git curl libicu-dev libonig-dev libxml2-dev \
    && docker-php-ext-install intl pdo pdo_mysql opcache

# Installe Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie les fichiers
WORKDIR /app
COPY . /app

# Installe les dépendances Symfony
RUN composer install --no-dev --optimize-autoloader

EXPOSE 8000

# Démarre le serveur Symfony
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
