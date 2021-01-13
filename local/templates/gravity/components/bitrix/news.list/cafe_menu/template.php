<? $APPLICATION->IncludeComponent(
    "bitrix:menu",
    "cafe_menu_select",
    array(
        "ALLOW_MULTI_SELECT" => "N",
        "COMPONENT_TEMPLATE" => "cafe_menu_select",
        "DELAY" => "N",
        "MAX_LEVEL" => "2",
        "MENU_CACHE_GET_VARS" => array(),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "cafe",
        "USE_EXT" => "N"
    )
); ?>

<div class="row menu_items active">
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <?$arImage = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width' => 370, 'height' => 258), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
        $elementGroups = CIBlockElement::GetElementGroups($arItem['ID']);
        $newElementGroups = [];
        while ($var = $elementGroups->Fetch()) {
            $newElementGroups[] = $var['ID'];
        }
		rsort($newElementGroups);
        ?>
        <? if (in_array(11, $newElementGroups)): ?>
            <div class="col-lg-4 dish active section<?= $newElementGroups[0]; ?>">
                <a class="menu_item">
                    <div class="image">
                        <img src="<?= ($arImage['src']) ?>"
                             alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                        <div class="menu_item_inner">
                            <div>
                                <span>Калорийность</span>
                                <span><?= $arItem['PROPERTIES']['CALORIES']['VALUE'] ?> ККал</span>
                            </div>
                            <div class="ml-auto">
                                <span>Белки</span>
                                <span><?= $arItem['PROPERTIES']['PROTEIN']['VALUE'] ?> г</span>
                            </div>
                            <div>
                                <span>Жиры</span>
                                <span><?= $arItem['PROPERTIES']['FAT']['VALUE'] ?> г</span>
                            </div>
                            <div>
                                <span>Углеводы</span>
                                <span><?= $arItem['PROPERTIES']['CARBOHYDRATES']['VALUE'] ?> г</span>
                            </div>
                        </div>
                    </div>
                    <div class="name"><?= $arItem['NAME'] ?></div>
                </a>
            </div>
        <? endif; ?>
    <? endforeach; ?>
</div>
<div class="row menu_items">
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
    <? $elementGroups = CIBlockElement::GetElementGroups($arItem['ID']);
    $newElementGroups = [];
    while ($var = $elementGroups->Fetch()) {
        $newElementGroups[] = $var['ID'];
    }
	rsort($newElementGroups);
    ?>

    <? if (in_array(12, $newElementGroups)): ?>
        <div class="col-lg-4 sportpit active section<?=$newElementGroups[0];?>">
            <a class="menu_item">
                <div class="image">
                    <img src="<?= ($arItem['PREVIEW_PICTURE']['SRC']) ?>"
                         alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                    <div class="menu_item_inner">
                        <div>
                            <span>Каллорийность</span>
                            <span><?= $arItem['PROPERTIES']['CALORIES']['VALUE'] ?> ККал</span>
                        </div>
                        <div class="ml-auto">
                            <span>Белки</span>
                            <span><?= $arItem['PROPERTIES']['PROTEIN']['VALUE'] ?> г</span>
                        </div>
                        <div>
                            <span>Жиры</span>
                            <span><?= $arItem['PROPERTIES']['FAT']['VALUE'] ?> г</span>
                        </div>
                        <div>
                            <span>Углеводы</span>
                            <span><?= $arItem['PROPERTIES']['CARBOHYDRATES']['VALUE'] ?> г</span>
                        </div>
                    </div>
                </div>
                <div class="name"><?= $arItem['NAME'] ?></div>
            </a>
        </div>
    <?endif;?>
    <? endforeach; ?>
</div>