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
<section class="team">
	<div class="container">
		<div class="founders__block">
			<h2>Основатели</h2>
<?foreach ($arResult['ITEMS'] as $key => $value) {?>
			<div class="founder">
				<?=$value['NAME']?>
			</div>
<?}?>
		</div>
	</div>
</section>
<?//pre($arResult['ITEMS'])?>