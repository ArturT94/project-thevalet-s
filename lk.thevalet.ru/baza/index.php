<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
if ($USER->IsAuthorized()) {
  header("Location: http://83.166.242.242/newOrder.php");
  die();
}
$APPLICATION->SetTitle(""); ?><? $APPLICATION->IncludeComponent(
                                "bitrix:main.auth.form",
                                "autorization",
                                array(
                                  "COMPONENT_TEMPLATE" => "autorization",
                                  "AUTH_FORGOT_PASSWORD_URL" => "",  // Страница для восстановления пароля
                                  "AUTH_REGISTER_URL" => "",  // Страница для регистрации
                                  "AUTH_SUCCESS_URL" => "https://lk.thevalet.ru/newOrder.php",  // Страница после успешной авторизации
                                ),
                                false
                              ); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>