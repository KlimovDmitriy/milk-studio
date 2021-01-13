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
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="other-card">
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news_block_item">
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

                <div class="details">Подробнее</div>
            </div>
        </a>
    </div>


<? endforeach; ?>

