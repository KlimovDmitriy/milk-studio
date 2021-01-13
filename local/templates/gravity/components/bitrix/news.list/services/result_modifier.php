<?php
foreach ($arResult['ITEMS'] as $key => $arItem){
    if (count($arItem['PROPERTIES']['SERVICE_TYPE']['VALUE_XML_ID']) > 1){
        $arResult['ITEMS'][$key]['PROPERTIES']['SERVICE_TYPE']['VALUE_XML_ID'][0] = 'all';
    }
}