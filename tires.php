<div class="app__window garage-block">
  <div class="spesh__container">
    <div class="tires">

      <div class="tires__top tirest">
        <div class="tirest__title">
          Выберите размер и сезонность
        </div>
        <div class="tirest__step">
          3/3
        </div>
      </div>
      <div class="tires__main tiresm">
        <label class="tiresm__label">
          <div class="tiresm__text">
            Ширина
          </div>
          <input type="number" min="1" class="tiresm__input" name="tiresWidth" id="tiresWidth" placeholder="205">
        </label>
        <div class="tiresm__gap">
          /
        </div>
        <label class="tiresm__label">
          <div class="tiresm__text">
            Высота
          </div>
          <input type="number" min="1" class="tiresm__input" name="tiresHeight" id="tiresHeight" placeholder="55">
        </label>
      </div>

      <div class="tires__checkbox tiresc">
        <img class="car__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/data/sun.png">
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>
        <img class="car__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/data/winter.png">
      </div>

    </div>
  </div>
</div>