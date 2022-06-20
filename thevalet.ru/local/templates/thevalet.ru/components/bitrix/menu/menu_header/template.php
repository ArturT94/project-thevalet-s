<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?php foreach($arResult as $arItem): ?>
                <a href="<?=$url?><?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
<?endforeach?>
<?php endif ?>
