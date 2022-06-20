<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Шиномонтаж и хранение");
?>
<div class="main-slider">
    <div class="wrapper">
        <div class="card-container swiper">
            <div class="swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="anchor" id="service"></div><img src="<?=SITE_TEMPLATE_PATH?>/image/car-1.png" alt="Valet-сервис">
                    <h3>Valet-сервис</h3>
                    <div class="card-text">
                        <p>Очевидные причины не заниматься рутиной</p>
                    </div>
                    <ul class="card-list">
                        <!-- <input class="mainSliderRadio" id="option1" type="radio" name="gr1">
                        <label class="card-list__option" for="option1">Паркинг</label> -->
                        <input class="mainSliderRadio" id="option2" type="radio" name="gr1">
                        <label class="card-list__option" for="option2">Заправить</label>
                        <input class="mainSliderRadio" id="option3" type="radio" name="gr1">
                        <label class="card-list__option" for="option3">Помыть</label>
                        <input class="mainSliderRadio" id="option4" type="radio" name="gr1">
                        <label class="card-list__option" for="option4">Доставить авто</label>
                        <input class="mainSliderRadio" id="option5" type="radio" name="gr1">
                        <label class="card-list__option" for="option5">Ответственное хранение авто</label>
                        <input class="mainSliderRadio" id="option6" type="radio" name="gr1">
                        <label class="card-list__option" for="option6">Личный помощник</label>
                    </ul>
                    <div class="card-price">
                        <p>От 1250₽</p>
                    </div>
                    <!-- <div class="card-selector">
                      <p>Выбрать</p>
                    </div> -->
                    <!-- <div class="card-selector">
                      <p>Выберите услугу</p>
                    </div> -->
                </div>
                <div class="card swiper-slide"><img src="<?=SITE_TEMPLATE_PATH?>/image/car-2.png" alt="Обслуживание и уход">
                    <h3>обслуживание и уход</h3>
                    <div class="card-text">
                        <p>Лучшая версия Вашего авто</p>
                    </div>
                    <ul class="card-list">
                        <input class="mainSliderRadio" id="option7" type="radio" name="gr2">
                        <label class="card-list__option" for="option7">Шиномонтаж и хранение</label>
                        <input class="mainSliderRadio" id="option8" type="radio" name="gr2">
                        <label class="card-list__option" for="option8">Детейлинг</label>
                        <input class="mainSliderRadio" id="option9" type="radio" name="gr2">
                        <label class="card-list__option" for="option9">Техническое обслуживание и ремонт</label>
                        <input class="mainSliderRadio" id="option10" type="radio" name="gr2">
                        <label class="card-list__option" for="option10">Эвакуация</label>
                    </ul>
                    <div class="card-price">
                        <p>От 2500₽</p>
                    </div>
                    <!-- <div class="card-selector">
                        <p>Выбрать</p>
                    </div> -->
                </div>
                <div class="card swiper-slide"><img src="<?=SITE_TEMPLATE_PATH?>/image/car-3.png" alt="Купить/продать">
                    <h3>Купить/продать</h3>
                    <div class="card-text">
                        <p>Удовольствие от шоппинга</p>
                    </div>
                    <ul class="card-list">
                        <input class="mainSliderRadio" id="option11" type="radio" name="gr3">
                        <label class="card-list__option" for="option11">Купить новый автомобиль</label>
                        <input class="mainSliderRadio" id="option12" type="radio" name="gr3">
                        <label class="card-list__option" for="option12">Подбор автомобиля с пробегом</label>
                        <input class="mainSliderRadio" id="option18" type="radio" name="gr3">
                        <label class="card-list__option" for="option18">Продать автомобиль</label>
                        <input class="mainSliderRadio" id="option13" type="radio" name="gr3">
                        <label class="card-list__option" for="option13">Запчасти, шины и аксессуары</label>
                        <input class="mainSliderRadio" id="option14" type="radio" name="gr3">
                        <label class="card-list__option" for="option14">Регистрация и учет</label>
                        <input class="mainSliderRadio" id="option15" type="radio" name="gr3">
                        <label class="card-list__option" for="option15">Страхование</label>
                        <input class="mainSliderRadio" id="option16" type="radio" name="gr3">
                        <label class="card-list__option" for="option16">Кредитование</label>
                        <input class="mainSliderRadio" id="option17" type="radio" name="gr3">
                        <label class="card-list__option" for="option17">Автоломбард</label>
                    </ul>
                    <div class="card-price">
                        <p>От 2500₽</p>
                    </div>
                    <!-- <div class="card-selector">
                      <p>Выбрать</p>
                    </div> -->
                </div>
                <div class="card swiper-slide"><img src="<?=SITE_TEMPLATE_PATH?>/image/car-5.jpg">
                    <h3>бизнес</h3>
                    <div class="card-text">
                        <p>Делегируя делегировать</p>
                    </div>
                    <ul class="card-list">
                        <input class="mainSliderRadio" id="option1" type="radio" name="gr4">
                        <label class="card-list__option" for="option1">  VALET-PARKING</label>
                        <input class="mainSliderRadio" id="option19" type="radio" name="gr4">
                        <label class="card-list__option" for="option19">Техническое обслуживание</label>
                        <input class="mainSliderRadio" id="option20" type="radio" name="gr4">
                        <label class="card-list__option" for="option20">Лизинг</label>
                    </ul>
                    <div class="card-price">
                        <p>От 2500₽</p>
                    </div>
                    <!-- <div class="card-selector">
                      <p>Выбрать</p>
                    </div> -->
                </div>
                <!-- <div class="card swiper-slide"><img src="<?=SITE_TEMPLATE_PATH?>/image/car-4.png" alt="Развлечения и отдых">
                  <h3>Развлечения и отдых</h3>
                  <div class="card-text">
                    <p>Открывая новые возможности</p>
                  </div>
                  <ul class="card-list">
                    <li class="card-list__option">Экспедиции</li>
                    <li class="card-list__option">Школа безаварийного вождения</li>
                  </ul>
                  <div class="card-selector">
                    <p>Выберите услугу</p>
                  </div>
                </div> -->
                <div class="card swiper-slide"><img src="<?=SITE_TEMPLATE_PATH?>/image/car-6.png" alt="Развлечения и отдых">
                    <h3>Добавить услугу</h3>
                    <div class="card-text">
                        <p>Игра по Вашим правилам</p>
                    </div>
                    <ul class="card-list">
                        <li class="card-list__option1">Добавьте собственную услугу в The Valet</li>
                    </ul>
                    <div class="card-price">
                        <p>От 4500₽</p>
                    </div>
                    <!-- <button class="button-card" type="submit" rel="popup1">
                      <p>Добавить услугу</p>
                    </button> -->
                </div>
            </div>
            <div class="navs">
                <div class="nav-prev"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.25 12H3.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </div>
                <div class="pagination"></div>
                <div class="nav-next"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.25 12H3.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </div>
            </div>
        </div>
    </div>
