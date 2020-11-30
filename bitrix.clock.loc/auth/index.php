<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"FORGOT_PASSWORD_URL" => "/auth/forget",
		"PROFILE_URL" => "/personal",
		"REGISTER_URL" => "/auth/register",
		"SHOW_ERRORS" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>