#!/usr/bin/env bash

set -euo pipefail

#
# Cleanup Project Files
#
rm -f -Rf node_modules
rm -f -Rf vendor

#
# Update Environment
#
docker compose pull
docker compose run --rm web composer update

#
# Initial Repo
#
if [ ! -f .env ]; then
    cp .env.example .env
    docker compose run --rm web php artisan key:generate
fi

#
# Test Repo
#
docker compose run --rm web vendor/bin/phpunit --coverage-text --colors=never --verbose
