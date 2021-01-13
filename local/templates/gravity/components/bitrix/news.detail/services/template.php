<?php
$APPLICATION->SetPageProperty("TITLE", $arResult['NAME']);
$APPLICATION->SetTitle($arResult['NAME']);
$bgImage = CFile::GetFileArray($arResult['PROPERTIES']['SECOND_BACKGROUND']['VALUE']);
$promoImage = CFile::GetFileArray($arResult['PROPERTIES']['PROMO_PICTURE']['VALUE']);
?>
<div class="page-service">
    <div class="header" style="background-image: url('<?= $arResult['DETAIL_PICTURE']['SRC'] ?>'); padding-top: 1px">
        <div class="container">
            <div class="wrapper">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "",
                    array(
                        "SITE_ID" => "s1",
                    )
                ); ?>
                <h1 class="header_title">
                    <?= $arResult['NAME'] ?>
                </h1>
                <p class="header_subtitle"><?= $arResult['PREVIEW_TEXT'] ?></p>
                <a href="#service_popup1" class="button appointment header_button popup_open">Записаться</a>
            </div>
        </div>
    </div>
    <main class="main">
        <section class="section s1">
            <div class="container">
                <?= $arResult['DETAIL_TEXT'] ?>
            </div>
        </section>
        <? if ($bgImage['SRC']): ?>
            <section class="section s2" style="background-image: url('<?= $bgImage['SRC'] ?>');">
                <div class="container">
                    <div class="paragraph">
                        <?= $arResult['PROPERTIES']['SECOND_TEXT_BLOCK']['VALUE']['TEXT'] ?>
                    </div>
                </div>
            </section>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['THIRD_TEXT_BLOCK']['VALUE']): ?>
            <section class="section s3">
                <div class="container">
                    <?= $arResult['PROPERTIES']['THIRD_TEXT_BLOCK']['~VALUE']['TEXT'] ?>
                </div>
            </section>
        <? endif; ?>
        <? if ($promoImage['SRC']): ?>
            <div class="background_strip">
                <img
                        src="<?= $promoImage['SRC'] ?>"
                        alt="<?= $arResult['NAME'] ?>"
                        width="100%"
                />
            </div>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['FOURTH_TEXT_BLOCK']['VALUE']): ?>
            <section class="section s4">
                <div class="container">
                    <?= $arResult['PROPERTIES']['FOURTH_TEXT_BLOCK']['~VALUE']['TEXT'] ?>
                </div>
            </section>
        <? endif; ?>
        <? if ($arResult['GALLERY']): ?>
            <section class="section s5">
                <div class="container">
                    <h2 class="section_title">Занимайтесь с комфортом</h2>
                    <div class="s5_slider" id="s5_slider">
                        <? foreach ($arResult['GALLERY'] as $img): ?>
                            <div class="slide">
                                <img
                                        src="<?= $img['DETAIL']['src'] ?>"
                                        width="100%"
                                        class="background_strip_bycicle"
                                        alt="<?= $img['ALT'] ?>"
                                />
                            </div>
                        <? endforeach; ?>
                    </div>
                    <button class="button_arrow prev" id="s5_button_next"></button>
                    <button class="button_arrow next" id="s5_button_prev"></button>
                    <div class="circles">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>

            </section>
        <? endif; ?>
        <? if ($arResult['TRAINERS']): ?>
            <section class="section s6">
                <div class="container">
                    <h2 class="section_title">Профессиональный тренерский состав</h2>
                    <div class="s6_slider" id="s6_slider">
                        <? foreach ($arResult['TRAINERS'] as $trainer): ?>
                            <div class="slide">
                                <img
                                        src="<?= $trainer['PREVIEW_PICTURE']['src'] ?>"
                                        width="100%"
                                        class="trainer_photo"
                                        alt="Тренер"
                                />
                                <div class="wrapper">
                                    <p class="trainer_name"><?= $trainer['NAME'] ?></p>
                                    <? if ($trainer['ACHIEVEMENTS']): ?>
                                        <p class="trainer_exp"><?= $trainer['ACHIEVEMENTS'] ?></p>
                                    <? endif; ?>
                                    <p class="trainer_desc paragraph">
                                        <?= $trainer['PREVIEW_TEXT'] ?>
                                    </p>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </section>
        <? endif; ?>
        <? if ($arResult['FAQ']): ?>
            <section class="section s7">
                <div class="container">
                    <h2 class="section_title">
                        <span>Часто <span class="w_320">задаваемые</span></span> вопросы
                    </h2>
                    <div class="questions">
                        <? foreach ($arResult['FAQ'] as $i => $faq): ?>
                            <? if ($i == 0) {
                                $class = 'active';
                            } else {
                                $class = '';
                            } ?>
                            <div class="question">
                                <p class="title question_trigger <?= $class ?>">
                                    <?= $faq['NAME'] ?>
                                </p>
                                <div class="description">
                                    <?= $faq['PREVIEW_TEXT'] ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </section>
        <? endif; ?>
        <section class="section s8">
            <div class="container">
                <h2 class="section_title">
                    Оставьте заявку и мы вам обязательно перезвоним
                </h2>

                <a href="#service_popup1" class="button appointment">Записаться</a>
            </div>
        </section>
</div>