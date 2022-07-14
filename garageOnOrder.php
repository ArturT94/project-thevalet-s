<!--Весь фрейм автомобилей на экране совершения заказа-->
<section class="garage__on__order">
  <h2 class="no-margin chapter__title chapter__title__mobile">Гараж</h2>
  <!--Пагинация и навигация в слайдере-->
  <div class="nav_group nav_group-garage">
    <div class="swiper-button-prev sw-Btn-auto-Prev"></div>
    <div class="swiper-button-next sw-Btn-auto-Next"></div>
  </div>
  <!--Карточки автомобилей и кнопка добавления-->
  <div class="swiper garage">
    <div class="swiper-wrapper">
      <button class="swiper-slide auto">
        <a href="#" class="order__popup__link user__popup__lvl__2__link">
          <div class="number__message__item">
            <div class="number__message">
              <p>2</p>
            </div>
          </div>
          <div class="auto_img">
            <img draggable=false src="<?= SITE_TEMPLATE_PATH ?>/img/data/car1.png" alt="">
          </div>
          <div class="data__auto">
            <div class="data__model"> BMW X7</div>
            <div class="data__number"> У848УЕ777</div>
          </div>
        </a>
      </button>
      <button class="swiper-slide auto">
        <a href="#car" class="order__popup__link user__popup__lvl__2__link">
          <div class="number__message__item">
            <div class="number__message">
              <p>2</p>
            </div>
          </div>
          <div class="auto_img">
            <img draggable=false src="<?= SITE_TEMPLATE_PATH ?>/img/data/car2.png" alt="">
          </div>
          <div class="data__auto">
            <div class="data__model"> BMW X7</div>
            <div class="data__number"> У848УЕ777</div>
          </div>
        </a>
      </button>
      <button class="swiper-slide auto">
        <a href="#car" class="order__popup__link user__popup__lvl__2__link">
          <div class="number__message__item">
            <div class="number__message">
              <p>2</p>
            </div>
          </div>
          <div class="auto_img">
            <img draggable=false src="<?= SITE_TEMPLATE_PATH ?>/img/data/car1.png" alt="">
          </div>
          <div class="data__auto">
            <div class="data__model"> BMW X7</div>
            <div class="data__number"> У848УЕ777</div>
          </div>
        </a>
      </button>
      <a href="#car1" class="swiper-slide auto add__auto user__popup__lvl__2__link">
        <div class="number__message__item">
          <div class="number__message ">
            <p>2</p>
          </div>
        </div>
        <div class="auto_img spesh_con_plus">
          <img draggable=false src="<?= SITE_TEMPLATE_PATH ?>/img/data/add.svg" alt="">
        </div>
        <div class="data__auto">
          <div class="data__model"></div>
          <div class="data__number">Добавить авто</div>
        </div>
      </a>
    </div>
  </div>
</section>