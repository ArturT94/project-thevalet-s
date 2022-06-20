                <?php
                print_r($_GET);
                ?>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/car.css">
<div class="app__window garage-block">
    <div class="conteiner">
        <button class="car__close Close__user__popup__lvl__2"><img class="car__close-icon" src="<?=SITE_TEMPLATE_PATH?>/img/layout/arrow-right.png"></button>
        <div class="global__mobile__block">
            <div class="car__profile car__profile__mobile">
                <img class="car__img" src="<?=$img?>">
                <div class="car__name">Range Rover IV</div>
                <div class="car__model"><span id="number">а123вс77</span>
                    <a class="car__copy" id="car-copy">
                    <img class="copy__img" width="18" height="18" src="<?=SITE_TEMPLATE_PATH?>/img/layout/copy.png">
                    </a>
                </div>
            </div>
            <ul class="car__menu">
                <li class="car__option">
                     <div class="option__top">
                        <div class="option__name">Год выпуска</div>
                        <a class="option__link" href="#">Изменить</a>
                    </div>
                </li>
                <li class="car__option">
                    <div class="option__top">
                        <div class="option__name">Пробег</div>
                        <a class="option__link" href="#">Изменить</a>
                    </div>
                </li>
                <li class="car__option">
                    <div class="option__top">
                        <div class="option__name">ОСАГО</div>
                        <a class="option__link" href="https://wa.me/000">Продлить</a>
                    </div>
                    <div class="option__comm osago__comm">до 04.06.2021</div>
                </li>
                <li class="car__option">
                    <div class="option__top">
                        <div class="option__name">Шины</div>
                        <a class="option__link" href="https://wa.me/000">Заменить</a>
                    </div>
                    <div class="option__comm">Bridgestone Dueler 275/55/21 / летние / 30%</div>
                </li>
                <li class="car__option">
                    <div class="option__top">
                        <div class="option__name">VIN</div>
                        <a class="option__link option__copy" id="copy-vin">Скопировать</a>
                    </div>
                    <div class="option__comm" id="vin">SALGA2FF2FA202546</div>
                </li>
                <li class="car__option">
                        <div class="option__top">
                        <div class="option__name">Документы</div>
                        <a class="option__link" href="#">Посмотреть</a>
                    </div>
                </li>
                <li class="car__option">
                    <div class="option__top">
                        <div class="option__name">Запчасти</div>
                        <a class="option__link" href="https://wa.me/000">Купить</a>
                     </div>
                </li>
            </ul>
        </div>  
    </div>
</div>

