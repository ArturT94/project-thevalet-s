<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
<?php
if(!$USER->IsAuthorized()){
    header("Location: https://lk.thevalet.ru");
    die();
}
$userId = CUser::GetID();
$userGetParamsFromId = CUser::GetByID($userId);
$arUsers = $userGetParamsFromId->Fetch();
?>
<div class="app">
	<div class="order">
		<div class="drag__element">
		</div>
		 <!--Drag элемент для Order. Виден в Mobile-->
		<div class="conteiner">
			<div class="header__desktop">
				 <!--Обертка для показа на Desktop--> <!--Иконка бургера и Лого VLT-->
				<div class="app__header">
<?php //echo '<pre>' . print_r($arUsers, true) .  '</pre>'; ?>
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/menu/burger.php"
	)
);?> <a href="#" class="vlt"><img src="/lk.thevalet.ru/localevalet.ru/local/templates/lk.thevalet.ru/img/layout/mb__logo.png" alt=""></a>
				</div>
				 <!--Иконка бургера и Лого VLT-->
			</div>
			 <!--Фрейм поиска адреса--> <?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"searching",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "searching",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"PATH_TO_USER_PROFILE" => "",
		"RATING_TYPE" => "",
		"RESTART" => "N",
		"SHOW_RATING" => "",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "Y",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(),
		"arrWHERE" => array()
	)
);?> <!--Фрейм поиска адреса-->
			<div class="header__desktop">
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"garage", 
	array(
		"COMPONENT_TEMPLATE" => "garage",
		"IBLOCK_TYPE" => "lists",
		"IBLOCK_ID" => "93",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "CODE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "GOSNOMER",
			1 => "GOD_VYPUSKA",
			2 => "PROBEG",
			3 => "OSAGO",
			4 => "SHINY",
			5 => "VIN",
			6 => "ID_AVTO",
			7 => "ID_POLZOVATELYA",
			8 => "FOTO",
			9 => "",
		),
		"CHECK_DATES" => "N",
		"TEMPLATE_THEME" => "blue",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?> <!--Фрейм списка автомобилей-->
			</div>
            <div class="service">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"services", 
	array(
		"COMPONENT_TEMPLATE" => "services",
		"IBLOCK_TYPE" => "lists",
		"IBLOCK_ID" => "95",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "INFORMATSIYA_OB_USLUGE",
			1 => "FOTO",
			2 => "",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "services2", Array(
	"COMPONENT_TEMPLATE" => "services",
		"IBLOCK_TYPE" => "lists",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "95",	// Код информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "INFORMATSIYA_OB_USLUGE",
			1 => "FOTO",
			2 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "196",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>
   </div>
                <!--Фрейм списка услуг--> <section class="order-button"> <button type="button" class="button__order js-button-order" disabled=""><a href="#addition" class="order__popup__link">выберите услугу</a></button> <button type="button" class="button__order js-button-order button__hide js-button-next">далее</button> </section>
		</div>
	</div>
	 <?php include "map.php"; ?> <!--Google Карта-->
	<div class="header__mobile">
		 <!--Обертка для показа на Mobile-->
		<div class="conteiner">
			 <?php include "appHeader.php"; ?> <!--Иконка бургера и Лого VLT-->
		</div>
		 <?php include "garageOnOrder.php"; ?> <!--Фрейм списка автомобилей-->
	</div>
</div>
 <!--PopUp окна в заказе-->
<div class="order__popup" id="addition">
	<div class="order__popup__content">
		 <?php include "orderBasket.php"; ?> <!--Фрейм подтверждения заказа-->
	</div>
</div>
<div class="order__popup" id="orderPage">
	<div class="order__popup__content">
		 <?php include "orderPage.php"; ?> <!--Фрейм Водитель в пути-->
	</div>
</div>
<div class="order__popup" id="orderNPS">
	<div class="order__popup__content">
		 <?php include "orderNPS.php"; ?> <!--Фрейм Водитель в пути-->
	</div>
</div>
 <?php include "popup-service-info.php"; ?> <!--PopUp Фрейма описания услуг--> <!--PopUp окна меню-->
<div class="user__popup" id="user__popup">
	<div class="user__popup__content">
		 <?php include "menu.php"; ?> <!--Меню из Burger-->
	</div>
</div>
<div class="user__popup__lvl__2" id="garage">
	<div class="user__popup__lvl__2__content">
		 <?php include "garage.php"; ?> <!--Фрейм гаража клиента в бургере-->
	</div>
</div>
<div class="user__popup__lvl__2" id="systemPay">
	<div class="user__popup__lvl__2__content">
		 <?php include "systemPay.php"; ?> <!--Фрейм списка карт оплаты в бургере-->
	</div>
</div>
<div class="user__popup__lvl__2" id="add__pay__card">
	<div class="user__popup__lvl__2__content">
		 <?php include "add__pay__card.php"; ?> <!--Фрейм добавления платежной карты-->
	</div>
</div>
<div class="user__popup__lvl__2" id="history">
	<div class="user__popup__lvl__2__content">
		 <?php include "history.php"; ?> <!--Фрейм истории заказов-->
	</div>
</div>
<div class="user__popup__lvl__2" id="favorites">
	<div class="user__popup__lvl__2__content">
		 <?php include "favorites.php"; ?> <!--Фрейм избранное-->
	</div>
</div>
<div class="user__popup__lvl__2" id="personalaccount">
	<div class="user__popup__lvl__2__content">
		 <?php include "personalaccount.php"; ?> <!--Фрейм Посмотреть профиль-->
	</div>
</div>
<div class="user__popup__lvl__2" id="car">
	<div class="user__popup__lvl__2__content">
		 <?php include "car.php"; ?> <!--Фрейм Посмотреть автомобиль в гараже клиента в бургере-->
	</div>
</div>
<div class="user__popup__lvl__2" id="car1">
	<div class="user__popup__lvl__2__content">
		 <?php include "car1.php"; ?> <!--Фрейм Добавить автомобиль в гараже клиента в бургере-->
	</div>
</div>
<div class="user__popup__lvl__2" id="brand">
	<div class="user__popup__lvl__2__content">
		 <?php include "brand.php"; ?> <!--Фрейм Добавить Марку при добавлении авто в гараже клиента в бургере-->
	</div>
</div>
<div class="user__popup__lvl__2" id="model">
	<div class="user__popup__lvl__2__content">
		 <?php include "model.php"; ?> <!--Фрейм Добавить Модель при добавлении авто в гараже клиента в бургере-->
	</div>
</div>
<div class="user__popup__lvl__2" id="gosnumber">
	<div class="user__popup__lvl__2__content">
		 <?php include "gosnumber.php"; ?> <!--Фрейм Добавить Госномер при добавлении авто в гараже клиента в бургере-->
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>