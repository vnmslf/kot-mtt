<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
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
<section class="rost">
	<div class="container">
		<div class="rost__block">
			<div class="info">
				<h2><?=$arResult['NAME']?></h2>
				<?=$arResult['PREVIEW_TEXT']?>
				<a class="btn" href="https://madte.st/HufXvhW8" target="_blank">Пройти тест</a>
			</div>
			<div class="graphic">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/rost.svg" alt="<?=$arResult['NAME']?>" />
			</div>
		</div>
	</div>
</section>