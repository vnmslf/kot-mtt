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
<section class="path">
	<div class="container">
		<h2>Выбери свой путь</h2>
		<div class="path__block">
<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
			<div class="path__element">
				<div class="pictures">
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
				<div class="info">
					<h3><?=$arItem['NAME']?></h3>
					<ul>
	<?$i = 1;
	foreach ($arItem['PROPERTIES']['POINTS']['VALUE'] as $key => $value) {
		if($i <= 9) {
			$counter = '0'.$i.'.';
		} else {
			$counter = $i;
		}?>
						<li>
							<span class="counter"><?=$counter?></span>
							<span><?=$value?></span>
						</li>
		<?$i++;
	}?>
					</ul>
	<?if($arItem['PREVIEW_TEXT'] !== '') {?>
					<p><?=$arItem['PREVIEW_TEXT']?></p>
	<?}?>
					<div class="order__btn">Оставить заявку</div>
				</div>
			</div>
<?}?>
		</div>
		<div class="cta">
			<p>Узнай откуда начнешь свой путь в команде школы покера КОТ-MTT</p>
			<div class="order__btn">Подать заявку</div>
		</div>
	</div>
</section>