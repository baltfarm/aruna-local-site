<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png" rel="icon">
	<link href="<?=SITE_TEMPLATE_PATH?>/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">	
</head>
<body id="body">
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
<!--==========================
    Top Bar
  ============================-->
	<section id="topbar" class="d-none d-lg-block">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-info float-right">
			  			<ul class="nav-menu">
							<li class="menu-active">
								<a href="/o-kompanii/">О компании</a>
							</li>
							<li class="menu-active">
								<a href="/novosti/">Мир упаковки</a>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="#about">contact@aruna.com</a>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								+7 999 00 00 000
							</li>
			  			</ul>  
					</div>
				</div>
			</div>
		</div>
	</section>
<!--==========================
    Header
  ============================-->
	<header id="header">
    	<div class="container">
    		<div class="row">
				<div class="col-md-2">
					<div id="logo" class="pull-left">
        				<h1>
        					<a href="/" class="scrollto">АРУНА</a>
        				</h1>
     				</div>
     			</div>
				<div class="col-md-10">
      				<nav id="nav-menu-container" >
						<div id="top-menu">
        					<div id="top-menu-inner">
								<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu_aruna", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top2level",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu_aruna"
	),
	false
);?>
					        </div>
						</div>
					</nav>
				</div> 
			</div>
		</div>
	</header>

<!--==========================
    Intro Section
  ============================-->
	<? if ($APPLICATION->GetCurPage(false) == '/'): ?>
		<section id="intro">
		  	<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"slider_aruna_big", 
				array(
					"IBLOCK_ID" => "1",
					"COMPONENT_TEMPLATE" => "slider_aruna_big",
					"IBLOCK_TYPE" => "slyder",
					"NEWS_COUNT" => "5",
					"SORT_BY1" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_BY2" => "SORT",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"CHECK_DATES" => "Y",
					"TEMPLATE_THEME" => "blue",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_TITLE" => "N",
					"SET_BROWSER_TITLE" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_LAST_MODIFIED" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"MEDIA_PROPERTY" => "",
					"SLIDER_PROPERTY" => "",
					"SEARCH_PAGE" => "/search/",
					"USE_RATING" => "N",
					"USE_SHARE" => "N",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => ""
				),
				false
			);?>
		</section>
	<?else:?>
<!--==========================
    Крошки  
  ============================-->


	<div class="container">
  		<div class="row">
  			<div class="col">
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb", 
					"breadcrumbs", 
					array(
						"PATH" => "",
						"SITE_ID" => "s1",
						"START_FROM" => "",
						"COMPONENT_TEMPLATE" => "breadcrumbs"
					),
					false
				);?>
			</div>
		</div>
	</div>
	<?endif;?>
						
<!--==========================
    Intro Section
  ============================-->
  	<div class="container">
  		<div class="row">
  			<?if ($LEFT_MENU == "Y"):?>
				<div class="col-md-3 d-none d-md-block">
 			 		<section id="menu_left" class="wow fadeInUp">
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu", 
							"left_menu_aruna", 
							array(
								"ROOT_MENU_TYPE" => "top2level",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "top2level",
								"USE_EXT" => "Y",
								"ALLOW_MULTI_SELECT" => "N",
								"COMPONENT_TEMPLATE" => "left_menu_aruna",
								"DELAY" => "N",
								"MENU_THEME" => "site"
							),
							false,
							array(
								"ACTIVE_COMPONENT" => "Y"
							)
						);?>
					</section>
				</div>
				<div class="col-md-9 content">
			<?else:?>
				<div class="col-md-12 content">
			<?endif?>
  			<main id="main">

<!--==========================
      About Section
    ============================-->
    			<section id="about" class="wow fadeInUp">
        