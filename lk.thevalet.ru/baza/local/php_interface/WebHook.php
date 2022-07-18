<?php

class WebHook{
//https://it-valet.ru/rest/1/gs1ycntcuprb7erg
    private $url = 'https://it-valet.ru/rest/1/75uyx04sthi0c0id';
    protected $result = NULL;
    public function __construct($method, $params = []){
self::request($this->url, $method, $params);
    }

    private function request($url, $method, $params = []){
         $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => implode('/', [$url, implode('.', [$method, 'json'])]),
                CURLOPT_POSTFIELDS => http_build_query($params),
            ]);
     $this->result = \My\Helper::fromJSON(curl_exec($curl));
     foreach(['result'] as $possibleKeyInTheResult)
       {if(array_key_exists($possibleKeyInTheResult, $this->result))
          {$this->result = $this->result[$possibleKeyInTheResult];             
          }          
       }
        \__Debug::log($result, 'results-of-the-requests');
    }
    public function getLastResult()
      {return $this->result;         
      }
}