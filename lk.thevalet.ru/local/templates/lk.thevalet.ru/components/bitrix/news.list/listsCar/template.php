<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/brand.css">
<div class="app__window garage-block">
  <div class="conteiner">
    <!--        <button class="car__close Close__user__popup__lvl__2"><img class="car__close-icon" src="--><? //=SITE_TEMPLATE_PATH
                                                                                                            ?>
    <!--/img/layout/arrow-right.png"></button>-->
    <div class="global__brand">
      <div class="global__brand1">
        <div class="choose__brand__block">
          <div class="choose__brand">Выберите Марку</div>
          <div class="choose__brand">1/3</div>
        </div>
        <?
        // echo '<pre>' . print_r($arResult, true) . '</pre>'; 
        ?>


        <div class="radio__block">
          <div class="brand__block">
            <?php foreach ($arResult['ITEMS'] as $arBrands) : ?>
              <?php //echo '<pre>' . print_r($arBrands, true) . '</pre>';
              ?>

              <label class="user__popup__lvl__2__input">
                <input type="radio" id="<?= $arBrands['ID'] ?>" name="brand" value="<?= $arBrands['NAME'] ?>">
                <a href="#model" class="user__popup__lvl__2__link pop-mod send-brand" onclick="window.brandId = <?= $arBrands['ID'] ?>; window.brandName = '<?= $arBrands['NAME'] ?>';goUploadAjax(window.brandId, window.brandName)"><?= $arBrands['NAME'] ?></a></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>