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
					$(this).css({'color':'rgb(50,50,50)'});
					$('#application .tab#testDriveTab').css({'background-color':"rgb(140,140,140)","color":"#fff"});
					$('#application .form#questionForm,#application .btnwrap.question').show();
					$('#application .form#testDriveForm,#application .btnwrap.bookTestDrive').hide();
				});

				$('#application .tab#testDriveTab').click(function(){
					$(this).css({'background':'none'});
					$(this).css({'color':'rgb(50,50,50)'});
					$('#application .tab#questionTab').css({'background-color':"rgb(140,140,140)","color":"#fff"});
					$('#application .form#testDriveForm, #application .btnwrap.bookTestDrive').show();
					$('#application .form#questionForm,#application .btnwrap.question').hide();
				});
				$("#application .question .btn_send").click(function(){
					console.log("question");
					if($("input[name=QUESTION_NAME]").val() == ""){
						alert("Please enter your name.");
						$("input[name=QUESTION_NAME]").focus();
						return; 
					}

					if($("input[name=QUESTION_EMAIL]").val() == ""){
						alert("Please enter your e-mail.");
						$("input[name=QUESTION_EMAIL]").focus();
						return; 
					}

					if($("textarea[name=QUESTION_MEMO]").val() == ""){
						alert("Please enter your content.");
						$("textarea[name=QUESTION_MEMO]").focus();
						return; 
					}

					$("input[name=TAB_GB]").val("QUESTION");

					$.ajax({
						url:"../common/application_action.php",
						type: "POST",
						dataType: "json",
						data:{
							QUESTION_NAME: $("input[name=QUESTION_NAME]").val(),
							QUESTION_EMAIL: $("input[name=QUESTION_EMAIL]").val(),
							QUESTION_MEMO: $("input[name=QUESTION_MEMO]").val(),
							TAB_GB: $("input[name=TAB_GB]").val(),
							TEST_DRIVE_CAR_CODE: $("input[name=TEST_DRIVE_CAR_CODE]").val(),
						},
						success:  function(json){
							console.log(json.result);
							if(json.result == "QUESTION_EMAIL"){
								alert("잘못된 이메일 주소");
								$("input[name=QUESTION_EMAIL]").focus();
								return false;
							}

							if(json.result = "success"){
								$("input[name=QUESTION_NAME]").val("");
								$("input[name=QUESTION_EMAIL]").val("");
								$("textarea[name=QUESTION_MEMO]").val("");
								$('#application .pop_question').show();
							}else{
								alert("Fail");
							}
						},
					   error : function(xhr, status, error) {
							console.log(error);
					   }
					});


					//
				});
				$("#application .question .btn_home,#application .bookTestDrive .btn_home").click(function(){
					location.href="index.php";
				});
				$("#application .bookTestDrive .btn_send").click(function(){
					console.log("TestDrive");
					var TEST_DRIVE_DATE;
					if($("input[name=TEST_DRIVE_NAME]").val() == ""){
						alert("Please enter your name.");
						$("input[name=TEST_DRIVE_NAME]").focus();
						return; 
					}

					if($("input[name=TEST_DRIVE_EMAIL]").val() == ""){
						alert("Please enter your e-mail.");
						$("input[name=TEST_DRIVE_EMAIL]").focus();
						return; 
					}

					if($("input[name=TEST_DRIVE_NUMBER]").val() == ""){
						alert("Please enter your number.");
						$("input[name=TEST_DRIVE_NUMBER]").focus();
						return; 
					}
					
					//시간
					TEST_DRIVE_DATE = $("select[name=TEST_DRIVE_M]").val()+"/ " + $("select[name=TEST_DRIVE_D]").val() +"/ " + $("select[name=TEST_DRIVE_Y]").val() +" " + $("select[name=TEST_DRIVE_TH]").val() +":" + $("select[name=TEST_DRIVE_TM]").val()

					$("input[name=TAB_GB]").val("TEST_DRIVE");
					console.log(TEST_DRIVE_DATE);
					$.ajax({
						url:"../common/application_action.php",
						type: "POST",
						dataType: "json",
						data:{
							TEST_DRIVE_NAME: $("input[name=TEST_DRIVE_NAME]").val(),
							TEST_DRIVE_EMAIL: $("input[name=TEST_DRIVE_EMAIL]").val(),
							TEST_DRIVE_NUMBER: $("input[name=TEST_DRIVE_NUMBER]").val(),
							TEST_DRIVE_DATE: TEST_DRIVE_DATE,
							TAB_GB: $("input[name=TAB_GB]").val(),
							TEST_DRIVE_CAR_CODE: $("input[name=TEST_DRIVE_CAR_CODE]").val(),
						},
						success:  function(json){
							console.log(json.result);
							if(json.result == "TEST_DRIVE_EMAIL"){
								alert("Please enter a valid email address.");
								$("input[name=TEST_DRIVE_EMAIL]").focus();
								return false;
							}

							if(json.result = "success"){
								$("input[name=TEST_DRIVE_NAME]").val("");
								$("input[name=TEST_DRIVE_EMAIL]").val("");
								$("input[name=TEST_DRIVE_NUMBER]").val("");
								$("select[name=TEST_DRIVE_M]").val("01");
								$("select[name=TEST_DRIVE_D]").val("01");
								$("select[name=TEST_DRIVE_Y]").val("2017");
								$("select[name=TEST_DRIVE_TH]").val("09");
								$("select[name=TEST_DRIVE_TM]").val("00");
								$('#application .pop_bookTestDrive').show();
							}else{
								alert("Fail");
							}
						},
					   error : function(xhr, status, error) {
							console.log(error);
					   }
					});
					//
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
		<script src="../js/common.js"></script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="application" class="container">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<a href="#" class="ui-btn ui-btn-left" data-rel="back"><img src="../images/common/btn_backward.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<form action="" class="formwrap">
						<input type="hidden" name="TAB_GB" value=""/>
						<input type="hidden" name="TEST_DRIVE_CAR_CODE" value="LF"/>
						<div class="title">
							<h1>REQUEST AN <span>ACTUAL TEST DRIVE</span></h1>
						</div>
						
						<h2 class="tab" id="testDriveTab">BOOK A TEST DRIVE</h2>
						<div id="testDriveForm" class="form">
							<div>
								<label for="bYear">DATE <span>(M / D / Y / T)</span></label>
								<select name="TEST_DRIVE_M" id="bMonth" class="bSelect">
									<?
										for($i=1; $i < 13; $i++){
											if($i < 10){
												$M_NO = "0".$i;
											}else{
												$M_NO = $i;
											}
									?>
										<option value="<?=$M_NO?>"><?=$M_NO?></option>
									<?}?>
								</select>
								<select name="TEST_DRIVE_D" id="bDay" class="bSelect">
									<?
										for($i=1; $i < 32; $i++){
											if($i < 10){
												$D_NO = "0".$i;
											}else{
												$D_NO = $i;
											}
									?>
										<option value="<?=$D_NO?>"><?=$D_NO?></option>
									<?}?>
									
								</select>
								<select name="TEST_DRIVE_Y" id="bYear" class="bSelect">
									<?
										for($i=2017; $i < 2021; $i++){
									?>
										<option value="<?=$i?>"><?=$i?></option>
									<?}?>
								</select>
								<select name="TEST_DRIVE_TH" id="bHour" class="bSelect">
									<?
										for($i=9; $i < 18; $i++){
											if($i < 10){
												$H_NO = "0".$i;
											}else{
												$H_NO = $i;
											}
									?>
										<option value="<?=$H_NO?>"><?=$H_NO?></option>
									<?}?>
								</select>
								<span>:</span>
								<select name="TEST_DRIVE_TM" id="bMin" class="bSelect">
									<option value="00">00</option>
									<option value="30">30</option>
								</select>
							</div>
							<div><label for="bookName">NAME</label><input type="text" id="bookName" name="TEST_DRIVE_NAME"></div>
							<div><label for="bookEmail">E-MAIL</label> <input type="email" id="bookEmail" name="TEST_DRIVE_EMAIL"></div>
							<div><label for="bookPhone">NUMBER</label> <input type="tel" id="bookPhone" name="TEST_DRIVE_NUMBER"></div>
						</div>
						<h2 class="tab" id="questionTab">INQUIRY</h2>
						<div id="questionForm" class="form">
							<div><label for="qname">NAME</label><input type="text" id="uname" name="QUESTION_NAME"></div>
							<div><label for="qemail">E-MAIL</label> <input type="text" id="qemail" name="QUESTION_EMAIL"></div>
							<div><label for="inquiry">INQUIRY</label> <textarea id="inquiry" name="QUESTION_MEMO"></textarea></div>
						</div>
						<div class="btnwrap question">
							<a href="javascript:;" id="question" class="button btn_home">HOME</a><a href="javascript:;" class="button btn_send">SEND</a>
						</div>
						<div class="btnwrap bookTestDrive">
							<a href="javascript:;" id="bookTestDrive" class="button btn_home">HOME</a><a href="javascript:;" class="button btn_send">SEND</a>
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
