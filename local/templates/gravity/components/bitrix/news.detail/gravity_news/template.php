<?php
$APPLICATION->SetTitle($arResult['NAME']);
$APPLICATION->SetPageProperty("TITLE", $arResult['NAME']);
global $arFilter;
$arFilter["!ID"] = $arResult['ID'];
?>
<div id="upvote" style="background-color: green">Проголосовать +</div>
<?= $arResult['PROPERTIES']['RATING']['VALUE']?>
<div id="downvote" style="background-color: yellow">Проголосовать -</div>
<? $APPLICATION->IncludeComponent(
    "dklimov:rating",
    ".default",
    Array(
            "UPVOTE_CLASS"=>'up',
        "ELEMENT_ID"=>$arResult['ID'],
        "IBLOCK_ID"=>$arResult['IBLOCK_ID'],
        "RATING_PROP_CODE"=>"RATING"
    ),
    false
);?>
<div class="blog-page news-page">
    <div class="other-news">
        <div class="other">
            <div class="other_inner">
                <div class="other_title">Другие новости</div>
                <div class="other-item">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "other_news",
                        array(
                            "ADD_ELEMENT_CHAIN" => "Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
                            "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                            "DETAIL_DISPLAY_TOP_PAGER" => "N",
                            "DETAIL_FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "DETAIL_PAGER_SHOW_ALL" => "Y",
                            "DETAIL_PAGER_TEMPLATE" => "",
                            "DETAIL_PAGER_TITLE" => "Страница",
                            "DETAIL_PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "DETAIL_SET_CANONICAL_URL" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "news",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "LIST_FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "LIST_PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "MESSAGE_404" => "",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "NEWS_COUNT" => "4",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "SEF_MODE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "USE_CATEGORIES" => "N",
                            "USE_FILTER" => "N",
                            "USE_PERMISSIONS" => "N",
                            "USE_RATING" => "N",
                            "USE_RSS" => "N",
                            "USE_SEARCH" => "N",
                            "USE_SHARE" => "N",
                            "COMPONENT_TEMPLATE" => "other_news",
                            "SEF_FOLDER" => "/news/",
                            "FILE_404" => "",
                            "FILTER_NAME" => "arFilter",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "DETAIL_URL" => "/news/#CODE#/",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_META_DESCRIPTION" => "Y",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "Y"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
        <div class="blog_inner">
            <div class="blog_inner-date"><?= $arResult['DISPLAY_ACTIVE_FROM'] ?></div>
            <h1><?= $arResult['NAME'] ?></h1>
            <div class="blog_inner-img" style="text-align: center">
                <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"/>
            </div>
            <div class="blog_inner-img">
                <?= $arResult['PREVIEW_TEXT'] ?>
            </div>

            <?= $arResult['DETAIL_TEXT'] ?>

            <div class="blog_inner-wrapp_socials">
                <div class="blog_socials">
                    <span>Поделиться</span>
                    <div class="blog_socials-wrapp">
                        <a href="#" class="facebook" target="_blank"><img
                                    src="<?= SITE_TEMPLATE_PATH ?>/images/blog-page/fb.svg"/></a>
                        <a href="" class="telegram" target="_blank"><img
                                    src="<?= SITE_TEMPLATE_PATH ?>/images/blog-page/Subtract.svg"/></a>
                    </div>
                </div>
                <a class="details" href="/news/">Другие новости</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://vk.com/js/api/share.js?93" charset="windows-1251"></script>
<script>
    var url = window.location.href;
    var title = document.title;
    var vkBtn = VK.Share.button({url: url, title: title}, {
        type: 'custom',
        text: '<img src="<?= SITE_TEMPLATE_PATH ?>/images/blog-page/vk.svg"/>'
    });
    $(".blog_socials-wrapp").append(vkBtn);
    $(".telegram").attr("href", "https://telegram.me/share/url?url=" + url + "&text=" + title);
    $(".facebook").attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + url)
</script>
