<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


function dump($data)
{
	echo "<pre>". print_r($data, 1) ."</pre>";
}




function checkCountBasket()
{
	if(\Bitrix\Main\Loader::includeModule('sale')) {
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
				$result['idList'][] = $arItems['PRODUCT_ID'];
				$totalPrice += $arItems['QUANTITY'] * $arItems['PRICE'];
				$cntBasket += $arItems['QUANTITY'];
			}

			$result["totalPrice"] = $totalPrice; 
			$result["cntBasket"] = $cntBasket; 

		} else {
			$result = false;
		}
	}

	return $result;
}


