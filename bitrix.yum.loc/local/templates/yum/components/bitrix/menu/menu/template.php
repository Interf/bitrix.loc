<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="navbar navbar-expand-md navbar-light">
				

				<a class="navbar-brand" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/new-logo3.png" alt=""></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-menu">Меню</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="nav-item">
			<a class="nav-link selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>
	<?else:?>
		<li class="nav-item">
			<a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>
	<?endif?>
	
<?endforeach?>

	</ul>
	</div>

</nav>
<?endif?>