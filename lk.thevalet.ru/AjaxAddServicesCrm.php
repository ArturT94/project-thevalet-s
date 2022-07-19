<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if ($_POST) {
  $money = $_POST['money'];
  $time = $_POST['time'];
  $planedTime = $_POST['planedTime'];
  $services = $_POST['services'];
  $externalId = $_POST['getExternalCar'];
  $marka = $_POST['markaMenu'];
  $model = $_POST['modelMenu'];

  $userId = CUser::GetID();
  $userGetParamsFromId = CUser::GetByID($userId);
  $arUser = $userGetParamsFromId->Fetch();

  foreach ($services as $key => $val) {
    if (filter_var($val, FILTER_VALIDATE_BOOLEAN)) {
      $result[] = $key;
    }
  }
    new WebHook('crm.deal.add', [
        'FIELDS' => ['TITLE' => 'Заявка от ' . $arUser['NAME'] . ' c lk.thevalet.ru', 'CATEGORY_ID' => 5, 'CLIENT' => $userId, 'UF_CRM_1657793873362' => $planedTime, 'PROPERTY_407' => $userId, 'PROPERTY_409' => $arUser['PERSONAL_PHONE'], 'UF_CRM_1657710634' => $result, 'PROPERTY_405' => $externalId, 'PROPERTY_408' => $userId, 'PROPERTY_532' => date("F j, Y, H:i:s"), 'OPPORTUNITY' => (int)$money, 'UF_CRM_1658127956' => $marka, 'UF_CRM_1658127981' => $model]
    ]);
}
$results = json_encode($result);
echo $results;
