<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$iblockId = $_POST['iblockId'];
$IdCar = $_POST['IdCar'];

new WebHook('lists.element.delete', ['IBLOCK_ID' => $iblockId, 'IBLOCK_TYPE_ID' => 'lists', 'ELEMENT_ID' => $IdCar]);

echo json_encode($_POST);
?>