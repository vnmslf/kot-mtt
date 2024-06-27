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
<section class="faq">
	<div class="container">
		<h1><?=$arResult['NAME']?></h1>
		<div class="faq__block">
<?$counter = 0;
foreach ($arResult['ITEMS'] as $key => $arItem) {?>
			<div class="faq__element<?=($counter == 0 ? ' open' : '')?>">
				<h2 class="faq__element-action">
					<span><?=$arItem['NAME']?></span>
					<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17 14.5L11.9992 9.92L7 14.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</h2>
				<div class="info">
					<?=$arItem['PREVIEW_TEXT']?>
				</div>
			</div>
	<?$counter++;
}?>
		</div>
	</div>
</section>