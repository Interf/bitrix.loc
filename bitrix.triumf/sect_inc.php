
<?php
$arSelect = array("ID", "NAME");
$arFilter = ['IBLOCK_ID'=>1, 'GLOBAL_ACTIVE'=>'Y'];
$arSec = CIBlockSection::GetList(
    Array("SORT"=>"ASC"),
    $arFilter,
    false,
    $arSelect,
    false
);
while($ar_res = $arSec->GetNext()) {
	$arSection[] = $ar_res;
}


?>

<h3>Подборка тура</h3>

<form action="/selection/" method="POST">
	
	<label for="#country">Страна:</label>
	<div class="input_box">
		<select name="country" id="country">
			<option disabled="" selected="">Выберите страну</option>
			<?php foreach($arSection as $arItem) : ?>
				<option value="<?=$arItem['ID']?>"><?=$arItem['NAME'];?></option>
			<?php endforeach; ?>
		</select>
	</div>
	
	<label for="#city">Город:</label>
	<div class="input_box">
		<select name="city" id="city">
			<option value="1" disabled="" selected="">выберите город</option>
		</select>
	</div>

	<br>
	<button class="btn btn-success do_select" type="submit" name="do_select" value="1">Поиск</button>


</form>