<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form", 
	"autorization", 
	array(
		"AUTH_FORGOT_PASSWORD_URL" => "",
		"AUTH_REGISTER_URL" => "",
		"AUTH_SUCCESS_URL" => "https://lk.thevalet.ru/newOrder.php",
		"COMPONENT_TEMPLATE" => "autorization"
	),
	false
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>