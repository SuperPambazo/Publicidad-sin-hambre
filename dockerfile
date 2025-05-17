# Etapa 1: construir los assets con Vite
FROM node:18-alpine as node

WORKDIR /app
COPY package*.json vite.config.js ./
COPY resources/ resources/
RUN npm install && npm run build

# Etapa 2: configurar PHP y Laravel
FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git unzip curl zip libzip-dev && \
    docker-php-ext-install pdo pdo_mysql zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .
COPY --from=node /app/public/build public/build

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
