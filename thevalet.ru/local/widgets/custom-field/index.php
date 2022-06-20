<?
use \My\Helper;
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
\Bitrix\Main\UI\Extension::load('ui.entity-selector');
CJSCore::Init(['ui']);
\Bitrix\Main\Loader::includeModule('ui');
\Bitrix\Main\UI\Extension::load('ui.forms');
\Bitrix\Main\UI\Extension::load('ui.buttons');
$options = array();
if(preg_match('~/crm/([a-z\d_\-]+)/details/(\d+)/~', $_SERVER['HTTP_REFERER'], $matches))
  {$typeOfTheEntity = $matches[1];
   $id = (int) $matches[2];
   $nameOfTheField = 'UF_CRM_1650522034999';
  }
else
  {$options = json_decode($_POST['PLACEMENT_OPTIONS'], true);
   $typeOfTheEntity = mb_strtolower(explode('_', $options['ENTITY_ID'])[1]);
   $id = $options['ENTITY_VALUE_ID'];
   $nameOfTheField = $options['FIELD_NAME'];
  }
$data = Helper::request(implode('.', ['crm', $typeOfTheEntity, 'get']), ['ID' => $id]);
$contactIds = array_map(function ($element) {
    return $element['CONTACT_ID'];
}, Helper::requestAll(implode('.', ['crm', $typeOfTheEntity, 'contact', 'items', 'get']), ['id' => $id]));
$gotElements = array_map(function($element)
  {if(count($element['ufCrm2_1628186759']) > 0)
     {$element['image'] = ['image-'.$element['id'].'.jpg', base64_encode(file_get_contents($element['ufCrm2_1628186759'][0]['urlMachine']))];
     }
   return $element;
  }, call_user_func_array('array_merge', array_map(function ($result) {
    return $result['items'];
}, (new HelperByArtur('crm.item.list', 183, $contactIds))->listAuto)));
$elements = array();
foreach($gotElements as $element)
  {$idOfTheElement = $element['id'];
   unset($element['id']);
   $elements[$idOfTheElement] = $element;
  }
$chosenElementIds = $data[$nameOfTheField];
if (strlen($chosenElementIds) == 0) {
    $chosenElementIds = NULL;
}
switch (gettype($chosenElementIds)) {
    case 'NULL':
        $chosenElementIds = array();
    case 'array':
        break;
    default:
        $chosenElementIds = [$chosenElementIds];
        break;
}
?>
<!DOCTYPE html>
<html>
<head>
    <script src="//api.bitrix24.com/api/v1/dev/"></script>
    <script>
        /*
        BX24.callMethod('crm.item.list', {entityTypeId: 183}, function(result)
           {debugger;

           });
        BX24.callMethod(
        'userfieldtype.update',
        {
           USER_TYPE_ID: 'auto',
           HANDLER: 'https://it-valet.ru/local/widgets/custom-field',
           TITLE: 'Auto type',
           DESCRIPTION: 'Auto userfield type for documentation'
        }
     );
     */
    </script>
    <?
    $APPLICATION->showHead();
    ?>
<SCRIPT>
var elements = <?=\My\Helper::toJSON($elements)?>, getElementFields = function(id)
  {var element = elements[id], result = {<?= $options['FIELD_NAME'] ?>: id, UF_CRM_2_1628186759: {fileData: ((typeof element == 'object') && (element !== null) && (element.hasOwnProperty('image'))) ? element.image : ''}};
   return result;
  }
</SCRIPT>
</head>
<body style="margin: 0; padding: 0;">
<DIV align="center">
    <FORM method="post" onsubmit="window.parent.location.reload();">
        <div class="ui-ctl ui-ctl-after-icon ui-ctl-dropdown">
            <div class="ui-ctl-after ui-ctl-icon-angle"></div>
            <SELECT class="ui-ctl-element" name="auto"
                    onchange="BX24.callMethod('crm.<?= $typeOfTheEntity ?>.update', {id: <?= $id ?>, fields: getElementFields(this.value)}); console.log('Updated');">
                <? foreach ($elements as $idOfTheElement => $element): ?>
                    <OPTION<?= (in_array($idOfTheElement, $chosenElementIds)) ? ' SELECTED' : '' ?>
                            value="<?= $idOfTheElement ?>"><?= $element['title'] ?></OPTION>
                <? endforeach ?>
            </SELECT>
        </DIV>
    </FORM>
</DIV>
</body>
</html>