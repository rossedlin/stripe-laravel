
docker compose down --volumes --remove-orphans

#
# Update Environment
#
docker compose run --rm web composer update

git add composer.lock
