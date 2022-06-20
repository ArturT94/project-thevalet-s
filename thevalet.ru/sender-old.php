<?php

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

$regEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

$service = $_POST['service'];

$personaOffer = '';
$email = '';
$phone = '';

if (isset($_POST['offer'])) {
	if(empty($_POST['offer'])) {
		echo 'correct';
		die();
	}
	$personaOffer = $_POST['offer'];
} else {
	if (preg_match($regEmail, $_POST['phone'])) {
	    $email = $_POST['phone'];
	} elseif (validateRussianPhoneNumber($_POST['phone'])) {
	    $phone = $_POST['phone'];
	} else {
	    echo 'correct';
	    die();
	}
}


// формируем параметры для создания лида в переменной $queryData
$queryData = http_build_query(array(
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
));


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