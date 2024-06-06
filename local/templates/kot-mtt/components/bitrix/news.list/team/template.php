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
if(count($arResult['MEMBERS']) > 0) {
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/assets/owl.carousel.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/assets/owl.theme.default.min.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/owl.carousel.min.js');
}
?>
<section class="team">
	<div class="container">
		<div class="founders__block">
			<h2>Основатели</h2>
<?foreach ($arResult['FOUNDERS'] as $key => $arItem) {?>
			<div class="founder">
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
				<div class="info">
					<h3><?=$arItem['NAME']?></h3>
					<ul>
	<?foreach ($arItem['PROPERTIES']['ACHIEVEMENTS']['VALUE'] as $key => $value) {?>
						<li>
							<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.8563 9.50001L15.8571 9.49843H15.8546C12.3371 7.68278 9.51978 2.18043 9.42984 2.00393V2L9.42899 2.00156C9.42815 2.00077 9.4273 2 9.4273 2V2.00393C9.33736 2.18043 6.52001 7.68278 3.00253 9.49843H3C3 9.49843 3.00085 9.49923 3.00169 9.50001H3.00085L3.00253 9.50078C6.52001 11.3164 9.33736 16.8196 9.4273 16.9953V17C9.4273 17 9.42815 16.9984 9.42899 16.9976C9.42899 16.9984 9.42984 17 9.42984 17V16.9953C9.51978 16.8196 12.3371 11.3164 15.8546 9.50078H15.8571L15.8563 9.50001Z" fill="#B50000" />
							</svg>
							<?=$value?>
						</li>
	<?}?>
					</ul>
	<?if($arItem['PROPERTIES']['VK']['VALUE'] !== '' || $arItem['PROPERTIES']['TG']['VALUE'] !== '') {?>
					<div class="social">
		<?if($arItem['PROPERTIES']['VK']['VALUE'] !== '') {?>
						<a class="link vk" href="<?=$arItem['PROPERTIES']['VK']['VALUE']?>" target="_blank">
							<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10.8858 13.2006C4.12086 13.2006 0.262337 8.47085 0.101562 0.600586H3.4902C3.6015 6.37716 6.09963 8.82401 8.07839 9.32851V0.600586H11.2693V5.58257C13.2233 5.36815 15.276 3.09788 15.9686 0.600586H19.1594C18.6276 3.67806 16.4015 5.94833 14.8185 6.88167C16.4015 7.63842 18.9369 9.6186 19.9016 13.2006H16.3891C15.6347 10.8042 13.7551 8.95013 11.2693 8.69788V13.2006H10.8858Z" fill="white" />
							</svg>
						</a>
		<?}?>
		<?if($arItem['PROPERTIES']['TG']['VALUE'] !== '') {?>
						<a class="link tg" href="<?=$arItem['PROPERTIES']['TG']['VALUE']?>" target="_blank">
							<svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.16462 10.884L6.86686 15.1558C7.29287 15.1558 7.47737 14.9691 7.69863 14.745L9.69593 12.798L13.8345 15.8894C14.5935 16.3208 15.1283 16.0936 15.3331 15.1772L18.0496 2.19366L18.0504 2.1929C18.2911 1.04846 17.6446 0.600939 16.9051 0.881693L0.937216 7.11718C-0.15256 7.54863 -0.13606 8.16828 0.751961 8.44903L4.83431 9.74417L14.3168 3.69229C14.763 3.39088 15.1688 3.55765 14.835 3.85906L7.16462 10.884Z" fill="white" />
							</svg>
						</a>
		<?}?>
					</div>
				</div>
			</div>
	<?}?>
<?}?>
		</div>
		<div class="team__block">
			<div class="caption">
				<h2>Наша команда</h2>
				<div class="nav"></div>
			</div>
			<div class="team-carousel owl-carousel">
<?foreach ($arResult['MEMBERS'] as $key => $arItem) {?>
				<div class="member">
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
				</div>
<?}?>
			</div>
		</div>
	</div>
</section>
<?//pre($arResult['ITEMS'])?>