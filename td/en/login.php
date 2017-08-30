<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<title>Hyundai H-LINE</title>
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script>
		//  $(document).on("mobileinit", function () {
		// 	 $.mobile.hashListeningEnabled = false;
		// 	 $.mobile.pushStateEnabled = false;
		// 	 $.mobile.changePage.defaults.changeHash = false;
		// });
	</script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="../js/device.js"></script>
	<script src="../js/common.js"></script>
</head>
<body>
	<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="login" class="container dealerPage">
				<div data-role="main" class="ui-content">
					<form id="Form" name="frm" method="post" action="../common/login_action.php">
						<div class="inputwrap"><input type="text" name="LMS_ID"  placeholder="E-MAIL ID" /></div><!--value="youn9804@deoham.com"-->
						<div class="inputwrap"><input type="password" name="LMS_PASSWORD" placeholder="PASSWORD" /></div>
						<!-- value="123456"-->
						<a href="javascript:;" id="LoginAction" class="btn_login">LOGIN</a>
						<input type="hidden" name="RETURN" value="../../td/en/addr_copy.php"/>
						<input type="hidden" name="LANGUAGE" value="en"/>
						<input type="hidden" name="LMS_GB" value="hyundai"/>
						<input type="hidden" name="TYPE" value="td"/>
					</form>
				</div>
			</section>
		</div>
	</div>
</body>
</html>
<!-- <h3>Login</h3>
<form id="Form" name="Form" method="post" action="../common/login_action.php">
	I  D : <input type="text" name="LMS_ID" value="youn9804@deoham.com" /><br/>
	PASS : <input type="text" name="LMS_PASSWORD" value="123456" /><br/>
	<input type="submit" /><br/>
	<input type="hidden" name="RETURN" value="../../td/en/addr_copy.php"/>
	<input type="hidden" name="LANGUAGE" value="en"/>
	<input type="hidden" name="LMS_GB" value="hyundai"/>
	<input type="hidden" name="TYPE" value="td"/>
</form> -->