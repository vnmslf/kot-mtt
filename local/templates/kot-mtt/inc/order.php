<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/order.min.js');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/order.min.css');
$prefix = $arParams['PREFIX'];
$modal_button_text = $arParams['MODAL_BUTTON_TEXT'];?>
<form name="<?=$prefix?>-main" class="class active" action="<?=SITE_TEMPLATE_PATH?>/inc/form.php" method="post" enctype="multipart/form-data">
	<div class="form-section">
		<div class="form-group">
			<label>ФИО <span>*</span></label>
			<input type="text" name="<?=$prefix?>-name" id="<?=$prefix?>-name" class="required" value="" placeholder="Прим. Дмитрий" />
		</div>
		<div class="form-group">
			<label>Телефон <span>*</span></label>
			<input type="tel" name="<?=$prefix?>-phone" id="<?=$prefix?>-phone" class="masked__phone required" value="" placeholder="+7 (111) 111 11 11" maxlength="12" />
		</div>
		<div class="d-none">
			<input type="text" id="<?=$prefix?>-botcheck" name="<?=$prefix?>-botcheck" value="">
		</div>
		<div class="form-submit">
			<button type="submit" name="<?=$prefix?>-submit"><?=$modal_button_text?></button>
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