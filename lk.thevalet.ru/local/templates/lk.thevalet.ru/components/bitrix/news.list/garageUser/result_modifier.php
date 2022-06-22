<?php

if (CModule::IncludeModule("iblock"))
    $arOrder = [];
    $arFilter = ['IBLOCK_ID' => $arParams['IBLOCK_ID'], ];
    $arSelect = ['NAME', 'PROPERTY_MARKA', 'PROPERTY_FOTO', 'PROPERTY_GOSNOMER', 'PROPERTY_GOD_VYPUSKA', 'PROPERTY_PROBEG', 'PROPERTY_OSAGO', 'PROPERTY_SHINY', 'PROPERTY_VIN', 'PROPERTY_ID_AVTO', 'PROPERTY_STATUS', 'PROPERTY_NOVOE_POLE', 'PROPERTY_KONTAKT'];
$getGarage = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
while($getCars = $getGarage->Fetch()){
    if(in_array($USER->GetID(), $getCars)) {
        $arResult['NEW_SECTION'][] = $getCars;
    }

}
        //echo '<pre>' . print_r($arCars, true) . '</pre>';








?>