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
	$arPicture = make_picture_width($arItem['PREVIEW_PICTURE'], $width);
	$arResult['ITEMS'][$key]['PP'] = $arPicture;

	$arYOUTUBE_VIDEO = array_pop(explode('/',$arItem['PROPERTIES']['YOUTUBE_VIDEO']['VALUE']));
	$arYOUTUBE_VIDEO = explode('=', $arYOUTUBE_VIDEO);
	$arYOUTUBE_VIDEO = $arYOUTUBE_VIDEO[1];
	$arResult['ITEMS'][$key]['PROPERTIES']['YOUTUBE_VIDEO']['YOUCODE'] = $arYOUTUBE_VIDEO;
	$decode = file_get_contents('https://gdata.YOUTUBE_VIDEO.com/feeds/api/videos/'.$arYOUTUBE_VIDEO.'?v=2&alt=json');
	$videodata = json_decode($decode);
	$entry = (array) $videodata->entry;
	$published = (array) $entry['published'];
	$arResult['ITEMS'][$key]['PROPERTIES']['YOUTUBE_VIDEO']['VIEWCOUNT'] = $entry['yt$statistics']->viewCount;
	$arResult['ITEMS'][$key]['PROPERTIES']['YOUTUBE_VIDEO']['ACTIVE_FROM'] = substr($published['$t'],0,10);
}
?>