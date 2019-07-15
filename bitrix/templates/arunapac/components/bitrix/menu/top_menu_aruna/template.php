<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
<ul class="nav-menu-big nav-menu-flex">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<!-- Передача параметра для вывода бокового меню 1---->
<?if (($arItem["SELECTED"]) && ($arItem["PARAMS"]["LEFT_MENU"] == "Y")):?>
<?$GLOBALS['LEFT_MENU'] =$arItem["PARAMS"]["LEFT_MENU"]?> <?endif?>
<!---------------------------->

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?><!--end-->
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="<?if ($arItem["SELECTED"]):?>menu-active<?endif?>"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
				<!-- 001----><div class="nav-menu-box row">
		<?else:?>
			<!-- 002----> <li<?if ($arItem["SELECTED"]):?> class="menu-active"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<div>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<!-- 003----><li class="<?if ($arItem["SELECTED"]):?>menu-active<?endif?>"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<!-- 004---->				

				<div<?if ($arItem["SELECTED"]):?> class="menu-active"<?endif?>>
                <a href="<?=$arItem["LINK"]?>">
                <img src="<?=$arItem["PARAMS"]["IMG"]?>" border="0"/>
                <p><?=$arItem["TEXT"]?></p>
				</a></div>
			<?endif?>



		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<!-- 005----><li class="<?if ($arItem["SELECTED"]):?>menu-active<?endif?>"><a href=""  title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</div></li>", ($previousLevel-1) );?>
<?endif?>

</ul>

<?endif?>