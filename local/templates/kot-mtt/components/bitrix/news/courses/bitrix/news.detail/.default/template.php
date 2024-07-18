<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
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
<section class="course">
	<div class="container">
		<h1><?=$arResult['NAME']?></h1>
		<picture>
	<?foreach ($arResult['FS'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
			<source srcset="<?=$arResult['FS'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
			<img srcset="<?=$arResult['FS']['default']?>" alt="<?=$arResult['NAME']?>" />
		</picture>
		<div class="first__actions">
			<?=$arResult['PREVIEW_TEXT']?>
			<div class="order__btn" data-modal="team">Записаться на курс</div>
		</div>
	</div>
</section>
