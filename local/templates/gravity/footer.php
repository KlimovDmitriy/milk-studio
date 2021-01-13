</div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <a href="#" class="totop">
                <span>В начало</span>
                <img src="<?= SITE_TEMPLATE_PATH; ?>/images/top.svg" alt="">
            </a>
            <div class="col-lg-6 footer_left">
                <a href="/" class="footer_logo">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/images/footer_desktop_logo.svg" alt="">
                </a>
                <a href="/" class="footer_logo_mobile">
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/images/footer_logo_mobile.png" alt="">
                </a>
            </div>
            <div class="col-lg-6 footer_right">
                <div class="row w-100">
                    <div class="col-lg-4">
                        <nav class="footer_menu desc">
                            <h3>Меню</h3>
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:menu", "bottom", [
                                "ROOT_MENU_TYPE" => "top",
                                "CHILD_MENU_TYPE" => "section",
                                "MAX_LEVEL" => "2"
                            ]); ?>
                        </nav>
                    </div>
                    <div class="col-7 col-lg-4">
                        <nav class="footer_menu footer_menu_after">
                            <h3>Информация</h3>
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:menu", "info_menu", [
                                "ROOT_MENU_TYPE" => "info",
                                "MAX_LEVEL" => "2"
                            ]); ?>
                        </nav>
                    </div>
                    <div class="footer_contacts ml-auto">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/bottom_contacts.php"
                        ]); ?>
                        <div class="social_block">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH; ?>/images/fb.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH; ?>/images/inst.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH; ?>/images/vk.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>