        </section>
        <?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
          IncludeTemplateLangFile(__FILE__);
        ?>
      

</main>

<!--==========================  Footer ============================-->
<footer id="footer" class="wow fadeInUp">
  <div class="container">
    <div class="row justify-content-center">            
      <div class="col-lg-4 col-md-auto w-auto">
<div class="row">
      <div class="d-none d-lg-block col-lg-2">
        <img class="logo-bottom" src="/bitrix/templates/arunapac/img/logo-top.png">
      </div>

<div class="col-lg-10 col-md-auto">
        <ul class="navigation">
          <li>
            <i class="fa fa-phone"></i>
            <a href="tel:+79991111111">+7 999 999999</a>
          </li>
          <li>
            <i class="fa fa-envelope-o"></i>
            <a href="mailto:contact@aruna.com">contact@aruna.com</a>
          </li>
        </ul> 
</div>
 </div>


      </div>
      <div class="d-none d-md-block col-md-auto">
        <div class="">
          <?$APPLICATION->IncludeComponent(
            "bitrix:menu", 
            "bottom_menu_aruna", 
            array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "",
              "DELAY" => "N",
              "MAX_LEVEL" => "1",
              "MENU_CACHE_GET_VARS" => array(
              ),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "N",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "bottom",
              "USE_EXT" => "N",
              "COMPONENT_TEMPLATE" => "bottom_menu_aruna",
              "MENU_THEME" => "site"
            ),
            false
          );?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="copyright">© 2018  <strong>ООО «Аруна»</strong>. Все права защищены.
        </div>
      </div>
    </div>
  </div>   
</footer>

<!-- #footer -->

<a href="#" class="back-to-top">
  <i class="fa fa-chevron-up"></i>
</a>

<!-- JavaScript Libraries -->

<script src="<?=SITE_TEMPLATE_PATH?>/lib/easing/easing.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/lib/superfish/hoverIntent.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/lib/superfish/superfish.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/lib/wow/wow.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/lib/sticky/sticky.js"></script>
<script src="/bitrix/templates/arunapac/components/bitrix/news.list/style.js"></script>

<!-- Template Main Javascript File -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

</body>
</html>