<?
$arFilter = array('IBLOCK_ID' => 10, 'GLOBAL_ACTIVE' => 'Y');
$db_list = CIBlockSection::GetList(array("SORT" => "ASC"), $arFilter, true);
?>

<div class="tabs mt-0 mb-30">
    <? $index = 0; ?>
    <? while ($arItem = $db_list->GetNext()): ?>

        <? if ($arItem['DEPTH_LEVEL'] == 1 and $index == 0): ?>
            <? $index++; ?>
            <a href="#" class="active" data-index="<?= $index ?>"><?= $arItem['NAME'] ?></a>
            <span class="separator"></span>
        <? elseif ($arItem['DEPTH_LEVEL'] == 1): ?>
            <? $index++; ?>
            <a href="#" class="" data-index="<?= $index ?>"><?= $arItem['NAME'] ?></a>
        <? endif; ?>
    <? endwhile; ?>


</div>