<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");

	$LMS_CONTRY = urldecode($_POST["LMS_COUNTRY"]);

	$LMS_NAME = urldecode($_POST["LMS_NAME"]);
	
	$TYPE = "sg";

	$APP_GB = urldecode($_POST["APP_GB"]);

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/styleG_intro.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/device.js"></script>
	<script src="common/js/common.js"></script>
</head>
<body>
	<form id="Frm" name="Frm" method="post" action="../common/login_action.php">
	<input type="hidden" name="LMS_CONTRY" value="<?=$LMS_CONTRY?>"/>
	<input type="hidden" name="LMS_NAME" value="<?=$LMS_NAME?>"/>
	<input type="hidden" name="APP_GB" value="<?=$APP_GB?>"/>
	<input type="hidden" name="TYPE" value="<?=$TYPE?>"/>
	<input type="hidden" name="LANGUAGE" value=""/>
	<input type="hidden" name="RETURN" value=""/>
</form>
</body>
</html>
<script type="text/javascript">
	main_go('en');
</script>


