<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
//echo '<pre>' . print_r($_POST, true) . '</pre>';
if ($_POST) {
    $money = $_POST['money'];
    $time = $_POST['time'];
    $planedTime = $_POST['planedTime'];
    $services = $_POST['services'];

    $userId = CUser::GetID();
    $userGetParamsFromId = CUser::GetByID($userId);
    $arUser = $userGetParamsFromId->Fetch();

    foreach ($services as $key => $val) {
        if (filter_var(    $val, FILTER_VALIDATE_BOOLEAN)) {
            $result[] = $key;
        }
    }
        new WebHook('lists.element.add', [
            'IBLOCK_ID' => 82, 'IBLOCK_TYPE_ID' => 'lists', 'ELEMENT_CODE' =>
                'services',
            'FIELDS' => ['NAME' => 'Заявка от ' . $arUser['NAME'], 'PROPERTY_403' => $planedTime, 'PROPERTY_407' => $userId, 'PROPERTY_409' => $arUser['PERSONAL_PHONE'], 'PROPERTY_530' => [$result]]
        ]);
}
$results = json_encode($time);
echo $results;
?>