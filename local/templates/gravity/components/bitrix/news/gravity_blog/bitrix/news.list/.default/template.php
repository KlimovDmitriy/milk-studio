<? foreach ($arResult['ITEMS'] as $arItem): ?>
    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="news_block_item123">
        <div class="news_block_image">
            <img src="<?$arItem['PREVIEW_PICTURE']?>" alt="123">
        </div>
        <div class="news_block_text">
            <div class="d-flex mobile_non_flex">
                <div class="news_cat">
                    <div class="news_cat">
                        <? if ($arItem['TAGS']) {
                            $arTags = explode(',', $arItem['TAGS']);
                            foreach ($arTags as $tag):?>
                                #<?= $tag ?>
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
                <div class="time">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.svg" alt="">
                    <span><?= $arItem['PROPERTIES']['TIME_TO_READ']['VALUE'] ?>мин</span>
                </div>
            </div>
        </div>
    </a>
<? endforeach; ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <div><?= $arResult["NAV_STRING"] ?></div>
<? endif; ?>