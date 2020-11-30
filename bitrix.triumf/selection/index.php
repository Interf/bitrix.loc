<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подборка тура");





if(!empty($_POST["do_select"])) {

	$iBlock_id = (int) $_POST['country'];
	$idCity = (int) $_POST['city'];



	// hotels
	$arSelect = Array("ID");
	$arFilter = Array("IBLOCK_ID"=>2, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_LINK_CITY.ID" => $idCity);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arHotels[] = $ob->GetFields();

	}

	foreach($arHotels as $arItem) {
		$idHotels[] = $arItem['ID'];
	}
	

	// Tours
	$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
	$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_LINK_HOTEL.ID" => $idHotels);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arTours[] = $ob->GetFields();

	}

	$_SESSION['tours'] = $arTours;

	header("Location: ".$_SERVER["REQUEST_URI"]);
	exit;
}

?>

<h1>Найденные туры:</h1>

<div class="tours">
	<?php if(isset($_SESSION['tours'])) : ?>
		<?php foreach($_SESSION['tours'] as $arItem) : ?>
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME'];?></a> <br>
		<?php endforeach; ?>
		<?php unset($_SESSION['tours']) ?>
	<?php endif; ?>
</div>






<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>