<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
$newUser = new CUser;
$arUser = [
    "NAME"              => $_POST['name'],
    "LAST_NAME"         => $_POST['surname'],
    "EMAIL"             => "",
    "LOGIN"             => $_POST['login'],
    "LID"               => "ru",
    "ACTIVE"            => "Y",
    "GROUP_ID"          => array(5),
    "PASSWORD"          => $_POST['password'],
    "CONFIRM_PASSWORD"  => $_POST['password']
];
$id = $newUser->Add($arUser);

$el = new CIBlockElement;

$PROP = array();
$PROP[62] = $id;
$params = Array(
    "max_len" => "100", // обрезает символьный код до 100 символов
    "change_case" => "L", // буквы преобразуются к нижнему регистру
    "replace_space" => "_", // меняем пробелы на нижнее подчеркивание
    "replace_other" => "_", // меняем левые символы на нижнее подчеркивание
    "delete_repeat_replace" => "true", // удаляем повторяющиеся нижние подчеркивания
    "use_google" => "false", // отключаем использование google
);

$arLoadProductArray = Array(
    "CODE" => CUtil::translit($_POST['name'] . ' ' . $_POST['surname'], "ru" , $params),
    "MODIFIED_BY"    => $_POST['who_add'], // элемент изменен текущим пользователем
    "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
    "IBLOCK_ID"      => 17,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => $_POST['name'] . ' ' . $_POST['surname'],
    "ACTIVE"         => "N",
    "PREVIEW_TEXT"   => "",
    "DETAIL_TEXT"    => ""
);
