<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Калькулятор квадратных уравнений

Проект представляет собой веб-приложение, созданное при помощи фреймворка laravel и которое позволяет решать квадратные уравнения (полного и неполного вида), а также отслеживать историю решений.

## Основные функции

-   Решение квадратного уравнения вида ax^2 + bx + c = 0;
-   Отображение дискриминанта (D) и корней уравнения (X1, X2);
-   Сохранение результатов решений в базе данных для последующего просмотра и анализа;

## Установка

1. Клонируйте данный репозиторий на локальный компьютер:
   git clone https://github.com/heronothero/tusur-task.git

2. Перейти в каталог проекта:
   cd tusur-task

3. Установить зависимости:
   composer install
   или
   npm install

4. Скопируйте файл .env.example, переименуйте его в .env. Настройте соединение с базой данных, а также создайте ее и выполните миграции в соответствии с существующими файлами:
   php artisan migrate

5. Сгенерируйте ключ приложения:
   php artisan key:generate

6. По желанию перед запуском локального сервера можно использовать:
   npm run build
   Это поможет сократить размер файлов, улучшить производительность приложения и обеспечить безопасность.

7. Для тестирования и дебагинга используйте команду:
   npm run dev

8. Запустите локальный сервер:
   php artisan serve

## Использование

1. Введите значения коэффициентов a, b, c в соответствующие поля;
2. Нажмите кнопку "Найти решение";
3. Посмотрите результаты решения, отображаемые на экране (возможно, понадобится немного времени, чтобы подгрузилось);
4. Чтобы посмотреть историю решений, кликните назад и перейдите на страницу "История".

## Технологии

-   PHP (Laravel);
-   JavaScript;
-   HTML;
-   CSS.

## Автор проекта

heronothero
https://github.com/heronothero
