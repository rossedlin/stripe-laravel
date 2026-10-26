#!/usr/bin/env bash

set -euo pipefail

#
# Cleanup Docker Environment
#
docker compose down --volumes --remove-orphans

#
# Cleanup Project Files
#
rm -rf node_modules
rm -rf vendor
rm -f .phpunit.result.cache
rm -f _ide_helper.php

#
# Update Environment
#
docker compose pull
docker compose run --rm web composer update

git add composer.lock
