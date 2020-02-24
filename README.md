# laravel_amazonlinux2

## Get started

### dockerコンテナ起動

docker-compose up -d --build

### dockerコンテナに入る

docker exec -it laravel /bin/bash

### laravelプロジェクト起動設定

```shell=
$ composer install
$ npm install
$ php artisan key:generate
$ php artisan config:clear
$ php artisan migrate
$ php artisan db:seed
$ npm run dev
```

## Access

http://localhost:8080/

-> laravelのTOPページが開きます