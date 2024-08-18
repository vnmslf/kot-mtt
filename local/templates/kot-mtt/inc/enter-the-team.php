<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/order.min.js');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/order.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/enter-the-team__form.min.css');
$prefix = 'enter';?>
<form name="<?=$prefix?>-main" class="class active" action="<?=SITE_TEMPLATE_PATH?>/inc/form.php" method="post" enctype="multipart/form-data">
	<div class="form-section">
		<h2>Анкета</h2>
		<div class="form-group">
			<label>Ф.И.О. <span>*</span></label>
			<input type="text" name="<?=$prefix?>-name" id="<?=$prefix?>-name" class="required" value="" placeholder="Прим. Дмитрий" />
		</div>
		<div class="form-group">
			<label>Дата рождения</label>
			<input type="tel" name="<?=$prefix?>-birthday" id="<?=$prefix?>-birthday" class="masked__birthday" value="" placeholder="ДД/ММ/ГГ" />
		</div>
		<div class="form-group">
			<label>Телефон <span>*</span></label>
			<input type="tel" name="<?=$prefix?>-phone" id="<?=$prefix?>-phone" class="masked__phone required" value="" placeholder="+7 (111) 111 11 11" maxlength="12" />
		</div>
		<div class="form-group">
			<label>Nickname (латиницей)</label>
			<input type="text" name="<?=$prefix?>-nickname" id="<?=$prefix?>-nickname" class="" value="" placeholder="Прим. Kot_Spartac" />
		</div>
		<div class="form-group">
			<label>Город</label>
			<input type="text" name="<?=$prefix?>-city" id="<?=$prefix?>-city" class="" value="" placeholder="Прим. Москва" />
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="text" name="<?=$prefix?>-email" id="<?=$prefix?>-email" class="" value="" placeholder="user@domain.com" />
		</div>
		<div class="form-group">
			<label>Ссылка на профиль Gipsyteam</label>
			<input type="text" name="<?=$prefix?>-gipsy" id="<?=$prefix?>-gipsy" class="" value="" placeholder="Прим. https://gipsyteam.poker/education/coaches/coach-андрей-котельников" />
		</div>
		<div class="form-group">
			<label>Алиас в Sharkscope или перечислите румы и ники</label>
			<input type="text" name="<?=$prefix?>-shark" id="<?=$prefix?>-shark" class="" value="" placeholder="" />
		</div>
		<div class="form-group">
			<label>Среднемесячная дистанция за последние полгода</label>
			<input type="text" name="<?=$prefix?>-dist" id="<?=$prefix?>-dist" class="" value="" placeholder="" />
		</div>
		<div class="form-group">
			<label>Опишите вашу покерную карьеру</label>
			<input type="text" name="<?=$prefix?>-career" id="<?=$prefix?>-career" class="" value="" placeholder="" />
		</div>
		<div class="form-group">
			<label>Какой ABI планируете играть?</label>
			<input type="text" name="<?=$prefix?>-abi" id="<?=$prefix?>-abi" class="" value="" placeholder="" />
		</div>
		<div class="form-group">
			<label>Планируете ли вы совмещать покер с другой деятельностью? Если да, то с какой (укажите сферу деятельности)</label>
			<input type="text" name="<?=$prefix?>-deals" id="<?=$prefix?>-deals" class="" value="" placeholder="" />
		</div>
		<div class="form-group">
			<label>Мессенджер для связи (Skype, Telegram, Discord) и имя вашего аккаунта <span>*</span></label>
			<input type="text" name="<?=$prefix?>-social" id="<?=$prefix?>-social" class="required" value="" placeholder="@telegram, @skype, @discord etc" />
		</div>
		<div class="form-group">
			<label>С кем из покерного комьюнити вы знакомы, кто может вас рекомендовать? (ссылка на профиль GipsyTeam) <span>*</span></label>
			<input type="text" name="<?=$prefix?>-recommend" id="<?=$prefix?>-recommend" class="required" value="" placeholder="Прим. https://gipsyteam.poker/education/coaches/coach-андрей-котельников" />
		</div>
		<div class="form-group">
			<label>Откуда вы узнали о нас? (если Twitch, то какой стример) <span>*</span></label>
			<input type="text" name="<?=$prefix?>-twitch" id="<?=$prefix?>-twitch" class="required" value="" placeholder="Прим. https://streamersbase.ru/streamers/buster" />
		</div>
		<div class="d-none">
			<input type="text" id="<?=$prefix?>-botcheck" name="<?=$prefix?>-botcheck" value="">
		</div>
		<div class="form-submit">
			<button type="submit" name="<?=$prefix?>-submit">Отправить заявку!</button>
			<div class="no-submit"></div>
			<div class="checkbox__block">
				<input type="checkbox" name="checkbox" id="checkbox" class="required" value="" />
				<label for="checkbox">
					<svg class="check" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M8.9325 1.92165C9.21223 2.19981 9.21351 2.65207 8.93535 2.9318L3.82141 8.07466C3.68734 8.20949 3.50505 8.2853 3.31491 8.2853C3.12477 8.2853 2.94248 8.20949 2.80841 8.07466L1.06521 6.3216C0.787051 6.04187 0.788326 5.58961 1.06806 5.31145C1.34779 5.03329 1.80005 5.03457 2.07821 5.3143L3.31491 6.558L7.92235 1.9245C8.20051 1.64477 8.65277 1.6435 8.9325 1.92165Z" fill="white" />
					</svg>
					Согласен на <a href="/">обработку персональных данных</a>
				</label>
			</div>
		</div>
		<input type="hidden" name="prefix" value="<?=$prefix?>-">
		<input type="hidden" name="autoresponder" value="true">
	</div>
</form>