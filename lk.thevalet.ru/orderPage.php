<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/orderPage.css">
<div class="app__window garage-block">
  <div class="conteiner">
    <button class="car__close close__order__popup"><img class="car__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/arrow-right.png"></button>
    <div class="global__driver__block">
      <div class="global__driver__block1">
        <section class="driver__status">
          в пути
        </section>
        <div class="driver__wrapper">
          <div class="driver__inner">
            <section class="driver__person">
              <img class="driver__img" src="<?= SITE_TEMPLATE_PATH ?>/img/data/driver.jpg">
              <div class="driver__name">
                Константин
              </div>
              <div class="driver__rating">
                <img class="driver__star" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/star-small.png">
                <span>&nbsp;5,00</span>
              </div>
            </section>
            <section class="driver__car">
              <img class="driver__carpic" src="<?= SITE_TEMPLATE_PATH ?>/img/data/car-big.png">
              <div class="driver__number">а123вс77</div>
              <div class="driver__model">Range Rover</div>
            </section>
          </div>
          <div class="driver__buttons driver__show js-driver-soc">
            <a class="amenities__button driver__first" href="tel:+71234567890">Позвонить</a>
            <a class="amenities__button js-driver-chat">Чат</a>
          </div>
        </div>
      </div>
      <div class="global__driver__block2">
        <section class="order-button">
          <button type="button" class="button__order">Отменить заказ</button>
        </section>
      </div>
    </div>
  </div>
</div>