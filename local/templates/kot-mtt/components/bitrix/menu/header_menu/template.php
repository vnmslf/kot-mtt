<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult)) {?>
<div class="menu__block">
	<div class="menu__button">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M4 6L20 6M9.5 12L20 12M4 18L20 18" stroke="white" stroke-width="2" stroke-linecap="round" />
		</svg>
	</div>
	<div class="header__menu">
		<div class="actions">
			<a class="logo" href="/">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="КОТ-МТТ, логотип" />
				<span>Школа Покера</span>
			</a>
			<div class="menu__button">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18 6L6 18M18 18L6 6" stroke="white" stroke-width="2" stroke-linecap="round" />
				</svg>
			</div>
		</div>
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
		<div class="social__links">
			<a class="link telegram" href="https://t.me/KOT_Spartac" target="_blank">
				<svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.16462 10.884L6.86686 15.1558C7.29287 15.1558 7.47737 14.9691 7.69863 14.745L9.69593 12.798L13.8345 15.8894C14.5935 16.3208 15.1283 16.0936 15.3331 15.1772L18.0496 2.19366L18.0504 2.1929C18.2911 1.04846 17.6446 0.600939 16.9051 0.881693L0.937216 7.11718C-0.15256 7.54863 -0.13606 8.16828 0.751961 8.44903L4.83431 9.74417L14.3168 3.69229C14.763 3.39088 15.1688 3.55765 14.835 3.85906L7.16462 10.884Z" fill="white" />
				</svg>
			</a>
			<a class="link vk" href="https://vk.com/kot_mtt" target="_blank">
				<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M10.8858 13.2006C4.12086 13.2006 0.262337 8.47085 0.101562 0.600586H3.4902C3.6015 6.37716 6.09963 8.82401 8.07839 9.32851V0.600586H11.2693V5.58257C13.2233 5.36815 15.276 3.09788 15.9686 0.600586H19.1594C18.6276 3.67806 16.4015 5.94833 14.8185 6.88167C16.4015 7.63842 18.9369 9.6186 19.9016 13.2006H16.3891C15.6347 10.8042 13.7551 8.95013 11.2693 8.69788V13.2006H10.8858Z" fill="white" />
				</svg>
			</a>
		</div>
		<div class="order__btn">
			<span class="zero-up">Оставить заявку в команду</span>
			<span class="medium-up">Подать заявку</span>
		</div>
	</div>
</div>
<?}?>