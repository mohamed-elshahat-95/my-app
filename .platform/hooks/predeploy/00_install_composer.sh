#!/bin/bash
if ! command -v composer &> /dev/null; then
  curl -sS https://getcomposer.org/installer | php
  mv composer.phar /usr/local/bin/composer
fi
