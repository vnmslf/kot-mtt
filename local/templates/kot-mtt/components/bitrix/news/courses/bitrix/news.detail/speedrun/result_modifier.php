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
$arSelect = Array(
	'ID',
	'NAME',
	'PROPERTY_NAME',
	'PROPERTY_CAPTION',
	'PREVIEW_TEXT',
	'SORT'
);
$arFilter = Array(
	'IBLOCK_ID' => \Dao\App::ib('Intime')->id(),
	'ACTIVE_DATE' => 'Y',
	'ACTIVE' => 'Y'
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
while($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	if($arFields['PROPERTY_NAME_VALUE']) {
		$arResult['INTIME'][$arFields['SORT']]['NAME'] = $arFields['PROPERTY_NAME_VALUE'];
	}
	if($arFields['PROPERTY_CAPTION_VALUE']) {
		$arResult['INTIME'][$arFields['SORT']]['CAPTION'] = $arFields['PROPERTY_CAPTION_VALUE'];
	}
	if($arFields['PREVIEW_TEXT']) {
		$arResult['INTIME'][$arFields['SORT']]['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];
	}
	$arResult['INTIME'][$arFields['SORT']]['ELEMENT_NAME'] = $arFields['NAME'];
}
if($arResult['PROPERTIES']['YOUR_CHANCE']['VALUE']) {
	$arResult['YOUR_CHANCE'] = make_picture_width(CFile::GetFileArray($arResult['PROPERTIES']['YOUR_CHANCE']['VALUE']), $width);
}
$arSelect = Array(
	'ID',
	'NAME',
	'DETAIL_PICTURE',
	'PROPERTY_SPEEDRUN'
);
$arFilter = Array(
	'IBLOCK_ID' => \Dao\App::ib('Team')->id(),
	'ACTIVE_DATE' => 'Y',
	'ACTIVE' => 'Y'
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
	if($arFields['~PROPERTY_SPEEDRUN_VALUE']['TEXT']) {
		$arResult['TEAM'][$k]['NAME'] = $arFields['NAME'];
		$arResult['TEAM'][$k]['PICTURE'] = make_picture_width(CFile::GetFileArray($arFields['DETAIL_PICTURE']), $width_all);
		$arResult['TEAM'][$k]['SPEEDRUN'] = $arFields['~PROPERTY_SPEEDRUN_VALUE']['TEXT'];
		$k++;
	}
}
$arSelect = Array(
	'ID',
	'PREVIEW_PICTURE',
	'CODE'
);
$arFilter = Array(
	'IBLOCK_ID' => \Dao\App::ib('Static')->id(),
	'ACTIVE_DATE' => 'Y',
	'ACTIVE' => 'Y',
	'CODE' => 'speedrun-team'
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
	$arResult['SPEEDRUN_TEAM'] = make_picture_width(CFile::GetFileArray($arFields['PREVIEW_PICTURE']), $width_all);
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
		'speedrun-join-1',
		'speedrun-join-2',
		'speedrun-join-3',
		'speedrun-join-4',
		'speedrun-join-5',
		'speedrun-join-6',
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
$res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => \Dao\App::ib('Programm')->id(), 'CODE' => 'speedrun', 'SITE_ID' => 's1'));
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