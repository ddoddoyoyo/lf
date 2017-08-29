<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	header("Content-Type: text/html; charset=UTF-8");

	if($_SESSION["HY_LMS_SEQ"] > 0 ){
	}else{
		$tools->JavaGo("/lf/ms/en/");
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
		<script src="../common/js/common.js"></script>
		<script src="../js/device.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/menu.js"></script>	
		<script>
			$(document).ready(function(){
				$('#intro #btn_start').click(function(){
					location.href = "main2.php";
				});
			});
		</script>

	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="intro" class="container">
				<div data-role="main" class="ui-content" >
					<div class="title">
						<p class="text">Dramatic changes</p>
						<h1>Sonata New Rise</h1>
					</div>
				</div>
				<a href="#cover" id="btn_start">START</a><!--data-transition="none"-->
			</section>
			<input type="hidden" id="SESSION_LMS_SEQ" name="SESSION_LMS_SEQ" value="<?=$_SESSION["HY_LMS_SEQ"]?>">
			<input type="hidden" id="LMS_LANGUAGE" name="LMS_LANGUAGE" value="en">
			<input type="hidden" id="SESSION_APP_GB" name="SESSION_APP_GB" value="<?=$_SESSION["HY_APP_GB"]?>">
			<input type="hidden" id="LMS_TYPE" name="LMS_TYPE" value="ms">

			
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
