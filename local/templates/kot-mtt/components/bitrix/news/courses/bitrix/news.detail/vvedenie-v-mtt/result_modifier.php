<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
$width_mobile = [
	'mobile' => [
		'start' => '0',
		'end' => '320',
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
$width_all = array_merge($width_mobile, $width);
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
$arSelect = Array(
	'ID',
	'PREVIEW_TEXT',
	'PREVIEW_PICTURE',
);
$arFilter = Array(
	'IBLOCK_ID' => \Dao\App::ib('Static')->id(),
	'ACTIVE_DATE' => 'Y',
	'ACTIVE' => 'Y',
	'CODE' => [
		'mtt-join-1',
		'mtt-join-2',
		'mtt-join-3',
		'mtt-join-4',
		'mtt-join-5',
		'speedrun-join-order',
	]
);
$res = CIBlockElement::GetList(
	Array(),
	$arFilter,
	false,
	Array(
		'nPageSize' => 50
	),
	$arSelect
);
$k = 0;
while($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	$arResult['JOINUS'][$k]['TEXT'] = $arFields['PREVIEW_TEXT'];
	$arResult['JOINUS'][$k]['PICTURE'] = make_picture_width(CFile::GetFileArray($arFields['PREVIEW_PICTURE']), $width_all);
	$k++;
}
$arSelect = Array(
	'ID',
	'PREVIEW_TEXT',
	'PREVIEW_PICTURE',
	'DETAIL_PICTURE',
	'CODE'
);
$arFilter = Array(
	'IBLOCK_ID' => \Dao\App::ib('Static')->id(),
	'ACTIVE_DATE' => 'Y',
	'ACTIVE' => 'Y',
	'CODE' => 'our-test'
);
$res = CIBlockElement::GetList(
	Array(),
	$arFilter,
	false,
	Array(
		'nPageSize' => 1
	),
	$arSelect
);
if($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	$arResult['OURTEST']['TEXT'] = $arFields['PREVIEW_TEXT'];
	$arResult['OURTEST']['PP'] = make_picture_width(CFile::GetFileArray($arFields['PREVIEW_PICTURE']), $width_all);
	$arResult['OURTEST']['DP'] = make_picture_width(CFile::GetFileArray($arFields['DETAIL_PICTURE']), $width_all);
}
$res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => \Dao\App::ib('Programm')->id(), 'CODE' => 'mtt', 'SITE_ID' => 's1'));
$section = $res->Fetch();
$arSelect = Array(
	'ID',
	'NAME',
	'PREVIEW_TEXT',
	'DETAIL_TEXT',
	'PROPERTY_COLOUR'
);
$arFilter = Array(
	'IBLOCK_ID' => \Dao\App::ib('Programm')->id(),
	'IBLOCK_SECTION_ID' => $section['ID'],
	'ACTIVE_DATE' => 'Y',
	'ACTIVE' => 'Y',
);
$res = CIBlockElement::GetList(
	Array(),
	$arFilter,
	false,
	Array(
		'nPageSize' => 50
	),
	$arSelect
);
$k = 0;
while($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	$arResult['PROGRAMM'][$k]['NAME'] = $arFields['NAME'];
	$arResult['PROGRAMM'][$k]['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];
	$arResult['PROGRAMM'][$k]['DETAIL_TEXT'] = $arFields['DETAIL_TEXT'];
	if($arFields['PROPERTY_COLOUR_VALUE']) {
		$arResult['PROGRAMM'][$k]['COLOUR'] = $arFields['PROPERTY_COLOUR_VALUE'];
	}
	$k++;
}
?>