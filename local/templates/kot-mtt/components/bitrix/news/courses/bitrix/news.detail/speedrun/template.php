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
		<div class="first__section">
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
		<div class="second__section">
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
		<div class="third__section">
			<div class="start">
				<h2>На курсе будет</h2>
				<picture>
<?foreach ($arResult['ON_THIS_COURSE'] as $keyMedia => $valueMedia) {
	if($keyMedia !== 'default') {
		$explode = explode('-', $keyMedia);
		$start = $explode[0];
		$end = $explode[1];?>
					<source srcset="<?=$arResult['ON_THIS_COURSE'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
	<?}
}?>
					<img srcset="<?=$arResult['ON_THIS_COURSE']['default']?>" alt="<?=$arResult['NAME']?>" />
				</picture>
			</div>
			<div class="second">
				<ul>
<?foreach ($arResult['PROPERTIES']['LIST_COURSE']['VALUE'] as $key => $value) {?>
					<li><?=$value?></li>
<?}?>
				</ul>
				<div class="text__course"><?=$arResult['PROPERTIES']['TEXT_COURSE']['~VALUE']['TEXT']?></div>
			</div>
		</div>
		<div class="fourth__section">
			<h2>Особые наставники групповых занятиях</h2>
			<div class="mentors">
<?foreach ($arResult['MENTORS'] as $key => $value) {?>
				<div class="mentor">
					<picture>
	<?foreach ($value['PICTURE'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
						<source srcset="<?=$value['PICTURE'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
						<img srcset="<?=$value['PICTURE']['default']?>" alt="<?=$arResult['NAME']?>" />
					</picture>
					<div class="mentor__info">
						<h3><?=$value['NAME']?></h3>
						<div class="mentor__text"><?=$value['PREVIEW_TEXT']?></div>
					</div>
				</div>
<?}?>
			</div>
		</div>
		<div class="fifth__section">
			<h2>Во время курса ты изучишь</h2>
			<div class="intime__blocks">
<?foreach ($arResult['INTIME'] as $key => $value) {?>
				<div class="intime">
					<div class="name"><?=$value['NAME']?></div>
	<?if($value['CAPTION']) {?>
					<div class="caption"><?=$value['CAPTION']?></div>
	<?}?>
					<div class="text"><?=$value['PREVIEW_TEXT']?></div>
				</div>
<?}?>
			</div>
		</div>
		<div class="sixth__section">
			<div class="top">
				<h2>Не упусти свой шанс —&nbsp;успей записаться на&nbsp;июньский набор</h2>
				<picture>
<?foreach ($arResult['YOUR_CHANCE'] as $keyMedia => $valueMedia) {
	if($keyMedia !== 'default') {
		$explode = explode('-', $keyMedia);
		$start = $explode[0];
		$end = $explode[1];?>
					<source srcset="<?=$arResult['YOUR_CHANCE'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
	<?}
}?>
					<img srcset="<?=$arResult['YOUR_CHANCE']['default']?>" alt="<?=$arResult['NAME']?>" />
				</picture>
			</div>
			<div class="middle">Всего <span>50 мест</span></div>
			<div class="bottom">
				Повышай свой уровень игры, узнавай секреты профессионалов и&nbsp;побеждай!
			</div>
			<div class="order__btn">Записаться на курс</div>
		</div>
		<div class="seventh__section">
			<div class="top">
				<h2>Кто мы такие?</h2>
				<p>Школу КОТ-МТТ основали именитые профи покера: чемпион WPT-2020 Андрей Kot_Spartac Котельников и&nbsp;обладатель кубка EPT, финалист Triton 2024 Саня AlexZAЗ Зубов. В&nbsp;нашей команде только топовые профессионалы из мира покера, которые постоянно развиваются и&nbsp;прокачивают свои знания и&nbsp;навыки.</p>
			</div>
			<div class="middle">
				<div class="team-carousel owl-carousel">
<?foreach ($arResult['TEAM'] as $key => $member) {?>
					<div class="member">
						<picture>
	<?foreach ($member['PICTURE'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
							<source srcset="<?=$member['PICTURE'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
							<img srcset="<?=$member['PICTURE']['default']?>" alt="<?=$member['NAME']?>" />
						</picture>
						<div class="info">
							<div class="name"><?=$member['NAME']?></div>
							<div class="text"><?=$member['SPEEDRUN']?></div>
						</div>
					</div>
<?}?>
				</div>
			</div>
		</div>
	</div>
</section>
