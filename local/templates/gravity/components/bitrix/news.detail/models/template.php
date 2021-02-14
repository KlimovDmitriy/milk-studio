<?php
$userId = $USER->GetID();
$userGroup = CUser::GetUserGroup($userId);
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
        <div class="row login-table">
            <table class="table table-bordered table-striped ">
                <thead class="thead-dark">
                <tr>
                    <th>
                        Сайт
                    </th>
                    <th>
                        Логин
                    </th>
                    <th>
                        Пароль
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($arResult['LOGINS'] as $login): ?>
                    <tr>
                        <td>
                            <?= $login['UF_SITE'] ?>
                        </td>
                        <td>
                            <?= $login['UF_LOGIN'] ?>
                        </td>
                        <td>
                            <?= $login['UF_PASSWORD'] ?>
                        </td>
                    </tr>
                <?php
                endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="login-edit mb-4">
            <div class="row">
                <div class="col-md-3">
                    Сайт
                </div>
                <div class="col-md-3">
                    Логин
                </div>
                <div class="col-md-3">
                    Пароль
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <?php
            foreach ($arResult['LOGINS'] as $login): ?>
                <div class="row mt-1">
                    <form class="w-100">
                        <input type="hidden" name="id" value="<?= $login['ID']?>">
                        <div class="row">
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="site" placeholder="Введите ник модели:" value="<?= $login['UF_SITE'] ?>">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="login" placeholder="Введите ник модели:" value="<?= $login['UF_LOGIN'] ?>">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="password" placeholder="Введите ник модели:" value="<?= $login['UF_PASSWORD'] ?>">
                            </div>
                            <div class="col-md-1">
                                <div class="btn btn-success update-login">Обновить</div>
                            </div>
                            <div class="col-md-1">
                                <div class="btn btn-danger delete-login">Удалить</div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            endforeach; ?>
        </div>
        <?
        if (in_array(6, $userGroup)): ?>
            <div class="row mt-2">
                <div class="btn btn-success" id="add-login">Добавить логин</div>
                <div class="btn btn-danger" id="edit-login">Редактировать логины</div>
            </div>
        <?
        endif ?>
        <div class="row mt-4" id="login-form" style="display: none">
            <form class="d-flex align-items-end" id="add-login-form">
                <input type="hidden" name="model-id" value="<?= $arResult['ID'] ?>">
                <div class="form-group mr-3">
                    <label for="site">Сайт</label>
                    <input type="text" class="form-control" name="site"/>
                </div>
                <div class="form-group mr-3">
                    <label for="login">Логин</label>
                    <input type="text" class="form-control" name="login"/>
                </div>
                <div class="form-group mr-3">
                    <label for="password">Пароль</label>
                    <input type="text" class="form-control" name="password"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning" id="login-submit">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
    <div class="tab-pane fade" id="notes" role="tabpanel"
         aria-labelledby="profile-tab">
        <div class="row mt-3 note-wrapper">
            <div class="member-note col-12"><?= $arResult['PROPERTIES']['NOTES']['~VALUE']['TEXT']; ?></div>
            <div class="note-form col-12">
                <form id="note-form">
                    <input type="hidden" value="<?= $arResult['ID'] ?>" name="id">
                    <input type="hidden" value="<?= $arResult['IBLOCK_ID'] ?>" name="iblockId">
                    <div class="form-group">
                        <label for="new-note">Введите обновленные заметки:</label>
                        <textarea name="new-note"
                                  class="form-control" style="height: 100px"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit-note" class="btn btn-warning">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row note-btn-wrapper mt-3">
            <div class="col-12">
                <button type="button" class="btn btn-warning" id="update-note">Обновить заметки</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#update-note").click(function () {
            var note = $(".member-note").html();
            note = note.replaceAll("<br>", "\r\n");
            $(".member-note").hide();
            $(".note-btn-wrapper").hide();
            $("#note-form textarea").html(note);
            $(".note-form").show();
        })

        $("#note-form").on("submit", function (e) {
            e.preventDefault();
            var data = $("#note-form").serialize();
            $.ajax({
                url: "/local/templates/gravity/ajax.php",
                type: "POST",
                data: data,
                success: function (response) {
                    $(".note-form").hide();
                    $(".note-btn-wrapper").show();
                    $(".member-note").html(response);
                    $(".member-note").show();
                }
            })
            return false;
        })
    })
</script>