<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Войти в команду КОТ');
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/enter-the-team.min.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/enter-the-team.min.js');
?>
<section class="enter-the-team">
	<div class="container">
		<h1>Выводим профессионализм на&nbsp;новый уровень <span>и&nbsp;вкладываемся в&nbsp;каждого игрока.</span></h1>
		<div class="form__block">
			<div class="top">
				<div class="pre__info">
					<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="Warning / Info">
							<path id="Vector" d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 8V8.1L11.9502 8.1002V8H12.0498Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
					</svg>
					Обязательные требования к&nbsp;кандидатам
				</div>
				<div class="points">
					<div class="point">Готов уделять игре и&nbsp;обучению <span>150 часов в&nbsp;месяц</span></div>
					<div class="point"><span>Сыграл 1000 турниров</span> за&nbsp;последние полгода</div>
					<div class="point">Можешь <span>показать профит на&nbsp;рабочем лимите</span></div>
					<div class="point"><span>Хорошая репутация</span> и&nbsp;отсутствие арбитража</div>
				</div>
				<div class="approve__block">
					<div class="management">
						<label class="approve" for="approve">
							<input type="checkbox" name="approve" id="approve" value="" checked="checked" />
							<svg class="check" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.9325 1.92165C9.21223 2.19981 9.21351 2.65207 8.93535 2.9318L3.82141 8.07466C3.68734 8.20949 3.50505 8.2853 3.31491 8.2853C3.12477 8.2853 2.94248 8.20949 2.80841 8.07466L1.06521 6.3216C0.787051 6.04187 0.788326 5.58961 1.06806 5.31145C1.34779 5.03329 1.80005 5.03457 2.07821 5.3143L3.31491 6.558L7.92235 1.9245C8.20051 1.64477 8.65277 1.6435 8.9325 1.92165Z" fill="white" />
							</svg>
							Согласен с&nbsp;требованиями
						</label>
					</div>
					<div class="arrow">
						<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
							<g transform="translate(-2467)">
								<path d="m2711 140.099h24v269.499l78.07-78.821 17.05 16.89-107.12 108.151-107.12-108.151 17.05-16.89 78.07 78.821zm0-66.864v45.53h24v-45.53z"/>
							</g>
						</svg>
					</div>
					<div class="comment">Подтвердите согласие с&nbsp;требованиями, чтобы заполнить анкету</div>
				</div>
			</div>
			<div class="bottom">
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/enter-the-team.php',
		'PREFIX' => 'header',
		'MODAL_BUTTON_TEXT' => 'Отправить заявку'
	)
);?>
			</div>
		</div>
	</div>
</section>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>