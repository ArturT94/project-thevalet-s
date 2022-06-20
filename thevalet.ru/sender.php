<?php
require_once(implode('/', [$_SERVER['DOCUMENT_ROOT'], 'bitrix', 'modules', 'main', 'include', implode('.', ['prolog_before', 'php'])]));
//require_once(implode('/', [$_SERVER['DOCUMENT_ROOT'], 'debug.php']));
if (empty($_POST)) {
    header("Location: /");
}
function validateRussianPhoneNumber($tel)
{
    $tel = trim((string)$tel);
    if (!$tel) return false;
    $tel = preg_replace('#[^0-9+]+#uis', '', $tel);
    if (!preg_match('#^(?:\\+?7|8|)(.*?)$#uis', $tel, $m)) return false;
    $tel = '+7' . preg_replace('#[^0-9]+#uis', '', $m[1]);
    if (!preg_match('#^\\+7[0-9]{10}$#uis', $tel, $m)) return false;
    return $tel;
}

\__Debug::log(['Request', '_POST' => $_POST]);

$regEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

$service = $_POST['service'];

$personaOffer = '';
$email = '';
$phone = '';
$bitrix24APIRequest = function($method, $data = NULL)
  {if(is_null($data))
     {$data = array();        
     }
   $curl = curl_init();
   curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://crm.thevalet.ru/rest/1/iklhudn5wq036q9f/'.$method.'.json',
    CURLOPT_POSTFIELDS => http_build_query($data)));
    $result = curl_exec($curl);
    curl_close($curl);
    \__Debug::log(compact(['method', 'data', 'result']), 'requests');
    return json_decode($result, true);
  };

   $isReturnCustomer = $contactId = NULL;
if (isset($_POST['offer'])) {
	if(empty($_POST['offer'])) {
		echo 'correct';
		die();
	}
	$personaOffer = $_POST['offer'];
} else {
   $filterData = array();
	if (preg_match($regEmail, $_POST['phone'])) {
	    $email = $_POST['phone'];
       $filterData['EMAIL'] = $email;
	} elseif ($validatedPhone = validateRussianPhoneNumber($_POST['phone'])) {
	    $phone = $validatedPhone;
       $filterData['PHONE'] = [['VALUE' => $phone, 'VALUE_TYPE' => 'WORK']];
	} else {
	    echo 'correct';
	    die();
	}
   if(is_array($contacts = $bitrix24APIRequest('crm.contact.list', ['filter' => $filterData])) && array_key_exists('result', $contacts) && is_array($contacts['result']) && array_key_exists(0, $contacts['result']))
     {$contactId = (int) $contacts['result'][0]['ID'];        
     }
   else
     {$contactId = $bitrix24APIRequest('crm.contact.add', ['fields' => $filterData])['result'];
     }
   if(is_array($leads = $bitrix24APIRequest('crm.lead.list', ['filter' => $filterData])) && array_key_exists('result', $leads) && is_array($leads['result']) && array_key_exists(0, $leads['result']))
     {$isReturnCustomer = true;
     }
   
}

// формируем параметры для создания лида в переменной $queryData
$queryData = array(
    'fields' => array(
        'TITLE' => $service,
        'EMAIL' => Array(
            Array(
                "VALUE" => "$email",
                "VALUE_TYPE" => "WORK",
            ),
        ),
        'PHONE' => Array(
            Array(
                "VALUE" => "$phone",
                "VALUE_TYPE" => "WORK",
            ),
        ),
        'COMMENTS' => $personaOffer,
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y")
);
if(is_null($contactId))
  {\__Debug::log('Contact id not found');
   
  }
else
  {\__Debug::log('Found contact id: '.$contactId);
   $queryData['fields']['CONTACT_ID'] = $contactId;     
  }
if(is_null($isReturnCustomer))
  {\__Debug::log('Customer fixed as new');
   
  }
else
  {\__Debug::log('Customer fixed as'.($isReturnCustomer ? '' : ' not').' returned');
   //$queryData['fields']['IS_RETURN_CUSTOMER'] = $isReturnCustomer ? 'Y' : 'N';     
  }
// $queryData = json_decode('{"fields": {"TITLE": "ИП Титов", 
  //         
// "PHONE": [ { "VALUE": "+7555888", "VALUE_TYPE": "WORK" } ]}, "params": { "REGISTER_SONET_EVENT": "Y" }}', true);
$result = json_encode($bitrix24APIRequest('crm.lead.add', $queryData), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
header('Content-Type: application/json; charset=utf-8');
header('Content-Length: '.strlen($result));
die($result);
/*
// формируем URL в переменной $queryUrl
$queryUrl = 'https://crm.thevalet.ru/rest/1/iklhudn5wq036q9f/crm.lead.add.json';


// обращаемся к Битрикс24 при помощи функции curl_exec
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
));
$result = curl_exec($curl);
echo json_encode($result);
curl_close($curl);
*/