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





	<div class="proj_container">
		<div class="single_img">
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
		</div>

		<div class="single_text">
			<h1><?=$arResult["NAME"]?></h1>

			<p>
				Страна:
				<?php if(is_array($arResult['DISPLAY_PROPERTIES']['COUNTRY']['DISPLAY_VALUE'])) : ?>
					<?= implode(", ", $arResult['DISPLAY_PROPERTIES']['COUNTRY']['DISPLAY_VALUE']); ?>
				<?php else : ?>
					<?=$arResult['DISPLAY_PROPERTIES']['COUNTRY']['DISPLAY_VALUE'];?>
				<?php endif; ?>
			</p>

			<?php if($arResult['DISPLAY_PROPERTIES']['GENERS']['DISPLAY_VALUE']) : ?>
			<p>Жанры:
				<?= implode(", ", $arResult['DISPLAY_PROPERTIES']['GENERS']['DISPLAY_VALUE']); ?>	
			</p>
		<?php endif; ?>
			<p><?echo $arResult["DETAIL_TEXT"];?></p>
			

			<?php if($arResult['DISPLAY_PROPERTIES']['TRANSLATE']['DISPLAY_VALUE']) : ?>
			<p>
				Переводы: 
				<?= implode(", ", $arResult['DISPLAY_PROPERTIES']['TRANSLATE']['DISPLAY_VALUE']); ?>	
			</p>
			<?php endif; ?>


		</div>
		<div class="proj_video">
			<div class="title_block">
				<span>Видео</span>
			</div>
		</div>

	</div>

	<div class="single_comment">
		<div class="title_block">
			<span>Комментарии</span>
		</div>


		
		
	</div>

