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
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/assets/owl.carousel.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/assets/owl.theme.default.min.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/owl.carousel/owl.carousel.min.js');
?>
<section class="course">
	<div class="container">
		<div class="section first__section">
			<h1>
				<span><?=$arResult['NAME']?></span>
			</h1>
			<div class="first__actions">
<?if($arResult['PREVIEW_TEXT']) {?>
				<?=$arResult['PREVIEW_TEXT']?>
<?}?>
				<div class="order__btn" data-modal="team">Записаться на курс</div>
<?if($arResult['DETAIL_TEXT']) {?>
				<?=$arResult['DETAIL_TEXT']?>
<?}?>
			</div>
		</div>
		<div class="section ninth__section">
			<div class="top">
				<h2>Кому подойдет курс?</h2>
			</div>
			<div class="middle">
<?$i = 0;
$count__join = count($arResult['JOINUS']);
foreach ($arResult['JOINUS'] as $key => $item) {
	$i++;?>
				<div class="joinus__item<?=($i == $count__join ? ' order__btn' : '')?>" <?=($i == $count__join ? ' data-modal="team"' : '')?>>
					<picture>
	<?foreach ($item['PICTURE'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
						<source srcset="<?=$item['PICTURE'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
						<img srcset="<?=$item['PICTURE']['default']?>" alt="<?=$member['NAME']?>" />
					</picture>
					<div class="text"><?=$item['TEXT']?></div>
				</div>
<?}?>
			</div>
		</div>
		<div class="section tenth__section">
			<div class="left">
				<picture>
	<?foreach ($arResult['OURTEST']['PP'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
					<source srcset="<?=$arResult['OURTEST']['PP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
					<img srcset="<?=$arResult['OURTEST']['PP']['default']?>" alt="<?=$member['NAME']?>" />
				</picture>
			</div>
			<div class="right">
				<picture>
	<?foreach ($arResult['OURTEST']['DP'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
					<source srcset="<?=$arResult['OURTEST']['DP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
					<img srcset="<?=$arResult['OURTEST']['DP']['default']?>" alt="<?=$member['NAME']?>" />
				</picture>
			</div>
			<div class="middle">
				<div class="text"><?=$arResult['OURTEST']['TEXT']?></div>
				<div class="order__btn" data-modal="team">Записаться на курс</div>
			</div>
			<svg width="1440" height="893" viewBox="0 0 1440 893" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g filter="url(#filter0_f_1054_3251)">
					<ellipse cx="716.5" cy="446.5" rx="611.5" ry="246.5" fill="#B50000" fill-opacity="0.5" />
				</g>
				<defs>
					<filter id="filter0_f_1054_3251" x="-95" y="0" width="1623" height="893" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
						<feFlood flood-opacity="0" result="BackgroundImageFix" />
						<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
						<feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_1054_3251" />
					</filter>
				</defs>
			</svg>
		</div>
		<div class="section elleventh__section">
			<h2>Программа курса</h2>
			<div class="items">
<?$i = 0;
foreach ($arResult['PROGRAMM'] as $key => $item) {?>
				<div class="item<?=($i >= 12 ? ' not-active' : '')?>">
	<?if(!empty($item['COLOUR'])) {?>
					<div class="top">
						<div class="name"><?=$item['NAME']?></div>
					</div>
	<?} else {?>
					<div class="top">
						<div class="name"><?=$item['NAME']?></div>
		<?if(!empty($item['PREVIEW_TEXT'])) {?>
						<div class="anons"><?=$item['PREVIEW_TEXT']?></div>
		<?}?>
					</div>
		<?if(!empty($item['DETAIL_TEXT'])) {?>
					<div class="full"><?=$item['DETAIL_TEXT']?></div>
		<?}?>
	<?}?>
				</div>
	<?$i++;
}?>
				<div class="see-all">Показать еще {{numbers}} <?=inclination('этапа', array('этап', 'этапа', 'этапа'))?></div>
			</div>
		</div>
	</div>
</section>