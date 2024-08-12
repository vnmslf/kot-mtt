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
$this->setFrameMode(true);?>
<section class="courses__list">
	<div class="container">
<?foreach($arResult['ITEMS'] as $arItem) {?>
		<a class="article" href="<?=$arItem['DETAIL_PAGE_URL']?>">
			<span class="top">
	<?if($arItem['DP']) {?>
				<picture>
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
	<?}?>
	<?if($arItem['PP']) {?>
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
	<?}?>
			</span>
			<span class="bottom">
				<h2><?=($arItem['PROPERTIES']['MAIN_NAME']['VALUE'] ? $arItem['PROPERTIES']['MAIN_NAME']['VALUE'] : $arItem['NAME'])?></h2>
				<p><?=$arItem['PREVIEW_TEXT']?></p>
			</span>
		</a>
<?}?>
	</div>
</section>