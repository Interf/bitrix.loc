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





<div class="col-md-3 header-right"> 
	<div class="search-bar">
		<form action="<?=$arResult["FORM_ACTION"]?>">
		<input type="text" name="q" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" placeholder="Search...">
		<input name="s" type="submit" value="">
	</form>
	</div>
</div>



