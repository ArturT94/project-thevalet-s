$(document).ready(function () {
    $('header .desktop .msg').mouseenter(function () {
        $this_nav = $(this)
        $this_dropdown = $('header .desktop .msg-links')
        a = $this_nav.offset().left
        b = $this_nav.outerWidth()
        c = $this_dropdown.outerWidth()

        $this_dropdown.fadeIn()

        x = a + ((b - c) / 2)

        $this_dropdown.css('display', 'flex')
        $this_dropdown.offset({left: x})
    })

    $('header .msg').mouseleave(function () {
        a = setTimeout(function () {
            $('.desktop .msg-links').fadeOut()
        }, 500)
        $('header .desktop .msg').one('mouseenter', function () {
            clearTimeout(a)
        })
        $('header .desktop .msg-links').one('mouseenter',function () {
            clearTimeout(a)
            $('header .desktop .msg-links').one('mouseleave', function () {
                $('.desktop .msg-links').fadeOut()
            })
        })
    })




    $('.burger, .mobile .links a').click(function () {
        $('body, .burger, .bg').toggleClass('active')
    })


    $('header .mobile .msg').click(function () {
        $this_nav = $(this).parent()
        $this_dropdown = $('header .mobile .msg-links')
        a = $this_nav.offset().left
        b = $this_nav.outerWidth()
        c = $this_dropdown.outerWidth()

        $this_dropdown.fadeIn()

        x1 = a + ((b - c) / 2)

        $this_dropdown.css('display', 'flex')
        $this_dropdown.offset({left: x1})
    })

    $('header').mouseenter(function () {
        $('.header-wrap').removeClass('hidden')
    })
    oldOffset = 0
    $(document).scroll(function () {
        $('.header-wrap').addClass('hidden')
        if ($('header').offset().top < 84 || oldOffset > $('header').offset().top) {
            $('.header-wrap').removeClass('hidden')
        }

        if ($('header').offset().top < $('.hero').outerHeight()) {
            $('.header-wrap').removeClass('tan')
        } else {
            $('.header-wrap').addClass('tan')
        }
        oldOffset = $('header').offset().top
    })
})

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
$(document).ready(function (){
    if ($('.hero').length != 0){
        setTimeout(function (){
            $('.animated').addClass('active')
        }, 300)
    }
})
$(document).ready(function (){
    const swiper2 = new Swiper(".inst-swiper", {
        slidesPerView: 1,
        spaceBetween: 30,

        navigation: {
            nextEl: ".nav-next",
            prevEl: ".nav-prev",
        },
        speed: 400,
        autoplay: {
            delay: 800,
          },

        breakpoints: {
            700: {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: false
            }
        },
    });
})
$(document).ready(function () {
    const swiper = new Swiper(".card-container", {
        slidesPerView: 1,
        spaceBetween: 20,

        pagination: {
            el: ".pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".nav-next",
            prevEl: ".nav-prev",
        },
        breakpoints: {
            700: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1300: {
                slidesPerView: 3,
                spaceBetween: 40,
                allowTouchMove: false,
            },
            1800: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // tex = '<div class="selector-dropdown"></div>'

    // $('.card-selector').click(function (e) {
    //     e.stopPropagation()
    //     $('.selector-dropdown').remove()
    //     $this_btn = $(this)
    //     $('body').append(tex)
    //     $dropdown = $('.selector-dropdown')
    //     $this_options = $this_btn.parent().find('.card-list__option')


    //     $this_options.each(function () {
    //         $dropdown.append('<p>' + $(this).text() + '</p>')
    //     })

    //     $(window).on('click',function() {
    //         $('.selector-dropdown').remove()
    //     });

    //     $('.main-slider .swiper-wrapper').on('touchstart',function() {
    //         $('.selector-dropdown').remove()
    //     });


        // btn_left = $this_btn.offset().left
        // btn_top = $this_btn.offset().top - $dropdown.outerHeight() + $this_btn.outerHeight()
        // b = $this_btn.outerWidth()
        // $dropdown.css('display', 'flex')
        // $dropdown.css('width', b)
        // $dropdown.offset({left: btn_left})
        // $dropdown.offset({top: btn_top})

    // })


})
$(document).ready(function (){
    function parallax(e) {
        let _w = window.innerWidth/2;
        let _h = window.innerHeight/2;
        let _mouseX = e.clientX;
        let _mouseY = e.clientY;
        let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
        let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
        let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
        let x = `${_depth3}, ${_depth2}, ${_depth1}`;
        console.log(x);
        elem.style.backgroundPosition = x;
    }

    $(document).mouse


})
var PRICES = {'паркинг': '10000₽ в день',
'заправка': '1250₽',
'автомойка': '1250₽',
'доставка авто': 'от 5000₽',
'ответственное хранение авто': '350₽ / сутки',
'личный помощник': '2500₽ / 30 минут',
'шиномонтаж и хранение': 'от 2500₽',
'детейлинг': 'от 2500₽',
'техническое обслуживание и ремонт': 'от 2500₽',
'эвакуация': 'от 6500₽',
'новый автомобиль': '0₽',
'автомобиль с пробегом': 'от 75000₽',
'запчасти, шины и аксессуары': '5%',
'регистрация и учет': '15000₽',
'страхование': 'от 2500₽',
'кредитование': 'от 2%',
'автоломбард': 'от 3%',
'выкуп': '90% от рыночной стоимости',
'техническое обслуживание': 'от 2500₽ / 30 минут',
'лизинг': 'от 0% удорожание',
'страхование': 'от 2500₽'};
$(document).ready(function () {
    $('.card-list__option').click(function () {
        // $this_btn = $(this)
        // $card = $this_btn.parent()
        // $checked = $card.find('input:checked')
        // if($checked.length == 0){
        //     return
        // }
        // option = $checked.next().text()
        option = $(this).text()
        $('#popup-1 [for-data="title"]').html(option);
        var processedOption = option.trim().toLowerCase();
        $('#popup-1 [for-data="price"]').html(PRICES.hasOwnProperty(processedOption) ? PRICES[processedOption] : '<SPAN title = "Цена не указана">-</SPAN>');             
        $('body').css('overflow', 'hidden')
        $('#popup-1').fadeIn()
    })

    $('#popup-1 .close').click(function () {
        $('body').css('overflow', 'auto')
        $('#popup-1').fadeOut()
        $('#error').remove()
    })
    $('.card-list__option1').click(function() { 
        var popup_id = $('#' + $(this).attr("rel"));
        $(popup_id).fadeIn();
        $('.popup2').fadeIn();
        $('body').css('overflow', 'hidden')
    })

    $('#popup-1 button').click(function (e) {
        e.preventDefault()
        $('#error').remove()
        if ($('.accept-wrap .checkbox').is(':checked')) {
            $.ajax({
                type: 'POST',
                url: '/sender.php', // сюда адрес api куда шлем
                data: {
                  phone: $('#popup-1 .text-input').val(),
                  service: $('#popup-1 h3').text()
                },
                success: function (data){
                    if (data === 'correct') {
                        $('#popup-1 .accept-wrap').after('<p id="error" style="color: #8F2426">Данные введены не корректно</p>')
                    } else {
                        $('#popup-1').hide();
                        $(".popup3").show();
                        // window.location.replace('success.php') //сюда url страницы успеха
                    }
                },
                error: function (){
                    alert('Что-то пошло не так')
                }
            })
        }
        else {
            $('#popup-1 .accept-wrap').after('<p id="error" style="color: #8F2426">Примите условия</p>')
        }
    })
    $('.popup2 button').click(function (e) {
        e.preventDefault()
        $('#error').remove()
            $.ajax({
                type: 'POST',
                url: '/sender.php', // сюда адрес api куда шлем
                data: {
                  offer: $('.popup2 .text-input').val(),
                  service: $('.popup2 #add-offer').val()
                },
                success: function (data){
                    if (data === 'correct') {
                        $('.popup2 .accept-wrap').after('<p id="error" style="color: #8F2426">Данные введены не корректно</p>')
                    } else {
                        $('.popup2').hide();
                        $('.popup3').show();
                        // window.location.replace('success.php') //сюда url страницы успеха
                    }
                },
                error: function (){
                    alert('Что-то пошло не так')
                }
            })
    })

})


$('.close').click(function() { // Обрабатываем клик по заднему фону
    $('.popup2').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
$('.close').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup3').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
$('.closeok').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup3').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
