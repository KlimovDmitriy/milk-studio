<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Highloadblock\HighloadBlockTable as HL;

\CModule::includeModule('highloadblock');
CModule::IncludeModule("iblock");
$newText = str_replace("\r\n", "<br>",$_POST['table']);
$id = $_POST['id'];
$iblockId = 17;

CIBlockElement::SetPropertyValuesEx($id,$iblockId,array('ARCHIVE'=>$newText, 'DATE_UPDATE'=>date('d.m.Y H:i:s')));