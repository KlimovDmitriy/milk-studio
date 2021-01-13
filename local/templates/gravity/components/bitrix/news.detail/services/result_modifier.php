<?
if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $img) {
        $arResult['GALLERY'][] = array(
            'DETAIL' => ($arPhoto = CFile::ResizeImageGet($img, array('width' => 1174, 'height' => 579), BX_RESIZE_IMAGE_EXACT, true)),
            'TITLE' => (strlen($arPhoto['DESCRIPTION']) ? $arPhoto['DESCRIPTION'] : (strlen($arPhoto['TITLE']) ? $arPhoto['TITLE'] : $arResult['NAME'])),
            'ALT' => (strlen($arPhoto['DESCRIPTION']) ? $arPhoto['DESCRIPTION'] : (strlen($arPhoto['ALT']) ? $arPhoto['ALT'] : $arResult['NAME'])),
        );
    }
}
if(!empty($arResult['PROPERTIES']['FAQ']['VALUE'])){
    foreach ($arResult['PROPERTIES']['FAQ']['VALUE'] as $faq){
        $arrFaq = CIBlockElement::GetByID($faq);
        while($faqProp = $arrFaq->Fetch()){
            $arResult['FAQ'][] = $faqProp;
        }

    }
}
if(!empty($arResult['PROPERTIES']['TRAINERS']['VALUE'])){
    foreach ($arResult['PROPERTIES']['TRAINERS']['VALUE'] as $trainer){
        $arrTrainer = CIBlockElement::GetByID($trainer);
        $trainProp = CIBlockElement::GetProperty(12,$trainer,Array("sort"=>"asc"),array(),array("CODE"=>'ACHIEVEMENTS'));
        $prop = $trainProp->GetNext();
        while($trainerProp = $arrTrainer->Fetch()){
            $trainerProp['PREVIEW_PICTURE'] = CFile::ResizeImageGet($trainerProp['PREVIEW_PICTURE'], array('width' => 371, 'height' => 218), BX_RESIZE_IMAGE_EXACT, true);
            $trainerProp['ACHIEVEMENTS'] = $prop['VALUE']['TEXT'];
            $arResult['TRAINERS'][] = $trainerProp;
        }
    }
}


