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
		<script src="../js/device.js"></script>
		<script src="../js/menu.js"></script>

		<script>
			$(document).ready(function(){
				$('#application .tab#questionTab').click(function(){
					$(this).css({'background-color':'#f8c9aa'});
					$('#application .tab#testDriveTab').css({'background':"none"});
					$('#application .form#questionForm').show();
					$('#application .form#testDriveForm').hide();
				});

				$('#application .tab#testDriveTab').click(function(){
					$(this).css({'background-color':'#f8c9aa'});
					$('#application .tab#questionTab').css({'background':"none"});
					$('#application .form#testDriveForm').show();
					$('#application .form#questionForm').hide();
				});
				$("#application #btn_send").click(function(){
					//$('.popLayer').show();
				});
			});
		</script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="application" class="container">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<form action="" class="formwrap">
						<h1>Request For real test drive</h1>
						<h2 class="tab" id="questionTab">QUESTION</h2>
						<div id="questionForm" class="form">
							<div><label for="qname">NAME</label> <input type="text" id="uname"></div>
							<div><label for="qemail">E-MAIL</label> <input type="text" id="qemail"></div>
							<div><label for="inquiry">INQUIRY CONTENTS</label> <input type="text" id="inquiry"></div>
						</div>

						<h2 class="tab" id="testDriveTab">BOOK A TEST DRIVE</h2>
						<div id="testDriveForm" class="form">
							<div class="datewrap"><label for="bookDate">DATE</label><input type="datetime-local" id="bookDate"></div>
							<div><label for="bookName">NAME</label><input type="text" id="bookName"></div>
							<div><label for="bookEmail">E-MAIL</label> <input type="email" id="bookEmail"></div>
							<div><label for="bookPhone">NUMBER</label> <input type="tel" id="bookPhone"></div>
						</div>
						<div class="btnwrap">
							<a href="#" class="button" id="btn_send">SEND</a><a href="#" class="button" id="btn_home">HOME</a>
						</div>
										
					</form>
				</div>
				
			</section>					
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
