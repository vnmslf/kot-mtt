<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/caption.min.css');
$h2 = $arParams['CAPTION'];?>
<section class="caption">
	<div class="container">
		<h2><?=$h2?></h2>
	</div>
</section>