<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/404_main.css'); ?>
    <div class="inner_page">
        <div class="container">
            <main class="main">
                <section class="section">
                    <div class="container">
                        <h1 class="section_title">Страница <span>не найдена</span></h1>
                        <div class="flex_container flex_container_row">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/markup/img/404_background.png"
                                 class="section_background" alt="Фоновое изображение">
                            <div class="flex_container flex_container_column">
                                <p class="section_subtitle"><span>Сожалеем,</span>
                                    <span>данная страница недоступна,</span> либо
                                    находится в разработке.</p>
                                <a href="/" class="button to_main">Вернуться на главную</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?><?php
