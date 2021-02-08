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
        <div class="row">
            <table class="table table-bordered table-striped">
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
                <?php foreach ($arResult['LOGINS'] as $login): ?>
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
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <? if ($USER->GetID() == 1):?>
        <div class="row">
            <div class="btn btn-danger" id="add-login">Добавить логин</div>
        </div>
        <? endif ?>
        <div class="row mt-4" id="login-form" style="display: none">
            <form class="d-flex align-items-end" id="add-login-form">
                <input type="hidden" name="model-id" value="<?=$arResult['ID']?>">
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