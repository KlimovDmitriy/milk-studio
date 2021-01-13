<!--<pre>--><? //print_r($arResult)?><!--</pre>-->
<? foreach ($arResult['ITEMS'] as $arItem): ?>
    <? $target = $arItem['PROPERTIES']['NEW_WINDOW']['VALUE'] ? "target='_blank'" : ''; ?>
    <div class="col-lg-6">
        <div class="categories_item">
            <a href="<?= $arItem['PROPERTIES']["PAGE_URL"]['VALUE'] ?>" class="image video" <?= $target ?>>
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="" class="mobile_img">
            </a>
            <div class="categories_item_text">
                <div class="tt"><?= $arItem['NAME'] ?></div>
                <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                <? if ($arItem['PROPERTIES']["PAGE_URL"]['VALUE']): ?>
                    <a href="<?= $arItem['PROPERTIES']["PAGE_URL"]['VALUE'] ?>" <?= $target ?>
                       class="button">Подробнее</a>
                <? endif; ?>
            </div>
        </div>
    </div>
<? endforeach; ?>
