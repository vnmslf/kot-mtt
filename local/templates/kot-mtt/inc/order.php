<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$prefix = $arParams['PREFIX'];
$modal_button_text = $arParams['MODAL_BUTTON_TEXT'];?>
<form name="<?=$prefix?>-main" class="class" action="<?=SITE_TEMPLATE_PATH?>/inc/form.php" method="post" enctype="multipart/form-data">
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
			<div class="checkbox__block">
				<input type="checkbox" name="checkbox" id="checkbox" class="required" value="" />
				<label for="checkbox">Согласен на <a href="/">обработку персональных данных</a></label>
			</div>
		</div>
		<input type="hidden" name="prefix" value="<?=$prefix?>-">
		<input type="hidden" name="autoresponder" value="true">
	</div>
</form>