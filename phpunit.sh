#!/usr/bin/env bash

set -euo pipefail

docker compose run --rm web vendor/bin/phpunit --coverage-text --colors=never --verbose
