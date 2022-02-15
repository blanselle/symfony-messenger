# the different stages of this Dockerfile are meant to be built into separate images
# https://docs.docker.com/develop/develop-images/multistage-build/#stop-at-a-specific-build-stage
# https://docs.docker.com/compose/compose-file/#target


# https://docs.docker.com/engine/reference/builder/#understand-how-arg-and-from-interact
ARG PHP_VERSION=7.3
ARG NGINX_VERSION=1.17


# "php" stage
FROM php:${PHP_VERSION}-fpm-alpine AS app_php

# persistent / runtime deps
RUN apk add --no-cache \
		acl \
		file \
		gettext \
		git \
		ca-certificates \
		openssh-client \
		libpng-dev \
		libjpeg-turbo-dev \
		freetype-dev \
		graphviz \
		ttf-freefont \
		imagemagick \
		libwebp-dev \
		libxml2-dev \
	;

ARG APCU_VERSION=5.1.17
RUN set -eux; \
	apk add --no-cache --virtual .build-deps \
		$PHPIZE_DEPS \
		icu-dev \
		libzip-dev \
		postgresql-dev \
		zlib-dev \
		g++ \
		make \
		autoconf \
		yaml-dev \
		imagemagick-dev \
	; \
	\
	docker-php-ext-configure zip --with-libzip; \
	docker-php-ext-configure gd \
        --with-jpeg-dir=/usr/include \
        --with-png-dir=/usr/include \
        --with-webp-dir=/usr/include \
        --with-freetype-dir=/usr/include; \
	docker-php-ext-install -j$(nproc) \
		intl \
		pdo_pgsql \
		zip \
		exif \
		gd \
		sysvsem \
		soap \
		bcmath\
        sockets\
	; \
	pecl install \
		apcu-${APCU_VERSION} \
		imagick \
	; \
	pecl clear-cache; \
	docker-php-ext-enable \
		apcu \
		opcache \
		imagick \
	; \
	\
	runDeps="$( \
		scanelf --needed --nobanner --format '%n#p' --recursive /usr/local/lib/php/extensions \
			| tr ',' '\n' \
			| sort -u \
			| awk 'system("[ -e /usr/local/lib/" $1 " ]") == 0 { next } { print "so:" $1 }' \
	)"; \
	apk add --no-cache --virtual .api-phpexts-rundeps $runDeps; \
	\
	apk del .build-deps

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY docker/php/php.ini $PHP_INI_DIR/php.ini

RUN apk add tzdata
RUN cp /usr/share/zoneinfo/Europe/Paris  /etc/localtime
RUN echo "Europe/Paris" >  /etc/timezone

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1
# install Symfony Flex globally to speed up download of Composer packages (parallelized prefetching)
RUN set -eux; \
	composer global require "symfony/flex" --prefer-dist --no-progress --no-suggest --classmap-authoritative; \
	composer clear-cache
ENV PATH="${PATH}:/root/.composer/vendor/bin"

WORKDIR /srv/app

# cron
COPY docker/php/crontab/root /var/spool/cron/crontabs/root
RUN chmod 600 /var/spool/cron/crontabs/root

COPY docker/php/php-fpm/php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf

COPY docker/php/docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint

ENTRYPOINT ["docker-entrypoint"]
CMD ["php-fpm"]


# "nginx" stage
# depends on the "php" stage above
FROM nginx:${NGINX_VERSION}-alpine AS app_nginx

RUN apk add openssl
RUN mkdir -p /etc/nginx/ssl/api; \
	openssl genrsa -out /etc/nginx/ssl/api/server.key 2048; \
	openssl req -new -key /etc/nginx/ssl/api/server.key -out /etc/nginx/ssl/api/server.csr -subj "/C=FR/ST=France/L=Lille/O=Disruptual/OU=IT/CN=*.sandbox.api.disruptual.com/emailAddress=tech@disruptual.com"; \
	openssl x509 -req -days 365 -in /etc/nginx/ssl/api/server.csr -signkey /etc/nginx/ssl/api/server.key -out /etc/nginx/ssl/api/server.crt

RUN mkdir -p /etc/nginx/ssl/front; \
	openssl genrsa -out /etc/nginx/ssl/front/server.key 2048; \
	openssl req -new -key /etc/nginx/ssl/front/server.key -out /etc/nginx/ssl/front/server.csr -subj "/C=FR/ST=France/L=Lille/O=Disruptual/OU=IT/CN=*.sandbox.disruptual.com/emailAddress=tech@disruptual.com"; \
	openssl x509 -req -days 365 -in /etc/nginx/ssl/front/server.csr -signkey /etc/nginx/ssl/front/server.key -out /etc/nginx/ssl/front/server.crt

COPY docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /srv/app

COPY ./public public/