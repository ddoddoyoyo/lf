<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	header("Content-Type: text/html; charset=UTF-8");


	if($_SESSION["HY_LMS_SEQ"] > 0 ){
		$tools->JavaGo("/lf/ms/en/main2.php");
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
		 <!-- <script>
			 $(document).on("mobileinit", function () {
				 $.mobile.hashListeningEnabled = false;
				 $.mobile.pushStateEnabled = false;
				 $.mobile.changePage.defaults.changeHash = false;
			});
		</script> -->
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/device.js"></script>
		<script src="../common/js/common.js"></script>
		<script>
			$(document).ready(function(){

				var select = $("select#country");
			    select.change(function(){
			        var select_name = $(this).children("option:selected").text();
			        $(this).siblings("label").text(select_name);
			        // $(this).siblings("label").css({"color":"#002c5f","background-image":"url('../images/button/icon_country_arrow_select.png')"});
			    });
				$('#go_main').click(function(){
					//location.href="main.php";
				});
				$('#upload').change(function(){
					readURL(this);
				});
				function readURL(input){
					if(input.files && input.files[0]) {
						var reader = new FileReader();
						reader.onload = function(e){//파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
							$('#current-img').attr('src',e.target.result);

							var img = new Image;
							var imgW, imgH;
							img.src = reader.result;
							img.onload = function(){
								imgW = img.width;
								imgH = img.height;
								if(imgH >= imgW){
									$("#current-img").css({"width":"100%","height":"auto"});
								}
								else{
									$("#current-img").css({"width":"auto", "height":"100%"});
								}
							}//img.onload
						}//reader.onload
					}//if
					reader.readAsDataURL(input.files[0]);

				}
			});
		</script>

	</head>
	<body>
		<div id="wrap">
			<div id="contBox" class="container">
				<form id="Frm" name="Frm" method="post" action="../../common/join_action.php" enctype="multipart/form-data">
				<input type="hidden" name="RETURN" value="../ms/en/main2.php"/>
				<input type="hidden" name="LANGUAGE" value="en"/>
				<input type="hidden" name="LMS_GB" value="hyundai"/>
				<input type="hidden" name="TYPE" value="ms"/>

				<section data-role="page" id="intro" class="container">
					<div data-role="main" class="ui-content" >
						<div class="title">
							<p class="text">Dramatic changes</p>
							<h1>Sonata New Rise</h1>
						</div>
					</div>
					<a href="#page0" id="btn_start">START</a><!--data-transition="none"-->
				</section>
				<section data-role="page" id="page0" class="container">
					<div data-role="header" class="header">
						<!-- <a href="#" class="ui-btn ui-btn-inline ui-corner-all ui-shadow btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a> -->
						<div>
							<h1>Sonata New Rise</h1>
						</div>
						
					</div>
					<div data-role="main" class="ui-content">
						<div class="imgwrap">
							<img src="../images/001_img.jpg" alt="sonata new rise car">
						</div>
						<div class="textwrap">
							<h2>Hello</h2>
							<p>Please enter your information</p>
							<div class="selectbox">
								<label for="country">Country</label>
								<select name="LMS_CONTRY" id="country">
									<option value="">Country</option>
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
							<div class="inputbox">
								<input type="text" id="LMS_NAME" name="LMS_NAME" placeholder="Name">
							</div>
						</div>
						<a href="javascript:;" class="ui-btn go-next" id="Login_Action"><img src="../images/button/next btn_default.png" alt=""></a>
					</div>
				</section>

				<section data-role="page" id="page1" class="container">
					<div data-role="header" class="header">
						<!-- <a href="#" class="ui-btn ui-btn-inline ui-corner-all ui-shadow btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a> -->
						<h1>Sonata New Rise</h1>
					</div>
					<div data-role="main" class="ui-content">
						<div class="imgwrap">
							<img src="../images/001_img.jpg" alt="sonata new rise car">
						</div>
						<div class="textwrap">
							<h2>Hello</h2>
							<p>Please upload your photo<br>(if available)</p>
							<div class="inputbox">
								<!-- <a href="javascript:;"> -->
									<img id="current-img" src="../images/002_profile_default.png" alt="user image">
									<input type="file" id="upload" name="LMS_IMAGE" accept="image/*">
								<!-- </a> -->
							</div>
						</div>
						<a href="javascript:;" id="Join_Action" class="ui-btn go-next"><img src="../images/button/next btn_default.png" alt=""></a>
					</div>
				</section>
				</form>

				
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->

		</div>
	</body>
</html>