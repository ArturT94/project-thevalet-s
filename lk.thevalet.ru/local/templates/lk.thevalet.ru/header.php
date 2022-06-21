<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/auth.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style-mobile.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main_mobile.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/appHeader.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/formSearchAdress.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/garageOnOrder.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/serviceListOnOrder.css">
    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><?php  $APPLICATION->ShowPanel(); ?></div>
