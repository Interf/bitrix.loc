<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// hotels
$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>2, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_LINK_CITY.ID" => $arResult["ID"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
 $arHotels[] = $ob->GetFields();
}


foreach($arHotels as $arItem) {
	$arResult['DISPLAY_PROPERTIES']['LIST_HOTELS'][] = "<a href='".$arItem['DETAIL_PAGE_URL']."'>".$arItem["NAME"]."</a>";
	$listIdHotels[] = $arItem['ID'];
}



// Tours
$arIdHotels = array_unique($listIdHotels);

$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_LINK_HOTEL.ID" => $arIdHotels);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
 $arTours[] = $ob->GetFields();
}

foreach($arTours as $arItem) {
	$arResult['DISPLAY_PROPERTIES']['LINK_TOURS'][] = "<a href='".$arItem['DETAIL_PAGE_URL']."'>".$arItem["NAME"]."</a>";
}



?>