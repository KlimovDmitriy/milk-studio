<?php

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

CModule::IncludeModule('iblock');
CModule::IncludeModule('highloadblock');

$hlblock = HL\HighloadBlockTable::getById(7)->fetch(); // id highload блока
$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entityClass = $entity->getDataClass();

$res = $entityClass::getList(array(
    'select' => array('*'),
    //'order' => array('ID' => 'ASC'),
    'filter' => array("UF_MODEL" => $arResult['ID'])
));
while ($row = $res->fetch()){
    $arResult['LOGINS'][] = $row;
}