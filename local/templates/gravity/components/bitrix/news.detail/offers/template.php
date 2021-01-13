<?php
$APPLICATION->RestartBuffer();
$bgImage= $arResult['DETAIL_PICTURE']['SRC'] ? $arResult['DETAIL_PICTURE']['SRC'] : "/local/templates/gravity/images/popup_background.png" ?>
    <div class="offer_popup" id="popup">
        <div class="offer-content">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            <h2 class="popup_title" style="background-image: url('<?=$bgImage?>')"><span>Записаться</span> на тренироваку</h2>
            <div class="wrapper">
                <h3 class="popup_subtitle">
                    <?=($arResult['NAME'])?><br>
                </h3>
                <div class="offer-detail"><?=($arResult['PROPERTIES']['CARD_BOTTOM']['~VALUE']['TEXT'])?></div>
                <div class="slider_right_tt"><?= $arResult['PROPERTIES']['OFFER']['VALUE'] ?></div>
                <div class="offer-detail"><?=$arResult['DETAIL_TEXT']?></div>
                <button class="button next_step" id="btn_submit_popup">
                    Записаться
                </button>
            </div>
        </div>
    </div>
<?php
die();?>