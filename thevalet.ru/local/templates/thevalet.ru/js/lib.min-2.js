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


});
var PRICES = {'паркинг': '10000₽ в день',
'заправка': '1250₽',
'автомойка': '1250₽',
'доставка авто': 'от 5000₽',
'ответственное хранение авто': '500₽ / сутки',
'личный помощник': '2500₽ / 30 минут',
'шиномонтаж и хранение': 'от 2500₽',
'детейлинг': 'от 2500₽',
'техническое обслуживание и ремонт': 'от 2500₽',
'эвакуация': 'от 6500₽',
'купить новый автомобиль': '0₽',
'подбор автомобиля с пробегом': 'от 75000₽',
'запчасти, шины и аксессуары': '0₽',//'5%',
'регистрация и учет': '15000₽',
'страхование': '0₽',//'от 2500₽',
'кредитование': 'от 2%',
'автоломбард': 'от 3%',
'выкуп': '90% от рыночной стоимости',
'техническое обслуживание': 'от 2500₽ / 30 минут',
'лизинг': 'от 0% удорожание'}, FEEDBACKS = {'заправка': {'image': '/image/feedback/p_zolotuhin.jpg', 'text': 'Очень удобное решение! Пока был на встрече, мне заправили и помыли машину. Огромное спасибо за правильный сервис!', 'author': 'Валерий Золотухин, Maserati Levante, @zolotukhin_impact'},
'автомойка': {'image': '/image/feedback/ablyazin.png', 'text': 'Забрали машину, помыли и через полтора часа вернули чистую обратно. Пользуюсь теперь постоянно. Особенно удобно, когда возвращаешься домой. На утро машина всегда чистая!', 'author': 'Денис Аблязин, Lexus LX, @denis_abliazin'},
'доставка авто': {'image': '/image/feedback/alexandrov.png', 'text': 'Водитель доставил нашу машину в Сочи вместе с багажом. Мы летели налегке. Спасибо за новый опыт!', 'author': 'Вадим Александров, Mercedes Benz V, @mindsurfa'},
'ответственное хранение авто': {'image': '/image/feedback/drozdov.png', 'text': 'Спасибо за передержку) Особенно порадовали 500₽ за целые сутки в крытом паркинге против 380₽ в час в Центре. В следующий раз обязательно закажу подачу машины в аэропорт. Не знал, что так можно) Вы сделали очень полезный сервис. Молодцы!', 'author': 'Александр Дроздов, Toyota Rav4, @alexandr_training_life'},
'личный помощник': {'image': '/image/feedback/vetkovskaya.png', 'text': 'Забрали детей по нескольким адресам и отвезли на мероприятие, а затем развезли по домам. И так всю неделю. Спасибо сервису за помощь!', 'author': 'Анастасия Ветковская, Land Rover Discovery, @vetkovskaya.nastya'},
'шиномонтаж и хранение': {'image': '/image/feedback/zhivora.png', 'text': 'Водитель не только сделал шиномонтаж в день моего обращения, но и привез зимние шины из Чехова (!). Летние забрал на сезонное хранение. Сервис рекомендую!', 'author': 'Надежда Живора, BMW X3, @nadezhdazhivora'},
'детейлинг': {'image': '/image/feedback/alexei_drozdov.png', 'text': 'Покрыл машину керамикой пока был в отпуске. Сами забрали, все сделали и вернули. Безупречный сервис!', 'author': 'Алексей Дроздов, Porsche Boxter, @alesha_drozdovv'},
'техническое обслуживание и ремонт': {'image': '/image/feedback/makarov.png', 'text': 'Машину передал водителю прямо у входа в аэропорт. Её забрали на ТО и организовали хранение. По прилету вернули чистую, заправленную и обслуженную. Обращаюсь повторно. Всё всегда на высоте!', 'author': 'Евгений Макаров, Land Rover Velar, @garuda44'},
'эвакуация': {'image': '/image/feedback/mkrtchan.png', 'text': 'Профессиональная команда. Забрали ключи, вернули ключи. Минимальная коммуникация', 'author': 'Нил Мкртчян, Range Rover Sport, @nil.mkrtchyan'},
'купить новый автомобиль': {'image': '/image/feedback/primakov.png', 'text': 'Менеджер оперативно подобрал мне подходящую машину ИЗ НАЛИЧИЯ, помог определиться с комплектацией и опциями, а также САМ согласовал для меня выгодные условия', 'author': 'Павел Примаков, BMW X7, @ppg001'},
'подбор автомобиля с пробегом': {'image': '/image/feedback/ketraru.png', 'text': 'Заказала в сентябре услугу индивидуальный подбор. Машину мне нашли, проверили, согласовали условия и доставили из Санкт-Петербурга в Тольятти прямо к дому. Подали чистую, обслуженную и заправленную. Категорически рекомендую!', 'author': 'Светлана Кетрару, Mercedes Benz GLE Coupe, @svetlakontra'},
'продать автомобиль': {'image': '/image/feedback/mihailova.png', 'text': 'Если мне нужно продать машину, я обращаюсь только сюда. Сразу точно оценивают, никаких подводных камней. Все проверки на месте, никуда ехать не надо. Деньги сразу поступают на карту. Желаю сервису успехов и побольше клиентов!', 'author': 'Анна Михайлова @any.impact, Mercedes Benz C200 Coupe'},
'запчасти, шины и аксессуары': {'image': '/image/feedback/korshunov1.png', 'text': 'Оставил заявку на покупку редкой резины перед командировкой. Когда вернулся она уже ждала меня на удобной мне локации. Шиномонтаж тоже организовали. Спасибо за внимательное отношение', 'author': 'Валентин Коршунов, Jaguar F-pace, @valentin.korshunov'},
'регистрация и учет': {'image': '/image/feedback/poryadin.png', 'text': 'Обращался за помощью в регистрации новой машины, купленной на юр.лицо. Утром забрали из офиса, после обеда вернули зарегистрированную. Также пользуюсь детейлингом и страхованием. Всё организовано безупречно. Водители вежливые, цены вполне адекватные. Обязательно вернусь. Большое спасибо!', 'author': 'Порядин Алексей, BMW 5, @alexey.poriadin'},
'страхование': {'image': '/image/feedback/saakova.png', 'text': 'Практически с первых слов общения подкупает внимательность и вежливость менеджера. Он подобрал для меня оптимальный полис в надежной компании, прислал ссылку на оплату, а затем и сам полис на электронную почту. Спасибо за внимательное отношение к клиенту', 'author': 'Ирина Саакова, Mercedes Benz CLS, @saakova_i'}};
$(document).ready(function () {
   for(var key in FEEDBACKS)
     {if(FEEDBACKS.hasOwnProperty(key))
        {var img = new Image();
         img.src = FEEDBACKS[key].image;         
         debugger;         
        }        
     }
    $('.card-list__option').click(function () {
        // $this_btn = $(this)
        // $card = $this_btn.parent()
        // $checked = $card.find('input:checked')
        // if($checked.length == 0){
        //     return
        // }
        // option = $checked.next().text()
        option = $(this).html()
        $('#popup-1 [for-data="title"]').html(option);
        var processedOption = option.trim().toLowerCase();
        if(FEEDBACKS.hasOwnProperty(processedOption))
          {var feedbackData = FEEDBACKS[processedOption];
           $('#popup-1 [for-data="feedback-author-photo"]').show().attr('src', feedbackData.image);
           $('#popup-1 [for-data="feedback-text"]').html(['«', feedbackData.text, '»'].join(''));
           $('#popup-1 [for-data="feedback-author"]').show().html(feedbackData.author.replace(/@([a-z_\d\-.]+)/i, '<a href = "https://www.instagram.com/$1/" target = "_blank">$&</a>'));
          }
        else
          {$('#popup-1 [for-data="feedback-author-photo"]').hide();
           $('#popup-1 [for-data="feedback-text"]').html('Отзыв отсутствует');
           $('#popup-1 [for-data="feedback-author"]').hide();
          }
        $('#popup-1 [for-data="price"]').html(PRICES.hasOwnProperty(processedOption) ? PRICES[processedOption] : '<SPAN title = "Цена не указана">-</SPAN>');
        $('body').css('overflow', 'hidden');
        $('#popup-1').fadeIn();
    });

    $('.close').click(function () {
        $('body').css('overflow', 'auto')
        $('.popup').fadeOut()
        $('#error').remove()
    })
    $('.popup-overlay').click(function () {
        $('body').css('overflow', 'auto')
        $('.popup').fadeOut()
        $('#error').remove()
    })
    $('.card-list__option1').click(function() { 
        var popup_id = $('#' + $(this).attr("rel"));
        $(popup_id).fadeIn();
        $('.popup2').fadeIn();
        $('body').css('overflow', 'hidden')
    })

    $('.popup button').click(function (e) {
        e.preventDefault()
        $('#error').remove()
        if ($('.accept-wrap .checkbox').is(':checked')) {
            $.ajax({
                type: 'POST',
                url: '/sender.php', // сюда адрес api куда шлем
                data: {
                  phone: $('.popup .text-input').val(),
                  service: $('.popup h3').text()
                },
                success: function (data){
                    if (data === 'correct') {
                        $('.popup .accept-wrap').after('<p id="error" style="color: #8F2426">Данные введены не корректно</p>')
                    } else {
                        $('.popup').hide();
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
            $('.popup .accept-wrap').after('<p id="error" style="color: #8F2426">Примите условия</p>')
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
    $('body').css('overflow', 'auto')
    $('.popup2').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
$('.close').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup3').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})

$('.popup-overlay').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup3').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
$('.popup-overlay').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup2').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
$('.popup-overlay').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup2').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
$('.closeok').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup3').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})
$('.popup-overlay').click(function() { // Обрабатываем клик по заднему фону
    $('body').css('overflow', 'auto')
    $('.popup3').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
})