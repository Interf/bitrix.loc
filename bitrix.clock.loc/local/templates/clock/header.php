<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;

$mainPage = $APPLICATION->GetCurPage() == SITE_DIR;

$_SESSION['idList'] = [];
?>


<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<?php $APPLICATION->ShowHead();?>
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
	<?php
	Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH."/css/bootstrap.css");
	
	//theme-style
	Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH."/css/style.css");

	//jquery
	CJSCore::Init(array("jquery"));


	//dropdown
	Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/jquery.easydropdown.js");

	//memenu
	Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH."/css/memenu.css");
	Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/memenu.js");
	// Asset::getInstance()->AddString('<script>$(document).ready(function(){$(".memenu").memenu();});</script>');





	// slider
	Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH."/js/responsiveslides.min.js");

	?>
	



	</head>
	<body> 
		<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
		<!--top-header-->
		<div class="top-header">
			<div class="container">
				<div class="top-header-main">
					<div class="col-md-6 top-header-left">
					</div>
					<div class="col-md-6 top-header-left">
						<div class="cart box_1">
							<a href="/cart">
								<div class="total">
									<span class="simpleCart_total"></span></div>
									<img src="<?=SITE_TEMPLATE_PATH?>/images/cart-1.png" alt="" />
								</a>
								<p class="header-cart">
									<?php $result = checkCountBasket();?>
									<?php if($result['totalPrice'] == 0) : ?>
										<a href="/cart">Корзина пуста</a>
									<?php else : ?>
										<?php $_SESSION['idList'] = $result['idList']; ?>
										<a href="/cart">
											<?=$result['totalPrice']?> руб. (Кол-во: <?=$result['cntBasket']?>)
										</a>
									<?php endif; ?>
								</p>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--top-header-->
			<!--start-logo-->
			<div class="logo">
				<a href="/"><h1>Luxury Watches</h1></a>
			</div>
			<!--start-logo-->
			<!--bottom-header-->

			<div class="header-bottom">
				<div class="container">
					<div class="header">


						<!-- menu -->
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
								"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							),
												false
						);?>
						<!-- menu-end -->



						<!-- search -->
						<?$APPLICATION->IncludeComponent("bitrix:search.form", "header.search.form", Array(
							"PAGE" => "#SITE_DIR#search/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
								"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
							),
						false
						);?>
						
						<!-- end-search -->
						<div class="clearfix"></div>
					</div>
				</div>
			</div>






			<!--bottom-header-->


			<?php if($mainPage) : ?>

				<!--banner-starts-->


				<?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "N",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => $_REQUEST["ID"],	// Код информационного блока
					"IBLOCK_TYPE" => "slider",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "55",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
				),
				false
				);?>
				
				<!--banner-ends--> 

			<?php else : ?>

				<!--start-breadcrumbs-->
				<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumb", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "breadcrumb"
	),
	false
);?>

				
				<!--end-breadcrumbs-->

			<?php endif; ?>



			<!-- work-area -->
			<div class="work-area">
				<div class="container">
					
