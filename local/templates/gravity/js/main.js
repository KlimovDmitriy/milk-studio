$(document).ready(function () {


    function closeMenu() {
        menu.classList.remove("active");
        document.body.style.overflow = "auto";
    }

    $(".tobottom").click(function () {
        $.scrollTo("#special", 500);
        return false;
    });
    $(".totop").click(function () {
        $.scrollTo(0, 1000);
        return false;
    });
    $(".see_menu").click(function () {
        $.scrollTo("#menu", 500);
        return false;
    });
    $(".tocontacts").click(function () {
        $.fancybox.close();
        $.scrollTo("#contacts", 500);
        return false;
    });
    // var slider = $(".special_slider").bxSlider({
    //     auto: false,
    //     pager: true,
    //     controls: true,
    //     prevSelector: ".slider_prev",
    //     nextSelector: ".slider_next",
    //     onSlideBefore: function ($slideElement, oldIndex, newIndex) {
    //         $(".curr").html(newIndex + 1);
    //         $(".count").html(slider.getSlideCount());
    //     },
    // });
    if ($(window).width() < 992) {
        $(".footer_form").insertAfter(".footer_menu_after");
        $(".header_right ul").append('<li class="close"></li>');
        $(".header_right ul .close").click(function () {
            $("body").removeClass("fixed");
            $(".header_right ul").fadeOut();
        });
        $(".filter_title").click(function () {
            $(this).next("ul").slideToggle();
        });
    }
    window.onresize = function () {
        setTimeout(function () {
            if ($(window).width() < 992) {
                $(".footer_form").insertAfter(".footer_menu_after");
            } else {
                $(".footer_form").insertAfter(".footer_logo");
            }
            if ($(window).width() < 767) {
                $(".filter li.dropdown > span").click(function () {
                    $(this).parent().toggleClass("open");
                    $(this).next().slideToggle();
                });
            } else {
                $(".filter li.dropdown > span").click(function () {
                    $(this).parent().add("open");
                });
            }
        }, 1000);
    };
    //   window.onresize = function(){
    // 	setTimeout(function() {
    // 	}, 1000);
    //   }
    if ($(window).width() < 767) {
        $(".price-page li.dropdown > span").click(function () {
            $(this).parent().toggleClass("open");
            $(this).next().slideToggle();
            $(this).find("img").toggleClass("arrows-animation");
        });
        $(".price-page ul.dropdown > span").click(function () {
            $(this).parent().toggleClass("open");

            $(this).next().slideToggle();
            $(this).find("img").toggleClass("arrows-animation");
        });
    }
    $(".burger").click(function () {
        $("body").toggleClass("fixed");
        $(".header_right ul").fadeToggle().scrollTop(0);
    });
    //   $(".filter ul.dropdown > span").click(function () {
    //     $(".filter li.dropdown.open > ul > li").toggleClass("active");
    //     // if ((hasClass = ".filter li.dropdown")) {
    //     //   $(".filter li.dropdown > ul > li").children.remove("active");
    //     // }
    //   });
    $(".appointment").fancybox({
        autoFocus: false,
        touch: false,
    });
    // $(function () {
    //     $("select").selectric();
    // });
    $(".menu_item").click(function () {
        $(this).addClass("active");
        return false;
    });
    $(".tabs a").click(function () {
        var index = $(this).attr("data-index") - 1;
        console.log(index);
        $(".tabs a").removeClass("active");
        $(this).addClass("active");
        $(".menu_items").removeClass("active");
        $(".menu_items:eq(" + index + ")").addClass("active");
        $(".menu_select").removeClass("active");
        $(".menu_select:eq(" + index + ")").addClass("active");
        $(".zone_item").removeClass("active");
        $(".zone_item:eq(" + index + ")").addClass("active");
        return false;
    });
    $(".politic_link").fancybox({
        baseClass: "politic_popup",
    });
    $(".tel_input").inputmask({
        mask: "+7 (999) 999-99-99",
        clearIncomplete: true,
    });
    $(".name_input").inputmask("a{1,*}");
    $(".main_form").submit(function (e) {
        var m_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "recall.php",
            data: m_data,
            success: function (result) {
                $(".contacts_form").css("display", "none");
                $(".form_success").fadeIn();
            },
        });
        return false;
    });
    // $(".slider_card").each(function () {
    //   $(this).css(
    //     "background-image",
    //     "url(" + $(this).children("img").attr("src") + ")"
    //   );
    // });
    // tabs
    if (document.querySelector(".info-header")) {
        let tab = document.getElementsByClassName("info-header-tab");
        tabs = document.querySelectorAll(".info-header-tab");
        tabcontent = document.getElementsByClassName("info-tabcontent");
        info = document.getElementsByClassName("info-header")[0];

        function hideTabContent(a) {
            for (let i = a; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("show");
                tabcontent[i].classList.add("hide");
            }
        }

        hideTabContent(1);

        function showTabContent(b) {
            if (tabcontent[b].classList.contains("hide")) {
                hideTabContent(0);
                tabcontent[b].classList.remove("hide");
                tabcontent[b].classList.add("show");
            }
        }

        info.addEventListener("click", (event) => {
            let target = event.target;
            for (let i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active");
            }
            target.classList.add("active");
            if (target.classList.contains("info-header-tab")) {
                for (let i = 0; i < tabcontent.length; i++) {
                    if (target == tab[i]) {
                        showTabContent(i);
                        break;
                    }
                }
            }
        });
    }
});
$(".info-header-tab--child").click(function () {
    setTimeout(function () {
        if ($(".info-tabcontent-last").hasClass("hide")) {
            $(".info-tabcontent-last").removeClass("hide");
        }
        $(".info-tabcontent-last").addClass("show");
    }, 700);
});

