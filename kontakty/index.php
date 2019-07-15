<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="container">
<div class="row section-header justify-content-center h2-blue">
	<div class="col-auto">
<h2><?$APPLICATION->ShowTitle('h1')?></h2>
</div></div>
<div id="contact">
	<div class="row contact-info">
		<div class="col-md-4">
			<div class="contact-address">
 <i class="ion-ios-location-outline"></i>
				<h3>Адрес</h3>
 <address>г. Калининград</address>
			</div>
		</div>
		<div class="col-md-4">
			<div class="contact-phone">
 <i class="ion-ios-telephone-outline"></i>
				<h3>Телефоны</h3>
				<p>
 <a href="tel:+7999000000">+7 999 00 00 000</a>
				</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="contact-email">
 <i class="ion-ios-email-outline"></i>
				<h3>Email</h3>
				<p>
 <a href="mailto:contact@aruna.com">contact@aruna.com</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="row">
<div class="col-auto"
	<p>
		 ООО "АРУНА"
	</p>
	<p>
		 График работы
	</p>
	<p>
		 Text... text... text... text...
	</p>
</div>
</div>
<div class="conteiner">
	<div class="row">
		<div class="col">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"CONTROLS" => array("SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";d:54.70693751693436;s:10:\"yandex_lon\";d:20.487116083521435;s:12:\"yandex_scale\";i:15;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?>
		</div>
	</div>
</div>
 <br>
 <?$APPLICATION->IncludeComponent(
	"api:feedbackex", 
	"send-aruna", 
	array(
		"API_FEX_FORM_ID" => "aruna-form1",
		"BCC" => "",
		"COLOR" => "default",
		"COMPONENT_TEMPLATE" => "send-aruna",
		"CONFIG_PATH" => "",
		"DATETIME" => "",
		"DIR_URL" => "",
		"DISABLE_CHECK_SESSID" => "N",
		"DISABLE_SEND_MAIL" => "N",
		"DISPLAY_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
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
		"HIDE_FIELD_NAME" => "Y",
		"MAIL_SEND_USER" => "N",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
		"MAIL_SUBJECT_USER" => "#SITE_NAME#: Копия сообщения из формы обратной связи",
		"MESS_EULA" => "Нажимая кнопку «Отправить», я принимаю условия Пользовательского соглашения и даю своё согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных Политикой конфиденциальности.",
		"MESS_EULA_CONFIRM" => "Для продолжения вы должны принять условия Пользовательского соглашения",
		"MODAL_BTN_CLASS" => "api_button",
		"MODAL_BTN_ID" => "",
		"MODAL_BTN_SPAN_CLASS" => "api_icon",
		"MODAL_BTN_TEXT" => "Обратная связь",
		"MODAL_FOOTER_TEXT" => "",
		"MODAL_HEADER_TEXT" => "Обратная связь",
		"MODAL_ID" => "#API_FEX_MODAL_aruna-form1",
		"OK_TEXT" => "Сообщение успешно отправлено",
		"OK_TEXT_AFTER" => "Спасибо! Мы рассмотрим сообщение и обязательно свяжемся с Вами.<br>Пожалуйста, дождитесь ответа.",
		"PAGE_TITLE" => "",
		"PAGE_URL" => "",
		"REPLACE_FIELD_FROM" => "Y",
		"REQUIRED_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"SCROLL_SPEED" => "1000",
		"THEME" => "gradient",
		"TITLE_DISPLAY" => "Y",
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
		"WRITE_MESS_TABLE_STYLE_VALUE" => ""
	),
	false
);?><br>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>