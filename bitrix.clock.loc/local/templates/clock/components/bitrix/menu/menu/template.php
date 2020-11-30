<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="col-md-9 header-left">
	<div class="top-nav">
		<ul class="memenu skyblue">
			<li class="showhide" style="display: none;"><span class="title">MENU</span><span class="icon1"></span><span class="icon2"></span></li>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="active"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<?endif?>			
								





