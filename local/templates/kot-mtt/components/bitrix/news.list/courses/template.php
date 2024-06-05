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
?>
<section class="courses">
	<div class="container">
		<h2>Курсы нашей команды</h2>
		<div class="courses__block">
<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
			<div class="course">
				<div class="pictures">
					<picture class="pp">
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
					<picture class="dp">
	<?foreach ($arItem['DP'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
						<source srcset="<?=$arItem['DP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
						<img srcset="<?=$arItem['DP']['default']?>" alt="<?=$arItem['NAME']?>" />
					</picture>
				</div>
				<div class="info">
					<h3><?=$arItem['NAME']?></h3>
					<div class="text"><?=$arItem['PREVIEW_TEXT']?></div>
				</div>
				<div class="more__btn">
					<a href="#">Подробнее</a>
				</div>
			</div>
<?}?>
		</div>
	</div>
</section>