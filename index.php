<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('');?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.detail',
	'hero',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_ELEMENT_CHAIN' => 'N',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'BROWSER_TITLE' => '-',
		'CACHE_GROUPS' => 'Y',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'A',
		'CHECK_DATES' => 'Y',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'N',
		'DISPLAY_DATE' => 'N',
		'DISPLAY_NAME' => 'N',
		'DISPLAY_PICTURE' => 'N',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'ELEMENT_CODE' => 'glavnaya-hero-sektsiya',
		'ELEMENT_ID' => '',
		'FIELD_CODE' => array(0=>'PREVIEW_PICTURE',1=>'',),
		'IBLOCK_ID' => \Dao\App::ib('Static')->id(),
		'IBLOCK_TYPE' => 'Static',
		'IBLOCK_URL' => '',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'MESSAGE_404' => '',
		'META_DESCRIPTION' => '-',
		'META_KEYWORDS' => '-',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Страница',
		'PROPERTY_CODE' => array(0=>'HERO_CAPTION',1=>'HERO_H1',2=>'HERO_LIST',3=>'ADVANTAGES'),
		'SET_BROWSER_TITLE' => 'N',
		'SET_CANONICAL_URL' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'STRICT_SECTION_CHECK' => 'N',
		'USE_PERMISSIONS' => 'N',
		'USE_SHARE' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news',
	'team',
	Array(
		'ADD_ELEMENT_CHAIN' => 'Y',
		'ADD_SECTIONS_CHAIN' => 'Y',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'BROWSER_TITLE' => '-',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'Y',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'A',
		'CHECK_DATES' => 'Y',
		'DETAIL_ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'DETAIL_DISPLAY_BOTTOM_PAGER' => 'N',
		'DETAIL_DISPLAY_TOP_PAGER' => 'N',
		'DETAIL_FIELD_CODE' => array(
			0 => 'NAME',
			1 => 'PREVIEW_PICTURE',
			2 => '',
		),
		'DETAIL_PAGER_SHOW_ALL' => 'N',
		'DETAIL_PAGER_TEMPLATE' => '',
		'DETAIL_PAGER_TITLE' => 'Страница',
		'DETAIL_PROPERTY_CODE' => array(
			0 => 'FOUNDER',
			1 => 'ACHIEVEMENTS',
			2 => '',
		),
		'DETAIL_SET_CANONICAL_URL' => 'N',
		'DISPLAY_BOTTOM_PAGER' => 'N',
		'DISPLAY_DATE' => 'N',
		'DISPLAY_NAME' => 'N',
		'DISPLAY_PICTURE' => 'N',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => \Dao\App::ib('team')->id(),
		'IBLOCK_TYPE' => 'Static',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
		'LIST_ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'LIST_FIELD_CODE' => array(
			0 => 'CODE',
			1 => 'NAME',
			2 => 'PREVIEW_PICTURE',
			3 => '',
		),
		'LIST_PROPERTY_CODE' => array(
			0 => 'FOUNDER',
			1 => 'ACHIEVEMENTS',
			2 => '',
		),
		'MESSAGE_404' => '',
		'META_DESCRIPTION' => '-',
		'META_KEYWORDS' => '-',
		'NEWS_COUNT' => '20',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PREVIEW_TRUNCATE_LEN' => '',
		'SEF_FOLDER' => '/team/',
		'SEF_MODE' => 'Y',
		'SEF_URL_TEMPLATES' => array(
			'detail' => '#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
			'news' => '',
			'section' => '#SECTION_CODE#/',
		),
		'SET_LAST_MODIFIED' => 'Y',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N',
		'USE_CATEGORIES' => 'N',
		'USE_FILTER' => 'N',
		'USE_PERMISSIONS' => 'N',
		'USE_RATING' => 'N',
		'USE_RSS' => 'N',
		'USE_SEARCH' => 'N',
		'USE_SHARE' => 'N',
	),
	false
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>