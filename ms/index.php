<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");

	$LMS_CONTRY = urldecode($_POST["LMS_COUNTRY"]);

	$LMS_NAME = urldecode($_POST["LMS_NAME"]);

	$TYPE = "ms";

	$APP_GB = $_POST["APP_GB"];

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sonata New Rise</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/device.js"></script>
	<script src="common/js/common.js"></script>
	<script type="text/javascript">
		 //main_go('en');
	</script>
</head>
<body>
	<form id="Frm" name="Frm" method="post" action="../common/login_action.php">
		<input type="hidden" name="LMS_CONTRY" value="<?=$LMS_CONTRY?>"/>
		<input type="hidden" name="LMS_NAME" value="<?=$LMS_NAME?>"/>
		<input type="hidden" name="APP_GB" value="<?=$APP_GB?>"/>
		<input type="hidden" name="TYPE" value="<?=$TYPE?>"/>
		<input type="hidden" name="RETURN" value=""/>
	</form>
	<section data-role="page" id="lang" class="container">
		<div data-role="main" class="ui-content">
			<div class="header">
				<h1><span>Sonata</span> <span>New</span> <span>Rise</span></h1>
			</div>
			<div class="select_box">
				<h2>Select a Language</h2>
				<ul>
					<li><a href="javascript:;" onclick="main_go('en')">English</a></li>
					<li><a href="javascript:;" onclick="main_go('ru')">Russian</a></li>
					<li><a href="javascript:;" onclick="main_go('ar')">Arabic</a></li>
					<!-- <li><a href="javascript:;" onclick="main_go('ko')">Korean</a></li> -->
				</ul>
			</div>
			
		</div>
	</section>
</body>
</html>



