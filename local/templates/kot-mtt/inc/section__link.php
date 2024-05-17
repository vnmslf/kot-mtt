<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/section__link.min.css');
$link__href = $arParams['LINK_HREF'];
$link__text = $arParams['LINK_TEXT'];?>
<section class="section__link">
	<div class="container">
		<a href="<?=$link__href?>"><?=$link__text?></a>
	</div>
</section>