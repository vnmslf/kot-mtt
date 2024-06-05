<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>
<section class="hero">
	<picture>
<?foreach ($arResult['PP'] as $keyMedia => $valueMedia) {
	if($keyMedia !== 'default') {
		$explode = explode('-', $keyMedia);
		$start = $explode[0];
		$end = $explode[1];?>
		<source srcset="<?=$arResult['PP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
	<?}
}?>
		<img srcset="<?=$arResult['PP']['default']?>" alt="<?=$arResult['NAME']?>" />
	</picture>
	<div class="container">
		<div class="info">
			<div class="caption"><?=$arResult['PROPERTIES']['HERO_CAPTION']['VALUE']?></div>
			<h1><?=$arResult['PROPERTIES']['HERO_H1']['VALUE']?></h1>
			<ul>
<?foreach($arResult['PROPERTIES']['HERO_LIST']['VALUE'] as $point) {?>
				<li>
					<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.8563 9.50001L15.8571 9.49843H15.8546C12.3371 7.68278 9.51978 2.18043 9.42984 2.00393V2L9.42899 2.00156C9.42815 2.00077 9.4273 2 9.4273 2V2.00393C9.33736 2.18043 6.52001 7.68278 3.00253 9.49843H3C3 9.49843 3.00085 9.49923 3.00169 9.50001H3.00085L3.00253 9.50078C6.52001 11.3164 9.33736 16.8196 9.4273 16.9953V17C9.4273 17 9.42815 16.9984 9.42899 16.9976C9.42899 16.9984 9.42984 17 9.42984 17V16.9953C9.51978 16.8196 12.3371 11.3164 15.8546 9.50078H15.8571L15.8563 9.50001Z" fill="#B50000" />
					</svg>
					<?=$point?>
				</li>
<?}?>
			</ul>
			<div class="order__btn">Оставить заявку в команду</div>
		</div>
		<div class="advantages">
<?foreach ($arResult['ADVANTAGES'] as $key => $value) {?>
			<div class="advantage__block">
				<div class="caption"><?=$value['CAPTION']?></div>
				<div class="text"><?=$value['TEXT']?></div>
			</div>
<?}?>
		</div>
	</div>
</section>