<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<footer>

  <script src="<?= SITE_TEMPLATE_PATH ?>/libs/jquery/jquery-3.6.0.min.js"></script>
  <!--JQuery-->
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/openServicePopUP.js"></script>
  <!--Отвечает за открытие PopUp-->
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/ajax.js"></script>
  <!--Передача AJAX запросов-->
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/js.js"></script>
  <!--Костыль для работы поп-апов-->
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/inputNumberForm.js"></script>
  <!-- Функционал маски ввода номера машины -->
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/auto_btn.js"></script>
  <!--Отвечает за активность кнопок в заказе-->
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/swiper-bundle.min.js"></script>
  <!--Библиотека SwiperJS-->
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/swiper.js"></script>
  <!--Настройка SwiperJS-->
  <script>
    // document.oncontextmenu = cmenu; function cmenu() { return false; }
  </script>
  <!--Запрещаем выпад контекстного меню в браузере-->
  <?php global $APPLICATION; ?>
  <?php $APPLICATION->AddHeadScript("/libs/jquery/jquery-3.6.0.min.js"); ?>
  <?php $APPLICATION->AddHeadScript("/js/ajax.js"); ?>
  <?php $APPLICATION->AddHeadScript("/js/js.js"); ?>
  <?php $APPLICATION->AddHeadScript("/js/script.js"); ?>
  <?php $APPLICATION->AddHeadScript("/js/openServicePopUP.js"); ?>
  <?php $APPLICATION->AddHeadScript("/js/auto_btn.js"); ?>
  <?php $APPLICATION->AddHeadScript("/js/swiper-bundle.min.js"); ?>
  <?php $APPLICATION->AddHeadScript("/js/swiper.js"); ?>
</footer>
</body>

</html>