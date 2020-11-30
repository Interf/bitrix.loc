<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// DISPLAY_PROPERTIES


$id_city = $arResult["DISPLAY_PROPERTIES"]["LINK_CITY"]["VALUE"];
$id_country = $arResult["DISPLAY_PROPERTIES"]["LINK_CITY"]["LINK_ELEMENT_VALUE"][$id_city]['IBLOCK_SECTION_ID'];

// Country
$arSelect = array("NAME", "SECTION_PAGE_URL");
$arFilter = array('IBLOCK_ID'=>1, 'GLOBAL_ACTIVE'=>'Y', "ID" => $id_country);
$arSec = CIBlockSection::GetList(
    Array(),
    $arFilter,
    false,
    $arSelect,
    false
);
while($ar_result = $arSec->GetNext())
{
	$arResult["DISPLAY_PROPERTIES"]["LINK_COUNTRY"][] = "<a href='".$ar_result['SECTION_PAGE_URL']."'>".$ar_result['NAME']."</a>";
}


// Tours
$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_LINK_HOTEL.ID" => $arResult['ID']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
 $arTours[] = $ob->GetFields();
}

foreach($arTours as $arItem) {
	$arResult["DISPLAY_PROPERTIES"]["LINK_TOURS"][] = "<a href='".$arItem['DETAIL_PAGE_URL']."'>".$arItem['NAME']."</a>";
}





?>