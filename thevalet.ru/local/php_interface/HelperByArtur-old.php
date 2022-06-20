<?php

class HelperByArtur
{

    private $bitrixWebHook = 'https://it-valet.ru/rest/1/gs1ycntcuprb7erg';
    public $listAuto = [];
    public $total = [];

    public function __construct($method, $entityTypeId, $getAllFields = NULL)
    {
        if(is_null($getAllFields))
          {$getAllFields = false;             
          }
        
        $bitrixWebHook = $this->bitrixWebHook;
        $this->addAuto($this->getAutoIdClient($bitrixWebHook, $method, $entityTypeId, $getAllFields ? NULL : ['id', 'contactId', 'title']));
        self::debug($this->listAuto);
    }

    public static function debug($arr)
    {
        //echo '<pre>' . print_r($arr, true) . '</pre>';
    }

    public function getAutoIdClient($hook, $method, $entityTypeId, $fieldsToSelect = NULL)
    {
        $url = [];
        $data = ['entityTypeId' => $entityTypeId];
        if(!is_null($fieldsToSelect))
          {if(is_scalar($fieldsToSelect))
             {$fieldsToSelect = [$fieldsToSelect];
             }
           $data['select'] = $fieldsToSelect;
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