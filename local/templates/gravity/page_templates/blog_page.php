<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<h2>Блог</h2>
<div class="blog">
    <div class="filter">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "blog_menu",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "COMPONENT_TEMPLATE" => "blog_menu",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "blog",
                "USE_EXT" => "N"
            )
        ); ?><? $APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "blog_search",
            array(
                "COMPONENT_TEMPLATE" => "blog_search",
                "PAGE" => "#SITE_DIR#search/index.php",
                "USE_SUGGEST" => "N"
            )
        ); ?>
    </div>
    <div class="blog-page">
        Ведите ваш блог здесь...
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
