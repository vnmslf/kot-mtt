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
<section class="reviews">
	<div class="container">
		<div class="reviews__block">
			<div class="caption">
				<h2>Отзывы</h2>
				<div class="nav"></div>
			</div>
			<div class="reviews-carousel owl-carousel">
<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
				<div class="review">
					<div class="top">
						<picture>
	<?foreach ($arItem['PP'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
							<source srcset="<?=$arItem['PP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
							<img srcset="<?=$arItem['PP']['default']?>" alt="<?=$arItem['NAME']?>" />
						</picture>
						<h5><?=$arItem['NAME']?></h5>
						<p><?=$arItem['PROPERTIES']['CAPTION']['VALUE']?></p>
					</div>
					<div class="bottom">
						<?=$arItem['PREVIEW_TEXT']?>
					</div>
				</div>
<?}?>
			</div>
		</div>
	</div>
</section>
<?//pre($arResult['ITEMS'])?>