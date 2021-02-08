<?php
$userId = $USER->GetID();
?>
<!--<pre>-->
<!--    --><? // print_r($arResult) ?>
<!--</pre>--><div class="list-group">
<?php foreach ($arResult['ITEMS'] as $arItem): ?>
    <?php
    if ($userId == '1' || $arItem['PROPERTIES']['MODEL_ID']['VALUE'] == $userId):?>
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><?=$arItem['NAME']?>
            <? if ($USER->GetID() == 1):?>
            <span class="btn btn-danger float-right d">Деактивировать</span>
            <? endif ?></a>
    <?php endif;?>
<?php endforeach; ?>
</div>

<script>
    $(document).ready(function (){
        $(".d").click(function(e){
            e.preventDefault();
            console.log('123')
        })
    })
</script>