<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/*
use Bitrix\Main\Loader;
*/
/**
 * @var array $templateData
 * @var array $arParams
 * @var string $templateFolder
 * @global CMain $APPLICATION
 */


if (CModule::IncludeModule("iblock")):
    $elementID = $arResult['ID'];
    $iblockId = $arResult['IBLOCK_ID'];
   
    $arrayLinks = array();
    
    $linkedArray = CIBlockElement::GetList(
        Array("ID" => "ASC"),
        Array("IBLOCK_ID" => $iblockId, "ID" => $elementID),
        false,
        false,
        Array(
            'ID',
            'PROPERTY_SIMILAR_PRODUCT'
        )
    );

    while ($ar_fields = $linkedArray->GetNext()) {
 
        $LincedIsEmpty = $ar_fields['PROPERTY_SIMILAR_PRODUCT_VALUE'];//Если есть связанные
   $arrayLinks[] = $ar_fields['PROPERTY_SIMILAR_PRODUCT_VALUE'];
    //echo (      $arrayLinks[] = $ar_fields['PROPERTY_SIMILAR_PRODUCT_VALUE']);//ID связанных элементов в масиив
echo '<br>';
    }
endif;


$GLOBALS['rew'] = $arrayLinks;


