<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/orderPlanning.css">
<div class="app__window">
  <section class="addition">
    <!--<button class="car__close close__order__popup"><img class="car__close-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/layout/arrow-right.png"> -->
    </button>
    <div class="addition__con">
      <div class="drag__element close__order__popup"></div>
      <section class="addition__bottom">
        <p class="planing__title">Запланировать</p>
        <ul class="planing__list">
          <li class="planing__item">
            <a href="#" onclick="orderPlaning(15)">15 минут</a>
          </li>

          <li class="planing__item">
            <a href="#" onclick="orderPlaning(30)">30 минут</a>
          </li>

          <li class="planing__item">
            <a href="#" onclick="planingInput()">Другое время</a>
          </li>
        </ul>

        <div class="planing__picker d-none">
          <div id="datepicker" class="calendar"></div>

          <div class="timepicker">
            <div class="top">
              <span class="h">10</span>:<span class="m">15</span>
            </div>
            <div class="circle">
            </div>
          </div>

          <div class="button__flex">
            <button class="planing__button" type="button" onclick="orderPlaning(`${$('#datepicker').val()} ${$('.timepicker .top .h').text()}:${$('.timepicker .top .m').text()}:00`)">
              Далее
            </button>
            <button class="profile__exit-link timepicker__default">Сбросить</button>
          </div>
        </div>
      </section>
    </div>
  </section>
</div>