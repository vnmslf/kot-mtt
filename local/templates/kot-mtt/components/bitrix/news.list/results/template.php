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
			<svg width="895" height="1031" viewBox="0 0 895 1031" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g opacity="0.5">
					<g filter="url(#filter0_f_820_369)">
						<ellipse cx="447.5" cy="515.5" rx="291.5" ry="359.5" fill="#B50000" fill-opacity="0.5" />
					</g>
					<g style="mix-blend-mode:color-dodge" filter="url(#filter1_f_820_369)">
						<circle cx="468.5" cy="445.5" r="144.5" fill="#B50000" fill-opacity="0.3" />
					</g>
				</g>
				<defs>
					<filter id="filter0_f_820_369" x="0.800003" y="0.800003" width="893.4" height="1029.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
						<feFlood flood-opacity="0" result="BackgroundImageFix" />
						<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
						<feGaussianBlur stdDeviation="77.6" result="effect1_foregroundBlur_820_369" />
					</filter>
					<filter id="filter1_f_820_369" x="209.7" y="186.7" width="517.6" height="517.6" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
						<feFlood flood-opacity="0" result="BackgroundImageFix" />
						<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
						<feGaussianBlur stdDeviation="57.15" result="effect1_foregroundBlur_820_369" />
					</filter>
				</defs>
			</svg>
		</div>
	</div>
</section>