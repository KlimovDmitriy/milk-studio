$(document).ready(function () {
    $(".filter li.dropdown > span").click(function () {
        $(this).parent().toggleClass("open");
        if ($(this).parent().hasClass('open')){
            $(this).parent().find('ul li.dropdown').removeClass('open')
            $(this).parent().find('ul li.dropdown > ul').hide()
        }

        $(this).next().slideToggle();
    });

    $(".filter ul.dropdown > span").click(function () {
        $(this).parent().toggleClass("open");

        $(this).next().slideToggle();
    });

    let url = window.location.pathname;
    if (url !== '/blog/'){
        $("a[href='"+url+"']").parents('li').addClass("open");
        $("a[href='"+url+"']").parents('ul').show();
        $("a[href='"+url+"']").addClass('active')
    }
})