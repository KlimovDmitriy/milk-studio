<?php
?>
<!--<pre>-->
<!--    --><?//print_r($arResult['PROPERTIES'])?>
<!--</pre>-->
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
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="logins" role="tabpanel" aria-labelledby="home-tab"><?= $arResult['PROPERTIES']['LOGINS']['~VALUE']['TEXT'];?></div>
        <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="profile-tab">...</div>
    </div>