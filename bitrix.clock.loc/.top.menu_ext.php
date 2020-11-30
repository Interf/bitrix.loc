<?
// пример файла .left.menu_ext.php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;


$homeLink = [Array(
		"Home", 
		"/", 
		Array(), 
		Array(), 
		"" 
	)];

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    Array(
        "ID" => $_REQUEST["ELEMENT_ID"], 
        "IBLOCK_TYPE" => "catalog", 
        "IBLOCK_ID" => "4", 
        "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/", 
        "CACHE_TIME" => "3600" 
    )
);

$aMenuLinks = array_merge($homeLink, $aMenuLinksExt, $aMenuLinks);
?>