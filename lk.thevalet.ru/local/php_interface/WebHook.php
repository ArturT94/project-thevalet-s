<?php

class WebHook{

    private $url = ['it-valet.ru', 'rest', '1', '9rdwqbwoy85dgv16'];

    public function __construct($method, $params = []){
self::request(json_encode(file_get_contents('https://' . $this->url, $method, $params)));
    }

    private static function request($url, $method, $params = []){
         $request = implode('/', $url) . implode('.', [$method, 'json?']) . http_build_query($params);
    }
}