<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/modal.min.js');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/modal.min.css');?>
<div class="modal modal__portfolio">
	<div class="modal__close" data-exit="true">
		<i class="fas fa-times"></i>
	</div>
	<div class="portfolio__item">
		<img src="<?=SITE_TEMPLATE_PATH?>/images/logo__white.svg" alt="Портфолио" />
	</div>
</div>