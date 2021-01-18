<?php
$el = CIBlockElement::GetList(
    array(),
    array("IBLOCK_ID"=>"17","PROPERTY_MODEL_ID.ID" => 2)
);
$el1 = GetIBlockElementList(17, false, Array(), 0, array("PROPERTY_MODEL_ID" => 2));
while($e = $el1->GetNext()){
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}
?>
<div class="row">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#logins" role="tab" aria-controls="home"
               aria-selected="true">Логины и заработок</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#notes" role="tab" aria-controls="profile"
               aria-selected="false">Заметки</a>
        </li>
    </ul>
</div>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="logins" role="tabpanel"
         aria-labelledby="home-tab">
        <div class="row"><?= $arResult['PROPERTIES']['LOGINS']['~VALUE']['TEXT']; ?></div>
    </div>
    <div class="tab-pane fade" id="notes" role="tabpanel"
         aria-labelledby="profile-tab">
        <div class="row mt-3"><?= $arResult['PROPERTIES']['NOTES']['~VALUE']['TEXT']; ?></div>
        <div class="row">
            <button type="button" class="btn btn-warning">Обновить заметки</button>
        </div>
    </div>
</div>
