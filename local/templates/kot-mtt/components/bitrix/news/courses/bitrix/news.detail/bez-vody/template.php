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
			<img class="mobile" src="<?=SITE_TEMPLATE_PATH?>/images/bez_vody-mobile.svg" alt="<?=$arResult['NAME']?>" />
			<img class="pc" src="<?=SITE_TEMPLATE_PATH?>/images/bez_vody-pc.svg" alt="<?=$arResult['NAME']?>" />
			<picture class="mobile">
<?foreach ($arResult['FS_MOBILE'] as $keyMedia => $valueMedia) {
	if($keyMedia !== 'default') {
		$explode = explode('-', $keyMedia);
		$start = $explode[0];
		$end = $explode[1];?>
				<source srcset="<?=$arResult['FS_MOBILE'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
	<?}
}?>
				<img srcset="<?=$arResult['FS_MOBILE']['default']?>" alt="<?=$arResult['NAME']?>" />
			</picture>
			<picture class="pc">
<?foreach ($arResult['FS_PC'] as $keyMedia => $valueMedia) {
	if($keyMedia !== 'default') {
		$explode = explode('-', $keyMedia);
		$start = $explode[0];
		$end = $explode[1];?>
				<source srcset="<?=$arResult['FS_PC'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
	<?}
}?>
				<img srcset="<?=$arResult['FS_PC']['default']?>" alt="<?=$arResult['NAME']?>" />
			</picture>
			<div class="info">
				<h1>Проверенный временем курс&nbsp;для&nbsp;профессионалов</h1>
				<h2>Учись покеру в группе единомышленников. Уникальный курс, в котором мы&nbsp;проведем тебя&nbsp;за&nbsp;руку до ABI-20</h2>
				<div class="order__btn" data-modal="team">Записаться на курс</div>
			</div>
		</div>
		<div class="section second__section">
			<h2>После прохождения курса ты</h2>
			<div class="after__course">
				<div class="after__course-row">
<?$counter = 0;
foreach ($arResult['PROPERTIES']['AFTER_COURSE']['VALUE'] as $key => $value) {
	if($counter <= 3) {?>
					<div class="after__course-block"><?=$value?></div>
		<?unset($arResult['PROPERTIES']['AFTER_COURSE']['VALUE'][$key]);
	} else {
		break;
	}
	$counter++;
}?>
				</div>
				<div class="after__course-row">
<?foreach ($arResult['PROPERTIES']['AFTER_COURSE']['VALUE'] as $key => $value) {?>
					<div class="after__course-block"><?=$value?></div>
<?}?>
				</div>
			</div>
		</div>
	</div>
</section>