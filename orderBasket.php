<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/orderBasket.css">
<div class="app__window">
  <section class="addition">
    <button class="car__close close__order__popup"><img class="car__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/arrow-right.png"></button>
    <div class="conteiner">
      <section class="addition__bottom">
        <section class="amenities">
          <ul class="amenities__list">
            <li class="amenities__item">
              <div class="amenities__wrapper">
                <div id="amenities__name" class="amenities__name"></div>
              </div>
            </li>
            <!--                        <li class="amenities__item">-->
            <!--                            <div class="amenities__wrapper">-->
            <!--                                <div class="amenities__name amenities__add">Добавить услугу</div>-->
            <!--                                <button class="amenities__trigger"><img class="amenities__icon" src="--><? //=SITE_TEMPLATE_PATH
                                                                                                                        ?>
            <!--/img/layout/plus.svg" width="17"></button>-->
            <!--                            </div>-->
            <!--                        </li>-->
          </ul>
          <button class="amenities__button" type="button">
            Запланировать
          </button>
        </section>
        <section class="extensions">
          <ul class="extensions__list">
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" id="park">
              <label class="extensions__button extensions__park" for="park">
              </label>
              <div class="extensions__name">Припарковать</div>
            </li>
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" id="wash">
              <label type="button" class="extensions__button extensions__wash" for="wash">
              </label>
              <div class="extensions__name">Помыть</div>
            </li>
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" id="refuel">
              <label type="button" class="extensions__button extensions__refuel" for="refuel">
              </label>
              <div class="extensions__name">Заправить</div>
            </li>
          </ul>
        </section>
        <div class="addition__result">
          <div class="result__block result__money">2500 ₽</div>
          <div class="result__block result__time">~ 1ч 25 мин</div>
        </div>


        <a href="#orderPage" class="user__popup__lvl__2__link">
          <!-- убрана ссылка на оплату картой*! -->
          <button type="button" class="button__order">Заказать</button>
        </a>

      </section>
    </div>
  </section>

</div>