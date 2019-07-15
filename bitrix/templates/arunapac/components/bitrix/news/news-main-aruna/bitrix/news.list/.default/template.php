<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
 <div class="carousel-wrapper">
  <div class="carousel-items">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
	
<?endif;
$nnews = 0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="carousel-block"> 
<div class="card">  		         
    <div class="card-body">
	<a href="<?echo $arItem[DETAIL_PAGE_URL]?>">

<div  class="card-text">
<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
				<?endif?>
<p class=""><?echo $arItem["NAME"]?></p>
		</div>
	</a>	
</div>
</div>
</div>			
<?endforeach;?>   
</div>
</div>
  <a class="carousel-control-prev carousel-control-prev-icon" href="#" ></a>
  <a class="carousel-control-next carousel-control-next-icon" href="#" ></a>