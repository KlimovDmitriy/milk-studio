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
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/jquery.bxslider.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/slick.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/magnific-popup.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/responsive.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/selectric.css'); ?>
    <? $APPLICATION->AddHeadScript("https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"); ?>
    <? $APPLICATION->AddHeadScript("https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.bxslider.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.inputmask.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.scrollTo.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.nicescroll.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/cookie.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/slick.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.selectric.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/custom.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/main.js"); ?>
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
                <button><a href="/?logout=yes">Выйти</a>
                </button>

            </div>
        </div>

    </header>
<?php endif; ?>
<div class="inner_page">
    <div class="container">




