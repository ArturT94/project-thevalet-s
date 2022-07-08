<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$parent_section = $_POST['brandId'];
$brand = $_POST['brandName'];
$model = $_POST['modelName'];
$gos = $_POST['gosNumber'];
$user = $USER->GetID();
$year = $_POST['year-of-manufacturing'];
$probeg = $_POST['mileage'];
$osago = $_POST['omi'];
$wheels = $_POST['tires'];
$vin = $_POST['vin'];
//echo '<pre>' . print_r($_POST, true) . '</pre>';
include_once "model.php";
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_before.php");

if(!empty($_POST['brandName'] && $_POST['modelName'] && $_POST['gosNumber'] && $_POST['year-of-manufacturing'] && $_POST['mileage'] && $_POST['omi'] && $_POST['tires'] && $_POST['vin'])){
    json_encode(file_get_contents("https://it-valet.ru/rest/1/9rdwqbwoy85dgv16/lists.element.add.json?IBLOCK_ID=93&IBLOCK_TYPE_ID=lists&ELEMENT_CODE=$parent_section&FIELDS[NAME]=$brand&FIELDS[PROPERTY_491]=3451&FIELDS[PROPERTY_492]=$gos&FIELDS[PROPERTY_526]=$user&FIELDS[PROPERTY_493]=$year&FIELDS[PROPERTY_494]=$probeg&FIELDS[PROPERTY_495]=$osago&FIELDS[PROPERTY_496]=$wheels&FIELDS[PROPERTY_497]=$vin"));
}
//https://it-valet.ru/rest/1/9rdwqbwoy85dgv16/lists.element.add.json?IBLOCK_ID=93&IBLOCK_TYPE_ID=lists&ELEMENT_CODE=garages&FIELDS[NAME]=new_auto&FIELDS[PROPERTY_491]=3545&FIELDS[PROPERTY_492]=%D0%B0777%D0%B0%D0%B0777&FIELDS[PROPERTY_526]=1