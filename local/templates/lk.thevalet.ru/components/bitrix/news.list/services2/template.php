<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<h2 class="chapter__title"><?= $arResult['ITEMS'][1]['NAME'] ?></h2>
<div class="nav_group">
  <!--Пагинация и навигация в слайдере-->
  <div class="swiper-button-prev sw-Btn-service2-Prev"></div>
  <div class="swiper-button-next sw-Btn-service2-Next"></div>
</div>
<?php //echo '<pre>' . print_r($arResult['ITEMS'], true) . '</pre>';
?>
<div class="swiper vltServise2">
  <div class="swiper-wrapper spesh_height">

    <?php foreach ($arResult["ITEMS"] as $arItems) : ?>
      <?php foreach ($arItems['ELEMENTS'] as $arItem) : ?>
        <button class="swiper-slide vlt_servise serv-button-second">
          <a href="#popup__service" class="service__icon">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/layout/services-info.svg" width="26" height="26" alt="">
          </a>
          <a href="#" class="hearth__icon">
            <svg class="cls-1" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.74 37.44">
              <path d="M20,37.51l.21-.19C25.38,32,30.62,26.63,35.8,21.23a10.62,10.62,0,0,0,2.83-9.82,10.24,10.24,0,0,0-7.28-8.29A10.12,10.12,0,0,0,20.71,5.75a9.79,9.79,0,0,0-.71.82,9.45,9.45,0,0,0-.63-.79,10.12,10.12,0,0,0-9.12-3A10.15,10.15,0,0,0,1.78,10,10.67,10.67,0,0,0,4.29,21.31C9.38,26.65,14.57,31.9,19.71,37.19A3,3,0,0,1,20,37.51Z" transform="translate(-0.13 -1.58)" />
            </svg>
          </a>
          <?php $imgValServes = CFile::GetPath($arItem['PROPERTIES']['FOTO']['VALUE']); ?>
          <img class="vlt_servise_img" draggable=false src="<?= $imgValServes ?>" width="200px" height="150px" alt="">
          <p class="servise__name"><?= strtoupper($arItem['NAME']) ?></p>
        </button>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</div>