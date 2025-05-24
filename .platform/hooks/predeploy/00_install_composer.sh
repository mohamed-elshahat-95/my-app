#!/bin/bash

echo "[INFO] Checking for Composer..."
if ! command -v composer &> /dev/null; then
  echo "[INFO] Installing Composer..."
  curl -sS https://getcomposer.org/installer | php
  mv composer.phar /usr/local/bin/composer
else
  echo "[INFO] Composer already installed."
fi

echo "[INFO] Running composer install..."
cd /var/app/staging
composer install --no-dev --optimize-autoloader
