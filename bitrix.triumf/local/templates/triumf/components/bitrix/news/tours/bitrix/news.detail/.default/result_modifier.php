<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$idHotels = $arResult["DISPLAY_PROPERTIES"]["LINK_HOTEL"]['VALUE'];



// Link city from hotels
$arSelect = Array("PROPERTY_LINK_CITY.ID");
$arFilter = Array("IBLOCK_ID"=>2, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => $idHotels);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
 $link_city[] = $ob->GetFields();
}

foreach($link_city as $arItem) {
	$arIdsCity[] = $arItem['PROPERTY_LINK_CITY_ID'];
}


// City
$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>1, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => $arIdsCity);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
 $arCity[] = $ob->GetFields();
}

foreach($arCity as $arItem) {
	$arResult["DISPLAY_PROPERTIES"]["LINK_CITY"][] = "<a href='".$arItem["DETAIL_PAGE_URL"]."'>".$arItem["NAME"]."</a>";
	$arSectionIds[] = $arItem['IBLOCK_SECTION_ID'];
}



// Country
$arSelect = array("ID", "NAME", "SECTION_PAGE_URL");
$arFilter = array('IBLOCK_ID'=>$IBLOCK_ID, 'GLOBAL_ACTIVE'=>'Y', "ID" => $arSectionIds);
$arSect = CIBlockSection::GetList(
    Array("SORT"=>"ASC"),
    $arFilter,
    false,
    $arSelect,
    false
);
while($ar_res = $arSect->GetNext()) {
	$arResult["DISPLAY_PROPERTIES"]["LINK_COUNTRY"][] = "<a href='".$ar_res['SECTION_PAGE_URL']."'>".$ar_res['NAME']."</a>";
}




?>