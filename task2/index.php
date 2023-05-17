<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/header.php';
$APPLICATION->SetTitle("Связаться");
?><?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"contact",
	Array(
		"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "Y",
		"LIST_URL" => "",
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"SUCCESS_URL" => "/success.php",
		"USE_EXTENDED_ERRORS" => "Y",
		"VARIABLE_ALIASES" => Array(),
		"WEB_FORM_ID" => "1"
	)
);?> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>