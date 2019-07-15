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

/*

<div class="row no-gutters">
		<div class="col-lg-3 col-md-4">
			<div class="news-item wow fadeInUp">
				<a href="#1" class="news-popup"> 
					<img src="bitrix/templates/aruna/img/news/news.jpg" alt="">
					<div class="news-overlay">
						<div class="news-info">
							<h2 class="wow fadeInUp">Новость 1</h2>
						</div>
					</div>
 				</a>
			</div>
		</div>
</div>

*/

$this->setFrameMode(true);
?>
<div class="row no-gutters">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-lg-3 col-md-4 col-sm-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="news-item wow fadeInUp">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-popup">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<img 	
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						alt="<?=$arItem["NAME"]?>"
						title="<?=$arItem["NAME"]?>"								
						/>
					<?else:?>
						<img
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"							
							alt="<?=$arItem["NAME"]?>"
							title="<?=$arItem["NAME"]?>"							
							/>
					<?endif;?>
				<?endif?>
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
				<?endif?>
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<div class="news-overlay">
								<div class="news-info">
									<h2 class="wow fadeInUp"><?echo $arItem["NAME"]?></h2>

								</div>
							</div>


						
					<?else:?>
						<div class="news-overlay">
								<div class="news-info">
									<h2 class="wow fadeInUp"><?echo $arItem["NAME"]?></h2>

								</div>
							</div>
					<?endif;?>
				<?endif;?>
		
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</a>
	</div>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
