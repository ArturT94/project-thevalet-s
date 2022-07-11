$(document).ready(function () {
    $(".js-verification-sign").keyup(function () {
        if (this.value.length == 1) {
            $(this).next(".js-verification-sign").focus();
        }
    });

    var seconds = $(".js-verification-countdown").text(),
        int;
    if (seconds.length > 0) {
        int = setInterval(function () {
            if (seconds > 0) {
                seconds--;
                $(".js-verification-countdown").text(seconds);
            } else {
                clearInterval(int);
                alert("Boom!");
            }
        }, 1000);
    }

    $(".js-menu-switcher").click(function () {
        $(".js-menu").addClass("menu__show");
    });

    $(".js-close").click(function () {
        $(".js-menu").removeClass("menu__show");
    });

    $("#js-garage-slider").owlCarousel({
        items: 2,
        loop: false,
        margin: 33,
        dots: false,
        nav: true,
        navText: [
            "<img class='slider__arrow1 slider__prev' src='img/layout/arrow-right.png'>",
            "<img class='slider__arrow slider__next' src='img/layout/arrow-right.png'>",
        ],
    });

    $("#js-service-slider").owlCarousel({
        items: 2,
        loop: false,
        margin: 13,
        dots: false,
        nav: true,
        navText: [
            "<img class='slider__arrow1 slider__prev' src='img/layout/arrow-right.png'>",
            "<img class='slider__arrow slider__next' src='img/layout/arrow-right.png'>",
        ],
    });

    $("#js-care-slider").owlCarousel({
        items: 2,
        loop: false,
        margin: 13,
        dots: false,
        nav: true,
        navText: [
            "<img class='slider__arrow1 slider__prev' src='img/layout/arrow-right.png'>",
            "<img class='slider__arrow slider__next' src='img/layout/arrow-right.png'>",
        ],
    });

    //    $('.slider__checkbox').on('click', function () {
    //        if ($(".slider__checkbox").is(":checked") && $(".slider__radio").is(":checked")) {
    //            $(".js-order-button").show()
    //        } else {
    //            $(".js-order-button").hide()
    //        }
    //    });

    // $(".js-garage-link").dblclick(function () {
    //   $(".js-car").addClass("car__show");
    // })
    $(".slider__checkbox").on("click", function () {
        if ($(".slider__checkbox").is(":checked")) {
            $(".js-button-order").hide();
            $(".js-button-next").show();
        } else {
            $(".js-button-order").show();
            $(".js-button-next").hide();
        }
    });
    var doubleClicked = false;
    $(".js-garage-link").on("click", function () {
        if (doubleClicked) {
            $(".js-car").addClass("car__show");
        }
        doubleClicked = true;
        setTimeout(() => {
            doubleClicked = false;
        }, 300);
    });

    $(".js-car-close").click(function () {
        $(".js-car").removeClass("car__show");
    });

    $(".js-garage-link2").click(function () {
        $(".js-car").addClass("car__show");
    });

    $(".js-garage-link3").click(function () {
        $(".js-car1").addClass("car__show");
    });
    $(".js-car-close").click(function () {
        $(".js-car1").removeClass("car__show");
    });

    $(".js-add").click(function () {
        $(".js-model").addClass("car__show");
    });
    $(".js-car-close").click(function () {
        $(".js-model").removeClass("car__show");
    });

    $(".js-link-model").click(function () {
        $(".js-model1").addClass("car__show");
    });
    $(".js-car-close").click(function () {
        $(".js-model1").removeClass("car__show");
    });
    $(".js-link-model2").click(function () {
        $(".js-model2").addClass("car__show");
    });
    $(".js-car-close").click(function () {
        $(".js-model2").removeClass("car__show");
    });
    $(".js-car-close").click(function () {
        $(".js-car").removeClass("car__show");
    });

    function copytext(el) {
        var $tmp = $("<textarea>");
        $("body").append($tmp);
        $tmp.val($(el).text()).select();
        document.execCommand("copy");
        $tmp.remove();
        $("#copied").show();
        setTimeout(function () {
            $("#copied").hide();
        }, 1500);
    }

    $("#copy-vin").click(function () {
        copytext("#vin");
    });
    $("#car-copy").click(function () {
        copytext("#number");
    });
    $(".js-garage-copy").click(function () {
        copytext($(this).siblings(".js-garage-number"));
    });
    $(".js-garage-caller").click(function (e) {
        $(".js-garage-mobile").addClass("garage-block__show");
    });

    $(".js-garage-close").click(function () {
        $(".js-garage-mobile").removeClass("garage-block__show");
    });

    $(".js-driver-chat").click(function () {
        $(".js-driver-soc").removeClass("driver__show");
        $(".js-driver-mess").addClass("driver__show");
    });

    $(".js-info-button").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(".js-popup").addClass("popup__show");
    });

    $(".js-popup-close").click(function () {
        $(".js-popup").removeClass("popup__show");
    });

    $(".menu__item").click(function () {
        $(".menu__item--active").removeClass("menu__item--active");
        $(this).addClass("menu__item--active");
    });
});

