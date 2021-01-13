<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Highloadblock\HighloadBlockTable as HL;

\CModule::includeModule('highloadblock');
CModule::IncludeModule("iblock");
$ip = $_SERVER['REMOTE_ADDR'];
$id = $_POST['id'];
$iblockId = $_POST['iblockId'];

$db_props = CIBlockElement::GetProperty($iblockId, $id, array("sort" => "asc"), array("CODE" => "RATING"));
if ($ar_props = $db_props->Fetch()) {
    $rating = IntVal($ar_props['VALUE']);
}
$action = htmlspecialcharsEx($_POST['action']);
switch ($action) {
    case "increaseRating":
        CIBlockElement::SetPropertyValueCode($id, "RATING", ++$rating);
        break;
    case "decreaseRating" :
        CIBlockElement::SetPropertyValueCode($id, "RATING", --$rating);
        break;
}
