$(document).ready(function () {
    $(function () {
        $("select").selectric({
  disableOnMobile: false,
  nativeOnMobile: false
});
    });

    $('#dishes').on('selectric-select', function () {
        let selectedDish = $(this).val();
        console.log(selectedDish);
        if (selectedDish == 'all') {
            $('.dish').addClass('active');
        } else {
            $('.dish').removeClass('active');
            $('.section' + selectedDish).addClass('active');
        }
        return false

    });

    $('#sportpit').on('selectric-select', function () {
        let selectedDish = $(this).val();
        console.log(selectedDish);
        if (selectedDish == 'all') {
            $('.sportpit').addClass('active');
        } else {
            $('.sportpit').removeClass('active');
            $('.section' + selectedDish).addClass('active');
        }
        return false

    });

});



