<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/orderBasket.css">
<div class="app__window">
  <section class="addition">
    <!-- <button class="car__close close__order__popup"><img class="car__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/arrow-right.png"></button> -->
    <div class="addition__con">
      <div class="drag__element close__order__popup"></div>
      <form id="send-services" class="addition__bottom">
        <section class="amenities">
          <ul id="amenities__list" class="amenities__list">

          </ul>
          <buttnon class="amenities__add_btn">Добавить услугу</buttnon>
          <button class="amenities__button" id="amenities__button" type="button">
            <a href="#planning" class="order__popup__link">Запланировать</a>
          </button>
        </section>
        <section class="extensions">
          <ul class="extensions__list">
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" data-id="3554" id="service_3554">
              <label class="extensions__button extensions__park" for="service_3554" onclick="getDataServices({
                        'services':'Припарковать',
                        'id':'3554',
                        'money':'100',
                        'time':'1:00',
                        })">
              </label>
              <div class="extensions__name">Припарковать</div>
            </li>
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" data-id="3556" id="service_3556">
              <label type="button" class="extensions__button extensions__wash" for="service_3556" onclick="getDataServices({
                        'services':'Помыть',
                        'id':'3556',
                        'money':'100',
                        'time':'1:00',
                        })">
              </label>
              <div class="extensions__name">Помыть</div>
            </li>
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" data-id="3555" id="service_3555">
              <label type="button" class="extensions__button extensions__refuel" for="service_3555" onclick="getDataServices({
                        'services':'Заправить',
                        'id':'3555',
                        'money':'100',
                        'time':'1:00',
                        })">
              </label>
              <div class="extensions__name">Заправить</div>
            </li>
          </ul>
        </section>
        <div class="addition__result">
          <div class="result__block result__money">2500 ₽</div>
          <div class="result__block result__time">~ 1ч 25 мин</div>
        </div>
        <a href="#orderPage" id="changeLink" class="user__popup__lvl__2__link">
          <button type="submit" name="button" class="button__order ss_mar-b">Заказать</button>
        </a>
      </form>
    </div>
  </section>
</div>