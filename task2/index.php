<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/header.php';
$APPLICATION->SetTitle("Связаться");
?>

<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "contact", Array(
    "SEF_MODE" => "Y", 
    "WEB_FORM_ID" => "1", 
    "LIST_URL" => "", 
    "EDIT_URL" => "", 
    "SUCCESS_URL" => "", 
    "CHAIN_ITEM_TEXT" => "", 
    "CHAIN_ITEM_LINK" => "", 
    "IGNORE_CUSTOM_TEMPLATE" => "Y", 
    "USE_EXTENDED_ERRORS" => "Y", 
    "CACHE_TYPE" => "A", 
    "CACHE_TIME" => "360000", 
    "SEF_FOLDER" => "/", 
    "VARIABLE_ALIASES" => Array(
    )
)
);?>
<br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>