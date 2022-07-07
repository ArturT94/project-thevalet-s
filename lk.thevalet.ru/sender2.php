<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$parent_section = $_POST['brandId'];
$brand_name = $_POST['brandName'];
$model_name = $_POST['modelName'];
$gos_number = $_POST['gosNumber'];
include_once "model.php";
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_before.php");
