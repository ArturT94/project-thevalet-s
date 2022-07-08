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
              <div class="picker">
                  <div class="picker-window"></div>
                  <div class="triangle"></div>
                  <ul class="picker-day">
                      <li>adder </li>
                      <li>Tue Jul <span>2</span></li>
                      <li>Wed Jul <span>3</span></li>
                      <li>Thu Jul <span>4</span></li>
                      <li>Fri Jul <span>5</span></li>
                      <li>Sat Jul <span>6</span></li>
                      <li>Sun Jul <span>7</span></li>
                      <li>Mon Jul <span>8</span></li>
                      <li>Tue Jul <span>9</span></li>
                      <li>Wed Jul 10</li>
                      <li>Thu Jul 11</li>
                      <li>Fri Jul 12</li>
                      <li>Sat Jul 13</li>
                      <li>Sun Jul 14</li>
                      <li>Mon Jul 15</li>
                      <li>Tue Jul 16</li>
                      <li>Wed Jul 17</li>
                      <li>Thu Jul 18</li>
                      <li>Fri Jul 19</li>
                      <li>Sat Jul 20</li>
                      <li>Sun Jul 21</li>
                      <li>Mon Jul 22</li>
                      <li>Tue Jul 23</li>
                      <li>Wed Jul 24</li>
                      <li>Thu Jul 25</li>
                      <li>Fri Jul 26</li>
                      <li>Sat Jul 27</li>
                      <li>Sun Jul 28</li>
                  </ul>
                  <ul class="picker-hour">
                      <li>1</li>
                      <li>2</li>
                      <li>3</li>
                      <li>4</li>
                      <li>5</li>
                      <li>6</li>
                      <li>7</li>
                      <li>8</li>
                      <li>9</li>
                      <li>10</li>
                      <li>11</li>
                      <li>12</li>
                  </ul>
                  <ul class="picker-minute">
                      <li>00</li>
                      <li>05</li>
                      <li>10</li>
                      <li>15</li>
                      <li>20</li>
                      <li>25</li>
                      <li>30</li>
                      <li>35</li>
                      <li>40</li>
                      <li>45</li>
                      <li>50</li>
                      <li>55</li>
                  </ul>
              </div>

              <div class='button-container'>
                  <button onclick="orderPlaning('scroll')">Pick a date</button>
              </div>
          </div>
      </section>
    </div>
  </section>
</div>