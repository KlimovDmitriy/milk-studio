<?php
const BLOG_IBLOCK_ID = 6;

foreach ($arResult as $key => $value) {
    $sectionCode = explode("/", $arResult[$key]['LINK']);
    $sectionCode = $sectionCode[2];
    $section = CIBlockSection::GetList(array(), array('IBLOCK_ID' => BLOG_IBLOCK_ID, 'CODE' => $sectionCode, 'SITE_ID' => "s1"))->Fetch();
    $elementCount = CIBlockSection::GetSectionElementsCount($section['ID'], array("CNT_ACTIVE" => "Y"));
    if ($elementCount == 0) {
        unset($arResult[$key]);
        continue;
    }
    if ($arResult[$key]["IS_PARENT"]) {
        $elements = CIBlockSection::GetList(["SORT" => "ASC"], ["SECTION_ID" => $section["ID"], "CNT_ACTIVE" => "Y"], true);
        $isParent = false;
        while ($el = $elements->Fetch()) {
            if ($el['ELEMENT_CNT'] > 0) {
                $isParent = true;
                break;
            }
        }
        $arResult[$key]["IS_PARENT"] = $isParent;

    }
}