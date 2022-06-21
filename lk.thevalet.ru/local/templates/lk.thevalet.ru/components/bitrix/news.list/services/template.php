<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!--Весь фрейм услуг на экране совершения заказа-->
    <!--Карточки услуг "VALET-СЕРВИС"-->
<h2 class="chapter__title"><?=$arResult['ITEMS'][0]['NAME']?></h2>
    <div class="nav_group"> <!--Пагинация и навигация в слайдере-->
        <div class="swiper-button-prev sw-Btn-service-Prev"></div>
        <div class="swiper-button-next sw-Btn-service-Next"></div>
    </div>
<?php //echo '<pre>' . print_r($arResult['ITEMS'], true) . '</pre>';?>
    <div class="swiper vltServise">
        <div class="swiper-wrapper">

            <?php foreach($arResult["ITEMS"] as $arItems): ?>
                <?php foreach($arItems['ELEMENTS'] as $arItem): ?>
            <button class="swiper-slide vlt_servise">
                <a href="#popup__service" class="service__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/layout/services-info.svg" width="26" height="26" alt="">
                </a>
                <?php $imgValServes = CFile::GetPath($arItem['PROPERTIES']['FOTO']['VALUE']); ?>
                <img class="vlt_servise_img" draggable=false src="<?=$imgValServes?>" width="200px" height="150px" alt="">
                <p class="servise__name"><?=strtoupper($arItem['NAME'])?></p>
            </button>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
