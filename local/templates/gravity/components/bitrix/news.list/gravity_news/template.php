<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<h1>Новости</h1>
<div class="news_block">
    <div class="row">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="col-lg-6">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="news_block_item">
                    <div class="news_block_image">
                        <img class="news_image" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                             alt="<?= $arItem['NAME'] ?>">
                    </div>
                    <div class="news_block_text">
                        <div class="d-flex">
                            <div class="news_cat"><?
                                $res = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
                                if ($ar_res = $res->GetNext())
                                    echo $ar_res['NAME'];
                                ?></div>
                            <div class="news_date"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></div>
                        </div>
                        <div class="news_name"><?= $arItem['NAME'] ?></div>
                        <p><?= $arItem['PREVIEW_TEXT']; ?></p>
                        <div class="details">Подробнее</div>
                    </div>
                </a>
            </div>


        <? endforeach; ?>
    </div>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <div><?= $arResult["NAV_STRING"] ?></div>
    <? endif; ?>

    <script>
        $(document).ready(function () {
            function blockmaxheight(hblocks) {
                var maxheight = 0;
                $(hblocks).each(function () {
                    var heightblock = parseInt($(this).parents(".news_block_item").height());
                    if (heightblock > maxheight) {
                        maxheight = heightblock;
                    }
                    ;
                });
                $(hblocks).height(maxheight);
                $(hblocks).css('line-height', maxheight + 'px');
                $(hblocks).find("img").height(maxheight)
            }

            blockmaxheight(".news_block_image");
        });
    </script>
