<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\UI\Extension;
use Bitrix\Main\Page\Asset;
Extension::load('ui.bootstrap4');
CJSCore::Init(array('jquery'));
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/imagesloaded.pkgd.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/infinite-scroll.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/masonry.pkgd.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/slick.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.stellar.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.min.js');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/all.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/slick.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/ionicons.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main__styles.min.css');
IncludeTemplateLangFile(__FILE__);
$now_url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].'/';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="alternate" hreflang="x-default" href="<?=$now_url?>" />
	<?$APPLICATION->ShowHead();?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=SITE_TEMPLATE_PATH?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="yandex-verification" content="3d6de5ebf5ec0c71" />
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="cursor"></div>
	<div id="preloader">
		<div class="loading-area">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/logo__white.svg" alt="Логотип Вектор тепла" />
			<span>загрузка...</span>
		</div>
		<div class="left-side"></div>
		<div class="right-side"></div>
	</div>
	<div class="overlay-menu d-flex align-items-start flex-column">
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/prenav.php',
	)
);?>
		<nav class="navbar navbar-light">
			<div class="container">
				<a class="navbar-brand text-white" href="/">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/logo__white.svg" alt="Логотип Вектор тепла в меню" />
				</a>
				<?$APPLICATION->IncludeComponent(
					'bitrix:menu',
					'header_menu',
					Array(
						'ALLOW_MULTI_SELECT' => 'N',
						'CHILD_MENU_TYPE' => 'left',
						'DELAY' => 'N',
						'MAX_LEVEL' => '4',
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
				<div class="close-icon">
					<i class="fas fa-times"></i>
				</div>
				<?/*<?$APPLICATION->IncludeComponent(
					'bitrix:menu',
					'header_menu',
					Array(
						'ALLOW_MULTI_SELECT' => 'N',
						'CHILD_MENU_TYPE' => 'left',
						'DELAY' => 'N',
						'MAX_LEVEL' => '4',
						'MENU_CACHE_GET_VARS' => array(
							0 => '',
						),
						'MENU_CACHE_TIME' => '3600',
						'MENU_CACHE_TYPE' => 'A',
						'MENU_CACHE_USE_GROUPS' => 'Y',
						'MENU_THEME' => 'blue',
						'ROOT_MENU_TYPE' => 'header__right',
						'USE_EXT' => 'Y',
					),
					false
				);?>*/?>
				<?/*<ul class="social-icons light list-inline">
					<li class="list-inline-item">
						<a href="tg://resolve?domain=miberezkin" target="_blank">
							<i class="fab fa-telegram"></i>
						</a>
					</li>
				</ul>*/?>
			</div>
		</nav>
		<?$APPLICATION->IncludeComponent(
			'bitrix:menu',
			'top_menu',
			Array(
				'ALLOW_MULTI_SELECT' => 'N',
				'CHILD_MENU_TYPE' => 'left',
				'DELAY' => 'N',
				'MAX_LEVEL' => '4',
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
		<footer class="text-center mt-auto">
			<div class="container">
				<div class="end__footer">
					2023 &mdash; <?=date('Y')?> © Все&nbsp;права&nbsp;защищены&nbsp;ООО&nbsp;&laquo;Вектор&nbsp;тепла&raquo;.
				</div>
			</div>
		</footer>
	</div>
	<div class="site-wrapper">
		<header>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/prenav.php',
	)
);?>
			<nav class="navbar navbar-light">
				<div class="container d-flex">
					<a class="navbar-brand" href="/">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Вектор тепла, логотип в шапке" />
					</a>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/order.php',
		'PREFIX' => 'header__cta',
		'BG_COLOR' => '',
		'BUTTON_COLOR' => 'red',
		'TYPE_CONTENT' => 'div',
		'BUTTON_COLOR' => 'red',
		'BUTTON_TEXT' => 'Задать вопрос',
		'MODAL_BUTTON_TEXT' => 'Задать вопрос',
	)
);?>
					<?$APPLICATION->IncludeComponent(
						'bitrix:menu',
						'header_menu',
						Array(
							'ALLOW_MULTI_SELECT' => 'N',
							'CHILD_MENU_TYPE' => 'left',
							'DELAY' => 'N',
							'MAX_LEVEL' => '4',
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
					<div class="menu-icon justify-content-end">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<?/*<?$APPLICATION->IncludeComponent(
						'bitrix:menu',
						'header_menu',
						Array(
							'ALLOW_MULTI_SELECT' => 'N',
							'CHILD_MENU_TYPE' => 'left',
							'DELAY' => 'N',
							'MAX_LEVEL' => '4',
							'MENU_CACHE_GET_VARS' => array(
								0 => '',
							),
							'MENU_CACHE_TIME' => '3600',
							'MENU_CACHE_TYPE' => 'A',
							'MENU_CACHE_USE_GROUPS' => 'Y',
							'MENU_THEME' => 'blue',
							'ROOT_MENU_TYPE' => 'header__right',
							'USE_EXT' => 'Y',
						),
						false
					);?>*/?>
					<?/*<ul class="social-icons list-inline">
						<li class="list-inline-item">
							<a href="tg://resolve?domain=miberezkin" target="_blank" title="Связаться со мной в Telegram">
								<i class="fab fa-telegram"></i>
							</a>
						</li>
					</ul>*/?>
				</div>
			</nav>
		</header>