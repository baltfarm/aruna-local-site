<?
$menu_top2level = 1;
$aMenuLinks = Array(
);
?><? 
  if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
  global $APPLICATION; 
  $aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/polimernaya-upakovka/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#.html",
		"IBLOCK_TYPE" => "packaging",
		"IBLOCK_ID" => "2",
		"DEPTH_LEVEL" => "2",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"MENU_SHOW_SECTIONS" => "Y"
	),
	false
); 
  $aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks); 
?>