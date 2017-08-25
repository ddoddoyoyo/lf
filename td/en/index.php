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
				$("#intro0").on({
					"pagebeforeshow":function(){

					},
					"pageshow":function(){
						setTimeout(function(){
							$.mobile.changePage('#intro1');
						},1500);						
					}
				})
				$("#intro2 #btn_showroom").click(function(){
					location.href="showroom.php";
				});
				$("#intro2 #btn_testdrive").click(function(){
					location.href="driving_intro.php";
				});
			})
		</script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../js/device.js"></script>
		<script src="../js/main.js"></script>
		<!-- <script src="../js/menu.js"></script> -->
		<!-- <script src="../js/jquery.reel.js"></script> -->
		
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="intro0" class="container cover">
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<div class="title"><h1>Sonata New Rise</h1></div>
						<p>VIRTUAL EXPERIENCE</p>
					</div>
				</div>
			</section>

			<section data-role="page" id="intro1" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<h1>How to Test Driving</h1>
					</div>
					<div class="imgwrap">
						<div class="imgbox" id="showroomBox">
							<img src="" alt="">
							<p>SHOW <span>ROOM</span></p>
						</div>
						<div class="imgbox" id="driveBox">
							<img src="" alt="">
							<p>TEST <span>DRIVE</span></p>
						</div>
						<div class="imgbox" id="requestBox">
							<img src="" alt="">
							<p>REQUEST <span>FOR DRIVE</span></p>
						</div>
					</div>
					<div class="textwrap">	
						<p>Nice meet to you!</p>
						<p>Thank you for visiting KONA’s virtual driving experience service.</p>
						<p>Through the virtual experience, you can enjoy the attractive features of KONA.</p>
						<p>After it is finished, an actual driving session will be arranged for you.</p>
					</div>
					<div class="button">
						<a class="btn_box btn_showroom" href="#intro2">VISIT</a>
					</div>
				</div>
			</section>

			<section data-role="page" id="intro2" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
				</div>
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<div class="title"><h1>Sonata New Rise</h1></div>
						<p>VIRTUAL EXPERIENCE</p>
					</div>
					<div class="button">
						<a class="btn_box btn_showroom" href="javascript:;">SHOW ROOM</a>
						<a class="btn_box btn_testdrive" href="javascript:;">TEST DRIVE</a>
					</div>
				</div>
			</section>					
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
