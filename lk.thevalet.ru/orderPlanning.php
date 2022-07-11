<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/orderPlanning.css">
<div class="app__window">
  <section class="addition">
    <button class="car__close close__order__popup"><img class="car__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/arrow-right.png"></button>
    <div class="conteiner">
      <section class="addition__bottom">
          <ul class="planing__list">
              <li class="planing__item">
                  <a href="#" onclick="orderPlaning('15 минут')">15 минут</a>
              </li>

              <li class="planing__item">
                  <a href="#" onclick="orderPlaning('30 минут')">30 минут</a>
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

              <button
                  class="amenities__button"
                  type="button"
                  onclick="orderPlaning(`${$('#datepicker').val()} ${$('.timepicker .top .h').text()}:${$('.timepicker .top .m').text()}`)">Запланировать</button>
          </div>
      </section>
    </div>
  </section>
</div>