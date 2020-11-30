<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */




$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();




// resize img properties

foreach($arResult['PROPERTIES']['IMG']['VALUE'] as $arItem) {
	$arTemp = CFile::ResizeImageGet($arItem, array('width'=>305, 'height'=>440), BX_RESIZE_IMAGE_PROPORTIONAL, true); 


	$arResult['PROPERTIES']['IMG']['SRC'][] = $arTemp['src']; 
}





// Tag
$arSelect = ['ID', "NAME"];

$sections = CIBlockElement::GetElementGroups(
 $arResult['ID'],
 false,
 $arSelect
);
while($ar_group = $sections->Fetch()) {
	$arResult['SECTION_GROUP']["NAME"][] = $ar_group['NAME'];
}





$arOrder = [];
$arFilter = ["ACTIVE" => "Y", "IBLOCK_ID"=> 5, "PROPERTY_GOODS_LINK.ID"=> $arResult['ID']];
$arSelect = ["ID", "NAME", "DETAIL_PAGE_URL"];

$arPosts = CIBlockElement::getList(
	$arOrder,
	$arFilter,
	false,
	false,
	$arSelect
);

while($post = $arPosts->getNext()) {
	$test[] = $post;
	$arResult['PROPERTIES']['POST_LINK'][] = '<a href="'.$post['DETAIL_PAGE_URL'].'">'.$post['NAME'].'</a>';
}




