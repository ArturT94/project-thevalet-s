<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$parent_section = $_POST['brandId'];
$year = $_POST['year-of-manufacturing'];
$probeg = $_POST['mileage'];
$osago = $_POST['omi'];
$wheels = $_POST['tires'];
$vin = $_POST['vin'];
include_once "model.php";
//require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_before.php");

if (!empty($_POST['brandName'] && $_POST['modelName'] && $_POST['gosNumber'])) {
   $existingElements = (new WebHook('lists.element.get', ['IBLOCK_ID' => 93, 'IBLOCK_TYPE_ID' => 'lists', 'ELEMENT_CODE' =>
    $parent_section.$_POST['gosNumber']]))->getLastResult();
    if(count($existingElements) > 0)
      {$nameOfTheMethod = 'update';         
       $id = (int) $existingElements[0]['ID'];
      }
    else
      {$nameOfTheMethod = 'add';
       $id = NULL;
      }
   $result = (new WebHook('lists.element.'.$nameOfTheMethod, ['IBLOCK_ID' => 93, 'IBLOCK_TYPE_ID' => 'lists', 'ELEMENT_CODE' =>
    $parent_section.$_POST['gosNumber'],
    'FIELDS' => ['NAME' => $_POST['brandName'], 'PROPERTY_491' => $_POST['modelName'], 'PROPERTY_492' => $_POST['gosNumber'], 'PROPERTY_526' => $USER->GetID(), 'PROPERTY_527' => $USER->GetID()]
  ]))->getLastResult();
    if(is_null($id))
      {$id = $result;  
      }
    ?>
    <SCRIPT>
window.insertedVehicleId = <?=$id?>;
</SCRIPT>
    <?
   }
/*\My\Helper::outJSON($result);
*/