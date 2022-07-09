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
              <div class="datepicker">
                  <div class="datepicker-top">
                      <div class="btn-group">
                          <button class="tag">Today</button>
                          <button class="tag">Tomorrow</button>
                          <button class="tag">In 2 days</button>
                      </div>
                      <div class="month-selector">
                          <button class="arrow"><i class="material-icons"><</i></button>
                          <span class="month-name">December 2020</span>
                          <button class="arrow"><i class="material-icons">></i></button>
                      </div>
                  </div>
                  <div class="datepicker-calendar">
                      <span class="day">Mo</span>
                      <span class="day">Tu</span>
                      <span class="day">We</span>
                      <span class="day">Th</span>
                      <span class="day">Fr</span>
                      <span class="day">Sa</span>
                      <span class="day">Su</span>
                      <button class="date faded">30</button>
                      <button class="date">1</button>
                      <button class="date">2</button>
                      <button class="date">3</button>
                      <button class="date">4</button>
                      <button class="date">5</button>
                      <button class="date">6</button>
                      <button class="date">7</button>
                      <button class="date">8</button>
                      <button class="date current-day">9</button>
                      <button class="date">10</button>
                      <button class="date">11</button>
                      <button class="date">12</button>
                      <button class="date">13</button>
                      <button class="date">14</button>
                      <button class="date">15</button>
                      <button class="date">16</button>
                      <button class="date">17</button>
                      <button class="date">18</button>
                      <button class="date">19</button>
                      <button class="date">20</button>
                      <button class="date">21</button>
                      <button class="date">22</button>
                      <button class="date">23</button>
                      <button class="date">24</button>
                      <button class="date">25</button>
                      <button class="date">26</button>
                      <button class="date">27</button>
                      <button class="date">28</button>
                      <button class="date">29</button>
                      <button class="date">30</button>
                      <button class="date">31</button>
                      <button class="date faded">1</button>
                      <button class="date faded">2</button>
                      <button class="date faded">3</button>
                  </div>
              </div>
          </div>
      </section>
    </div>
  </section>
</div>