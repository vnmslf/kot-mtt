<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/footer.min.css');?>
	</main>
	<footer>
		<div class="background"></div>
		<div class="container">
<?$url_without_question = explode('?', $_SERVER['REQUEST_URI']);
$url_without_question = $url_without_question[0];
if($url_without_question == '/') {?>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/partners.php',
		'PREFIX' => 'header',
	)
);?>
<?}?>
			<div class="last__block">
				ООО “КОТ-МТТ”
				<a href="/privacy/">Политика конфиденциальности</a>
			</div>
		</div>
	</footer>
	<div class="modal">
		<div class="actions">
			<div class="modal__close">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18 6L6 18M18 18L6 6" stroke="white" stroke-width="2" stroke-linecap="round" />
				</svg>
			</div>
		</div>
		<div class="caption">Вступай к котам</div>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/order.php',
		'PREFIX' => 'header',
		'MODAL_BUTTON_TEXT' => 'Отправить заявку'
	)
);?>
	</div>
</body>
</html>