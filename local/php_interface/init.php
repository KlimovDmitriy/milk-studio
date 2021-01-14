<?php
require(__DIR__.'/../vendor/autoload.php');

use Bitrix\Main\EventManager;

if(defined('ADMIN_SECTION')){
    Arrilot\BitrixMigrations\Autocreate\Manager::init($_SERVER["DOCUMENT_ROOT"].'/local/migrations');
}

$eventManager = EventManager::getInstance();

$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', [
    \Project\Events\IblockEvents::class,
    'onAfterBlogUpdate',
]);
$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementUpdate', [
    \Project\Events\IblockEvents::class,
    'onAfterBlogUpdate',
]);
$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementUpdate', [
    \Project\Events\IblockEvents::class,
    'checkMinMaxAge',
]);
$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', [
    \Project\Events\IblockEvents::class,
    'checkMinMaxAge',
]);