<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заявка");
?><div class="container">
     <div class="row">
	  <div class="col section-header">
	<h1><?$APPLICATION->ShowTitle('h1')?></h1>
	<p>
		 Условия заявки
	</p>
</div>
</div>
 <div class="row">
	  <div class="col">
<?$APPLICATION->IncludeComponent(
	"api:feedbackex", 
	"aruna-zayvka", 
	array(
		"API_FEX_FORM_ID" => "aruna-zayvka",
		"BCC" => "",
		"COLOR" => "default",
		"CONFIG_PATH" => "/bitrix/php_interface/include/api.feedbackex/zayvka2.php",
		"DATETIME" => "",
		"DIR_URL" => "",
		"DISABLE_CHECK_SESSID" => "N",
		"DISABLE_SEND_MAIL" => "N",
		"DISPLAY_FIELDS" => array(
		),
		"EMAIL_ERROR_MESS" => "Указанный E-mail некорректен",
		"EMAIL_TO" => "levin@baltfarm.ru",
		"FIELD_ERROR_MESS" => "#FIELD_NAME# обязательное",
		"FIELD_NAME_POSITION" => "stacked",
		"FIELD_SIZE" => "default",
		"FORM_AUTOCOMPLETE" => "Y",
		"FORM_CLASS" => "",
		"FORM_FIELD_WIDTH" => "",
		"FORM_LABEL_TEXT_ALIGN" => "left",
		"FORM_LABEL_WIDTH" => "",
		"FORM_SUBMIT_CLASS" => "btn btn-info",
		"FORM_SUBMIT_STYLE" => "",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"FORM_TEXTAREA_ROWS" => "5",
		"FORM_TITLE" => "Обратная связь",
		"FORM_TITLE_LEVEL" => "3",
		"FORM_WIDTH" => "",
		"HIDE_ASTERISK" => "N",
		"HIDE_FIELD_NAME" => "N",
		"MAIL_SEND_USER" => "N",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
		"MAIL_SUBJECT_USER" => "#SITE_NAME#: Копия сообщения из формы обратной связи",
		"OK_TEXT" => "Сообщение успешно отправлено",
		"OK_TEXT_AFTER" => "Спасибо! Мы рассмотрим сообщение и обязательно свяжемся с Вами.<br>Пожалуйста, дождитесь ответа.",
		"PAGE_TITLE" => "",
		"PAGE_URL" => "",
		"REPLACE_FIELD_FROM" => "Y",
		"REQUIRED_FIELDS" => array(
		),
		"SCROLL_SPEED" => "1000",
		"THEME" => "gradient",
		"TITLE_DISPLAY" => "N",
		"USE_AUTOSIZE" => "Y",
		"USE_EULA" => "Y",
		"USE_FLATPICKR" => "Y",
		"USE_JQUERY" => "Y",
		"USE_MODAL" => "N",
		"USE_PLACEHOLDER" => "Y",
		"USE_PRIVACY" => "N",
		"USE_SCROLL" => "Y",
		"WRITE_MESS_DIV_STYLE" => "",
		"WRITE_MESS_DIV_STYLE_NAME" => "",
		"WRITE_MESS_DIV_STYLE_VALUE" => "",
		"WRITE_MESS_FILDES_TABLE" => "N",
		"WRITE_MESS_TABLE_STYLE" => "",
		"WRITE_MESS_TABLE_STYLE_NAME" => "",
		"WRITE_MESS_TABLE_STYLE_VALUE" => "",
		"COMPONENT_TEMPLATE" => "aruna-zayvka",
		"MESS_EULA" => "Нажимая кнопку «Отправить», я принимаю условия Пользовательского соглашения и даю своё согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных Политикой конфиденциальности.",
		"MESS_EULA_CONFIRM" => "Для продолжения вы должны принять условия Пользовательского соглашения"
	),
	false
);?>
</div>
</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>