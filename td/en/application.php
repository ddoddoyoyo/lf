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
					$(this).css({'background':'none'});
					$(this).css({'color':'#252525'});
					$('#application .tab#testDriveTab').css({'background-color':"#252525","color":"#fff"});
					$('#application .form#questionForm').show();
					$('#application .form#testDriveForm').hide();
				});

				$('#application .tab#testDriveTab').click(function(){
					$(this).css({'background':'none'});
					$(this).css({'color':'#252525'});
					$('#application .tab#questionTab').css({'background-color':"#252525","color":"#fff"});
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
				<div data-role="main" class="ui-content">
					<form action="" class="formwrap">
						<div class="title">
							<h1>REQUEST FOR <span>REAL TEST DRIVE</span></h1>
						</div>
						<h2 class="tab" id="questionTab">QUESTION</h2>
						<div id="questionForm" class="form">
							<div><label for="qname">NAME</label><input type="text" id="uname"></div>
							<div><label for="qemail">E-MAIL</label> <input type="text" id="qemail"></div>
							<div><label for="inquiry">INQUIRY CONTENTS</label> <input type="text" id="inquiry"></div>
						</div>

						<h2 class="tab" id="testDriveTab">BOOK A TEST DRIVE</h2>
						<div id="testDriveForm" class="form">
							<div>
								<label for="bYear">DATE <span>(M / D / Y / T)</span></label>
								<select name="" id="bMonth" class="bSelect">
									<option value="">08</option>
								</select>
								<select name="" id="bDay" class="bSelect">
									<option value="">29</option>
								</select>
								<select name="" id="bYear" class="bSelect">
									<option value="">2017</option>
									<option value="">2018</option>
								</select>
								<select name="" id="bHour" class="bSelect">
									<option value="">15</option>
								</select>
								<span>:</span>
								<select name="" id="bMin" class="bSelect">
									<option value="">00</option>
								</select>
							</div>
							<div><label for="bookName">NAME</label><input type="text" id="bookName"></div>
							<div><label for="bookEmail">E-MAIL</label> <input type="email" id="bookEmail"></div>
							<div><label for="bookPhone">NUMBER</label> <input type="tel" id="bookPhone"></div>
						</div>
						<div class="btnwrap">
							<a href="#" class="button" id="btn_home">HOME</a><a href="#" class="button" id="btn_send">SEND</a>
						</div>
										
					</form>
				</div>
				
			</section>					
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
