<?
use \My\Helper;
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
\__Debug::log(compact(['_SERVER', '_POST']), pathinfo(__FILE__, PATHINFO__FILENAME));