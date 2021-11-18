# https://docs.docker.com/engine/reference/builder/#understand-how-arg-and-from-interact
ARG PHP_VERSION="8.0"
ARG PHP_EXTENSIONS="intl gd pdo_pgsql apcu"

FROM thecodingmachine/php:${PHP_VERSION}-v4-slim-apache

# production settings
ENV APP_ENV=prod
ENV APP_DEBUG=0

# https://github.com/thecodingmachine/docker-images-php
ENV TEMPLATE_PHP_INI="production"
ENV APACHE_DOCUMENT_ROOT="public/"
ENV APACHE_RUN_USER="www-data"
ENV APACHE_RUN_GROUP="www-data"
ENV PHP_INI_APC__ENABLE_CLI=1
ENV PHP_INI_DATE__TIMEZONE="UTC"
ENV PHP_INI_SESSION__AUTO_START="Off"
ENV PHP_INI_SHORT_OPEN_TAG="Off"
ENV PHP_INI_EXPOSE_PHP="Off"

# https://symfony.com/doc/current/performance.html
ENV PHP_INI_OPCACHE__INTERNED_STRINGS_BUFFER=16
ENV PHP_INI_OPCACHE__MAX_ACCELERATED_FILES=20000
ENV PHP_INI_OPCACHE__MEMORY_CONSUMPTION=256
ENV PHP_INI_OPCACHE__VALIDATE_TIMESTAMPS=0
ENV PHP_INI_REALPATH_CACHE_SIZE="4096K"
ENV PHP_INI_REALPATH_CACHE_TTL=600
ENV PHP_INI_OPCACHE__PRELOAD="/var/www/html/config/preload.php"
ENV PHP_INI_OPCACHE__PRELOAD_USER="www-data"

# copies application files
COPY .env ./
COPY bin bin/
COPY config config/
COPY hasura hasura/
COPY migrations migrations/
COPY public public/
COPY src src/
COPY templates templates/
COPY translations translations/
COPY composer.json composer.lock symfony.lock ./

RUN set -eux; \
    # install dependencies with lock
    composer install --prefer-dist --no-dev --no-scripts --no-progress; \
	mkdir -p var/cache var/log; \
	sudo chmod 777 -R var/cache var/log; \
	composer dump-autoload --classmap-authoritative --no-dev; \
	composer dump-env prod; \
	composer run-script --no-dev post-install-cmd; \
	sudo chmod +x bin/console; sync

VOLUME /var/www/html/var

# Apache conf: https://github.com/symfony/recipes-contrib/blob/master/symfony/apache-pack/1.0/public/.htaccess
COPY docker/apache/etc/apache2/conf-available/docker-php.conf /etc/apache2/conf-available/docker-php.conf

# https://github.com/thecodingmachine/docker-images-php#launching-commands-on-container-startup
COPY docker/apache/etc/container/startup.sh /etc/container/startup.sh

RUN sudo chmod +x /etc/container/startup.sh; sync

HEALTHCHECK --interval=10s --timeout=3s --retries=3 CMD ["curl", "-sSf", "http://localhost/healthz"]