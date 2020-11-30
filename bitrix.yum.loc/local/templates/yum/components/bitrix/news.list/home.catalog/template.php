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




<div class="proj-home loadmore_wrap">
	
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div class="proj-home-block loadmore_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="proj-home-first-block">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
			</div>

			<div class="proj-home-second-block">

			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
				<?else:?>
					<div class="proj-home-name">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
					</div>
				<?endif;?>
			<?endif;?>

				<div class="proj-home-info">
					
					<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							<?php if($pid == "GENERS") :?>
							Жанры:
							<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
								<?=implode(", ", $arProperty["DISPLAY_VALUE"]);?>
								<?else:?>
									<?=$arProperty["DISPLAY_VALUE"];?>
								<?endif?>
							<?php endif; ?>
					<?endforeach;?>
						
					
				</div>
			</div>
		</div>

	<?php endforeach; ?>

</div>


<div class="paginator-home">
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>