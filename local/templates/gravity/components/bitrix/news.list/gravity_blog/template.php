<h1>Блог</h1>
<div class="blog">
    <div class="filter">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "blog_menu",
            Array(
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
        );?> <?$APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "blog_search",
            Array(
                "COMPONENT_TEMPLATE" => "blog_search",
                "PAGE" => "#SITE_DIR#search/index.php",
                "USE_SUGGEST" => "N"
            )
        );?>
    </div>
<div class="blog_inner">
    <?if (empty($arResult['ITEMS'])):?>
    <p>Записей в блоге пока что нет...</p>
    <?endif;?>
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="news_block_item">
            <div class="news_block_image">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<? $arItem['PREVIEW_PICTURE']['ALT'] ?>">
            </div>
            <div class="news_block_text">
                <div class="d-flex mobile_non_flex">
                    <div class="news_cat">
                        <div class="news_cat">
                            <? if ($arItem['TAGS']) {
                                $arTags = explode(',', $arItem['TAGS']);
                                foreach ($arTags as $tag):?>
                                    <object>
                                        <? $tag = trim($tag); ?>
                                        <a class="news_cat" style="text-decoration: none" href="/search/index.php?tags=<?= $tag ?>">#<?= $tag ?></a>
                                    </object>
                                <?endforeach;
                            } ?>
                        </div>
                    </div>
                    <div class="news_date"><?= $arItem['DISPLAY_ACTIVE_FROM']; ?></div>
                </div>
                <div class="news_name"><?= $arItem['NAME']; ?></div>
                <p><?= $arItem['PREVIEW_TEXT']; ?></p>
                <div class="details_wrapper">
                    <div class="details">Подробнее</div>
                    <? if(!empty($arItem['PROPERTIES']['TIME_TO_READ']['VALUE'])):?>
                    <div class="time">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.svg" alt="">
                        <span><?= $arItem['PROPERTIES']['TIME_TO_READ']['VALUE'] ?> мин</span>
                    </div>
                    <?endif;?>
                </div>
            </div>
        </a>
    <? endforeach; ?>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <div><?= $arResult["NAV_STRING"] ?></div>
    <? endif; ?>
</div>
</div>