### IDEAC-WEB
Web desarrollada con Laravel, ReactJS y Docker.

# Iniciar Container

## Linux

```shell
composer install
npm install
./vendor/bin/sail build --no-cache
./vendor/bin/sail up
./vendor/bin/sail npm run dev
./vendor/bin/sail migrate --seed
```

## Windows

Se recomienda subsistema de linux

```shell
composer install
npm install
docker-compose build --no-cache
docker-compose up
docker-compose npm run dev
docker-compose migrate --seed
```

## Unit Test

```
./vendor/bin/sail artisan test
```

Aplicación desarrollada en **Mac/OS**
