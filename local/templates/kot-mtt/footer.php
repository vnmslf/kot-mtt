<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/footer.min.css');?>
	</main>
	<footer>
		<div class="background"></div>
		<div class="container">
			<div class="partners">
				<svg width="754" height="857" viewBox="0 0 754 857" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g opacity="0.5">
						<g filter="url(#filter0_f_747_366)">
							<ellipse cx="376.956" cy="428.5" rx="220.956" ry="272.5" fill="#B50000" fill-opacity="0.5" />
						</g>
						<g style="mix-blend-mode:color-dodge" filter="url(#filter1_f_747_366)">
							<circle cx="392.874" cy="375.44" r="109.531" fill="#B50000" fill-opacity="0.3" />
						</g>
					</g>
					<defs>
						<filter id="filter0_f_747_366" x="0.800003" y="0.800003" width="752.313" height="855.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix" />
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
							<feGaussianBlur stdDeviation="77.6" result="effect1_foregroundBlur_747_366" />
						</filter>
						<filter id="filter1_f_747_366" x="169.044" y="151.61" width="447.661" height="447.661" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix" />
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
							<feGaussianBlur stdDeviation="57.15" result="effect1_foregroundBlur_747_366" />
						</filter>
					</defs>
				</svg>
				<h2>Партнеры</h2>
				<div class="list__partners">
					<div class="partner">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/footer/gipsi.svg" alt="Гипси" />
					</div>
					<div class="partner">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/footer/skillbox.svg" alt="Skillbox" />
					</div>
					<div class="partner">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/footer/w.svg" alt="W" />
					</div>
					<div class="partner">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/footer/greenline_poker.svg" alt="Greenline Poker" />
					</div>
					<div class="partner">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/footer/hand2note.svg" alt="HAND2NOTE" />
					</div>
				</div>
			</div>
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