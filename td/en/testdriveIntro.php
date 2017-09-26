<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	header("Content-Type: text/html; charset=UTF-8");
	
	/*if($_SESSION["LF_TD_DEALER_ID"] > 0 ){
	}else{
		$tools->JavaGo("/os/td/en/");
	}*/
	
	
	if($_SESSION["LF_TD_DEALER_IMAGE"]){
		$LMS_IMAGE = $IMG_URL."/hyundai/member/".$_SESSION["LF_TD_DEALER_IMAGE"];
	}else{
		$LMS_IMAGE = "../images/common/profile_defalt.png";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<title>Sonata New Rise</title>
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
		<script src="../js/main.js"></script>
		<script src="../js/menu.js"></script>
		<script>
			$(document).ready(function(){
				$('#td04 .btn_nextPage').click(function(){
					if(mobile){
						location.href="testdrive.html";
					}
					else{
						location.href="testdrivePC.html";
					}
					
				});
			})
		</script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="testdrive" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<a href="#" class="ui-btn ui-btn-left" data-rel="back"><img src="../images/common/btn_backward.png" alt=""></a>
					<h1>VIRTUAL EXPERIENCE</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<div class="title"><h1>Sonata New Rise</h1></div>
						<p>VIRTUAL EXPERIENCE</p>
					</div>
					<div class="button">
						<a href="#tdIntro">
						<img src="../images/testdrive/002_00_03_btn_02.png" alt="">
						<img src="../images/testdrive/002_00_03_btn_01.png" class="twinkle" alt="">
						</a>
					</div>
				</div>
			</section>

			<section data-role="page" id="tdIntro" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<a href="#" class="ui-btn ui-btn-left" data-rel="back"><img src="../images/common/btn_backward.png" alt=""></a>
					<h1>VIRTUAL EXPERIENCE</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="wrap">
						<div class="titlewrap">
							<h1>How to Test Driving</h1>
						</div>
						<div class="imgwrap">
							<div class="imgbox showroomBox">
								<p>SHOW <span>ROOM</span></p>
							</div>
							<div class="imgbox driveBox">
								<p>TEST <span>DRIVE</span></p>
							</div>
							<div class="imgbox requestBox">
								<p>REQUEST <span>FOR DRIVE</span></p>
							</div>
						</div>
						<div class="textwrap">	
							<p>The Virtual Test Drive will help you indirectly experience the features and feelings of the car. After this, you can also request an actual test drive.</p>
							<p>Enjoy the Sonata New Rise as you drive through the city using your smartphone!</p>
						</div>
						<div class="button">
							<a class="btn_box btn_showroom" href="#drivingMap">VISIT</a>
						</div>
					</div>
					
				</div>
			</section>

			<section data-role="page" id="drivingMap" class="container popPage">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>VIRTUAL EXPERIENCE</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>COURSE MAP</h2>
					<div class="imgbox map">
						<!-- <img src="../images/testdrive/002_02_00_btn_01.png" class="mapIcon showroom" alt=""> -->
						<img src="../images/testdrive/002_02_00_btn_02.png" class="mapIcon beforeDriving" alt="">
						<img src="../images/testdrive/002_02_00_btn_03.png" class="mapIcon straight"  alt="">
						<img src="../images/testdrive/002_02_00_btn_04.png" class="mapIcon cornering" alt="">
						<img src="../images/testdrive/002_02_00_btn_05.png" class="mapIcon lakeChange" alt="">
						<img src="../images/testdrive/002_02_00_btn_06.png" class="mapIcon parking"  alt="">
					</div>
					<div class="imgText">
						<p>Features of the Sonata New Rise</p>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous_black.png" alt=""></a>
						<a href="#td01" class="btn_nextPage"><img src="../images/common/btn_next_black.png" alt=""></a>
					</div>
					<!-- <div class="popLayer imgbox" id="pop_showroom">
						<div class="textwrap">
							<h3>Showroom</h3>
							<p>You can check the exterior, interior, and colors of the car.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div> -->
					<div class="popLayer imgbox" id="pop_beforeDriving">
						<div class="textwrap">
							<h3>Preparation</h3>
							<p>Initial settings for the test drive will be introduced.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_straight">
						<div class="textwrap">
							<h3>Straight Section</h3>
							<p>You will experience the performance of the engines, transmissions, and some safety features that the Sonata New Rise has.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_cornering">
						<div class="textwrap">
							<h3>Cornering Section</h3>
							<p>You will experience how the suspensions and an advanced system(VSM) contribute to stable driving.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_lakeChange">
						<div class="textwrap">
							<h3>Lane changing section</h3>
							<p>You will  experience more Smart Sense functions (ASCC, BSD) available for safe driving.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_parking">
						<div class="textwrap">
							<h3>Parking</h3>
							<p>You will experience how parking assist systems of Sonata New Rise help you park easily and safely.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
				</div>
			</section>

			<section data-role="page" id="td01" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Test Drive</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Seat Position</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" style="background-image: url('<?= $LMS_IMAGE ?>');"></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Adjust the seat first to set the most comfortable position for driving before you start.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#td02" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="td02" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Test Drive</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Outside Mirror</h2>
					<div class="textbox">
						<div class="profilewrap" >
							<div class="profileImg" style="background-image: url('<?= $LMS_IMAGE ?>');"></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Check whether you can see the side and behind well and adjust the side view and rear view mirrors.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#td03" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="td03" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Test Drive</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Steering Wheel</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" style="background-image: url('<?= $LMS_IMAGE ?>');"></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Adjust the steering wheel to your comfortable position by tilting and telescoping it.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#td04" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="td04" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Test Drive</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Seat Belt</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" style="background-image: url('<?= $LMS_IMAGE ?>');"></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>When everything has been set please wear the seat belt.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="javascript:;" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>				
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
