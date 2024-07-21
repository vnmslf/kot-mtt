<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
$width_mobile = [
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
];
$width = [
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
$width_mentors = [
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
if($arResult['PREVIEW_PICTURE']) {
	$arResult['PP'] = make_picture_width($arResult['PREVIEW_PICTURE'], $width);
}
$fs_m = make_picture_width(CFile::GetFileArray($arResult['PROPERTIES']['FIRST_SECTION_MOBILE']['VALUE']), $width_mobile);
$fs = make_picture_width(CFile::GetFileArray($arResult['PROPERTIES']['FIRST_SECTION']['VALUE']), $width);
unset($fs_m['default']);
$arResult['FS'] = array_merge($fs_m, $fs);
if($arResult['PROPERTIES']['ON_THIS_COURSE']['VALUE']) {
	$arResult['ON_THIS_COURSE'] = make_picture_width(CFile::GetFileArray($arResult['PROPERTIES']['ON_THIS_COURSE']['VALUE']), $width);
}
$i = 0;
foreach ($arResult['PROPERTIES']['MENTORS']['VALUE'] as $key => $value) {
	$res = CIBlockElement::GetByID($value);
	if($ar_res = $res->GetNext()) {
		$arResult['MENTORS'][$i]['NAME'] = $ar_res['NAME'];
		$arResult['MENTORS'][$i]['PICTURE'] = make_picture_width(CFile::GetFileArray($ar_res['DETAIL_PICTURE']), $width_mentors);
		$arResult['MENTORS'][$i]['PREVIEW_TEXT'] = $ar_res['PREVIEW_TEXT'];
		$i++;
	}
}
?>