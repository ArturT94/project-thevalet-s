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
<h2 class="chapter__title"><?= $arResult['ITEMS'][0]['NAME'] ?></h2>
<div class="nav_group">
  <!--Пагинация и навигация в слайдере-->
  <div class="swiper-button-prev sw-Btn-service-Prev"></div>
  <div class="swiper-button-next sw-Btn-service-Next"></div>
</div>
<?php //echo '<pre>' . print_r($arResult['ITEMS'], true) . '</pre>';
?>
<div class="swiper vltServise">
  <div class="swiper-wrapper">
    <?php foreach ($arResult["ITEMS"] as $arItems) : ?>
      <?php foreach ($arItems['ELEMENTS'] as $arItem) : ?>
        <button id="services" class="swiper-slide vlt_servise serv-button " onclick="getData({
                    'services':'<?= $arItem['NAME'] ?>',
                    'id':'<?= $arItem['ID'] ?>',
                    'money':'100',
                    'time':'1:00',
                    })">
          <a href="#popup__service" class="service__icon">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/layout/services-info.svg" width="26" height="26" alt="">
          </a>
          <a href="#" class="hearth__icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="28" height="28" viewBox="0 0 28 28" data-code="61578" data-tags="heart-o">
              <g fill="#eee" transform="scale(0.02734375 0.02734375)">
                <path d="M950.857 340.571c0-160.571-108.571-194.286-200-194.286-85.143 0-181.143 92-210.857 127.429-13.714 16.571-42.286 16.571-56 0-29.714-35.429-125.714-127.429-210.857-127.429-91.429 0-200 33.714-200 194.286 0 104.571 105.714 201.714 106.857 202.857l332 320 331.429-319.429c1.714-1.714 107.429-98.857 107.429-203.429zM1024 340.571c0 137.143-125.714 252-130.857 257.143l-356 342.857c-6.857 6.857-16 10.286-25.143 10.286s-18.286-3.429-25.143-10.286l-356.571-344c-4.571-4-130.286-118.857-130.286-256 0-167.429 102.286-267.429 273.143-267.429 100 0 193.714 78.857 238.857 123.429 45.143-44.571 138.857-123.429 238.857-123.429 170.857 0 273.143 100 273.143 267.429z" />
              </g>
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
<!--<script>-->
<!--    function getData(car) {-->
<!--        $.ajax({-->
<!--            url: '/sender.php',-->
<!--            method: 'post',-->
<!--            dataType: 'json',-->
<!--            data: "param="+JSON.stringify(car),-->
<!--            success: function(res) {-->
<!--                if (res) {-->
<!--                    $("#amenities__name").text(res.services);-->
<!--                    if($("#amenities__name").text() === 'Припарковать') {-->
<!--                        $('#park').trigger('click');-->
<!--                        $('#park_click').fadeIn(5000);-->
<!--                        false;-->
<!--                    }-->
<!--                    if($("#amenities__name").text() === 'Помыть') {-->
<!--                        $('#wash').trigger('click');-->
<!--                        $('#wash_click').fadeIn(5000);-->
<!--                        false;-->
<!--                    }-->
<!--                    if($("#amenities__name").text() === 'Заправить') {-->
<!--                        $('#refuel').trigger('click');-->
<!--                        $('#refuel_click').fadeIn(5000);-->
<!--                        false;-->
<!--                    }-->
<!--                    // Парсим json объект и записываем полученные данные в data-->
<!--                    // Например дана имеет такую структуру:-->
<!--                    // data = {-->
<!--                    // name: "Иван",-->
<!--                    // lastname: "Иванов"-->
<!--                    // }-->
<!--                    // тогда выбираем элемент, в который хотим поместить-->
<!--                    // значение data.name и data.lastname по классу либо по идентификатору-->
<!--                    // данные должны отобразиться-->
<!---->
<!--                } else {-->
<!--                    console.err('Произошла ошибка')-->
<!--                }-->
<!---->
<!--            }-->
<!--        });-->
<!--    }-->
<!--</script>-->