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
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);

$APPLICATION->AddChainItem(ucfirst($arResult['ORIGINAL_PARAMETERS']['SECTION_CODE']));



if (!empty($arResult['NAV_RESULT']))
{
	$navParams =  array(
		'NavPageCount' => $arResult['NAV_RESULT']->NavPageCount,
		'NavPageNomer' => $arResult['NAV_RESULT']->NavPageNomer,
		'NavNum' => $arResult['NAV_RESULT']->NavNum
	);
}
else
{
	$navParams = array(
		'NavPageCount' => 1,
		'NavPageNomer' => 1,
		'NavNum' => $this->randString()
	);
}



?>



<div class="prdt">
	<div class="product-one">

		<?php foreach($arResult['ITEMS'] as $arItem) : ?>
			<?php
			$uniqueId = $arItem['ID'].'_'.md5($this->randString().$component->getAction());
			$areaIds[$arItem['ID']] = $this->GetEditAreaId($uniqueId);
			$this->AddEditAction($uniqueId, $arItem['EDIT_LINK'], $elementEdit);
			$this->AddDeleteAction($uniqueId, $arItem['DELETE_LINK'], $elementDelete, $elementDeleteParams);


			?>
			<div class="col-md-4 product-left p-left" id="<?=$this->GetEditAreaId($uniqueId)?>">
				<div class="product-main simpleCart_shelfItem">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="mask">
						<img class="img-responsive zoom-img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt=""></a>
					<div class="product-bottom">
						<h3><?=$arItem['NAME']?></h3>
						<h4>
							<?php if( in_array($arItem['ID'], $_SESSION['idList']) ) : ?>
								
								<a class="" href="#" onclick="return false;" data-id="<?=$arItem['ID']?>">
									<i style="opacity: 0.3;"></i>
								</a> 
							<?php else : ?>
								<span class="button_container">
									<a class="item_add home_item_add" href="#" onclick="return false;" data-id="<?=$arItem['ID']?>">
										<i></i>
									</a> 
								</span>
							<?php endif; ?>

							
							<span class=" item_price"><?=$arItem['PRICES']['basical']['PRINT_VALUE']?></span>
						</h4>
					</div>
					<!-- <div class="srch srch1">
						<span>-50%</span>
					</div> -->
				</div>
			</div>
		<?php endforeach; ?>

		<div class="clearfix"></div>

	</div>
	<?php if($arParams['DISPLAY_BOTTOM_PAGER']) : ?>
		<div data-pagination-num="<?=$navParams['NavNum']?>">
			<!-- pagination-container -->
			<?=$arResult['NAV_STRING']?>
			<!-- pagination-container -->
		</div>
	<?php endif; ?>
</div>










