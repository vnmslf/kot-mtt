<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
\Bitrix\Main\Loader::includeModule('iblock');
$iblockTable = \Bitrix\Iblock\Iblock::wakeUp(\Dao\App::ib('Static')->id())->getEntityDataClass();
$width = [
	'mobile' => [
		'start' => '0',
		'end' => '713',
	],
	'md-mobile' => [
		'start' => '321',
		'end' => '353',
	],
	'lg-mobile' => [
		'start' => '354',
		'end' => '414',
	],
	'xl-mobile' => [
		'start' => '415',
		'end' => '630',
	],
	'tablet' => [
		'start' => '631',
		'end' => '698',
	],
	'md-tablet' => [
		'start' => '699',
		'end' => '767',
	],
	'lg-tablet' => [
		'start' => '768',
		'end' => '779',
	],
	'xl-tablet' => [
		'start' => '780',
		'end' => '1023',
	],
	'desktop' => [
		'start' => '1024',
		'end' => '1069',
	],
	'md-desktop' => [
		'start' => '1070',
		'end' => '1199',
	],
	'lg-desktop' => [
		'start' => '1200',
		'end' => '1319',
	],
	'xl-desktop' => [
		'start' => '1320',
		'end' => 'max',
	],
];
$elements = $iblockTable::getList([
	'select' => ['ID', 'CODE', 'PREVIEW_PICTURE', 'HERO_CAPTION_' => 'HERO_CAPTION', 'HERO_H1_' => 'HERO_H1'],
	'filter' => ['=ACTIVE' => 'Y'],
])->fetchAll();
foreach ($elements as $element) {
	if($element['CODE'] == 'rezultaty-komandy') {
		$arResult['START']['PP'] = make_picture_width(CFile::GetFileArray($element['PREVIEW_PICTURE']), $width);
		$arResult['START']['CAPTION'] = $element['HERO_CAPTION_VALUE'];
		$arResult['START']['TEXT'] = $element['HERO_H1_VALUE'];
	}
}
?>