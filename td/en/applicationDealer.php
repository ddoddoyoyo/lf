<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");

	if($_SESSION["LF_TD_DEALER_ID"]){
	}else{
		//$tools->alertJavaGo("Faild.","error.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../css/font.css">
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
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../js/device.js"></script>
		<script src="../js/menu.js"></script>
		<script src="../js/common.js"></script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="applicationDealer" class="container application">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn ui-btn-inline ui-corner-all ui-shadow btn_sidePanel ui-btn-right"><img src="../images/button/icon_navbar.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textwrap">
						<p>KONA's Test Driving simulation is completed.<br>Try share the Test Drive URL to customer.</p>
						<p>You can receive to your e-mail real Test Drive application and customer suggestion after finished the Test Driving.</p>
					</div>
					<div class="url_box">	
						<p>Copy the Test Drive <span>URL</span> from here.</p>
						<input type='text' value='http://test.deoham.com/os/td/en/testdriveIntro.php' readonly/>
						<p class='btn_copy'>COPY</p>
					</div>
				</div>		
			</section>				
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
