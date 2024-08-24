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
			<div class="left">
				<h1>
					<span><?=$arResult['NAME']?></span>
				</h1>
				<div class="first__actions">
	<?if($arResult['PREVIEW_TEXT']) {?>
					<?=$arResult['PREVIEW_TEXT']?>
	<?}?>
	<?if($arResult['DETAIL_TEXT']) {?>
					<?=$arResult['DETAIL_TEXT']?>
	<?}?>
					<div class="pre__actions">Школа КОТ-МТТ уже 4 года обучает игроков от новичков до регуляров высоких лимитов. Начни свой путь профессионала со школой КОТ-МТТ и GipsyTeam.</div>
					<div class="order__btn" data-modal="team">Записаться на курс</div>
				</div>
			</div>
			<div class="right">
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
			</div>
		</div>
		<div class="section with">
			<div class="container">
				<h2>Для чего это вам?</h2>
				<div class="picture__block">
					<picture>
		<?foreach ($arResult['WITH']['START']['PP'] as $keyMedia => $valueMedia) {
			if($keyMedia !== 'default') {
				$explode = explode('-', $keyMedia);
				$start = $explode[0];
				$end = $explode[1];?>
						<source srcset="<?=$arResult['WITH']['START']['PP'][$keyMedia]['src']?>" media="(min-width: <?=$start?>px)<?if($end !== 'max') {?> and (max-width: <?=$end?>px)<?}?>" type="image/webp" />
			<?}
		}?>
						<img srcset="<?=$arResult['WITH']['START']['PP']['default']?>" alt="<?=$arResult['WITH']['START']['CAPTION']?>" />
					</picture>
				</div>
				<div class="with__block">
					<div class="block">
						<div class="point">
							<svg width="12" height="29" viewBox="0 0 12 29" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.99864 16.183C5.73173 19.3803 3.92871 21.6193 3.92871 21.6193H5.99864H8.06931C8.06931 21.6193 6.26704 19.3806 5.99864 16.183Z" fill="white" />
								<path d="M8.99944 12.5635C8.58807 12.5635 8.19611 12.6475 7.83961 12.7976C7.83102 12.7882 7.82132 12.7793 7.81274 12.7699C8.53395 12.2219 8.99982 11.3559 8.99982 10.3809C8.99982 8.72379 7.6567 7.38068 5.99964 7.38068C4.34294 7.38068 3.00019 8.72379 3.00019 10.3809C3.00019 11.4242 3.53401 12.3436 4.34257 12.8808C3.93867 12.6781 3.48287 12.5635 3.00019 12.5635C1.34313 12.5635 0 13.9066 0 15.5637C0 17.2204 1.34313 18.5632 3.00019 18.5632C4.61284 18.5632 5.92834 17.2902 5.99665 15.6944C5.99889 15.6955 6.00112 15.6966 6.00336 15.6985C6.07429 17.2928 7.38867 18.5635 8.99982 18.5635C10.6565 18.5635 12 17.2204 12 15.5641C11.9996 13.9063 10.6558 12.5635 8.99944 12.5635Z" fill="white" />
							</svg>
						</div>
						<div class="text">
							<h5>Получите структурное понимание покера</h5>
							<p>Разберите, как формируются комбинации карт и как работает система ставок</p>
						</div>
					</div>
					<div class="block">
						<div class="point">
							<svg width="12" height="29" viewBox="0 0 12 29" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.99864 16.183C5.73173 19.3803 3.92871 21.6193 3.92871 21.6193H5.99864H8.06931C8.06931 21.6193 6.26704 19.3806 5.99864 16.183Z" fill="white" />
								<path d="M8.99944 12.5635C8.58807 12.5635 8.19611 12.6475 7.83961 12.7976C7.83102 12.7882 7.82132 12.7793 7.81274 12.7699C8.53395 12.2219 8.99982 11.3559 8.99982 10.3809C8.99982 8.72379 7.6567 7.38068 5.99964 7.38068C4.34294 7.38068 3.00019 8.72379 3.00019 10.3809C3.00019 11.4242 3.53401 12.3436 4.34257 12.8808C3.93867 12.6781 3.48287 12.5635 3.00019 12.5635C1.34313 12.5635 0 13.9066 0 15.5637C0 17.2204 1.34313 18.5632 3.00019 18.5632C4.61284 18.5632 5.92834 17.2902 5.99665 15.6944C5.99889 15.6955 6.00112 15.6966 6.00336 15.6985C6.07429 17.2928 7.38867 18.5635 8.99982 18.5635C10.6565 18.5635 12 17.2204 12 15.5641C11.9996 13.9063 10.6558 12.5635 8.99944 12.5635Z" fill="white" />
							</svg>
						</div>
						<div class="text">
							<h5>Быстро освоите ключевые термины</h5>
							<p>Это поможет вам быстрее включиться в игру и эффективно общаться с другими игроками</p>
						</div>
					</div>
					<div class="block">
						<div class="point">
							<svg width="12" height="29" viewBox="0 0 12 29" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.99864 16.183C5.73173 19.3803 3.92871 21.6193 3.92871 21.6193H5.99864H8.06931C8.06931 21.6193 6.26704 19.3806 5.99864 16.183Z" fill="white" />
								<path d="M8.99944 12.5635C8.58807 12.5635 8.19611 12.6475 7.83961 12.7976C7.83102 12.7882 7.82132 12.7793 7.81274 12.7699C8.53395 12.2219 8.99982 11.3559 8.99982 10.3809C8.99982 8.72379 7.6567 7.38068 5.99964 7.38068C4.34294 7.38068 3.00019 8.72379 3.00019 10.3809C3.00019 11.4242 3.53401 12.3436 4.34257 12.8808C3.93867 12.6781 3.48287 12.5635 3.00019 12.5635C1.34313 12.5635 0 13.9066 0 15.5637C0 17.2204 1.34313 18.5632 3.00019 18.5632C4.61284 18.5632 5.92834 17.2902 5.99665 15.6944C5.99889 15.6955 6.00112 15.6966 6.00336 15.6985C6.07429 17.2928 7.38867 18.5635 8.99982 18.5635C10.6565 18.5635 12 17.2204 12 15.5641C11.9996 13.9063 10.6558 12.5635 8.99944 12.5635Z" fill="white" />
							</svg>
						</div>
						<div class="text">
							<h5>Перестанете совершать базовые ошибки</h5>
							<p>Это повысит вашу уверенность и позволит минимизировать ненужные потери</p>
						</div>
					</div>
					<div class="block">
						<div class="point">
							<svg width="12" height="29" viewBox="0 0 12 29" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.99864 16.183C5.73173 19.3803 3.92871 21.6193 3.92871 21.6193H5.99864H8.06931C8.06931 21.6193 6.26704 19.3806 5.99864 16.183Z" fill="white" />
								<path d="M8.99944 12.5635C8.58807 12.5635 8.19611 12.6475 7.83961 12.7976C7.83102 12.7882 7.82132 12.7793 7.81274 12.7699C8.53395 12.2219 8.99982 11.3559 8.99982 10.3809C8.99982 8.72379 7.6567 7.38068 5.99964 7.38068C4.34294 7.38068 3.00019 8.72379 3.00019 10.3809C3.00019 11.4242 3.53401 12.3436 4.34257 12.8808C3.93867 12.6781 3.48287 12.5635 3.00019 12.5635C1.34313 12.5635 0 13.9066 0 15.5637C0 17.2204 1.34313 18.5632 3.00019 18.5632C4.61284 18.5632 5.92834 17.2902 5.99665 15.6944C5.99889 15.6955 6.00112 15.6966 6.00336 15.6985C6.07429 17.2928 7.38867 18.5635 8.99982 18.5635C10.6565 18.5635 12 17.2204 12 15.5641C11.9996 13.9063 10.6558 12.5635 8.99944 12.5635Z" fill="white" />
							</svg>
						</div>
						<div class="text">
							<h5>Начнёте чаще выигрывать</h5>
							<p>Применяя полученные знания и избегая базовых ошибок, вы&nbsp;улучшите свои навыки игры и начнёте чаще выигрывать</p>
						</div>
					</div>
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
		<div class="section seventh__section">
			<div class="top">
				<div class="top__left">
					<h2>Тренеры</h2>
				</div>
				<div class="top__right">
					<div class="nav"></div>
				</div>
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