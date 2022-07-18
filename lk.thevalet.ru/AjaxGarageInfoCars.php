<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if ($_POST['param']) {
  $param = json_decode($_POST['param']);
  echo json_encode($param);
  //echo '<pre>' . print_r($_POST, true) . '</pre>';
}
