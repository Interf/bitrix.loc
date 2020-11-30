<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>


<div class="search">
	<form action="" method="GET">
		<input type="text" placeholder="Найти сериал по названию" class="input_search" name="q" autocomplete="off" value="<?=$arResult["REQUEST"]["QUERY"]?>">
		<input type="submit"  value="<?=GetMessage("SEARCH_GO")?>" class="btn_search btn btn-success">
		<input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
	</form>
</div>

<div class="proj-home">
<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
<?elseif($arResult["ERROR_CODE"]!=0): // Ошибки?> 
	<p><?=GetMessage("SEARCH_ERROR")?></p>
	<?ShowError($arResult["ERROR_TEXT"]);?>
<?elseif(count($arResult["SEARCH"])>0):?>
	<?foreach($arResult["SEARCH"] as $arItem):?>
		<div class="proj-home-block">
			<div class="proj-home-first-block">
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt=""></a>
			</div>

			<div class="proj-home-second-block">

				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?=$arItem['TITLE'];?></b></a><br>

			</div>
		</div>

	<?endforeach;?>

	<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	<br />

<?else:?>
	<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND")); // Если ничего не нашло?>
<?endif;?>
</div>
