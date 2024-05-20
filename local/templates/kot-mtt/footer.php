<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();?>
	<footer>
<?$APPLICATION->IncludeComponent(
	'bitrix:menu',
	'footer_menu',
	Array(
		'ALLOW_MULTI_SELECT' => 'N',
		'CHILD_MENU_TYPE' => 'left',
		'DELAY' => 'N',
		'MAX_LEVEL' => '1',
		'MENU_CACHE_GET_VARS' => array(
			0 => '',
		),
		'MENU_CACHE_TIME' => '3600',
		'MENU_CACHE_TYPE' => 'A',
		'MENU_CACHE_USE_GROUPS' => 'Y',
		'MENU_THEME' => 'blue',
		'ROOT_MENU_TYPE' => 'header__all',
		'USE_EXT' => 'Y',
	),
	false
);?>
	</footer>
	<div class="modal">
		<div class="actions">
			<div class="modal__close">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18 6L6 18M18 18L6 6" stroke="white" stroke-width="2" stroke-linecap="round" />
				</svg>
			</div>
		</div>
		*form*
	</div>
</body>
</html>