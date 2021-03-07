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

    $("#update-salary").click(function (){
        var salary = $(this).parents('tbody').find("input[name='salary']").val();
        var goal = $(this).parents('tbody').find("input[name='goal']").val();
        var id = $(this).parents('tbody').find("input[name='id']").val();
        $.ajax({
            url: '/ajax/update-salary.php',
            type: 'POST',
            data: {salary: salary, goal: goal, id: id},
            success: function (){
                location.reload()
            }
        })
    })

    $("#update-archive").click(function(){
        $("#archive-form").toggle();
    })

    $("#archive-submit").click(function(){
        var form = $("#update-archive-form");
        var percent = $(form).find("input[name='percent']").val();
        var period = $(form).find("input[name='period']").val();
        var earning = $(form).find("input[name='earning']").val();
        var id = $(form).find("input[name='model-id']").val();
        var tableRow = "<tr><td>"+period+"</td><td>"+earning+"</td><td>"+percent+"</td></tr>"
        $(".archive-body").append(tableRow);
        var table = $("#arc-table").html();
        console.log(table);
        $.ajax({
            url: '/ajax/update-archive.php',
            type: 'POST',
            data: {table: table, id: id},
            success: function (){
                console.log('Добавлено');
            }
        })
    })
})