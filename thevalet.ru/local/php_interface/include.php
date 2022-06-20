<?
require_once('debug.php');
require_once('helper.php');
require_once('HelperByArtur.php');
require_once('GarbageDataByArtur.php');
$APPLICATION->AddHeadString(<<<'NOWDOC'
<SCRIPT>
window.updateVehiclePhotos = function()
  {$('.crm-kanban-item-fields-item-title:not(.--processed)').each(function() 
     {if($(this).children().eq(0).text() == 'Фото авто...' || $(this).children().eq(0).text() == 'Фотография' || $(this).children().eq(0).text() == 'Фото авто')
        {var $anchorElement = $(this).next().eq(0).children().eq(0), href = $anchorElement.attr('href'); 
         $anchorElement.html('<IMG style = "width: 210px;" src = "' + href + '" />');
        }
      $(this).addClass('--processed');
     });
  }
$(function()
  {$(window.updateVehiclePhotos);
   window.setInterval(window.updateVehiclePhotos, 430);
  });
  </SCRIPT>
NOWDOC
);


   
class MyUserType extends \Bitrix\Main\UserField\TypeBase
{

  const USER_TYPE_ID = 'enumeration';

  public static function GetUserTypeDescription ()
  { return array(
  "PROPERTY_TYPE"		=>"S",
              "USER_TYPE"		=>"MyDateTime",
              'BASY_TYPE' => 'int',
      'CLASS_NAME' => __CLASS__,
      'DESCRIPTION' => 'Авто',
      'EDIT_CALLBACK' => array(
        __CLASS__,
        'GetPublicEdit'
      ),
      'VIEW_CALLBACK' => array(
        __CLASS__,
        'GetPublicView'
      )
    );
  }

  

  public static function GetPublicView ($arUserField, 
      $arAdditionalParameters = array())
  {
    \Bitrix\Main\UI\Extension::load("ui.buttons"); 
    
    return '<a href="#" class="ui-btn ui-btn-danger">Button From Custom Field</a>';
  }

  function GetDBColumnType ($arUserField)
  {
    global $DB;
    switch (strtolower($DB->type))
    {
      case "mysql":
        return "text";
      case "oracle":
        return "varchar2(2000 char)";
      case "mssql":
        return "varchar(2000)";
    }
  }
  public static function GetPublicEdit ($arUserField, 
      $arAdditionalParameters = array())
  {
    Extension::load('ui.buttons');
    ob_start();
    ?>
    <div class="ui-ctl ui-ctl-after-icon ui-ctl-dropdown">
    <div class="ui-ctl-after ui-ctl-icon-angle"></div>
    <select class="ui-ctl-element">
        <option value="">Опция #1</option>
        <option value="">Опция #2</option>
        <option value="">Опция #3</option>
    </select>
</div>
    <?
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }
}
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandlerCompatible('main', 'OnUserTypeBuildList', 
  array(
    'MyUserType',
    'GetUserTypeDescription'
  )
);


class MyCurledType extends CUserTypeString
{
   public static function GetUserTypeDescription()
   {
      return array(
         "USER_TYPE_ID" => "c_string",
         "CLASS_NAME" => "MyCurledType",
         "DESCRIPTION" => "Строка в фигурных скобках",
         "BASE_TYPE" => "string",
      );
   }
//Этот метод вызывается для показа значений в списке
   function GetAdminListViewHTML($arUserField, $arHtmlControl)
   {
      if(strlen($arHtmlControl["VALUE"])>0)
         return "{".$arHtmlControl["VALUE"]."}";
      else
         return ' ';
   }
}
AddEventHandler("main", "OnUserTypeBuildList", array("MyUserType", "GetUserTypeDescription"));