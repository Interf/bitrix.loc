<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);





?>

<div class="single contact">

	<div class="sngl-top">
		<div class="col-md-5 single-top-left">	

			<div class="slider-container">

				<div class="slider-content">
					<?php foreach($arResult['PROPERTIES']['IMG']['SRC'] as $k=>$arItem) : ?>
						<div class="slider-item <?php if(!$k) : ?>slide-active<?php endif; ?>">
							<img src="<?=$arItem?>" alt="">
						</div>
					<?php endforeach; ?>
				</div>



				<div class="slider-controll">
					<button class="slider-prev">Prev</button>
					<button class="slider-next">Next</button>
				</div>

			</div>		

		</div>	
		<div class="col-md-7 single-top-right">
			<div class="single-para simpleCart_shelfItem">
				<h2><b><?=$arResult['PROPERTIES']['BRAND']['VALUE']?></b> <?=$arResult['NAME']?></h2>

				<h5 class="item_price">Цена: <?=$arResult['PRICES']['basical']['PRINT_VALUE'];?></h5>
				<p>Описание: <br><?=$arResult['PREVIEW_TEXT'];?></p>

				<?php if($arResult['PROPERTIES']['POST_LINK']) : ?>
					<p>Посты, связанные с этим товаром: <?= implode(", ", $arResult['PROPERTIES']['POST_LINK']) ?></p>
				<?php endif; ?>

				<ul class="tag-men">
					<li><span>TAG</span>
						<span class="women1">: <?= implode(", ", $arResult['SECTION_GROUP']["NAME"]);?></span>
					</li>
				</ul>


				<?php if( in_array($arResult['ID'], $_SESSION['idList']) ) : ?>

					<span class="button_container">
						<a href="#" class="add-cart" onclick="return false;" data-id="<?=$arResult['ID']?>" style="opacity: 0.3;">ADD TO CART</a>
					</span> 
				<?php else : ?>
					<span class="button_container">
						<a href="#" class="add-cart item_add" onclick="return false;" data-id="<?=$arResult['ID']?>">ADD TO CART</a>
					</span>
				<?php endif; ?>



				
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>



</div>


