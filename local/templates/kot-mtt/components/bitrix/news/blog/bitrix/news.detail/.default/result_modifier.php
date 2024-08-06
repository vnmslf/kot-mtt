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
$arResult['PP'] = make_picture_width($arResult['PREVIEW_PICTURE'], $width);
$i = 0;
foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $key => $value) {
	$i++;
	$more__photo[$i] = make_picture_width(CFile::GetFileArray($value), $width);
}
$old__text = $arResult['DETAIL_TEXT'];
$detail__text = explode('{{', $old__text);
$counter = count($detail__text) - 1;
for ($i = 0; $i < $counter; $i++) {
	$parts = explode('{{', $old__text);
	$exp = explode('}}', $parts[$i + 1]);
	$numbers = explode(',', $exp[0]);

	$picture[$i] = '<div class="pictures">';
	foreach ($numbers as $key => $value) {
		$picture[$i] .= '<picture>';
		foreach ($more__photo[$value] as $keyMedia => $valueMedia) {
			if($keyMedia !== 'default') {
				$explode = explode('-', $keyMedia);
				$start = $explode[0];
				$end = $explode[1];
				$picture[$i] .= '<source srcset="'.$more__photo[$value][$keyMedia]['src'].'" media="(min-width: '.$start.'px)'.($end !== 'max' ? ' and (max-width: '.$end.'px)' : '').'" type="image/webp" />';
			}
		}
		$picture[$i] .= '<img srcset="'.$more__photo[$value]['default'].'" alt="'.$arResult['NAME'].'" />
		</picture>';
	}
	$picture[$i] .= '</div>';
	$arResult['DETAIL_TEXT'] = str_replace('{{'.implode(',', $numbers).'}}', $picture[$i], $arResult['DETAIL_TEXT']);
}
?>