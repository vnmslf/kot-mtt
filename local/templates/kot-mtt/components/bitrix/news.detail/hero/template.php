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
				<li><?=$point?></li>
<?}?>
			</ul>
		</div>
	</div>
</section>