<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="section-header">
  <h2>Заявка</h2>
  <p>
     Text... text... text... text...
  </p>
</div>




<div id="contact" class="conteiner">
  <div class="form">
    

    <?if(!empty($arResult["ERROR_MESSAGE"]))
{
  foreach($arResult["ERROR_MESSAGE"] as $v)
    ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
  ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>



    <form action="<?=POST_FORM_ACTION_URI?>" method="POST" role="form" class="contactForm"><?=bitrix_sessid_post()?>
      <div class="form-row">
        <div class="form-group col-md-6">


 <input type="text" name="user_name" class="form-control" id="name" placeholder="Отправитель" data-rule="minlen:4" data-msg="Длина текста не менее 4 символов">
          <div class="validation">
          </div>
        </div>
        <div class="form-group col-md-6">
 <input type="email" class="form-control" name="user_email" id="email" placeholder="Email" data-rule="email" data-msg="Введите существующий Email">
          <div class="validation">
          </div>
        </div>
      </div>
      
      </div>
      <div class="form-group">
 <textarea class="form-control" name="MESSAGE" rows="5" data-rule="required" data-msg="Текст сообщения" placeholder="Текст сообщения"></textarea>
        <div class="validation">
        </div>
      </div>

<?if($arParams["USE_CAPTCHA"] == "Y"):?>
  <div class="mf-captcha">
    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
    <input type="text" name="captcha_word" size="30" maxlength="50" value="">
  </div>
  <?endif;?>
   <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

      <div class="text-center">

  <input type="submit" class="btn btn-info" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
      </div>
    </form>
  </div>
</div>
