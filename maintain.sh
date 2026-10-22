
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
