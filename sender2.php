<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$parent_section = $_POST['brandId'];
$brand = $_POST['brandName'];
$model = $_POST['modelName'];
$gos = $_POST['gosNumber'];
$user = $USER->GetID();
include_once "model.php";
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_before.php");

if(!empty($_POST['brandName'] && $_POST['modelName'] && $_POST['gosNumber'])){
   json_encode(file_get_contents("https://it-valet.ru/rest/1/9rdwqbwoy85dgv16/lists.element.add.json?IBLOCK_ID=93&IBLOCK_TYPE_ID=lists&ELEMENT_CODE=$parent_section&FIELDS[NAME]=$brand&FIELDS[PROPERTY_491]=3545&FIELDS[PROPERTY_492]=$gos&FIELDS[PROPERTY_526]=$user"));
}
//https://it-valet.ru/rest/1/9rdwqbwoy85dgv16/lists.element.add.json?IBLOCK_ID=93&IBLOCK_TYPE_ID=lists&ELEMENT_CODE=garages&FIELDS[NAME]=new_auto&FIELDS[PROPERTY_491]=3545&FIELDS[PROPERTY_492]=%D0%B0777%D0%B0%D0%B0777&FIELDS[PROPERTY_526]=1