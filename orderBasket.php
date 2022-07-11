<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/orderBasket.css">
<div class="app__window">
  <section class="addition">
    <button class="car__close close__order__popup"><img class="car__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/arrow-right.png"></button>
    <div class="addition__con">
      <section class="addition__bottom">
        <section class="amenities">
          <ul id="amenities__list" class="amenities__list"></ul>
          <button class="amenities__button" id="amenities__button" type="button">
            <a href="#planning" class="order__popup__link">Запланировать</a>
          </button>
        </section>
        <section class="extensions">
          <ul class="extensions__list">
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" id="service_149">
              <label class="extensions__button extensions__park" for="service_149" onclick="getData({
                        'services':'Припарковать',
                        'id':'149',
                        'money':'100',
                        'time':'1:00',
                        })">
              </label>
              <div class="extensions__name">Припарковать</div>
            </li>
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" id="service_151">
              <label type="button" class="extensions__button extensions__wash" for="service_151" onclick="getData({
                        'services':'Помыть',
                        'id':'151',
                        'money':'100',
                        'time':'1:00',
                        })">
              </label>
              <div class="extensions__name">Помыть</div>
            </li>
            <li class="extensions__item">
              <input type="checkbox" class="visually-hidden extensions__checkbox" id="service_150">
              <label type="button" class="extensions__button extensions__refuel" for="service_150" onclick="getData({
                        'services':'Заправить',
                        'id':'150',
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
        <a href="#systemPay" class="user__popup__lvl__2__link">
          <button type="button" class="button__order" style="margin-bottom: 30px">Заказать</button>
        </a>
      </section>
    </div>
  </section>
</div>