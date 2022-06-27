<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/garage.css">

<div class="app__window garage-block">
    <div class="coneiner">
        <button class="car__close Close__user__popup__lvl__2"><img class="car__close-icon" src="<?=SITE_TEMPLATE_PATH?>/img/layout/arrow-right.png"></button>
        <ul class="garage-mobile__list" >
            <?php foreach($arResult['NEW_SECTION'] as $arItem): ?>
<!--            --><?php //echo '<pre>' . print_r($arResult, true) . '</pre>'; ?>
            <?php $carImgs = CFile::GetPath($arItem['PROPERTY_FOTO_VALUE']) ?>
            <li class="garage-mobile__item" onclick="getData({
                    'img':'<?=$carImgs?>',
                    'name':'<?=$arItem['NAME']?>',
                    'gosNumber':'<?=$arItem['PROPERTY_GOSNOMER_VALUE']?>',
                    'year':'<?=$arItem['PROPERTY_GOD_VYPUSKA_VALUE']?>',
                    'probeg':'<?=$arItem['PROPERTY_PROBEG_VALUE']?>',
                    'osago':'<?=$arItem['PROPERTY_OSAGO_VALUE']?>',
                    'wheels':'<?=$arItem['PROPERTY_SHINY_VALUE']?>',
                    'vin':'<?=$arItem['PROPERTY_VIN_VALUE']?>',
                    })">
                <div class="car__profile">
                    <a href="#car" class="garage__link user__popup__lvl__2__link">
                        <div class="number__message__item2">
                            <div class="number__message2"><p>2</p></div>
                        </div>
                        <img style="width: 40%;" class="" src="<?=$carImgs?>">
                    </a>
                    <div class=""><?=$arItem['NAME']?></div>
                    <div class=""><span class="js-garage-number"><?=$arItem['PROPERTY_GOSNOMER_VALUE']?></span><a class="car__copy js-garage-copy"><img class="copy__img" width="18" height="18" src="<?=SITE_TEMPLATE_PATH?>/img/layout/copy.png"></a></div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="garage__add">
            <a href="#car1" class="button__garage__block user__popup__lvl__2__link">
                <button type="button" class="button__garage"><img src="<?=SITE_TEMPLATE_PATH?>/img/layout/plus.svg" width="20" height="20"></button>
                <div class="add__text">Добавить</div>
            </a>
        </div>
    </div>
</div>

