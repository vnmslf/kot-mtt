<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult)) {?>
<div class="menu__block">
	<div class="menu__button">
		<svg class="open__menu" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M4 6L20 6M9.5 12L20 12M4 18L20 18" stroke="white" stroke-width="2" stroke-linecap="round" />
		</svg>
		<svg class="close__menu" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M18 6L6 18M18 18L6 6" stroke="white" stroke-width="2" stroke-linecap="round" />
		</svg>
	</div>
	<div class="header__menu">
		<ul>
	<?$previousLevel = 0;
	$countItems = count($arResult);
	$i = 0;
	foreach($arResult as $arItem) {
		if ($previousLevel && $arItem['DEPTH_LEVEL'] < $previousLevel) {?>
			<?=str_repeat('</ul></li>', ($previousLevel - $arItem['DEPTH_LEVEL']));?>
		<?}
		if ($arItem['IS_PARENT']) {
			if ($arItem['DEPTH_LEVEL'] == 1) {?>
			<li class="hasChild<?if($arItem['SELECTED']) {?> selected<?}?>">
				<a href='<?=$arItem['LINK']?>'><?=$arItem['TEXT']?></a>
				<i class="fas fa-plus-square"></i>
				<i class="fas fa-minus-square"></i>
				<ul class="submenu">
			<?} else {?>
			<li class="hasChild<?if($arItem['SELECTED']) {?> selected<?}?>">
				<a href='<?=$arItem['LINK']?>'><?=$arItem['TEXT']?></a>
				<i class="fas fa-angle-right"></i>
				<ul class="submenu">
			<?}
		} else {
			if ($arItem['PERMISSION'] > 'D') {
				if ($arItem['DEPTH_LEVEL'] == 1) {?>
					<li>
						<a href="<?=$arItem['LINK']?>"<?if($arItem['SELECTED']) {?> class="selected"<?}?>><?=$arItem['TEXT']?></a>
					</li>
				<?} else {?>
					<li>
						<a href="<?=$arItem['LINK']?>"<?if($arItem['SELECTED']) {?> class="selected"<?}?>><?=$arItem['TEXT']?></a>
					</li>
				<?}
			} else {
				if ($arItem['DEPTH_LEVEL'] == 1) {?>
					<li>
						<a href="" class="<?if ($arItem['SELECTED']) {?>root-item-selected<?} else {?>root-item<?}?>" title="<?=GetMessage('MENU_ITEM_ACCESS_DENIED')?>"><?=$arItem['TEXT']?></a>
					</li>
				<?} else {?>
					<li>
						<a href="" class="denied" title="<?=GetMessage('MENU_ITEM_ACCESS_DENIED')?>"><?=$arItem['TEXT']?></a>
					</li>
				<?}
			}
		}
		$previousLevel = $arItem['DEPTH_LEVEL'];
		$i++;
	}
	if ($previousLevel > 1) {?>
		<?=str_repeat('</ul></li>', ($previousLevel - 1) );
	}?>
		</ul>
	</div>
</div>
<?}?>