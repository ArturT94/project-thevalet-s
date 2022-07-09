<?php

class WebHook{

    private $url = 'https://it-valet.ru/rest/1/9rdwqbwoy85dgv16';

    public function __construct($method, $params = []){
self::request($this->url, $method, $params);
    }

    private static function request($url, $method, $params = []){
         $request = implode('/', [$url, implode('.', [$method, 'json?'])]) . http_build_query($params);
        json_encode(file_get_contents($request), true);
    }
}