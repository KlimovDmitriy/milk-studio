<? if (!empty($arResult['ITEMS'])): ?>
    <?= $arResult["NavShowAlways"] ?>
    <section class="special" id="special">
        <div class="container">
            <div class="special_title_wrapper d-flex align-items-center">
                <h2><?= $arResult['~NAME'] ?></h2>
                <div class="slider_controls">
                    <div class="slider_prev slider_link">
                        <svg width="25" height="35" viewBox="0 0 25 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 4L8 17.5L21 31" stroke="#07569E" stroke-width="11"/>
                        </svg>
                    </div>
                    <div class="slider_counts">
                        <span class="curr">1</span>/<span class="count"><?= count($arResult['ITEMS']) ?></span>
                    </div>
                    <div class="slider_next slider_link">
                        <svg width="25" height="35" viewBox="0 0 25 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4L17 17.5L4 31" stroke="#07569E" stroke-width="11"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="special_slider">
                <? foreach ($arResult['ITEMS'] as $arItem): ?>
                <? switch($arItem['PROPERTIES']['LINK_ADDRESS']['VALUE_XML_ID']){
                        case "callback":
                            $link = "<href='#contacts' class='button tocontacts'>Оставить заявку</a>";
                            $popupLink = '';
                            break;
                        case "appointment":
                            $link = "<a class='button next_step appointment' id='btn_submit_popup' href='#service_popup1'>Записаться</a>";
                            $popupLink = '';
                            break;
                        case "appointment_popup":
                            $link = "<a data-fancybox data-auto-focus='false' data-src='#".$arItem["CODE"]."' href='javascript:;' class='button'>Подробнее</a>";
                            $popupLink = '<a class="button next_step appointment" id="btn_submit_popup" href="#service_popup1">Оставить заявку</a>';
                            break;
                        case "callback_popup":
                            $link = "<a data-fancybox data-auto-focus='false' data-src='#".$arItem["CODE"]."' href='javascript:;' class='button'>Подробнее</a>";
                            $popupLink = "<href='#contacts' class='button tocontacts popup_close'>Записаться</a>";
                            break;
                        case "popup_wo_button":
                            $link = "<a data-fancybox data-auto-focus='false' data-src='#".$arItem["CODE"]."' href='javascript:;' class='button'>Подробнее</a>";
                            $popupLink = "";
                            break;
                }
                ?>
                    <div class="special_slider_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider_card">
                                    <div class="card_top">
                                        <span><?= $arItem['NAME']; ?></span>
                                    </div>
                                    <div class="card_price"><?= $arItem['PROPERTIES']['CARD_BOTTOM']['~VALUE']['TEXT']; ?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider_right">
                                    <div class="slider_right_tt"><?= $arItem['PROPERTIES']['OFFER']['VALUE'] ?></div>
                                    <p><?= $arItem['PROPERTIES']['DESCRIPTION']['~VALUE']['TEXT']; ?></p>
                                    <?=$link?>
                                </div>
                            </div>
                        </div>
                        <div style="display: none">
                            <div class="popup offer" id="<?= $arItem['CODE'] ?>">
                                <div class="image">
                                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ? $arItem['PREVIEW_PICTURE']['SRC'] : "/local/templates/gravity/images/popup-bg.png" ?>"
                                         alt="">
                                </div>
                                <div class="popup_text offer-text">
                                    <h3 class="popup_subtitle">
                                        <?= ($arItem['NAME']) ?><br>
                                    </h3>
                                    <div class="offer-detail"><?= ($arItem['PROPERTIES']['CARD_BOTTOM']['~VALUE']['TEXT']) ?></div>
                                    <div class="slider_right_tt"><?= $arItem['PROPERTIES']['OFFER']['VALUE'] ?></div>
                                    <div class="offer-detail"><?= $arItem['DETAIL_TEXT'] ?></div>
                                    <?=$popupLink?>
                                </div>
                            </div>
                        </div>
                    </div>

                <? endforeach; ?>
            </div>
        </div>

    </section>
    <? if (count($arResult['ITEMS']) == 1): ?>
        <script>
            $(document).ready(function () {
                $(".special_title_wrapper h2").html("Специальное предложение");
                $(".slider_controls").hide();
            })
        </script>
    <? else: ?>
        <script>
            var slider = $(".special_slider").bxSlider({
                auto: false,
                pager: true,
                controls: true,
                prevSelector: ".slider_prev",
                nextSelector: ".slider_next",
                onSlideBefore: function ($slideElement, oldIndex, newIndex) {
                    $(".curr").html(newIndex + 1);
                    $(".count").html(slider.getSlideCount());
                },
            });
        </script>
    <? endif; ?>
<? endif; ?>
