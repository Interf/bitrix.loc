<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php $APPLICATION->ShowHead(); ?>
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<?php
	Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/script.js");

	Asset::getInstance()->AddString('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">');
	Asset::getInstance()->AddString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>');
	Asset::getInstance()->AddString('<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>');
	Asset::getInstance()->AddString('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>');
	?>
</head>
<body>
	<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
	<div class="container" style="margin-top: 25px;">
		<div class="row">
			<div class="col-lg-3">
				<div class="menu">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "left",
							"USE_EXT" => "Y"
						)
					);?><br>
				</div>
				<hr>
				<div class="search">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => ""
						)
					);?><br>
				</div>
			</div>
			<!-- work-area -->
			<div class="col-lg-9">
				

