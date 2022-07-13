<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
//echo '<pre>' . print_r($_POST, true) . '</pre>';
if ($_POST) {
    new WebHook('lists.element.add', [
        'IBLOCK_ID' => 82, 'IBLOCK_TYPE_ID' => 'lists', 'ELEMENT_CODE' =>
            'test',
        'FIELDS' => ['NAME' => 'test', 'PROPERTY_407' => $USER->GetID()]
    ]);
}
$result = json_encode($_POST);
echo $_POST;