<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(isset($_POST['do_add']) && $_POST['do_add'] == 1) {

	// подключение служебной части пролога

	if(\Bitrix\Main\Loader::includeModule('sale'))
		{
			$product_id = (int) $_POST['itemID'];

			$add_prod = \Bitrix\Catalog\Product\Basket::addProduct(
				['PRODUCT_ID' => $product_id, "QUANTITY" => 1]
			);



			$dbBasketItems = CSaleBasket::GetList(
				array( 
					"ID" => "ASC"
					), // arOrder 
				array( 
					"FUSER_ID" => CSaleBasket::GetBasketUserID(),
					"LID" => SITE_ID,
					"ORDER_ID" => "NULL",                            
					), //arFilter 
					false, //arGroupBy 
					false, //arNavStartParams 
					array("PRODUCT_ID", "QUANTITY", "PRICE") // arSelect
				);

			if($dbBasketItems != null) {
				$cntBasket = 0;
				$totalPrice = 0;

				while ($arItems = $dbBasketItems->Fetch())
				{
					$totalPrice += $arItems['QUANTITY'] * $arItems['PRICE'];
					$cntBasket += $arItems['QUANTITY'];
				}

				$result["totalPrice"] = $totalPrice; 
				$result["cntBasket"] = $cntBasket; 

			} else {
				$result = false;
			}

		}


		echo \Bitrix\Main\Web\Json::encode($result);

	} else {
		LocalRedirect("/404.php", "404 Not Found");
	}
		// подключение служебной части эпилога

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");


	?>
