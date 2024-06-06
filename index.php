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
	'bitrix:news.list',
	'team',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'Y',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'Y',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'N',
		'CHECK_DATES' => 'Y',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'N',
		'DISPLAY_DATE' => 'N',
		'DISPLAY_NAME' => 'N',
		'DISPLAY_PICTURE' => 'N',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => array('',''),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => \Dao\App::ib('team')->id(),
		'IBLOCK_TYPE' => 'Static',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '20',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array('PREVIEW_PICTURE', 'FOUNDER', 'ACHIEVEMENTS', ''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'results',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'Y',
		'CACHE_FILTER' => 'N',
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
		'FIELD_CODE' => array('',''),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => \Dao\App::ib('results')->id(),
		'IBLOCK_TYPE' => 'Static',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '20',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array('PREVIEW_PICTURE', 'FOUNDER', 'ACHIEVEMENTS', ''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'with',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'CACHE_FILTER' => 'N',
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
		'FIELD_CODE' => array('NAME','PREVIEW_TEXT',''),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => \Dao\App::ib('with')->id(),
		'IBLOCK_TYPE' => 'Static',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '20',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array('',''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'courses',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'Y',
		'CACHE_FILTER' => 'N',
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
		'FIELD_CODE' => array('NAME','PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => \Dao\App::ib('courses')->id(),
		'IBLOCK_TYPE' => 'Static',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '20',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array(''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N'
	)
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.detail',
	'rost',
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
		'ELEMENT_CODE' => 'rasti-bystree-i-uverenney',
		'ELEMENT_ID' => '',
		'FIELD_CODE' => array('NAME', 'PREVIEW_TEXT'),
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
		'PROPERTY_CODE' => array(''),
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
	'bitrix:news.list',
	'path',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'Y',
		'CACHE_FILTER' => 'N',
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
		'FIELD_CODE' => array(
			0 => 'NAME',
			1 => 'PREVIEW_TEXT',
			2 => 'PREVIEW_PICTURE',
		),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => \Dao\App::ib('path')->id(),
		'IBLOCK_TYPE' => 'Static',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '20',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array(
			0 => 'POINTS',
		),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N',
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'video',
	Array(
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'Y',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'Y',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'N',
		'CHECK_DATES' => 'Y',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'N',
		'DISPLAY_DATE' => 'N',
		'DISPLAY_NAME' => 'N',
		'DISPLAY_PICTURE' => 'N',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => array('NAME', 'PREVIEW_PICTURE'),
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => \Dao\App::ib('video')->id(),
		'IBLOCK_TYPE' => 'Static',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '20',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => array('YOUTUBE_VIDEO', ''),
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'Y',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N'
	)
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>