// var openPopupButtons = document.querySelectorAll(".popup_open");
// var openPopupButtons_2 = document.querySelectorAll(".popup_open_special");
// for (var i = 0; i < openPopupButtons.length; i++) {
//   openPopupButtons[i].addEventListener("click", openPopup);
// }
// for (var i = 0; i < openPopupButtons_2.length; i++) {
//   openPopupButtons_2[i].addEventListener("click", openPopup2);
// }
// var popup = document.querySelector("#popup");
// var popup2 = document.querySelector("#popup2");
// var popupOverlay = document.querySelector("#popup_overlay");
// var buttonClosePopup = document.querySelector("#button_close");
// var popupOverlay2 = document.querySelector("#popup_overlay2");
// var buttonClosePopup2 = document.querySelector("#button_close2");
// buttonClosePopup.addEventListener("click", closePopup);
// buttonClosePopup2.addEventListener("click", closePopup2);
// function openPopup() {
//   popup.classList.add("active");
//   popupOverlay.classList.add("active");
//   document.body.style.overflow = "hidden";
// }
//
// function closePopup() {
//   popup.classList.remove("active");
//   popupOverlay.classList.remove("active");
//   document.body.style.overflow = "auto";
// }
//
// function openPopup2() {
//   popup2.classList.add("active");
//   popupOverlay2.classList.add("active");
//   document.body.style.overflow = "hidden";
// }
//
// function closePopup2() {
//   popup2.classList.remove("active");
//   popupOverlay2.classList.remove("active");
//   document.body.style.overflow = "auto";
// }
// var successPopupButtonClose = $("#success_button_close");
// successPopupButtonClose.on("click", function () {
//   document.getElementById("popup_success").classList.remove("active");
//   document.body.style.overflow = "auto";
// });
/* ------------------------------------------------- */

