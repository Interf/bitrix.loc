<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>


<!--contact-start-->
<div class="contact">
	<div class="container">
		<div class="contact-top heading">
			<h2>CONTACT</h2>
		</div>
		<div class="contact-text">
	
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => ""
				)
				);?>


				<!-- form -->
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.feedback", 
					"feedback", 
					array(
						"EMAIL_TO" => "int@int.int",
						"EVENT_MESSAGE_ID" => array(
							0 => "7",
						),
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"REQUIRED_FIELDS" => array(
							0 => "NAME",
							1 => "EMAIL",
							2 => "MESSAGE",
						),
						"USE_CAPTCHA" => "Y",
						"COMPONENT_TEMPLATE" => "feedback"
					),
					false
					);?>

				<!-- end-form -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--contact-end-->
	<!--map-start-->
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "page",
			"AREA_FILE_SUFFIX" => "inc2",
			"EDIT_TEMPLATE" => ""
		)
		);?>
	<!--map-end-->










	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>