<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$arOrder = [];
$arFilter = ["ACTIVE" => "Y", "IBLOCK_ID" => 4, "ID" => $arResult['PROPERTIES']['GOODS_LINK']['VALUE']];
$arSelect = ["ID", "NAME", "DETAIL_PAGE_URL"];


$arGoods = CIBlockElement::getList(
	$arOrder,
	$arFilter,
	false,
	false,
	$arSelect
);
while($prod_link = $arGoods->getNext()) {
	$arResult['PROPERTIES']['GOODS_LINK']['LINK'][] = '<a href="'.$prod_link['DETAIL_PAGE_URL'].'">'.$prod_link['NAME'].'</a>';
}




?>