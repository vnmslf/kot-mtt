<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true){die();}
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
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/assets/owl.carousel.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/assets/owl.theme.default.min.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/owl.carousel.min.js');
?>
<section class="video">
	<div class="container">
		<div class="video__block">
			<div class="caption">
				<h2>Обучающее видео</h2>
				<div class="nav"></div>
			</div>
			<div class="video-carousel owl-carousel">
<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
				<div class="video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$arItem['PROPERTIES']['YOUTUBE_VIDEO']['YOUCODE']?>?si=YicwEvmHUMv-7ydV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
<?}?>
			</div>
		</div>
	</div>
</section>
<?//pre($arResult['ITEMS'])?>