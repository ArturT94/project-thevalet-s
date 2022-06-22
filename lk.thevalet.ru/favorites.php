<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/favorites.css">
<div class="app__window garage-block">
    <div class="conteiner">
        <button class="car__close Close__user__popup__lvl__2"><img class="car__close-icon" src="<?=SITE_TEMPLATE_PATH?>/img/layout/arrow-right.png"></button>
        <div class="global__mobile__block">
            <div class="history__block favorites__block">ИЗБРАННОЕ</div>
                <div class="service">
                    <!--Карточки услуг "VALET-СЕРВИС"-->
                    <div class="services__block">УСЛУГИ</div>
                    <div class="nav_group"> <!--Пагинация и навигация в слайдере-->
                        <div class="swiper-button-prev sw-Btn-service-Prev"></div>              
                        <div class="swiper-button-next sw-Btn-service-Next"></div>
                    </div>
                    <div class="swiper vltServise">
                        <div class="swiper-wrapper">
                            <button class="swiper-slide vlt_servise">
                                <a href="#popup__service" class="service__icon">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/layout/services-info.svg" width="26" height="26" alt="">
                                </a>
                                <img class="vlt_servise_img" draggable=false src="<?=SITE_TEMPLATE_PATH?>/img/data/parking.png" width="100%" height="100%" alt="">
                                <p class="servise__name">ПРИПАРКОВАТЬ</p>
                            </button>
                            <button class="swiper-slide vlt_servise">
                                <a href="#popup__service" class="service__icon">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/layout/services-info.svg" width="26" height="26" alt="">
                                </a>
                                <img class="vlt_servise_img" draggable=false src="<?=SITE_TEMPLATE_PATH?>/img/data/wash.png" width="100%" height="100%" alt="">
                                <p class="servise__name">ЗАПРАВИТЬ</p>
                            </button>
                            <button class="swiper-slide vlt_servise ">
                                <a href="#popup__service" class="service__icon">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/layout/services-info.svg" width="26" height="26" alt="">
                                </a>
                                <img class="vlt_servise_img" draggable=false src="<?=SITE_TEMPLATE_PATH?>/img/data/parking.png" width="100%" height="100%" alt="">
                                <p class="servise__name">ПРИПАРКОВАТЬ</p>
                            </button>
                            <button class="swiper-slide vlt_servise">
                                <a href="#popup__service" class="service__icon">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/layout/services-info.svg" width="26" height="26" alt="">
                                </a>
                                <img class="vlt_servise_img" draggable=false src="<?=SITE_TEMPLATE_PATH?>/img/data/wash.png" width="100%" height="100%" alt="">
                                <p class="servise__name">ЗАПРАВИТЬ</p>
                            </button>
                        </div>
                    </div>
                </div>
<!--            <div class="elements__history">-->
<!--                <div class="services__block">ВОДИТЕЛИ</div>-->
<!--                <section class="driver__person favorites__driver__person">-->
<!--                    <img class="driver__img" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/data/driver.jpg">-->
<!--                    <div class="driver__name">-->
<!--                            Константин-->
<!--                    </div>-->
<!--                </section>-->
<!--            </div>-->
<!--            <div class="elements__history">-->
<!--                <div class="services__block">АДРЕСА</div> -->
<!--                <ul class="favorites__address__block">-->
<!--                    <li class="favorites__address">-->
<!--                        <div class="favorites__address__wrap">-->
<!--                            <a href="#" class="address__block">Пресненская наб., 6, стр. 2, Москва</a>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="favorites__address">-->
<!--                        <div class="favorites__address__wrap">-->
<!--                            <a href="#" class="address__block">Гоголевский б-р, 18, Москва</a>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="favorites__address">-->
<!--                        <div class="favorites__address__wrap">-->
<!--                            <a href="#" class="address__block">Верейская, 17, Москва</a>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
        </div> 
    </div>
</div> 