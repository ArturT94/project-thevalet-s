<?php

class HelperByArtur
{

    private $bitrixWebHook = 'https://it-valet.ru/rest/1/gs1ycntcuprb7erg';
    public $listAuto = [];
    public $total = [];

    public function __construct($method, $entityTypeId, $contactIds = NULL)
    {
        $bitrixWebHook = $this->bitrixWebHook;
        $this->addAuto($this->getAutoIdClient($bitrixWebHook, $method, $entityTypeId, $contactIds));
        self::debug($this->listAuto);
    }

    public static function debug($arr)
    {
        //echo '<pre>' . print_r($arr, true) . '</pre>';
    }

    public function getAutoIdClient($hook, $method, $entityTypeId, $contactIds = NULL)
    {
        $url = [];
        $data = ['entityTypeId' => $entityTypeId, 'select' => ['id', 'contactId', 'title', 'ufCrm2_1628186759'], 'filter' => array()];
        if(!is_null($contactIds))
          {if(is_scalar($contactIds))
             {$contactIds = [$contactIds];                
             }
           if(count($contactIds) == 0)
             {return array();
             }
           else
             {$data['filter']['@contactId'] = $contactIds;                
             }
          }
        $listNotFormded = json_decode(file_get_contents(str_replace('%5B1%5D', '[]', str_replace('%5B0%5D', '[]', $hook . '/' . $method . '?' . http_build_query($data)))), true);
            $this->total = $listNotFormded['total'];
        for ($i = 1; $i <= ceil($this->total / 50); $i++) {
            $url[$i] = json_decode(file_get_contents(str_replace('%5B1%5D', '[]', str_replace('%5B0%5D', '[]', $hook . '/' . $method . '?' . http_build_query($data)))), true);
            unset($url[$i]['total'], $url[$i]['time'], $url[$i]['next']);
            $data['start'] = $i * 50;
        }
        return $url;
    }

    public function addAuto($array){
        if(!is_array($array['items'])){
            foreach($array as $key => $value){
                $this->addAuto($value);
            }
        }else{
            $this->listAuto[] = $array;
        }
        return $this->listAuto;
    }
}