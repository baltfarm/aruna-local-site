<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="container" id="razdel">
  <div class="row  section-header">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    
    <div class="col-12 razdel-block ">
      <div class="row text-center">
        <div class="col text-center">
          <h2 class="content-title">
           <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
           <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
           <?echo $arItem["NAME"]?>
           <?else:?>
           <?echo $arItem["NAME"]?>
           <?endif;?>
           <?endif;?>
         </h2>
       </div>
     </div>
     <div class="row"> 
      <div class="col-12 razdel-block-content">
        <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
        <small>
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
        </small> 
        <?endif?> 
        <p class="razdel-block-description">
          <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
          <?echo $arItem["PREVIEW_TEXT"];?>
          <?endif;?>
        </p>
      </div>
    </div> 
  </div> 
  <?endforeach;?>
  <div class="row w-100">
    <div class="col text-center">
      <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>    
      <?=$arResult["NAV_STRING"]?>
      <?endif;?>
    </div></div>
  </div>   </div>
