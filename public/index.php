<?php
/**
 * Этот файл является частью приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

chdir(dirname(__DIR__));

/**
 * Выполнение регистрации composer.
 * 
 * Composer предоставляет сгенерированный загрузчик классов для приложения.
 */
require 'bootstrap/autoload.php';

/**
 * Выполнение инициализации и запуска приложения.
 */
$app = require_once 'bootstrap/app.php';
$app->run();