<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/order.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.maskedinput.min.js');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/modal.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/order.min.css');
$prefix = $arParams['PREFIX'];
$tag = $arParams['TYPE_CONTENT'];
$button_color = ($arParams['BUTTON_COLOR'] !== '' ? ' '.$arParams['BUTTON_COLOR'] : '');
$button_text = $arParams['BUTTON_TEXT'];
$modal_button_text = $arParams['MODAL_BUTTON_TEXT'];?>
<<?=$tag?> class="order<?if($arParams['BG_COLOR']) {?> <?=$arParams['BG_COLOR']?><?}?>">
	<div class="container">
		<div class="order__block">
			<div class="actions__block">
				<span class="button<?=$button_color?>" data-order="<?=$prefix?>-order"><?=$button_text?></span>
			</div>
		</div>
	</div>
	<div class="modal modal__order <?=$prefix?>-order">
		<div class="modal__close" data-exit="true">
			<i class="fas fa-times"></i>
		</div>
		<div class="modal__form">
			<form name="<?=$prefix?>-main" class="class" action="<?=SITE_TEMPLATE_PATH?>/inc/form.php" method="post" enctype="multipart/form-data">
				<div class="form-section">
					<div class="form-group">
						<label>Ваше имя:</label>
						<input type="text" name="<?=$prefix?>-name" id="<?=$prefix?>-name" class="form-control form-control-lg required" value="" placeholder="Как к вам обращаться?" />
					</div>
					<div class="form-group">
						<label>E-mail:</label>
						<input type="email" name="<?=$prefix?>-email" id="<?=$prefix?>-email" class="form-control form-control-lg required" value="" placeholder="e-mail@domain.ru" />
					</div>
					<div class="form-group">
						<label>Контактный телефон:</label>
						<input type="tel" name="<?=$prefix?>-phone" id="<?=$prefix?>-phone" class="masked__phone form-control form-control-lg required" value="" placeholder="+7 (999) 999-99-99" maxlength="12" />
					</div>
					<div class="d-none">
						<input type="text" id="<?=$prefix?>-botcheck" name="<?=$prefix?>-botcheck" value="">
					</div>
					<div class="form-submit">
						<button type="submit" name="<?=$prefix?>-submit"><?=$modal_button_text?></button>
					</div>
					<input type="hidden" name="prefix" value="<?=$prefix?>-">
					<input type="hidden" name="autoresponder" value="true">
				</div>
			</form>
		</div>
	</div>
</<?=$tag?>>