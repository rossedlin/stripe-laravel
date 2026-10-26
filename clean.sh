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
