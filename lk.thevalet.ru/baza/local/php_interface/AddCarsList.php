<?php

class AddCarsList{

    protected $url = "https://it-valet.ru/rest/1/9rdwqbwoy85dgv16/lists.element.add.json?";
//https://it-valet.ru/rest/1/9rdwqbwoy85dgv16/lists.element.add.json?IBLOCK_ID=93&IBLOCK_TYPE_ID=lists&ELEMENT_CODE=false&FIELDS[NAME]=artur
    public static function filters($blockId, $blockTypeId, $elementCode=false, $name, $autoNumber, $yearOfRelease, $wheels, $vin , $photo, $documens, $idUser){
        $url = $this->url;
        json_decode(file_get_contents($url . 'BLOCK_ID=' . $blockId . '&IBLOCK_TYPE_ID=' . $blockTypeId . '&ELEMENT_CODE=' . $elementCode . '&FIELDS[NAME]=' . $name . '&FIELDS=[PROPERTY_492]=' . $autoNumber . '&FIELDS[PROPERTY_493]=' . $yearOfRelease . '&FIELDS[PROPERTY_496]=' . $wheels . '&FIELDS[PROPERTY_497]=' . $vin . '&FIELDS[PROPERTY_499]=' . $photo . '&FIELDS[PROPERTY_516]=' . $documens . '&FIELDS[PROPERTY_526]=' . $idUser));
    }
}
