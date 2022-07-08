<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/car1.css">
<div class="app__window garage-block">
  <div class="conteiner">
    <div class="global__car__profile">
      <div class="global__car__profile1">
        <div class="car__profile">
          <img class="car__img1" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/add-photo.png">
          <div class="">
            <a href="#brand" class="js-add user__popup__lvl__2__link">Марка, модель,</br> Госномер</a>
          </div>
        </div>
        <ul class="car__menu">
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">Год выпуска</div>
              <a class="option__link" href="#" data-id = "year-of-manufacturing"><SPAN class = "for-view">Изменить</SPAN><SPAN class = "for-edit"><INPUT></INPUT></SPAN></a>
            </div>
              <div id="car_year" class="option__comm osago__comm"></div>
          </li>
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">Пробег</div>
              <a class="option__link" href="#" data-id = "mileage"><SPAN class = "for-view">Изменить</SPAN><SPAN class = "for-edit"><INPUT></INPUT></SPAN></a>
            </div>
          </li>
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">ОСАГО</div>
              <a class="option__link" href="#" data-id = "omi"><SPAN class = "for-view">Изменить</SPAN><SPAN class = "for-edit"><INPUT></INPUT></SPAN></a>
            </div>
          </li>
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">Шины</div>
              <a class="option__link" href="#" data-id = "tires"><SPAN class = "for-view">Изменить</SPAN><SPAN class = "for-edit"><INPUT></INPUT></SPAN></a>
            </div>
          </li>
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">VIN</div>
              <a class="option__link option__copy" id="copy-vin" data-id = "vin"><SPAN class = "for-view">Изменить</SPAN><SPAN class = "for-edit"><INPUT></INPUT></SPAN></a>
            </div>
          </li>
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">Документы</div>
              <a class="option__link" href="#">Добавить</a>
            </div>
          </li>
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">Фото</div>
              <a class="option__link" href="#">Добавить</a>
            </div>
          </li>
          <li class="car__option">
            <div class="option__top">
              <div class="option__name">Запчасти</div>
              <a class="option__link">Купить</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="global__car__profile2">
        <div class="btn__block">
          <a href="#gosnumber" class="button user__popup__lvl__2__link">НАЗАД</a>
          <a href="/" class="button user__popup__lvl__2__link">ГОТОВО</a>
        </div>
      </div>
    </div>
  </div>
</div>