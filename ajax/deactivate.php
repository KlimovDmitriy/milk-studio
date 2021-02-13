<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule('iblock');

$el = new CIBlockElement;
$arLoadProductArray = Array("ACTIVE" => "N");
$PRODUCT_ID = (int)$_POST['id'];
$res = $el->Update($PRODUCT_ID, $arLoadProductArray);