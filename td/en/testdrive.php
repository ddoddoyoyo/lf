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
		<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
		<script src="../js/menu.js"></script>
		<script>
			$(document).ready(function(){
				$('#td04 .btn_nextPage').click(function(){
					//location.href="testdrive.php";
				});
			});
			var url = "<?= $_SESSION['LF_TD_DEALER_URL'] ?>";
			var dealerUrl = "<?= $_SESSION['SESSION_DEALER_URL'] ?>";
		</script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="testdrive" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<div class="title"><h1>Sonata New Rise</h1></div>
						<p>TEST DRIVE</p>
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
							<p>The Virtual Test Driving is a virtual driving experience service that helps you ndirectly sense the features and feelings of the car. As an additional option, you can also arrange for an actual driving experience.</p>
							<p>Enjoy the attractiveness of the Sonata New Rise as you drive through the city using your smartphone.</p>
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
					<h1>Test Drive</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Virtual Driving Map</h2>
					<div class="imgbox map">
						<img src="../images/testdrive/002_02_00_btn_01.png" class="mapIcon showroom" alt="">
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
					<div class="popLayer imgbox" id="pop_showroom">
						<div class="textwrap">
							<h3>Showroom</h3>
							<p>You can check the exterior, interior, and colors of the car.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_beforeDriving">
						<div class="textwrap">
							<h3>Before driving</h3>
							<p>Check meticulously the actions you should go through first when you get in the driver’s seat.<br><br>Adjust the side mirrors, seat, wear the seat belt, and then adjust the position of the steering wheel.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_straight">
						<div class="textwrap">
							<h3>Course for driving straight</h3>
							<p>In this course, explanations will be provided with regard to the engine, the 6-step to 8-step transmissions, as well as the driver safety functions such as DRM, DAA, AEB, and LKAS.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_cornering">
						<div class="textwrap">
							<h3>Course for cornering</h3>
							<p>Check meticulously the actions you should go through first when you get in the driver’s seat. Adjust the side mirrors, seat, wear the seat belt, and then adjust the position of the steering wheel.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_lakeChange">
						<div class="textwrap">
							<h3>Course for changing lanes</h3>
							<p>Explanations will be provided with regard to the smart-sense functions (ASCC, BSD) for safe driving.</p>
						</div>
						<div class="btn_close"><img src="../images/common/btn_close.png" alt=""></div>
					</div>
					<div class="popLayer imgbox" id="pop_parking">
						<div class="textwrap">
							<h3>Course for parking</h3>
							<p>Explanations will be provided with regard to the AVM function, which helps prevent accidents by enabling a 360-degree check of your surroundings while parking. Explanations with regard to the seven air bags for protection against possible accidents will also be provided.</p>
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
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Adjust the seat first to stay in the most comfortable posture for driving before starting.</p>
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
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Check whether you can see the rear well by adjusting the rearview mirror.</p>
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
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Stay in a comfortable posture by adjusting the position of the steering wheel upwards or downwards.</p>
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
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>When everything has been prepared well, wear the seat belt.</p>
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
