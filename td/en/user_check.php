<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>H-Line User Check</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../css/font.css">
		<link rel="stylesheet" href="../css/styles.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		 <script>
			  $(document).on("mobileinit", function () {
			 	 $.mobile.hashListeningEnabled = false;
			 	 $.mobile.pushStateEnabled = false;
			 	 $.mobile.changePage.defaults.changeHash = false;
			 });
		</script>
		<script src="../js/device.js"></script>
		<script src="../js/common.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		
		<script>
		    $(document).ready(function(){
		    	/*$("#userCheck02 .btn_next").click(function(){
		    		location.href="addr_copy2.php";
		    	})*/
		    	$('#upload').change(function(){
					readURL(this);
				});
		      	function readURL(input){
					if(input.files && input.files[0]) {
						var reader = new FileReader();
						reader.onload = function(e){//파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
							 $('#current-img').css({"background-image":"url("+e.target.result+")"});
						}//reader.onload
					}//if
					reader.readAsDataURL(input.files[0]);

				}
		    });
		</script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<form id="Form" name="Form" method="post" action="../common/dealer_insert.php" enctype="multipart/form-data">
			<input type="hidden" name="RETURN" value="../../td/en/addr_copy.php"/>
			<input type="hidden" name="LMS_GB" value="hyundai"/>
			<input type="hidden" name="CAR_GB" value="LF"/>
			<input type="hidden" name="HIDDEN_PHOTO" value=""/>	
			<input type="hidden" name="EMAIL_CK" value=""/>
			<section data-role="page" id="userCheck01" class="container userCheck">
				<div data-role="header" class="header"></div>
				<div data-role="main" class="ui-content">
					<div class="emailwrap">
						<div class="inputwrap">
							<label for="">Email address</label><input type="text" name="USER_EMAIL" id="USER_EMAIL" placeholder="Enter your H-LINE E-mail address">
							<a href="javascript:;" id="Email_check" class="btn_ok">OK</a>
							<!-- <a href="javascript:;" id="Email_check" class="btn_ok">OK</a> -->
						</div>						
					</div>
					<div class="textwrap">
						<p>Please put an e-mail address to receive test drive request emails.<br>If you are a H-LINE user, please make sure to put your H-LINE user ID for you to check the number of views for your own URL.</p>
					</div>					
				</div>		
			</section>

			<section data-role="page" id="userCheck02" class="container userCheck">
				<div data-role="header" class="header">
					<a href="#" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<div class="emailwrap">
						<div class="inputwrap">
							<input type="text" id="TD_DEALER_ID" value="" readonly>
						</div>						
					</div>
					<div class="textwrap">
						<p>Please enter your name and choose your couontry, and upload your photo.<br>(This will be shown to your customers)</p>
					</div>
					<div class="formwrap">
						<div class="profileImg">
							<div id="current-img" style="background-image : url('../images/common/profile_btn_picture.png');"></div>
							<!-- <img id="current-img" src="../images/common/profile_btn_picture.png" alt="user image"> -->
							<input type="file" name="TD_DEALER_PHOTO" accept="image/*" id="upload">
						</div>
						
						<div class="userInfo">
							<label for="uName">name</label><input type="text" id="uName" name="TD_DEALER_NAME" placeholder="NAME">
							<label for="uCountry">country</label>
							<select name="TD_DEALER_CONTRY" id="uCountry">
								<option value="">COUNTRY</option>
								<?php
									$sql = "SELECT ENG,CCODE FROM SPK_COUNTRY ORDER BY ENG ASC";
									$stmt = $dbh->prepare($sql);
									$stmt->execute();
									$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
									for($i = 0; $i < count($row); $i++) {
								?>
									<option value="<?=$row[$i]["ENG"]?>"><?=$row[$i]["ENG"]?></option>
								<? 
									} 
								?>
							</select>
						</div>
					</div>
					<a href="javascript:;" id="Dealer_insert" class="btn_next">NEXT</a>					
				</div>		
			</section>		
			</form>
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
