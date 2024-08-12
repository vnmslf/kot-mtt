<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Спасибо! КОТы Вам рады!');
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/thank-you.min.css');
?>
<section class="thank-you">
	<div class="container">
		<h1>Спасибо!</h1>
		<h2>КОТы уже приняли Вашу заявку в работу</h2>
		<a href="/">На главную</a>
	</div>
</section>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>