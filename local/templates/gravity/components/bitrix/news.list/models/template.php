<?php
$userId = $USER->GetID();
$userGroup = CUser::GetUserGroup($userId);
?>
<div>

    <h2>Активные модели:</h2>
    <div class="list-group">
        <?php
        foreach ($arResult['ITEMS'] as $arItem): ?>
            <?php
            if (in_array(6, $userGroup) || $arItem['PROPERTIES']['MODEL_ID']['VALUE'] == $userId):?>
                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"
                   class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><?= $arItem['NAME'] ?>
                    <?
                    if (in_array(6, $userGroup)): ?>
                        <span class="btn btn-danger float-right d" data-id="<?= $arItem['ID'] ?>">Деактивировать</span>
                    <?
                    endif ?></a>
            <?php
            endif; ?>
        <?php
        endforeach; ?>
    </div>
</div>
<?php
if (in_array(6, $userGroup)):
?>
<div class="mt-5">
    <h2>Деактивированные модели:</h2>
    <div class="list-group">
        <?php
        foreach ($arResult['dM'] as $arItem): ?>
            <?php
            if (in_array(6, $userGroup)):?>
                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><?= $arItem['NAME'] ?>
                    <?
                    if (in_array(6, $userGroup)): ?>
                        <span class="btn btn-success float-right a" data-id="<?= $arItem['ID'] ?>">Активировать</span>
                    <?
                    endif ?></a>
            <?php
            endif; ?>
        <?php
        endforeach; ?>
    </div>
</div>
<div class="mt-5">
    <h2>Добавление модели:</h2>
    <form id="add_model">
        <input type="hidden" value="<?= $USER->GetID() ?>" name="who_add">
        <div class="row">
            <div class="col">
                <label for="login">Логин модели:</label>
                <input class="form-control" type="text" name="login" placeholder="Введите логин:">
            </div>
            <div class="col">
                <label for="password">Пароль модели:</label>
                <input class="form-control" type="text" name="password" placeholder="Введите пароль:">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="name">Ник модели:</label>
                <input class="form-control" type="text" name="name" placeholder="Введите ник модели:">
            </div>
            <div class="col">
                <label for="surname">Фамилия модели:</label>
                <input class="form-control" type="text" name="surname" placeholder="Введите фамилию модели:">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col btn btn-success" id="submit_model">
                Добавить
            </div>
        </div>
    </form>
</div>
<?php
endif;