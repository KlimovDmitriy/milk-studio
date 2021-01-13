<? $arFilter = array('IBLOCK_ID' => 10, 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'SECTION_ID' => 11);
$arSelect = array();
$list = CIBlockSection::GetList(array("SORT" => "ASC"), $arFilter, true, $arSelect, true); ?>

<div class="menu_select active">
    <select id="dishes">
        <option value="all">Все меню</option>
        <? while ($arSections = $list->GetNext()): ?>
            <option value="<?= $arSections['ID'] ?>"> <?= $arSections['NAME']; ?></option>
        <? endwhile; ?>
    </select>
</div>

<? $arFilter = array('IBLOCK_ID' => 10, 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'SECTION_ID' => 12);
$arSelect = array();
$list = CIBlockSection::GetList(array("SORT" => "ASC"), $arFilter, true, $arSelect, true); ?>

<div class="menu_select">
    <select id="sportpit">
        <option value="all">Вся продукция</option>
        <? while ($arSections = $list->GetNext()): ?>
            <option value="<?= $arSections['ID'] ?>"> <?= $arSections['NAME']; ?></option>
        <? endwhile; ?>
    </select>
</div>
