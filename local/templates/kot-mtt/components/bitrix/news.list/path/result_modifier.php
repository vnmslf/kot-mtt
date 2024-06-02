<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
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
foreach ($arResult['ITEMS'] as $key => $arItem) {
	$arPreviewPicture = make_picture_width($arItem['PREVIEW_PICTURE'], $width);
	$arResult['ITEMS'][$key]['PP'] = $arPreviewPicture;
}
?>