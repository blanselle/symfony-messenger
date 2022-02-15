#!/bin/sh

/usr/sbin/crond start

exec docker-php-entrypoint "$@"