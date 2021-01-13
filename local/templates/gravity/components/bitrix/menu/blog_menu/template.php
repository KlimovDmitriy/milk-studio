<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <div class="filter_inner">
        <ul>
            <li>
                <a href="/blog" style="text-decoration: none" class="filter_title">
                    Все статьи
                </a>
            </li>
            <?
            $previousLevel = 0;
            foreach ($arResult as $arItem):
                if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                    <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                <? endif ?>
                <? if ($arItem["IS_PARENT"]): ?>
                    <li class="dropdown">
                        <span>
                            <a href="<?= $arItem['LINK'] ?>" onclick="return false"><?= $arItem['TEXT'] ?></a>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/filter_arrow.svg" alt="">
                        </span>
                        <ul <?= $selected ?>>
                <? else: ?>
                    <li>
                        <a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
                <? endif ?>
                <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
            <? endforeach ?>
            <? if ($previousLevel > 1)://close last item tags?>
                <?= str_repeat("</li></ul>", ($previousLevel - 1)); ?>
            <? endif ?>
            </ul>
        </ul>
    </div>
<? endif ?>