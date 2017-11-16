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
			var url = "<?= $_SESSION['LF_TD_DEALER_URL'] ?>";
			var dealerUrl = "<?= $_SESSION['SESSION_DEALER_URL'] ?>";
			// });
		</script>
		
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../js/device.js"></script>
		<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
		<script src="../js/menu.js"></script>
		<script src="../js/common.js"></script>
		<script>
			$(document).ready(function(){
				clipboard = new Clipboard('.btn_copy');
			});
			 var url = "<?= $_SESSION['LF_TD_DEALER_URL'] ?>";
			var dealerUrl = "<?= $_SESSION['SESSION_DEALER_URL'] ?>";
		</script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="applicationDealer" class="container application">
				<div data-role="header" class="header">
					<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<a href="#" class="ui-btn ui-btn-left" data-rel="back"><img src="../images/common/btn_backward.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textwrap">
						<p>Virtual test drive is now over. Again, share your own URL with your customers for them to try this content as well.</p>
						<p>You will receive test drive requests  or other inquires from customers by email.</p>
					</div>
					<div class="url_box">	
						<p>Save your own <span>URL</span></p>
						<input type='text' id="copy_url" value="http://<?=$_SERVER["HTTP_HOST"]?>/os/td/en/index.php?v=<?= $_SESSION['LF_TD_DEALER_URL'] ?>" readonly/>
						<p class='btn_copy'  data-clipboard-target="#copy_url">COPY</p>
					</div>
				</div>		
			</section>				
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
