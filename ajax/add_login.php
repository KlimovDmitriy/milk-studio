<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
use Bitrix\Main\Entity;

CModule::IncludeModule('iblock');
CModule::IncludeModule('highloadblock');

$entity_data_class = GetEntityDataClass(7);
$result = $entity_data_class::add(array(
    'UF_MODEL'         => $_POST['model-id'],
    'UF_SITE'         => $_POST['site'],
    'UF_LOGIN'        => $_POST['login'],
    'UF_PASSWORD'       => $_POST['password']
));

if($result){
    echo ("Добавлено");
}

function GetEntityDataClass($HlBlockId)
{
    if (empty($HlBlockId) || $HlBlockId < 1)
    {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();
    $entity = HLBT::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    return $entity_data_class;
}