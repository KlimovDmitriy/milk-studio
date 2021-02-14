<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Highloadblock\HighloadBlockTable as HL;

\CModule::includeModule('highloadblock');
CModule::IncludeModule("iblock");
$newText = str_replace("\r\n", "<br>",$_POST['new-note']);
$id = $_POST['id'];
$iblockId = 17;

CIBlockElement::SetPropertyValuesEx($id,$iblockId,array('SALARY'=>$_POST['salary'], 'GOAL' => $_POST['goal'], 'DATE_UPDATE'=>date('d.m.Y H:i:s')));

echo $newText;