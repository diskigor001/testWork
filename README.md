<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Описание

Для разворачивания проекта:

- Клонировать проект с git: git clone
- Установить необходимые пакеты через композитор: composer update
- Дать права доступа 775 (по необходимости 777) к папкам storage bootstrap/cache: sudo chmod -R ug+rwx storage bootstrap/cache
- Сгенерировать файл .env: 1) cp .env.example .env 2) php artisan key:generate
- Прописать в файле .env доступы к БД, SMTP и добавить QUEUE_DRIVER=database
- Сбросить все конфиги: php artisan config:cache
- Для работы драйвера файлов, прописать ссылку на папку: php artisan storage:link
- Выполнить миграции: php artisan migrate
- Установить на сервер supervisor, для прослушки очередей Laravel

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Part 1

Задание 1

## Part 2

Задание 2

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
