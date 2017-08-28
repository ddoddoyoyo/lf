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
		<script src="../js/device.js"></script>
		<script src="../js/menu.js"></script>
		<script>
			$(document).ready(function(){
				$('#driveGo .btn_box').click(function(){
					location.href="testdrive.php";
				});
			})
		</script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="showroom" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<div class="title"><h1>Sonata New Rise</h1></div>
						<p>SHOW ROOM</p>
					</div>
					<div class="button">
						<a class="btn_box" href="#exterior01">VISIT</a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exterior01" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Check out the LF New Rise that has a new style when compared with the existing LF.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#exterior02" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exterior02" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Cascading Grille</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>A wider cascading grille is applied to the front. With this in the center, daring lines and a powerful sense of volume are created, giving the car an audacious and sporty look.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#exterior03" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exterior03" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>LED Head Lamp</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>The newly introduced LED bifunctional headlamp is made more aggressive and sleek. The chrome molding covers the bottom of the headlamp, adding luxurious details.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#exterior04" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exterior04" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Chrome Garnish</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>The cascading grille has different chrome thicknesses between the middle bottom and the outer sections. The lines are drawn in a way that render them to be clearly vivid, creating a swift and youthful feel.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#exterior05" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exterior05" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Vertical LED DRL</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Added with a vertical-type DRL arranged together with the air curtain, the front gives the car a swift and sporty feel.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#exterior06" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exterior06" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Trunk Switch</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>The license plate was shifted to the bottom of the bumper, while the trunk switch was combined with the “H” and the “SONATA” logos at the space previously reserved for the license plate.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#exterior07" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exterior07" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>LED Rear Lamp</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>The new LED rear combi-lamp, based on the same concept for the headlamp, is covered with the chrome garnish at the bottom. The brake lamp has a modern feel that adds a feeling of luxury.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#interior01" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="interior01" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Interior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>Let me show the four important points inside the ergonomically designed interior of the car you will ride.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#interior02" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="interior02" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Interior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>8 inch Navigation</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>The center fascia, which is the axis, has a large 8-inch navigation system and operating buttons in metallic silver on the audio operating section, making it easy to operate.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#interior03" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="interior03" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Interior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Supervision Cluster</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>For the user’s convenience, the cluster screen is made larger and the operating systems are arranged in a way that maintains consistency and harmony.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#interior04" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="interior04" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Interior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Air Clean Mode</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>This is the first time that a one-touch air purification mode is mounted. This mode makes it possible to make the air clean and fresh by removing micro dusts through forced air circulation with a press of the button.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#interior05" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="interior05" class="container content">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Interior</h1>
				</div>
				<div data-role="main" class="ui-content">
					<h2>Wireless Charging</h2>
					<div class="textbox">
						<div class="profilewrap">
							<div class="profileImg" ></div>
							<p><span class="dName">Jack</span>'s <span class="comt">Comments</span></p>
						</div>
						<div class="textwrap">
							<p>A wireless charge system is added for the comfort and convenience of the driver and passengers.</p>
						</div>
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#exColor" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="exColor" class="container colorPage">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Exterior Color</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="imgwrap">
						<img src="../images/showroom/001_03_01_img_blue.jpg" alt="">
						<div class="imgText">
							<p>Electric Blue</p>
						</div>
					</div>
					<div class="colorBox">
						<img src="../images/showroom/001_03_01_btn_gray.png" alt="">
						<img src="../images/showroom/001_03_01_btn_black.png" alt="">
						<img src="../images/showroom/001_03_01_btn_blue.png" alt="">
						<img src="../images/showroom/001_03_01_btn_darkgray.png" alt="">
						<img src="../images/showroom/001_03_01_btn_red.png" alt="">
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#inColor" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="inColor" class="container colorPage">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Interior Color</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="imgwrap">
						<img src="../images/showroom/001_03_02_img_burgundy.jpg" alt="">
						<div class="imgText">
							<p>Burgundy</p>
						</div>
					</div>
					<div class="colorBox">
						<img src="../images/showroom/001_03_02_btn_beige.png" alt="">
						<img src="../images/showroom/001_03_02_btn_black.png" alt="">
						<img src="../images/showroom/001_03_02_btn_burgundy.png" alt="">
						<img src="../images/showroom/001_03_02_btn_gray.png" alt="">
						<img src="../images/showroom/001_03_02_btn_white.png" alt="">
					</div>
					<div>
						<a href="#" class="btn_back" data-rel="back"><img src="../images/common/btn_previous.png" alt=""></a>
						<a href="#driveGo" class="btn_nextPage"><img src="../images/common/btn_next.png" alt=""></a>
					</div>
				</div>
			</section>

			<section data-role="page" id="driveGo" class="container">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<div class="imgwrap">
						<img src="../images/showroom/001_03_03_bg.jpg" alt="">
					</div>
					<div class="textwrap">
						<p>Next, Try driving at the driving course.</p>
					</div>
					<div class="button">
						<a class="btn_box" href="#javascript:;">DRIVING GO</a>
					</div>
				</div>
			</section>


			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
