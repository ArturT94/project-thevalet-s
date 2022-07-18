<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if ($_POST) {
  $money = $_POST['money'];
  $time = $_POST['time'];
  $planedTime = $_POST['planedTime'];
  $services = $_POST['services'];
  $externalId = $_POST['getExternalCar'];

  $userId = CUser::GetID();
  $userGetParamsFromId = CUser::GetByID($userId);
  $arUser = $userGetParamsFromId->Fetch();

  foreach ($services as $key => $val) {
    if (filter_var($val, FILTER_VALIDATE_BOOLEAN)) {
      $result[] = $key;
    }
  }
  new WebHook('crm.deal.add', [
    'fields' => ['CATEGORY_ID' => 5, 'UF_CRM_1657793873362' => $planedTime, 'CLIENT' => $userId, 'UF_CRM_1657710634' => [$result],  'UF_CRM_1658127956' => $externalId, 'UF_CRM_1658127981' => $externalId, 'OPPORTUNITY_WITH_CURRENCY' => (int)$money]
  ]);
}
$results = json_encode($_POST);
echo $results;
