#!/usr/bin/env bash

echo " ~> [hooks\install.sh] on [${1}, ${2}]"

cd "${1}" || exit

docker exec "guicommerce-nginx" bash -c "su -c \"composer install --no-interaction --optimize-autoloader --no-progress\" application"
docker run --rm -it -v $(pwd):/app -w /app node:16 sh -c "su -c \"npm install && npm run build\" node"

if [[ -f ".tevun-ready" ]]; then
  docker exec "guicommerce-nginx" bash -c "php artisan migrate --force"
fi
