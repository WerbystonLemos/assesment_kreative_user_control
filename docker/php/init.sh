#!/bin/sh

cd /var/www/html

chmod +x assesment_kreative_user_control/init.sh


if [ ! -f ".env" ]; then
  cp .env.example .env
fi

# Gera APP_KEY se ainda não estiver gerada
if ! grep -q "APP_KEY=" .env || grep -q "APP_KEY=" .env | grep -q "base64:"; then
  php artisan key:generate
fi

php artisan key:generate

# Roda as migrations (pode pular se já tiver rodado)
php artisan migrate --force

# Instala dependências do frontend e compila os assets (verificação básica)
if [ ! -d "node_modules" ]; then
  npm install && npm run dev
fi

# Inicia o Apache em foreground (importante para manter o container vivo)
apache2-foreground
