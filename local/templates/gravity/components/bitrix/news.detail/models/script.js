$(document).ready(function(){
    $("#add-login").click(function(){
        $("#login-form").toggle();
    })

    $("#login-submit").click(function(e){
        e.preventDefault();
        var data = $("#add-login-form").serialize();
        $.ajax({
            url: "/ajax/add_login.php",
            type: "POST",
            data: data,
            success: function (resolve){
                location.reload();
            }
        })
    })

    $("#edit-login").click(function(){
        $(".login-table").toggle();
        $(".login-edit").toggle();
    })

    $(".update-login").click(function () {
        var form = $(this).parents('form').serialize();
        console.log(fi)
        $.ajax({
            url: '/ajax/update_login.php',
            type: 'POST',
            data: form,
            success: function (res){
                var r = JSON.parse(res);
                $(this).parents('form').find("input[name='site']").val(r['UF_SITE']);
                $(this).parents('form').find("input[name='login']").val(r['UF_LOGIN']);
                $(this).parents('form').find("input[name='password']").val(r['UF_PASSWORD']);
            }
        })
    })

    $(".delete-login").click(function () {
        var form = $(this).parents('form');
        var data = form.serialize();
        $.ajax({
            url: '/ajax/delete_login.php',
            type: 'POST',
            data: data,
            success: function (){
                form.hide();
            }
        })
    })
})