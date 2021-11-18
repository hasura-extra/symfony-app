#!/usr/bin/env bash
set -e

# Inspired by https://github.com/api-platform/api-platform/blob/main/api/docker/php/docker-entrypoint.sh

composer install --prefer-dist --no-progress --no-interaction

echo "Generating jwt key pair..."
php bin/console lexik:jwt:generate-keypair --skip-if-exists

echo "Waiting for database to be ready..."

ATTEMPTS_LEFT_TO_REACH_DATABASE=60
until [ $ATTEMPTS_LEFT_TO_REACH_DATABASE -eq 0 ] || DATABASE_ERROR=$(php bin/console dbal:run-sql -q "SELECT 1" 2>&1); do
  if [ $? -eq 255 ]; then
    # If the Doctrine command exits with 255, an unrecoverable error occurred
    ATTEMPTS_LEFT_TO_REACH_DATABASE=0
    break
  fi
  sleep 1
  ATTEMPTS_LEFT_TO_REACH_DATABASE=$((ATTEMPTS_LEFT_TO_REACH_DATABASE - 1))
  echo "Still waiting for database to be ready... Or maybe the database is not reachable. $ATTEMPTS_LEFT_TO_REACH_DATABASE attempts left."
done

if [ $ATTEMPTS_LEFT_TO_REACH_DATABASE -eq 0 ]; then
  echo "The database is not up or not reachable:"
  echo "$DATABASE_ERROR"
  exit 1
else
  echo "The database is now ready and reachable"
fi

if ls -A migrations/*.php >/dev/null 2>&1; then
  echo "Migrating database..."
  php bin/console doctrine:migrations:migrate --no-interaction
fi

if ls -A hasura/metadata/*.yaml >/dev/null 2>&1; then
  echo "Applying Hasura metadata..."
  php bin/console hasura:metadata:reload
  php bin/console hasura:metadata:apply
fi

exit 0