$(document).ready(function () {
    var headerTypes = document.querySelectorAll(".header .types_item");
    var headerCircles = document.querySelectorAll(".header_circle");
    for (var i = 0; i < headerTypes.length; i++) {
        headerTypes[i].addEventListener("click", changeType);
        headerCircles[i].addEventListener("click", changeType);
    }

    function changeType(e) {
        var currentActiveType = document.querySelector(
            ".header .types_item.active"
        );
        var currentActiveSubtitle = document.querySelector(
            ".header_subtitle.active"
        );
        var currentActiveCircle = document.querySelector(".header_circle.active");
        currentActiveType.classList.remove("active");
        currentActiveSubtitle.classList.remove("active");
        currentActiveCircle.classList.remove("active");
        var clickedItemNumber = e.target.classList[1];
        var activeNowType = document.querySelector(
            ".header .types_item." + clickedItemNumber
        );
        var activeNowSubtitle = document.querySelector(
            ".header_subtitle." + clickedItemNumber
        );
        var activeNowCircle = document.querySelector(
            ".header_circle." + clickedItemNumber
        );
        activeNowType.classList.add("active");
        activeNowSubtitle.classList.add("active");
        activeNowCircle.classList.add("active");
    }
});
// var successPopupButtonClose = $("#success_button_close");
// successPopupButtonClose.on("click", function () {
//   document.getElementById("popup_success").classList.remove("active");
//   document.body.style.overflow = "auto";
// });
// $(document).ready(function () {
//   $("#s3_slider").slick({
//     arrows: true,
//     nextArrow: document.querySelector("#s3_button_prev"),
//     prevArrow: document.querySelector("#s3_button_next"),
//   });
// });
// var questionsTriggers = document.querySelectorAll(".question_trigger");
// for (var i = 0; i < questionsTriggers.length; i++) {
//   questionsTriggers[i].addEventListener("click", showQuestion);
// }
//
// function showQuestion(e) {
//   var activeNow = document.querySelector(".question_trigger.active");
//   activeNow.classList.remove("active");
//   e.target.classList.add("active");
// }
// $(document).ready(function () {
//   var btnSubmitFooter = document.getElementById("btn_submit_footer");
//   var popupBtnSubmit = document.getElementById("btn_submit_popup");
//   $(".js_checkbox_footer").on("change", function () {
//     if (!$(".js_checkbox_footer").is(":checked")) {
//       $("#btn_submit_footer").attr("disabled", true);
//     } else {
//       $("#btn_submit_footer").attr("disabled", false);
//     }
//   });
//   $(".js_checkbox_popup").on("change", function () {
//     if ($(".js_checkbox_popup").is(":checked")) {
//       $("#btn_submit_popup").attr("disabled", false);
//     } else {
//       $("#btn_submit_popup").attr("disabled", true);
//     }
//   });
//   popupBtnSubmit.addEventListener("click", function (e) {
//     e.preventDefault();
//     var name = $("#name_popup").val();
//     var phone = $("#phone_popup").val();
//     $.ajax({
//       url: "../form_popup.php",
//       type: "post",
//       data: {
//         name: name,
//         phone: phone,
//       },
//       error: function () {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         $("#popup_success_title").html("Ой!");
//         $("#note").html("Произошла ошибка!");
//         document.body.style.overflow = "hidden";
//       },
//       beforeSend: function () {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         $("#note").html("Отправляем данные...");
//         document.body.style.overflow = "hidden";
//       },
//       success: function (result) {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         document.body.style.overflow = "hidden";
//         $("#note").html(result);
//         $("#name").val("");
//         $("#phone").val("");
//       },
//     });
//   });
// });
// popupBtnSubmit.addEventListener("click", function (e) {
//   e.preventDefault();
//   var name = $("#name_popup").val();
//   var phone = $("#phone_popup").val();
//   $.ajax({
//     url: "../form_popup.php",
//     type: "post",
//     data: {
//       name: name,
//       phone: phone,
//     },
//     error: function () {
//       document.getElementById("popup").classList.remove("active");
//       document.getElementById("popup_success").classList.add("active");
//       $("#popup_success_title").html("Ой!");
//       $("#note").html("Произошла ошибка!");
//       document.body.style.overflow = "hidden";
//     },
//     beforeSend: function () {
//       document.getElementById("popup").classList.remove("active");
//       document.getElementById("popup_success").classList.add("active");
//       $("#note").html("Отправляем данные...");
//       document.body.style.overflow = "hidden";
//     },
//     success: function (result) {
//       document.getElementById("popup").classList.remove("active");
//       document.getElementById("popup_success").classList.add("active");
//       document.body.style.overflow = "hidden";
//       $("#note").html(result);
//       $("#name").val("");
//       $("#phone").val("");
//     },
//   });
//   popupBtnSubmit.addEventListener("click", function (e) {
//     e.preventDefault();
//     var name = $("#name_popup").val();
//     var phone = $("#phone_popup").val();
//     $.ajax({
//       url: "../form_popup.php",
//       type: "post",
//       data: {
//         name: name,
//         phone: phone,
//       },
//       error: function () {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         $("#popup_success_title").html("Ой!");
//         $("#note").html("Произошла ошибка!");
//         document.body.style.overflow = "hidden";
//       },
//       beforeSend: function () {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         $("#note").html("Отправляем данные...");
//         document.body.style.overflow = "hidden";
//       },
//       success: function (result) {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         document.body.style.overflow = "hidden";
//         $("#note").html(result);
//         $("#name").val("");
//         $("#phone").val("");
//       },
//     });
//   });
//   popupBtnSubmit.addEventListener("click", function (e) {
//     e.preventDefault();
//     var name = $("#name_popup").val();
//     var phone = $("#phone_popup").val();
//     $.ajax({
//       url: "../forms/form_popup.php",
//       type: "post",
//       data: {
//         name: name,
//         phone: phone,
//       },
//       error: function () {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         $("#popup_success_title").html("Ой!");
//         $("#note").html("Произошла ошибка!");
//         document.body.style.overflow = "hidden";
//       },
//       beforeSend: function () {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         $("#note").html("Отправляем данные...");
//         document.body.style.overflow = "hidden";
//       },
//       success: function (result) {
//         document.getElementById("popup").classList.remove("active");
//         document.getElementById("popup_success").classList.add("active");
//         document.body.style.overflow = "hidden";
//         $("#note").html(result);
//         $("#name").val("");
//         $("#phone").val("");
//       },
//     });
//   });
// });
$(document).ready(function () {

    $('.simple-ajax-popup').magnificPopup({
        type: 'ajax',
        overflowY: 'scroll'
    });

});
$(document).ready(function () {
    $("#s5_slider").slick({
        arrows: true,
        dots: true,
        nextArrow: document.querySelector("#s5_button_prev"),
        prevArrow: document.querySelector("#s5_button_next"),
    });
});
$(document).ready(function () {
    $("#s6_slider").slick({
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick",
            },
            {
                breakpoint: 700,
                settings: {
                    arrows: true,
                    nextArrow: document.querySelector("#s6_button_prev"),
                    prevArrow: document.querySelector("#s6_button_next"),
                },
            },
        ],
    });
});
$(document).ready(function () {
    $('form select').on('change', function () { // fires when the value changes
        $(this).valid(); // trigger validation on hidden select
    });
})