<?php
$userId = $USER->GetID();
?>
<div>

    <h2>Активные модели:</h2>
<div class="list-group">
<?php foreach ($arResult['ITEMS'] as $arItem): ?>
    <?php
    if ($userId == '1' || $arItem['PROPERTIES']['MODEL_ID']['VALUE'] == $userId):?>
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><?=$arItem['NAME']?>
            <? if ($USER->GetID() == 1):?>
            <span class="btn btn-danger float-right d" data-id="<?=$arItem['ID']?>">Деактивировать</span>
            <? endif ?></a>
    <?php endif;?>
<?php endforeach; ?>
</div>
</div>
<div class="mt-5">
    <h2>Деактивированные модели:</h2>
    <div class="list-group">
        <?php foreach ($arResult['dM'] as $arItem): ?>
            <?php
            if ($userId == '1'):?>
                <a  class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><?=$arItem['NAME']?>
                    <? if ($USER->GetID() == 1):?>
                        <span class="btn btn-success float-right a" data-id="<?=$arItem['ID']?>">Активировать</span>
                    <? endif ?></a>
            <?php endif;?>
        <?php endforeach; ?>
    </div>
</div>

<script>
    $(document).ready(function (){
        $(".d").click(function(e){
            e.preventDefault();
            var id = $(this).data('id');
            console.log('123')
            $.ajax({
                url: 'ajax/deactivate.php',
                type: 'POST',
                data: {id: id},
                success: function (){
                    location.reload();
                }
            })
        })
        $(".a").click(function(e){
            e.preventDefault();
            var id = $(this).data('id');
            console.log('123')
            $.ajax({
                url: 'ajax/activate.php',
                type: 'POST',
                data: {id: id},
                success: function (){
                    location.reload();
                }
            })
        })
    })
</script>