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
		<script>
			$(document).ready(function(){
				$('#applicationIntro .btn_box').click(function(){
					location.href="application.php";
				});
			});
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
			<section data-role="page" id="applicationIntro" class="container">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<a href="#" class="ui-btn ui-btn-left" data-rel="back"><img src="../images/common/btn_backward.png" alt=""></a>
					<h1>Request for Drive</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textwrap">
						<p>How did you like the virtual test drive of Sonata New Rise?</p> <p>Would you like to actually test drive the Sonata New Rise?</p><p>Press the button below to schedule your test drive.</p>
					</div>
					<!-- <a href="javascript:;" class="btn_nextPage"><img src="../images/common/btn_next_black.png" alt=""></a> -->
					<div class="button">
						<a class="btn_box" href="javascript:;">REQUEST TEST DRIVE</a>
					</div>
				</div>		
			</section>				
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
