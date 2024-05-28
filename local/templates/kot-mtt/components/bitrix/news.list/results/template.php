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
$this->setFrameMode(true);
?>
<section class="results">
	<div class="container">
		<h2>Результаты команды</h2>
		<div class="results__block">
			<div class="info">
				<picture>
<?foreach ($arResult['START']['PP'] as $keyMedia => $valueMedia) {
	if($keyMedia !== 'default') {
		$explode = explode('-', $keyMedia);
		$start = $explode[0];
		$end = $explode[1];?>
					<source srcset="<?=$arResult['START']['PP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
	<?}
}?>
					<img srcset="<?=$arResult['START']['PP']['default']?>" alt="<?=$arResult['START']['CAPTION']?>" />
				</picture>
				<div class="caption"><?=$arResult['START']['CAPTION']?></div>
				<div class="text"><?=$arResult['START']['TEXT']?></div>
				<div class="circle"></div>
			</div>
		</div>
		<div class="texts__block">
<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
			<div class="block">
				<h5><?=$arItem['NAME']?></h5>
				<p><?=$arItem['PREVIEW_TEXT']?></p>
			</div>
<?}?>
		</div>
	</div>
</section>