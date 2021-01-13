<? foreach ($arResult['ITEMS'] as $arItem): ?>
    <? foreach ($arItem['IBLOCK_SECTION_ID'] as $arId): ?>
    <?= $arId ?>
    <? endforeach; ?>
<? endforeach; ?>
