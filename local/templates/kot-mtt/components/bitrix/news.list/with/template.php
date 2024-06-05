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
<section class="with">
	<div class="container">
		<h2><?=$arResult['START']['CAPTION']?></h2>
		<div class="picture__block">
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
		</div>
		<div class="with__block">
<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
			<div class="block">
				<div class="point">
					<svg width="12" height="29" viewBox="0 0 12 29" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.99864 16.183C5.73173 19.3803 3.92871 21.6193 3.92871 21.6193H5.99864H8.06931C8.06931 21.6193 6.26704 19.3806 5.99864 16.183Z" fill="white" />
						<path d="M8.99944 12.5635C8.58807 12.5635 8.19611 12.6475 7.83961 12.7976C7.83102 12.7882 7.82132 12.7793 7.81274 12.7699C8.53395 12.2219 8.99982 11.3559 8.99982 10.3809C8.99982 8.72379 7.6567 7.38068 5.99964 7.38068C4.34294 7.38068 3.00019 8.72379 3.00019 10.3809C3.00019 11.4242 3.53401 12.3436 4.34257 12.8808C3.93867 12.6781 3.48287 12.5635 3.00019 12.5635C1.34313 12.5635 0 13.9066 0 15.5637C0 17.2204 1.34313 18.5632 3.00019 18.5632C4.61284 18.5632 5.92834 17.2902 5.99665 15.6944C5.99889 15.6955 6.00112 15.6966 6.00336 15.6985C6.07429 17.2928 7.38867 18.5635 8.99982 18.5635C10.6565 18.5635 12 17.2204 12 15.5641C11.9996 13.9063 10.6558 12.5635 8.99944 12.5635Z" fill="white" />
					</svg>
				</div>
				<div class="text">
					<h5><?=$arItem['NAME']?></h5>
					<p><?=$arItem['PREVIEW_TEXT']?></p>
				</div>
			</div>
<?}?>
		</div>
		<svg class="with__mini" width="519" height="519" viewBox="0 0 519 519" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g style="mix-blend-mode:color-dodge" filter="url(#filter0_f_485_555)">
				<circle cx="259.5" cy="259.5" r="144.5" fill="#B50000" fill-opacity="0.3" />
			</g>
			<defs>
				<filter id="filter0_f_485_555" x="0.699997" y="0.699997" width="517.6" height="517.6" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix" />
					<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
					<feGaussianBlur stdDeviation="57.15" result="effect1_foregroundBlur_485_555" />
				</filter>
			</defs>
		</svg>
		<svg class="with__maxi" width="895" height="1031" viewBox="0 0 895 1031" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g filter="url(#filter0_f_485_496)">
				<ellipse cx="447.5" cy="515.5" rx="291.5" ry="359.5" fill="#B50000" fill-opacity="0.5" />
			</g>
			<defs>
				<filter id="filter0_f_485_496" x="0.800003" y="0.800003" width="893.4" height="1029.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix" />
					<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
					<feGaussianBlur stdDeviation="77.6" result="effect1_foregroundBlur_485_496" />
				</filter>
			</defs>
		</svg>
	</div>
</section>