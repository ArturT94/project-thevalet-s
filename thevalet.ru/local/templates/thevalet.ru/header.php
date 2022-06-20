<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();

use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <meta name="yandex-verification" content="9c33e672c84aaee2" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php $APPLICATION->ShowTitle(); ?></title>
      <script src="<?=SITE_TEMPLATE_PATH?>/js/vex.combined.min.js"></script>
      <script>vex.defaultOptions.className = 'vex-theme-os'</script>
      <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/image/favicon-96x96.ico" type="image/x-icon">
      <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/vex.css" />
      <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/vex-theme-os.css" />
      <SCRIPT>
        window.SITE_TEMPLATE_PATH = '<?=SITE_TEMPLATE_PATH?>';
      </SCRIPT>
    <?php $APPLICATION->ShowHead(); ?>
      <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/image/favicon-96x96.ico" type="image/x-icon">
      <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/lib/nice-select.css">
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/lib/swiper-bundle.min.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.css?v=1.0">
      <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(87589016, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/87589016" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    </head>
  <body>
  <?php  $APPLICATION->ShowPanel(); ?>
    <header>
        <?php
        $_SERVER['REQUEST_URI'] == '/tyres/' ? $url = 'https://thevalet.ru/' : $url = '';
        ?>
      <div class="header-wrap">
          <div class="logo">
        <!-- <div class="mobile1"></div> -->
          <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              ".default",
              Array(
              "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
              "PATH" => "/include/logo_header.php",	// Путь к файлу области
          ),
              false
          );?>
          </div>
          <div class="mobile">
              <div class="burger">
                  <div class="line1"></div>
                  <div class="line2"></div>
                  <div class="line3"></div>
              </div>
              <div class="bg">
                  <div class="layout">
          <?$APPLICATION->IncludeComponent("bitrix:main.include", 	".default",
              Array(
              "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
              "PATH" => "/include/mobile_header.php",	// Путь к файлу области
          ),
              false
          );?>
                      <?$APPLICATION->IncludeComponent(
                          "bitrix:main.include",
                          ".default",
                          Array(
                          "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                          "AREA_FILE_SUFFIX" => "inc",
                          "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                          "PATH" => "/include/mobile_phone.php",	// Путь к файлу области
                      ),
                          false
                      );?>
                      <div class="socials">
                          <!--<div class="msg-links"><a href="whatsapp://send?phone=79854754162">WHAT'SAPP</a><a href="https://t.me/TheValet">TELEGRAM</a></div>-->
                          <?$APPLICATION->IncludeComponent(
                              "bitrix:main.include",
                              ".default",
                              Array(
                              "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                              "AREA_FILE_SUFFIX" => "inc",
                              "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                              "PATH" => "/include/mobile_whatsapp.php",	// Путь к файлу области
                          ),
                              false
                          );?>
                          <?$APPLICATION->IncludeComponent(
                              "bitrix:main.include",
                              ".default",
                              Array(
                              "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                              "AREA_FILE_SUFFIX" => "inc",
                              "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                              "PATH" => "/include/mobile_telegram.php",	// Путь к файлу области
                          ),
                              false
                          );?>
                      </div>
                      </div>
                  </div>
              </div>
          <div class="desktop">
              <div class="nav-links">
          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_header", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "header_thevalet",
		"COMPONENT_TEMPLATE" => "menu_header",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "2419200",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "header_thevalet",
		"USE_EXT" => "N"
	),
	false
);?>
                  <div class="socials">
                      <?$APPLICATION->IncludeComponent("bitrix:main.include", 	".default",
                          Array(
                          "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                          "AREA_FILE_SUFFIX" => "inc",
                          "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                          "PATH" => "/include/phone_header.php",	// Путь к файлу области
                      ),
                          false
                      );?>
                      <div class="icons">
                          <div class="whatsapp">
                          <?$APPLICATION->IncludeComponent("bitrix:main.include", 	".default",
                              Array(
                              "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                              "AREA_FILE_SUFFIX" => "inc",
                              "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                              "PATH" => "/include/desctop_whatsapp.php",	// Путь к файлу области
                          ),
                              false
                          );?>
                          </div>
                          <div class="telegram">
                      <?$APPLICATION->IncludeComponent("bitrix:main.include", 	".default",
                          Array(
                          "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                          "AREA_FILE_SUFFIX" => "inc",
                          "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                          "PATH" => "/include/desctop_telegram.php",	// Путь к файлу области
                      ),
                          false
                      );?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </header>