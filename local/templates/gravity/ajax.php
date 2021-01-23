<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Highloadblock\HighloadBlockTable as HL;

\CModule::includeModule('highloadblock');
CModule::IncludeModule("iblock");
$newText = str_replace("\r\n", "<br>",$_POST['new-note']);
$id = $_POST['id'];
$iblockId = $_POST['iblockId'];

CIBlockElement::SetPropertyValuesEx($id,$iblockId,array('NOTES'=>$newText));

echo $newText;