<?php
define("PHP_ROOT", $_SERVER['DOCUMENT_ROOT'] . '/../php');
require_once PHP_ROOT . '/me/fru1t/common/language/Autoload.php';
use me\fru1t\common\language\Autoload;
use me\fru1t\common\language\Http;
use me\fru1t\common\router\Route;
use me\fru1t\common\router\Router;
use me\fru1t\common\template\Templates;

Autoload::setup(PHP_ROOT);

Router::setup()
    ->setContentDirectory('../php/me/fru1t/citatsia/content')
    ->setDefaultContentPagePath('index.php')
    ->setErrorPagePath('index.php')
    ->setPageParameterName(Router::DEFAULT_PAGE_PARAMETER_NAME)
    ->map(Route::create('styles.css', '../styles/out/global.css', Http::HEADER_CONTENT_TYPE_CSS))
    ->map(Route::create('global.css.map', '../styles/out/global.css.map'))
    ->map(Route::create("banner.png", "../assets/church-banner.png", "Content-Type: image/png"))
    ->complete();
Templates::setup()->complete();

Router::route();
