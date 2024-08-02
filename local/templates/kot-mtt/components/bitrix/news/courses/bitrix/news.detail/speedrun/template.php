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
<?if($arResult['PREVIEW_TEXT']) {?>
				<?=$arResult['PREVIEW_TEXT']?>
<?}?>
				<div class="order__btn" data-modal="team">Записаться на курс</div>
<?if($arResult['DETAIL_TEXT']) {?>
				<?=$arResult['DETAIL_TEXT']?>
<?}?>
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
<?$i = 0;
foreach ($arResult['INTIME'] as $key => $value) {?>
				<div class="intime<?=($i >= 5 ? ' not-active' : '')?>">
					<div class="name"><?=($value['NAME'] ? $value['NAME'] : $value['ELEMENT_NAME'])?></div>
	<?if($value['CAPTION']) {?>
					<div class="caption"><?=$value['CAPTION']?></div>
	<?}?>
	<?if($value['PREVIEW_TEXT']) {?>
					<div class="text"><?=$value['PREVIEW_TEXT']?></div>
	<?}?>
				</div>
	<?$i++;
}?>
			</div>
			<div class="see-all">Показать еще {{numbers}} тем</div>
		</div>
		<div class="sixth__section">
			<div class="top">
				<h2>Успей записаться на&nbsp;июньский набор</h2>
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
			<div class="middle">Только для <span>24 человек</span></div>
			<div class="order__btn" data-modal="team">Записаться на курс</div>
		</div>
		<div class="seventh__section">
			<div class="top">
				<h2>Кто мы такие?</h2>
				<p>Школу КОТ-МТТ основали именитые профи покера: чемпион WPT-2020 Андрей Kot_Spartac Котельников и обладатель кубка EPT, финалист Triton 2024 Саня AlexZAЗ Зубов. В нашей команде только топовые профессионалы из мира покера, которые постоянно развиваются и прокачивают свои знания и навыки.</p>
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
		<div class="eighth__section">
			<div class="top">
				<h2>Команда КОТ-МТТ</h2>
				<p>Обучили игре в покер более 500 человек.</p>
				<p>Средний ROI выпускников курса - 27%.</p>
				<p>Уроки и курсы от действующих профессионалов покера.</p>
				<p>Обучение самым современным тенденциям игры.</p>
				<picture>
	<?foreach ($arResult['SPEEDRUN_TEAM'] as $keyMedia => $valueMedia) {
		if($keyMedia !== 'default') {
			$explode = explode('-', $keyMedia);
			$start = $explode[0];
			$end = $explode[1];?>
					<source srcset="<?=$arResult['SPEEDRUN_TEAM'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
		<?}
	}?>
					<img srcset="<?=$arResult['SPEEDRUN_TEAM']['default']?>" alt="<?=$member['NAME']?>" />
				</picture>
				<svg width="760" height="869" viewBox="0 0 760 869" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_f_1054_1823)">
						<ellipse cx="334.5" cy="434.5" rx="225.5" ry="234.5" fill="#B50000" fill-opacity="0.5" />
					</g>
					<defs>
						<filter id="filter0_f_1054_1823" x="-91" y="0" width="851" height="869" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix" />
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
							<feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_1054_1823" />
						</filter>
					</defs>
				</svg>
			</div>
		</div>
	</div>
</section>
