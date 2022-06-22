<?php

Class GarbageDataByArtur{

    private static $data = [];

    public static function set($name, $value){
        self::$data[$name] = $value;
    }

    public static function get($name){
        return self::$data[$name];
    }

}

?>