
#
# Cleanup Docker Environment
#
docker compose down --volumes --remove-orphans

#
# Cleanup Project Files
#
rm -f -Rf node_modules
rm -f -Rf vendor
rm -f .phpunit.result.cache
rm -f _ide_helper.php

#
# Update Environment
#
docker compose pull
docker compose run --rm web composer update

git add composer.lock
