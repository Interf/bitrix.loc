<?
// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


if(CModule::IncludeModule("iblock"))
	{ 
      //здесь можно использовать функции и классы модуля



		$arOrder = ["RAND" => "rand"];
		$arFilter = ['ACTIVE' => "Y", "IBLOCK_ID" => 1, 'CHECK_PERMISSIONS' => 'Y',];
		$navStart = ['nTopCount' => 1];
		$arSelect = ["DETAIL_PAGE_URL"];
		$rsList = CIBlockElement::GetList(
			$arOrder,
			$arFilter,
			false,
			$navStart,
			$arSelect
		);

		if($ar_rs = $rsList->GetNext()) {
			if($ar_rs['DETAIL_PAGE_URL']) {
				LocalRedirect($ar_rs['DETAIL_PAGE_URL']);
			} else {
				LocalRedirect('/');
			}
		};



	}



?>


