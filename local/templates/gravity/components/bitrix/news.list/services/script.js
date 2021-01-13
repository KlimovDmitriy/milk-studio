$(document).ready(function () {
    $(".tabs a").on("click", function () {
        var type = $(this).attr("data-type");
        if (type == "all") {
            $(".services_block").show();
        } else {
            $(".services_block").hide();
            $(".services_block[data-type='" + type + "']").show();
            $(".services_block[data-type='all']").show();
        }
    })

    $("#age").on("input", function () {
        $('#arrFilter_50_MAX').val($(this).val());
        $('#arrFilter_50_MAX').trigger('keyup');
        $('#arrFilter_51_MIN').val($(this).val());
        $('#arrFilter_51_MIN').trigger('keyup');
    })
})