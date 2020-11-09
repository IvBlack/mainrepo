<?php

//Задаем константы
define('SITE_DIR', __DIR__ . '/../');
define('WWW_DIR', SITE_DIR . 'public/');
define('ENGINE_DIR', SITE_DIR . 'engine/');
define('TPL_DIR', SITE_DIR . 'templates/');
define('VENDOR_DIR', SITE_DIR . 'vendor/');

//Подключаем файлы
require_once VENDOR_DIR . 'autoload.php';
require_once ENGINE_DIR . 'Traits/SingletonTrait.php';
require_once ENGINE_DIR . 'Classes/TemplateEngine.php';