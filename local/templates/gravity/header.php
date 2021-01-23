<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? use Bitrix\Main\Page\Asset; ?>

<!doctype html>
<html lang="ru" class="page">
<head>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead() ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic"
          rel="stylesheet">
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap-grid.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/responsive.css'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-3.5.1.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bootstrap.js"); ?>
</head>
<body>
<? if ($USER->IsAuthorized()): ?>
    <? $APPLICATION->ShowPanel(); ?>
    <header class="header">
        <div class="top_header">
            <div class="top_header_container">
                <a href="/">
                    <div class="mobile_logo">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/markup/img/logo.png" alt="Логотип">
                    </div>
                    <div class="desktop_logo" style="width:20%">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/markup/img/logo.png" alt="Логотип">
                    </div>
                </a>
                <button type="button" class="btn btn-danger text-white"><a href="/?logout=yes" class="text-white">Выйти</a>
                </button>

            </div>
        </div>

    </header>
<?php endif; ?>
<div class="inner_page">
    <div class="container">




