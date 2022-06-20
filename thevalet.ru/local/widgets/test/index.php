<?
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
\Bitrix\Main\UI\Extension::load('ui.entity-selector');
CJSCore::Init(['ui']);
   \Bitrix\Main\Loader::includeModule('ui');
\Bitrix\Main\UI\Extension::load("ui.forms"); 
\Bitrix\Main\UI\Extension::load("ui.buttons"); 
?>
<!DOCTYPE html>
<html>
<head>
	<script src="//api.bitrix24.com/api/v1/dev/"></script>
   <script>
   BX24.callMethod(
   'userfieldtype.add', 
   {
      USER_TYPE_ID: 'auto',
      HANDLER: 'https://it-valet.ru/local/widgets/custom-field',
      TITLE: 'Auto type',
      DESCRIPTION: 'Auto userfield type for documentation'
   }
);
   </script>
   <?
   $APPLICATION->showHead();
   ?>
</head>
<body style="margin: 0; padding: 0;">22</body></html>