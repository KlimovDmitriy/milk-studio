<div class="blog">
    <div class="filter">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "blog_menu",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "COMPONENT_TEMPLATE" => "blog_menu",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "blog",
                "USE_EXT" => "N"
            )
        ); ?><? $APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "blog_search",
            array(
                "COMPONENT_TEMPLATE" => "blog_search",
                "PAGE" => "#SITE_DIR#search/index.php",
                "USE_SUGGEST" => "N"
            )
        ); ?>
    </div>
    <div class="blog-page">
        <div class="blog_inner">
            <h1><?= $arResult['NAME'] ?></h1>
            <div class="blog_inner-img">
                <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"/>
            </div>
            <?= $arResult['DETAIL_TEXT'] ?>
            <div class="blog_inner-wrapp_socials">
                <div class="blog_socials">
                    <span>Поделиться</span>
                    <div class="blog_socials-wrapp">
                        <a href="#" class="facebook" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/blog-page/fb.svg"/></a>
                        <a href="" class="telegram"  target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/blog-page/Subtract.svg"/></a>
                    </div>
                </div>
                <a href="/blog/" class="details">Другие статьи</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://vk.com/js/api/share.js?93" charset="windows-1251"></script>
<script>
    var url = window.location.href;
    var title = document.title;
    var vkBtn = VK.Share.button({url: url, title: title}, {type: 'custom', text: '<img src="<?= SITE_TEMPLATE_PATH ?>/images/blog-page/vk.svg"/>'});
    $(".blog_socials-wrapp").append(vkBtn);
    $(".telegram").attr("href","https://telegram.me/share/url?url="+url+"&text="+title);
    $(".facebook").attr("href", "https://www.facebook.com/sharer/sharer.php?u="+url)
</script>
