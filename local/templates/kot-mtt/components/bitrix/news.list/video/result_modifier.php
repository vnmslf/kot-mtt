<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
foreach ($arResult['ITEMS'] as $key => $arItem) {
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