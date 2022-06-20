<?
die('2');
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
\Bitrix\Main\UI\Extension::load('ui.entity-selector');
CJSCore::Init(['ui']);
   \Bitrix\Main\Loader::includeModule('ui');
\Bitrix\Main\UI\Extension::load("ui.forms"); 
\Bitrix\Main\UI\Extension::load("ui.buttons");
die('s'); 
?>
<!DOCTYPE html>
<html>
<head>
	<script src="//api.bitrix24.com/api/v1/dev/"></script>
   <?
   $APPLICATION->showHead();
   ?>
</head>
<body style="margin: 0; padding: 0;">
<DIV align = "center">
<?
\__Debug::out($_POST);
\__Debug::log(compact(['_POST']));
if(array_key_exists('PLACEMENT_OPTIONS', $_POST))
  {$PLACEMENT_OPTIONS = json_decode($_POST['PLACEMENT_OPTIONS'], true);
   $dealId = (int) $PLACEMENT_OPTIONS['ENTITY_VALUE_ID'];
   $data = json_decode(file_get_contents('https://ume-crm.xyz/rest/1/s0lbz232ldhb5v3g/crm.deal.get.json?ID='.$dealId), true)['result'];
   $contactData = json_decode(file_get_contents('https://ume-crm.xyz/rest/1/s0lbz232ldhb5v3g/crm.contact.get.json?ID='.($contactId = $data['CONTACT_ID'])), true)['result'];
   \__Debug::log($data);
   $emails = array_map(function($element)
     {return trim($element['VALUE']);
     }, $contactData['EMAIL']);
   \__Debug::log($emails, 'emails');
$filter = ['EMAIL' => implode(' | ', $emails)];
$processString = function($string)
  {return mb_strtolower(trim($string));
  };
$stringsAreEqual = function($string1, $string2) use ($processString)
  {return $processString($string1) == $processString($string2);
  };
$stringInArray = function($string, $array) use (&$processString)
  {$processedString = $processString($string);
   $result = NULL;
   foreach($array as $currentString)
     {if($processedString == $processString($currentString))
        {$result = true;
         break;           
        }
     }
   if(is_null($result))
     {$result = false;        
     }
   return $result;     
  };
$rsUsers = CUser::GetList('timestamp_x', 'desc', $filter, ['SELECT' => ['UF_ADDRESS']]);
   $addresses = $contactData['UF_CRM_1632661735735'];
   \__Debug::log($addresses, 'addresses');
   if(empty($addresses))
     {$addresses = array();        
     }
   elseif(is_scalar($addresses))
     {$addresses = [$addresses];        
     }
   $haveChanged = false;
   while($user = $rsUsers->getNext())
  {\__Debug::log(['User', $user], 'user');
   if(array_key_exists('UF_ADDRESS', $user))
     {foreach($user['UF_ADDRESS'] as $_address)
        {if(($index = mb_strpos($_address, ';')) !== false)
           {$_address = mb_substr($_address, 0, $index);
           }
         if(!$stringInArray($_address, $addresses))
           {array_push($addresses, $_address);
            $haveChanged = true;
           }
        }        
     }
  }
 if($haveChanged)
   {$index = 0;
    \__Debug::log([json_decode(file_get_contents($url = ('https://ume-crm.xyz/rest/1/s0lbz232ldhb5v3g/crm.contact.update.json?ID='.$contactId.'&'.implode('&', array_map(function($addressValue) use (&$index)
      {return 'fields[UF_CRM_1632661735735]['.($index++).']='.urlencode($addressValue);
      }, $addresses)))), true), 'url' => $url], 'contact-update-result');
   }
   ?>
     <!--<h2>Вы можете выбрать адрес из списка адресов контакта <a href = "/crm/contact/details/<?=$contactData['ID']?>/" target = "_blank"><?=implode(' ', array_filter(array_map(function($key) use ($contactData)
       {return isset($contactData[$key]) ? $contactData[$key] : NULL;
       }, ['LAST_NAME', 'NAME']), function($value)
         {return !is_null($value);
         }))?></a></h2>
         -->
   <?if(array_key_exists('address', $_POST))
     {$address = $_POST['address'];   
      $updateResult = json_decode(file_get_contents($updateLink = 'https://ume-crm.xyz/rest/1/mejvhd42ce8rmk7z/crm.deal.update.json?ID='.$dealId.'&fields[UF_CRM_1629757341080]='.urlencode($address)), true);
      if($updateResult['result'] == 1)
        {echo '<!--<h3 style = "color: blue;">Выбранный адрес "'.$address.'" успешно сохранён в поле сделки "Адрес из списка адресов"</h3>-->';
         \__Debug::log($updateResult, 'update-success');
        }
      else
        {echo '<!--<h3>Возможные проблемы при сохранении выбранного адреса "'.$address.'"</h3>-->';
         \__Debug::log($updateResult.' ('.$updateLink.')', 'update-error');
        }
     }
   else
     {$address = NULL;
     }
   if(is_null($address))
     {$address = $data['UF_CRM_1629757341080'];   
     }
   ?>
   <FORM method = "post" onsubmit = "window.parent.location.reload();">
   <?
   $showVariables = function($var, $prefix = NULL) use (&$showVariables)
     {if(is_null($prefix))
        {$curPrefix = $curPostfix = '';           
         $prefix = '';
        }
      else
        {$curPrefix = '[';
         $curPostfix = ']';
        }
      foreach($var as $_key => $_value)
        {$name = $prefix.$curPrefix.$_key.$curPostfix;
         if(is_array($_value))
           {$showVariables($_value, $name);     
           }
         else
           {echo "<INPUT type = \"hidden\" name = \"$name\" value = '$_value'\" />";
           }
        }
     };
   $showVariables($_POST);
   ?>
   <div class="ui-ctl ui-ctl-after-icon ui-ctl-dropdown">
    <div class="ui-ctl-after ui-ctl-icon-angle"></div>
    
   <SELECT class = "ui-ctl-element" name = "address" onchange = "BX24.callMethod('crm.deal.update', {id: <?=$dealId?>, fields: {UF_CRM_1629757341080: this.value}}); console.log('Updated');">
   <?foreach($addresses as $_address):?>
   <OPTION<?=($address == $_address) ? ' SELECTED' : ''?> value = "<?=$_address?>"><?=$_address?></OPTION>
   <?endforeach?>
   </SELECT>
   </DIV>
   </FORM>
   <?
  }
else
  {\__Debug::log(compact(['_POST']));     
  }
?>
</DIV>
<SCRIPT>
BX24.
BX24.resizeWindow(document.body.clientWidth, 43);
</SCRIPT>
</BODY></HTML>