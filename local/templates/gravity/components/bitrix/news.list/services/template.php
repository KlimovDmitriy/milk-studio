<h1>Наши услуги</h1>
<div class="tabs">
    <a href="#" class="active" data-index="1" data-type="all">Все</a>
    <span class="separator"></span>
    <a href="#" data-index="2" data-type="adult">Взрослые</a>
    <span class="separator"></span>
    <a href="#" data-index="3" data-type="child">Детские</a>
</div>
<?php $APPLICATION->ShowViewContent('filter1'); ?>
<div class="services_blocks">
    <div class="row">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
        <div class="col-lg-4 services_block"
             data-type="<?= $arItem['PROPERTIES']['SERVICE_TYPE']['VALUE_XML_ID'][0] ?>">
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                <div class="services_block_inner">
                    <div class="image">
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_TEXT'] ?>">
                    </div>
                    <div class="services_block_title">
                        <?= $arItem['NAME'] ?>
                    </div>
                    <p><?= $arItem['PREVIEW_TEXT'] ?></p>
            </a>
            <a href="#service_popup1" class="button appointment">Записаться</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>
