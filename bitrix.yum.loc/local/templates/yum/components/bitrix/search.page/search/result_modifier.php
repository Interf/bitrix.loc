<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();





foreach($arResult['SEARCH'] as $id => $arItem) {
	$curProj = CIBlockElement::GetByID($arItem['ID']);
	if($ar_res = $curProj->GetNext()) {
		$arResult['SEARCH'][$id]['DETAIL_PAGE_URL'] = $ar_res['DETAIL_PAGE_URL'];
		$img = CFile::GetPath($ar_res['PREVIEW_PICTURE']);

		$arResult['SEARCH'][$id]['PREVIEW_PICTURE']['SRC'] = $img;
	}
}









?>