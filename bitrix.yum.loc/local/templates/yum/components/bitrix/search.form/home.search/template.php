<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>







<div class="search">
	<form action="<?=$arResult["FORM_ACTION"]?>" method="GET">
		<input type="text" placeholder="Найти сериал по названию" class="input_search" name="q" autocomplete="off">
		<input type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" class="btn_search btn btn-success">
	</form>
</div>