<?php
$userId = $USER->GetID();
?>
<!--<pre>-->
<!--    --><? // print_r($arResult) ?>
<!--</pre>--><div class="list-group">
<?php foreach ($arResult['ITEMS'] as $arItem): ?>
    <?php
    if ($userId == '1' || $arItem['PROPERTIES']['MODEL_ID']['VALUE'] == $userId):?>
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="list-group-item list-group-item-action"><?=$arItem['NAME']?></a>
    <?php endif;?>
<?php endforeach; ?>
</div>