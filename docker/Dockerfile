# Usando uma imagem do PHP com Node.js
FROM php:8.3-fpm

# Instalar o Node.js e o npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Instalar dependências do sistema (opcional)
RUN apt-get update && apt-get install -y \
    zip unzip git libpq-dev \
    && docker-php-ext-install pdo_pgsql pcntl

# Ajustar permissões nas pastas storage e bootstrap/cache
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache


# Expõe a porta padrão do PHP-FPM
EXPOSE 9000
