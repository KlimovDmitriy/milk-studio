<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$previousLevel = 0;
?>
<?if (!empty($arResult)):?>
    <ul class="nav_list">

        <?
        foreach($arResult as $arItem):
            ?>
			<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
				<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
			<?endif?>
			<?if ($arItem["IS_PARENT"]):?>

				<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<li style="list-style-type: none" class="<?= $arItem["SELECTED"] ? 'selected' : ''?> nav_submenu_trigger" id="submenu_trigger">
						<a href="<?=$arItem["LINK"]?>" class="nav_list_link">
							<?=$arItem["TEXT"]?>
						</a>
						<ul class="nav_submenu active_submenu" id="submenu">
					
				<?else:?>
					<li style="list-style-type: none" class="<?= $arItem["SELECTED"] ? 'selected' : ''?>">
						<a href="<?=$arItem["LINK"]?>" class="nav_list_link">
							<?=$arItem["TEXT"]?>
						</a>
					</li>
				<?endif?>

			<?else:?>
				<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<li style="list-style-type: none" class="<?= $arItem["SELECTED"] ? 'selected' : ''?>">
						<a href="<?=$arItem["LINK"]?>" class="nav_list_link">
							<?=$arItem["TEXT"]?>
						</a>
					</li>
				<?else:?>
                    <li class="nav_submenu_item nav_list_item <?= $arItem["SELECTED"] ? 'selected' : ''?>">
                      <a href="<?=$arItem["LINK"]?>" class="nav_submenu_link nav_list_link"
                        ><?=$arItem["TEXT"]?></a
                      >
                    </li>
				<?endif?>
			<?endif?>

			<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

        <?endforeach?>
		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
		<?endif?>

    </ul>
<?endif?>