</div>
<div id = "popup-1" class = "popup">
    <div class = "popup-overlay"></div>
    <div class="wrap">
        <form class="layout">
            <h3 for-data = "title">Страхование</h3>
            <div class="accept-wrap flex-row">
                <div class="info flex-col">
                    <div class="accept-wrap-info">
                        <img for-data = "feedback-author-photo" class="photo" src="<?=SITE_TEMPLATE_PATH?>/image/p_zolotuhin.png" alt="">
                    </div>
                    <p for-data = "feedback-text">«Пару месяцев назад приобрёл новое авто, и решил порадовать себя и купить хорошие диски»</p>
                    <p for-data = "feedback-author">Золотухин Валерий,  @Impact</p>
                </div>
                <div class="info flex-col">
                    <h4 for-data = "price">от 4500₽</h4>
                    <input class="text-input"  type="tel" inputmode="numeric" id="phone" placeholder="ТЕЛЕФОН">
                    <button type="submit">ОТПРАВИТЬ</button>
                    <div class="flex-row check">
                        <div class="flex-row check">
                            <input class="checkbox" type="checkbox" id="accept">
                            <p>Я соглашаюсь с <a href="#">условиями обработки персональных данных</a> </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <input class="text-input" type="text" placeholder="ТЕЛЕФОН">
            <div class="accept-wrap flex-row">
            <div class="flex-row check">
              <input class="checkbox" type="checkbox" id="accept">
              <p>Я соглашаюсь с</p>
            </div>
            <a href="#">условиями обработки персональных данных</a>
            </div> -->
            <div class="close"><svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.707107" y1="1.09473" x2="19.9054" y2="20.293" stroke="black" stroke-linecap="round"/>
                    <line x1="1.42139" y1="20.1982" x2="20.6197" y2="0.999876" stroke="black" stroke-linecap="round"/>
                </svg>

            </div>
        </form>
    </div>
</div>
<div class = "popup2" id = "popup-2">
    <div class = "popup-overlay"></div>
    <div class="wrap">
        <form class="layout">
            <h3>Персональная услуга</h3>
            <div>
                <p>Пожалуйста, уточните, что мы можем для Вас сделать</p>
            </div>
            <input type="hidden" id="add-offer" value="Добавить услугу">
            <textarea class="text-input" name="comment" cols="40" rows="3" placeholder="Что для вас сделать?"> </textarea>
            <div class="accept-wrap flex-row">
                <div class="flex-row check"></div>
            </div>
            <button type="submit" detail-type = "personal-service">ОТПРАВИТЬ</button>
            <div class="close">
                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.707107" y1="1.09473" x2="19.9054" y2="20.293" stroke="black" stroke-linecap="round"/>
                    <line x1="1.42139" y1="20.1982" x2="20.6197" y2="0.999876" stroke="black" stroke-linecap="round"/>
                </svg>
            </div>
        </form>
    </div>
</div>

<div id = "popup-3" class = "popup3">
    <div class = "popup-overlay"></div>
    <div class="wrap">
        <form class="layout">
            <h3>готово!</h3>
            <div class="popup3-info">
                <p>Спасибо за Вашу заявку.</p>
                <p>Мы свяжемся с Вами в ближайшее время.</p>
            </div>
            <a href="#" class="closeok">Ок</a>
            <!-- <button class="closeok">Ок</button> -->
            <div class="close">
                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.707107" y1="1.09473" x2="19.9054" y2="20.293" stroke="black" stroke-linecap="round"/>
                    <line x1="1.42139" y1="20.1982" x2="20.6197" y2="0.999876" stroke="black" stroke-linecap="round"/>
                </svg>
            </div>
        </form>
    </div>
</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
$APPLICATION->SetTitle("Информация об оплате");
?>
