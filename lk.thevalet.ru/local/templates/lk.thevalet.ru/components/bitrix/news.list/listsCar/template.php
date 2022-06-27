<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/brand.css">
<div class="app__window garage-block">
    <div class="conteiner">
        <button class="car__close Close__user__popup__lvl__2"><img class="car__close-icon" src="<?=SITE_TEMPLATE_PATH?>/img/layout/arrow-right.png"></button>
        <div class="global__brand">
            <div class="global__brand1">
                <div class="choose__brand__block">
                    <div class="choose__brand">Выберите Марку</div>
                    <div class="choose__brand">1/3</div>
                </div>
                <div class="radio__block">
                    <div class="brand__block">
                <?php foreach($arResult['ITEMS'] as $arBrands):?>
                        <input type="radio" id="radio<?=$arBrands['ID']?>" name="brand" value="<?=$arBrands['NAME']?>">
                        <label for="radio<?=$arBrands['ID']?>"><?=$arBrands['NAME']?></label>
                <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="global__brand2">
                <div class="btn__block">
                    <a href="#" class="button">НАЗАД</a>
                    <a href="#model" class="button user__popup__lvl__2__link">ДАЛЕЕ</a>
                </div>
            </div>
        </div>
    </div>
</div>
