<?php

/* Autolload Classes */
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    echo "<h1>Установите через composer.json</h1>";
    echo "<p>Инструкции по установке composer: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
    echo "<p>Затем перейдите в директорию проекта, откройте терминал и введите 'composer install'</p>";
    exit;
}

use kernel\Application;

/* Dispatch URL, invoke controller method and echo result */
echo Application::dispatch();