<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
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
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">	

	<!-- Scripts -->
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery/jquery.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery/jquery.min.js"></script>
  	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery/jquery-migrate.min.js"></script>
  	<script src="<?=SITE_TEMPLATE_PATH?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
   	<script src="<?=SITE_TEMPLATE_PATH?>/lib/magnific-popup/magnific-popup.min.js"></script>
   	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.plaxmove.js" type="text/javascript" charset="utf-8">
   	</script>
</head>
<body id="body">
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>

<!--========================== Top Bar ============================-->

	<section id="topbar" class="d-none d-lg-block">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-info float-right">
			  			<ul class="nav-menu">
							<li class="menu-active">
								<a href="/o-kompanii
/">О компании</a>
							</li>
							<li class="menu-active">
								<a href="/novosti/">Мир упаковки</a>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:contact@aruna.com">contact@aruna.com</a>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<a href="tel:+79991111111">+7 999 999999</a>
							</li>
			  			</ul>  
					</div>
				</div>
			</div>
		</div>
	</section>

<!--========================== Header ============================-->
	<header id="header">
    	<div class="container-fluid">
    		<div class="row">
				<div class="col-md-12">

      				<nav id="nav-menu-container" >
      					<div id="logo" class="pull-left">
        				<a href="/">
        					<img src="/bitrix/templates/arunapac/img/logo-top.png" alt="Аруна">
        				</a>	
     				</div>
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

<!--========================== Intro Section ============================-->
<!--========================== Заголовок разделов ============================-->

	<? if ($APPLICATION->GetCurPage(false) == '/novosti/'): ?>		
		<div class="row intro-content">
	  		<div class="col">
                <div class="bg-razdela bg-novosti">
                     <h1>
                     	<span class="span-h1-blue">
	  				     новости		
	  				    </span>
	  				 </h1>			
				</div>
			</div>
		</div>	
	<? elseif ($APPLICATION->GetCurPage(false) == '/proizvodstvo/'): ?>
		<div class="row intro-content">
	  		<div class="col">
                <div class="bg-razdela bg-proizvodstvo">
                     <h1>
                     	<span class="span-h1-blue">
	  				     производство		
	  				    </span>
	  				 </h1>			
				</div>
			</div>
		</div>
	<? elseif ($APPLICATION->GetCurPage(false) == '/produkciya/'): ?>
		<div class="row intro-content">
	  		<div class="col">
                <div class="bg-razdela bg-produkciya">
                     <h1>
                     	<span class="span-h1-blue">
	  				     продукция		
	  				    </span>
	  				 </h1>			
				</div>
			</div>
		</div>
	<? elseif ($APPLICATION->GetCurPage(false) == '/uslugi/'): ?>
		<div class="row intro-content">
	  		<div class="col">
                <div class="bg-razdela bg-uslugi">
                     <h1>
                     	<span class="span-h1-blue">
	  				     услуги		
	  				    </span>
	  				 </h1>			
				</div>
			</div>
		</div>
	<?endif;?>


  <!--========================== Крошки ============================-->

	<? if ($APPLICATION->GetCurPage(false) != '/'): ?>		
		<div class="container">
	  		<div class="row">
	  			<div class="col">
					<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumb_aruna", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "breadcrumb_aruna"
	),
	false
);?>
				</div>
			</div>
		</div>	
	<?endif;?>


<!--========================== #Main ============================-->
			
	<main id="main">		

<!--========================== Intro Section ============================
	<?if ($LEFT_MENU == "Y"):?>
	  	<div class="container">
	  		<div class="row">
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
								"CHILD_MENU_TYPE" => "left",
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
				<?endif?>

				-->