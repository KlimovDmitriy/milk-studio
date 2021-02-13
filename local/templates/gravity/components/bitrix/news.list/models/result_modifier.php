<?php
$arSelect = Array("ID", "NAME");
$arFilter = Array("IBLOCK_ID"=>17, "ACTIVE"=>"N");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
$deactivatedModels = [];
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult['dM'][] = $arFields;
}