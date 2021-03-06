<?
$content_mail = "<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<title>Test Drive Confirmation</title>
	<link rel='stylesheet' href='http://test.deoham.com/os/td/css/font.css'>
	<style>
		header {width: 100%;display: table;}
		header h1 {float: left;}
		header p {float: right;}
		h1{font-family: 'HyundaiSansHeadMedium', Arial, sans-serif;font-size: 30px;}
		body{font-family: 'HyundaiSansText';}
		section {text-align: center;}
		article:first-child {margin-bottom: 50px;}
		article:first-child p:first-child {font-family: 'HyundaiSansHeadMedium', Arial, sans-serif; font-size: 25px;}
		article:last-child {margin-top: 30px; width: 60%; margin: 0 auto;}
		article:last-child p:first-child {color: #a36b4f;}
	
	</style>
</head>
<body>
	<header>
		<h1><span>HYUNDAI</span> Test Drive Center</h1>
		<p>This message is sent only</p>
	</header>
	<section>
		<article>
			<p><strong><span>KONA</span></strong> test drive is requested.</p>
			<p>Thank you for request.</p>
		</article>
		<hr>
		<article>
			<p>The test schedule you have requested has been registered.</p>
			<p>Hello. This is <span>Hyundai</span> Test drive center.<br>We would like to inform you that we have successfully received your test drive request.</p>
			<p>The application schedule is <span>".$TEST_DRIVE_DATE."</span>, We will respond to you as soon as the schedule is confirmed by coordinating the application time and the test time.</p>
			<p>Thank you.</p>
		</article>
	</section>
</body>
</html>";

echo $content_mail;
?>