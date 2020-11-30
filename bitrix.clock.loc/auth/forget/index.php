<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление забытого пароля");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.forgotpasswd", "forgetpass", Array(
	"FORGOT_PASSWORD_URL" => "/auth/forget/",
		"PROFILE_URL" => "/personal",
		"REGISTER_URL" => "/auth/register",
		"SHOW_ERRORS" => "N"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>