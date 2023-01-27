#!/usr/bin/env bash

cd "${1}" || exit

echo " ~> [hooks\setup.sh] on [${1}, ${2}]"

docker exec "guicommerce-nginx" php artisan key:generate
docker exec "guicommerce-nginx" php artisan migrate
docker exec "guicommerce-nginx" php artisan db:seed
