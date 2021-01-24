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
})