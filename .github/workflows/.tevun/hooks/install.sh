#!/usr/bin/env bash

echo " ~> [hooks\install.sh] on [${1}, ${2}]"

cd "${1}" || exit

docker exec "guicommerce-nginx" bash -c "su -c \"composer install --no-interaction --optimize-autoloader --no-progress\" application"

if [[ -f ".tevun-ready" ]]; then
  docker exec "guicommerce-nginx" bash -c "php artisan migrate --force"
fi
