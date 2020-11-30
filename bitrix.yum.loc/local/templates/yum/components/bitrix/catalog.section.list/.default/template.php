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
$this->setFrameMode(true);




?>


<div class="choise_block">
	<?php foreach($arResult['SECTIONS'] as $arSect) : ?>
		<a href="<?=$arSect['SECTION_PAGE_URL']?>"><?=$arSect['NAME']?></a>
	<?php endforeach;?>
</div>









