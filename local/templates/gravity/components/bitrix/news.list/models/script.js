$(document).ready(function () {
    $(".d").click(function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: 'ajax/deactivate.php',
            type: 'POST',
            data: {id: id},
            success: function () {
                location.reload();
            }
        })
    })

    $(".a").click(function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: 'ajax/activate.php',
            type: 'POST',
            data: {id: id},
            success: function () {
                location.reload();
            }
        })
    })

    $("#submit_model").click(function (){
        var data = $("#add_model").serialize();
        $.ajax({
            url: 'ajax/register.php',
            type: 'POST',
            data: data,
            success: function (res) {
                location.reload()
            }
        })
    })
})