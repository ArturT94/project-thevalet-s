<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/gosnumber.css">
<div class="app__window garage-block">
  <div class="conteiner">
    <!--        <button class="car__close Close__user__popup__lvl__2"><img class="car__close-icon" src="--><? //=SITE_TEMPLATE_PATH
                                                                                                            ?>
    <!--/img/layout/arrow-right.png"></button>-->

    <div class="global__brand">
      <div class="global__brand1">
        <div class="choose__brand__block">
          <div class="choose__brand">Введите Госномер</div>
          <div class="choose__brand">3/3</div>
        </div>
        <div class="grey__block">
          <input type="text" data-number-input class="enter__gosnumber" name="gosnumber" placeholder="A000AA000" maxlength="9">
        </div>
      </div>
      <div class="global__brand2">
        <div class="btn__block">
          <a href="#model" class="button user__popup__lvl__2__link">НАЗАД</a>
          <a href="#car1" data-active-btn class="button user__popup__lvl__2__link get-gosnumber">ГОТОВО</a>
        </div>
      </div>
    </div>

  </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_before.php"); ?>