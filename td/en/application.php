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
		<script>
			$(document).ready(function(){
				$('#application').on({
					"pagebeforeshow": function(){
						$("#application .btnwrap.question, #application .popLayer").hide();
					}
				});
				$('#application .tab#questionTab').click(function(){
					$(this).css({'background':'none'});
					$(this).css({'color':'#252525'});
					$('#application .tab#testDriveTab').css({'background-color':"#252525","color":"#fff"});
					$('#application .form#questionForm,#application .btnwrap.question').show();
					$('#application .form#testDriveForm,#application .btnwrap.bookTestDrive').hide();
				});

				$('#application .tab#testDriveTab').click(function(){
					$(this).css({'background':'none'});
					$(this).css({'color':'#252525'});
					$('#application .tab#questionTab').css({'background-color':"#252525","color":"#fff"});
					$('#application .form#testDriveForm, #application .btnwrap.bookTestDrive').show();
					$('#application .form#questionForm,#application .btnwrap.question').hide();
				});
				$("#application .question .btn_send").click(function(){
					$('#application .pop_question').show();
				});
				$("#application .question .btn_home,#application .bookTestDrive .btn_home").click(function(){
					location.href="index.php";
				});
				$("#application .bookTestDrive .btn_send").click(function(){
					$('#application .pop_bookTestDrive').show();
				});
				$("#application .popLayer .btn_ok").click(function(){
					$('#application .popLayer').hide();
				});
			});
		</script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../js/device.js"></script>
		<script src="../js/menu.js"></script>

		
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
							<div><label for="inquiry">INQUIRY CONTENTS</label> <textarea name="" id="inquiry"></textarea></div>
						</div>

						<h2 class="tab" id="testDriveTab">BOOK A TEST DRIVE</h2>
						<div id="testDriveForm" class="form">
							<div>
								<label for="bYear">DATE <span>(M / D / Y / T)</span></label>
								<select name="" id="bMonth" class="bSelect">
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
									<option value="06">6</option>
									<option value="07">7</option>
									<option value="08">8</option>
									<option value="09">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
								<select name="" id="bDay" class="bSelect">
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
									<option value="06">6</option>
									<option value="07">7</option>
									<option value="08">8</option>
									<option value="09">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
								<select name="" id="bYear" class="bSelect">
									<option value="">2017</option>
									<option value="">2018</option>
								</select>
								<select name="" id="bHour" class="bSelect">
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
								</select>
								<span>:</span>
								<select name="" id="bMin" class="bSelect">
									<option value="00">00</option>
									<option value="30">30</option>
								</select>
							</div>
							<div><label for="bookName">NAME</label><input type="text" id="bookName"></div>
							<div><label for="bookEmail">E-MAIL</label> <input type="email" id="bookEmail"></div>
							<div><label for="bookPhone">NUMBER</label> <input type="tel" id="bookPhone"></div>
						</div>
						<div class="btnwrap question">
							<a href="javascript:;" class="button btn_home">HOME</a><a href="javascript:;" class="button btn_send">SEND</a>
						</div>
						<div class="btnwrap bookTestDrive">
							<a href="javascript:;" class="button btn_home">HOME</a><a href="javascript:;" class="button btn_send">SEND</a>
						</div>
						<div class="popLayer pop_question">
							<div class="textbox">
								<p>Your enquiry has been registered.</p>
								<a href="#" class="btn_ok">OK</a>
							</div>
						</div>

						<div class="popLayer pop_bookTestDrive">
							<div class="textbox">
								<p>The application for test drive has been completed.</p>
								<a href="#" class="btn_ok">OK</a>
							</div>
						</div>				
					</form>
				</div>
				
			</section>					
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
