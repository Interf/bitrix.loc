<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;

$mainPage = $APPLICATION->GetCurPage() == SITE_DIR;
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<?php $APPLICATION->ShowHead(); ?>
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<!-- Адаптивность -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="">

	
	<?php
	// font
	Asset::getInstance()->AddString('<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">');

	// Css
	Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH.'/css/style.css');


	// Bootstrap CSS
	Asset::getInstance()->AddString('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">');

	// Jquery\JS
	Asset::getInstance()->AddString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>');
	Asset::getInstance()->AddString('<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>');
	Asset::getInstance()->AddString('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>');


	?>


	


</head>
<body>
	<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
	<div class="top">
		
	</div>
	
	<header>
		<div class="container">

			

			<?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>




		</div>
	</header>
	<div class="container">
		
	<?php if($APPLICATION->GetCurPage() != "/search/") : ?>
		<?$APPLICATION->IncludeComponent("bitrix:search.form", "home.search", Array(
	"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
	),
		false
		);?>
	<?php endif; ?>