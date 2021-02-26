<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel environment installation

windows prerequist::

- Install XAMPP to enable apache and mysql(https://laravel.com/docs/routing).
- Install Visual Studio Code
- Install git
- Install composer

## Setup a virtual host
- Download the code
- open xampp->apache->conf->extra->httpd-vhosts.conf
    <VirtualHost *:8080>
        DocumentRoot “C://xampp/htdocs”
    ServerName localhost
    </VirtualHost>
    <VirtualHost *:8080>
        DocumentRoot “C://xampp/htdocs/lsapp/public”
        ServerName lsapp.local
    </VirtualHost>
- open “notepad” as an administrator, file->open “c->windows->System32->drivers->etc” view all files and select hosts file
    127.0.0.1 localhost
    127.0.0.1 lsapp.localhost
- Restart apache
