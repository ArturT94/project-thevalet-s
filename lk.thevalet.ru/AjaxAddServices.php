<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if ($_POST['services']) {
  $service = json_decode($_POST['services']);
  echo json_encode($service);
  //echo '<pre>' . print_r($service, true) . '</pre>';
}
