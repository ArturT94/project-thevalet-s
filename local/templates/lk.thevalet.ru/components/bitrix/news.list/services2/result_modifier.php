<?php

$dbResSect = CIBlockSection::GetList(["SORT" => "ASC"], ["IBLOCK_ID" => $arParams['IBLOCK_ID']]);

while($sectRes = $dbResSect->GetNext()){
    $arSections[] = $sectRes;
}
foreach($arSections as $arSection){
    foreach($arResult['ITEMS'] as $key => $arItem){
        if($arSection['ID'] === $arItem['IBLOCK_SECTION_ID']){
            $arSection['ELEMENTS'][] = $arItem;
        }
    }
    $arElementGroups[] = $arSection;
}
$arResult["ITEMS"] = $arElementGroups;
?>