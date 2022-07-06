<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$parent_section = $_POST['brand'];
$model = $_POST['model'];
$gosNumber = $_POST['gosnumber'];
var_dump($gosNumber);
include_once "model.php";
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_before.php");
