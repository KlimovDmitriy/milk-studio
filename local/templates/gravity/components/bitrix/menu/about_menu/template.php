<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
<div class="filter">
    <div class="filter_inner">
        <ul>
		<?foreach($arResult as $arItem):?>
            <li >
                <a href="<?=$arItem["LINK"]?>" style="text-decoration: none" class="filter_title">
                    <?=$arItem["TEXT"]?>
                </a>
            </li>
        <?endforeach;?>            
        </ul>
    </div>
</div>
<? endif;?>