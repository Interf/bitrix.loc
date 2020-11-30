<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


if(isset($_POST['do_select'])) {


	if(\Bitrix\Main\Loader::includeModule('iblock'))
		{


			$iBlock_id =  (int) $_POST["iBlock_id"];




			$arSelect = Array("ID", "NAME");
			$arFilter = Array("IBLOCK_ID"=>1, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID" => $iBlock_id);
			$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
			while($ob = $res->GetNextElement())
			{
				$arCity[] = $ob->GetFields();
				
			}


			foreach($arCity as $arItem) {
				$res_city[] = "<option value='".$arItem['ID']."'>".$arItem['NAME']."</option>";
			}


			echo json_encode($res_city);

		}

	



}






require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>