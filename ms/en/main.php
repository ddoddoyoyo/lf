<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	header("Content-Type: text/html; charset=UTF-8");

	if($_SESSION["HY_LMS_SEQ"] > 0 ){
	}else{
		$tools->JavaGo("/lf/ms/en/");
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
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../common/js/common.js"></script>
		<script src="../js/device.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/menu.js"></script>
		
		<script>
			$(document).ready(function(){
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
			<div id="contBox">
			<section data-role="page" id="intro" class="container">
				<div data-role="main" class="ui-content" >
					<div class="title">
						<p class="text">Dramatic changes</p>
						<h1>Sonata New Rise</h1>
					</div>
				</div>
				<a href="#cover" id="btn_start">START</a><!--data-transition="none"-->
			</section>

			<section data-role="page" id="cover" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>The Sonata New Rise has been made more excellent in many respects than the previous LF Sonata. Let’s check them out.</p>
						<a href="#exFront" class="btn_box">START</a>
					</div>
				</div>	
			</section>

			<section data-role="page" id="exFront" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="img_overlay">
						<img src="../images/exterior/front/overlay_01.png" class="cascadingGrille" alt="">
						<img src="../images/exterior/front/overlay_02.png" class="chromeGarnish" alt="">
						<img src="../images/exterior/front/overlay_03.png" class="frontHood" alt="">
						<img src="../images/exterior/front/overlay_04.png" class="chromeMoling" alt="">
						<img src="../images/exterior/front/overlay_05.png" class="headLamp" alt="">
						<img src="../images/exterior/front/overlay_06.png" class="LEDDRL" alt="">
					</div>
					<div class="btn_more">
						<img src='../images/button/btn_more.png' class="cascadingGrille">
						<img src='../images/button/btn_more.png' class="chromeMoling">
						<img src='../images/button/btn_more.png' class="frontHood">
						<img src='../images/button/btn_more.png' class="headLamp">
						<img src='../images/button/btn_more.png' class="LEDDRL">
						<img src='../images/button/btn_more.png' class="chromeGarnish">
					</div>
					<div class="btn_turbo">
						<img src="../images/button/btn_turbo.png" alt="">
					</div>
					<div class="textwrap">
						<p>There are six areas of change on the front part. Let’s take a close look at each of them.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#exFrontLast" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>

					<div class="popLayer" id="pop_cascadingGrille">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_01.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Cascading Grille</h2>
							<p class="text1">The front of the Sonata New Rise features a three-dimensional cascading grille, a major change from the LF.</p>
							<p class="text2">The cascading grille features a difference in thickness of its chrome outline between the middle and outer sections, highlighting its dynamic and sporty look.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
						<div class="btn_arrow">
							<img src="../images/button/btn_turbo_previous_nonactive.png" alt="">
							<img src="../images/button/btn_turbo_next.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_chromeGarnish">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_02.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Chrome Garnish</h2>
							<p>The chrome garnish on the lower section of the bumper shifts the visual focus downwards, making the body look lower.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_frontHood">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_03.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Front Hood</h2>
							<p>Due to the protruding engine and the lower hood, the entire silhouette creates a sharp–looking design.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_chromeMoling">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_04.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Chrome Molding</h2>
							<p>The chrome surround molding connects the upper part of the headlamp and the belt line, thus providing a luxurious and unique look.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_headLamp">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_05.png" alt="">
							<div class="img_text">
								<p>Before</p>
								<p>HID Head Lamp(LF)</p>
							</div>
						</div>
						<div class="textwrap">
							<h2>Slim LED Head Lamp</h2>
							<p>The high beam and the low beam are integrated into a single “bifunctional headlamp” module, presenting a simple yet stylish design.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_LEDDRL">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_06.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Vertical LED DRL</h2>
							<p>A vertical DRL (Daytime Running Light) type is applied to make the car look sporty and wide.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_frontTurbo">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_turbo_01.png" alt="">
							<img src="../images/exterior/front/popup_turbo_02.png" alt="">
						</div>
						<div class="textwrap text1">
							<h2>Air Curtain Intake Housing</h2>
							<p>The vertical LED DRL type integrated with the air curtain emphasizes the sporty feature of the front part.</p>
						</div>
						<div class="textwrap text2">
							<h2>Mesh Type Radiator Grille</h2>
							<p>The large, black, mesh-type cascading grille completes the differentiated face of the New Rise Turbo.</p>
						</div>

						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
						<div class="btn_arrow">
							<img src="../images/button/btn_turbo_previous_nonactive.png" alt="">
							<img src="../images/button/btn_turbo_next.png" alt="">
						</div>
					</div>
				</div>	
			</section>

			<section data-role="page" id="exFrontLast" class="container lastcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="carChange">
						<img src="../images/exterior/front/bg_02_02.png" alt="">
						<div class="newCar">
							<img src="../images/exterior/front/bg_02_01.png" alt="">
						</div>
					</div>
					<div class="dragbar">
						<img src="../images/button/slider_bar.png" alt="">
						<div class="dragpoint drawSlider"></div>
					</div>
					<div class="textwrap">
						<p>When viewed from the front, the Sonata New Rise shows a stronger and more dynamic style compared to the previous LF Sonata.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#exSide" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="exSide" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="img_overlay">
						<img src="../images/exterior/side/overlay_01.png" class="DLOChromeMolding" alt="">
						<img src="../images/exterior/side/overlay_02.png" class="SideSillMolding" alt="">
					</div>
					<div class="btn_more">
						<img src='../images/button/btn_more.png' class="DLOChromeMolding">
						<img src='../images/button/btn_more.png' class="SideSillMolding">
					</div>
					<div class="btn_turbo">
						<img src="../images/button/btn_turbo.png" alt="">
					</div>
					<div class="textwrap">
						<p>There are three areas of change on the side. Let’s take a close look at each of them.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#exSideLast" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>

					<div class="popLayer" id="pop_DLOChromeMolding">
						<div class="imgwrap">
							<img src="../images/exterior/side/popup_01.png" alt="">
						</div>
						<div class="textwrap">
							<h2>DLO Chrome Molding</h2>
							<p> A sporty side profile was realized by applying glossy chrome to the DLO outline and adding a 3D effect to the c-pillar.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_SideSillMolding">
						<div class="imgwrap">
							<img src="../images/exterior/side/popup_02.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Side Sill Molding</h2>
							<p>In order to present a differentiated style on the side, were applied were molded with chrome.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_sideTurbo">
						<div class="imgwrap">
							<img src="../images/exterior/side/popup_turbo_01.png" alt="">
							<img src="../images/exterior/side/popup_turbo_02.png" alt="">
						</div>
						<div class="textwrap text1">
							<h2>Side Sill Molding</h2>
							<p>Turbo-exclusive exterior colors and dark glossy chrome side sill(1.6 and 2.0 turbo only)</p>
						</div>
						<div class="textwrap text2">
							<h2>Dark Hyper Silver Wheel</h2>
							<p>18-inch dark hyper silver wheels are applied to express the power of Turbo model.</p>
						</div>

						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
						<div class="btn_arrow">
							<img src="../images/button/btn_turbo_previous_nonactive.png" alt="">
							<img src="../images/button/btn_turbo_next.png" alt="">
						</div>
					</div>
				</div>	
			</section>

			<section data-role="page" id="exSideLast" class="container lastcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textwrap">
						<p>When viewed from the sides, the end of the hood is lowered and the end of the trunk lid is lifted, making the car look speedy and sleek.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#exRear" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="exRear" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="img_overlay">
						<img src="../images/exterior/rear/overlay_01.png" class="RearCombinationLamp" alt="">
						<img src="../images/exterior/rear/overlay_02.png" class="RearBumper" alt="">
						<img src="../images/exterior/rear/overlay_03.png" class="TrunkOpenSwitch" alt="">
						<img src="../images/exterior/rear/overlay_04.png" class="RearReflector" alt="">
					</div>
					<div class="btn_more">
						<img src='../images/button/btn_more.png' class="RearCombinationLamp">
						<img src='../images/button/btn_more.png' class="RearBumper">
						<img src='../images/button/btn_more.png' class="TrunkOpenSwitch">
						<img src='../images/button/btn_more.png' class="RearReflector">
					</div>
					<div class="btn_turbo">
						<img src="../images/button/btn_turbo.png" alt="">
					</div>
					<div class="textwrap">
						<p>There are three areas of change on the rear section. Let’s take a close look at each of them.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#exRearLast" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>

					<div class="popLayer" id="pop_RearCombinationLamp">
						<div class="imgwrap">
							<img src="../images/exterior/rear/popup_01.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Rear Combination Lamp</h2>
							<p>Horizontal rear lamps that feature sleek and bold design.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_RearBumper">
						<div class="imgwrap">
							<img src="../images/exterior/rear/popup_02.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Rear Bumper</h2>
							<p>The license plate was moved to the lower section of the bumper,  for a simple and differentiated look.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_TrunkOpenSwitch">
						<div class="imgwrap">
							<img src="../images/exterior/rear/popup_03.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Trunk open switch in Hyundai logo</h2>
							<p>In order to keep the rear section simple and clean and to make it easier to open the trunk, a hidden switch is place on the upper section of the logo.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_RearReflector">
						<div class="imgwrap">
							<img src="../images/exterior/rear/popup_04.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Rear Reflector</h2>
							<p>Vertical rear reflectors are applied to realize a stable stance and a sporty image.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_rearTurbo">
						<div class="imgwrap">
							<img src="../images/exterior/rear/popup_turbo_01.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Rear Muffler</h2>
							<p> The rear diffuser with aero fins to reduce air resistance and the dual mufflers make the rear side stand out more when the car is running.</p>
						</div>

						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>
				</div>	
			</section>

			<section data-role="page" id="exRearLast" class="container lastcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="carChange">
						<img src="../images/exterior/rear/bg_02_02.png" alt="">
						<div class="newCar">
							<img src="../images/exterior/rear/bg_02_01.png" alt="">
						</div>
					</div>
					<div class="dragbar">
						<img src="../images/button/slider_bar.png" alt="">
						<div class="dragpoint drawSlider"></div>
					</div>
					<div class="textwrap">
						<p>Compared to the previous LF Sonata, the rear part of Sonata New Rise has wide stance with three-dimensional and glamorous characters.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#interior" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="interior" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="img_overlay">
						<img src="../images/interior/overlay_01.png" class="SteeringWheel" alt="">
						<img src="../images/interior/overlay_02.png" class="CenterFascia" alt="">
						<img src="../images/interior/overlay_03.png" class="SupervisionCluster" alt="">
					</div>
					<div class="btn_more">
						<img src='../images/button/btn_more.png' class="SteeringWheel">
						<img src='../images/button/btn_more.png' class="CenterFascia">
						<img src='../images/button/btn_more.png' class="SupervisionCluster">
					</div>
					<div class="textwrap">
						<p>There are three areas of change in the interior. Let’s take a close look at each of them.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#interiorLast" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>

					<div class="popLayer" id="pop_SteeringWheel">
						<div class="imgwrap">
							<img src="../images/interior/popup_01_01.png" alt="">
						</div>
						<div class="btn_wheel">
							<p>LF SONATA</p>
							<p>SONATA NEW RISE</p>
						</div>
						<div class="textwrap">
							<h2>Steering Wheel</h2>
							<p>A sporty three-spoke round steering wheel is applied.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_CenterFascia">
						<div class="imgwrap">
							<img src="../images/interior/popup_02.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Center Fascia</h2>
							<p>Sporty and high-end features are emphasized through the three-dimensional design overall, and silver buttons for the audio switch component, embodying a high-tech and balanced image.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_SupervisionCluster">
						<div class="imgwrap">
							<img src="../images/interior/popup_03.png" alt="">
						</div>
						<div class="textwrap">
							<h2>4.2 Inch Supervision Cluster</h2>
							<p>With simple and refined graphic, information on the cluster is easy to catch.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>
				</div>	
			</section>

			<section data-role="page" id="interiorLast" class="container lastcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textwrap">
						<p>The ergonomic design allows you to have a pleasant driving experience by applying convenient features to the interior space.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#ADAScover" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="ADAScover" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>The Sonata New Rise, which takes into consideration driver safety and convenience, has five newly added safety systems. Let’s find out what those are.</p>
						<a href="#ADAScover2" class="btn_box">ABOUT</a>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
				</div>	
			</section>

			<section data-role="page" id="ADAScover2" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>These are the features available on to the previous LF Sonata.</p>
						<div class="btn_box AEB">AEB</div>
						<div class="btn_box HBA">HBA</div>
						<div class="btn_box ASCC">ASCC</div>
						<div class="btn_box BSD">BSD</div>
						<div class="btn_box LDWS">LDWS</div>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#ADAS" class="btn_nextPage">Check the New 5 Systems &nbsp;&nbsp;&gt;</a>
				</div>	
			</section>

			<section data-role="page" id="ADAS" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="btn_ADAS">
						<img src="../images/adas/btn_01_LKAS.png" class="LKAS" alt="">
						<img src="../images/adas/btn_02_DBL.png" class="DBL" alt="">
						<img src="../images/adas/btn_03_DAA.png" class="DAA" alt="">
						<img src="../images/adas/btn_04_AVM.png" class="AVM" alt="">
						<img src="../images/adas/btn_05_DRM.png" class="DRM" alt="">
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#ADASLast" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>

					<div class="popLayer" id="pop_LKAS">
						<div class="imgwrap">
							<?php
							for($i=0;$i<161;$i++){							
								echo '<img src="../images/adas/LKAS/Comp1_'.$i.'.jpg" alt="">';
							}?>
						</div>
						<div class="textwrap">
							<h2>LKAS <span>(Lane Keeping Assist System)</span></h2>
							<p>LDWS from the previous LF Sonata only sounded an alert for a lane departure. However, the new LKAS detects the road lanes through the front camera and assists in controlling the steering wheel to ensure that the car stays within lanes.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_DBL">
						<div class="imgwrap">
							<?php
							for($i=0;$i<126;$i++){							
								echo '<img src="../images/adas/DBL/Comp1_'.$i.'.jpg" alt="">';
							}?>
						</div>
						<div class="textwrap">
							<h2>DBL <span>(Dynamic Bending Light)</span></h2>
							<p>With this feature, headlight beams move in the direction of the steering wheel to provide the best possible visibility at night, especially when cornering.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_DAA">
						<div class="imgwrap">
							<?php
							for($i=0;$i<160;$i++){							
								echo '<img src="../images/adas/DAA/Comp1_'.$i.'.jpg" alt="">';
							}?><!-- <img src="../images/adas/popup_03.png" alt=""> -->
						</div>
						<div class="textwrap">
							<h2>DAA <span>(Driver Attention Alert)</span></h2>
							<p>It detects unusual driving pattern due to fatigue or carelessness, and suggests that the driver rest first.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_AVM">
						<div class="imgwrap">
							<?php
							for($i=0;$i<127;$i++){							
								echo '<img src="../images/adas/AVM/Comp1_'.$i.'.jpg" alt="">';
							}?>
						</div>
						<div class="textwrap">
							<h2>AVM <span>(Around View Monitor)</span></h2>
							<p>It shows the surroundings of the car to ensure safe parking.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_DRM">
						<div class="imgwrap">
							<?php
							for($i=0;$i<160;$i++){							
								echo '<img src="../images/adas/DRM/Comp1_'.$i.'.jpg" alt="">';
							}?>
						</div>
						<div class="textwrap">
							<h2>DRM <span>(Driving Rear view Monitoring)</span></h2>
							<p>In order to help recognize the distance from the vehicle behind, the rear status view can be monitored through the floating type display while driving.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>
				</div>	
			</section>

			<section data-role="page" id="ADASLast" class="container lastcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>In order to prevent things from abruptly getting out of control , as well as to further assist safe driving, five new safety systems have been newly applied.</p>
						<div class="btn_box">DBL</div>
						<div class="btn_box">DAA</div>
						<div class="btn_box">AVM</div>
						<div class="btn_box">LKAS</div>
						<div class="btn_box">DRM</div>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#engineCover" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="engineCover" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="title">
						<p>Improved Fuel Efficiency</p>
						<p>12.3 <span>km/&#8467;</span></p>
						<p>(based on Gasoline-Fueled 2.0 with 205/65 R16 tires)</p>
					</div>
					<div class="imgwrap">
						<img src="../images/engine/graph.png" alt="fuel efficiency table">
					</div>
					<div class="textwrap">
						<p>The 2.0 L Turbocharged GDI engine delivers satisfying 180-kW power (at 6,000 RPM) and 350-Nm torque (at 1,400–4,000 RPM).</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#engine01" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="engine01" class="container detail">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="imgwrap">
						<img src="../images/engine/popup_01.png" alt="">
					</div>
					<div class="textwrap">
						<h2>2.0Turbo-GDI</h2>
						<p>With the Sonata Elite and Premium variants, you’ll enjoy the 2.0L Turbocharged GDI engine that delivers a satisfying 180 kW of power (at 6,000 RPM) and 350 Nm of torque (at 1,400 – 4,000 RPM).</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#engine02" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="engine02" class="container detail">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="imgwrap">
						<img src="../images/engine/popup_02.png" alt="">
					</div>
					<div class="textwrap">
						<h2>Turbo unique TGS knob</h2>
						<p>The turbo-exclusive gear knob has a sophisticated and sporty design.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#convenienceCover" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="convenienceCover" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="textwrap">
						<p>New features for driver’s convenience have been applied to the Sonata New Rise.</p>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#convenience" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>
				</div>	
			</section>

			<section data-role="page" id="convenience" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="img_overlay">
						<img src="../images/convenience/overlay_01.png" class="WirelessCharging" alt="">
						<img src="../images/convenience/overlay_02.png" class="WirelessCharging" alt="">
						<img src="../images/convenience/overlay_03.png" class="AirClean" alt="">
						<img src="../images/convenience/overlay_04.png" class="carplay" alt="">
					</div>
					<div class="btn_more">
						<img src='../images/button/btn_more.png' class="WirelessCharging">
						<img src='../images/button/btn_more.png' class="AirClean">
						<img src='../images/button/btn_more.png' class="carplay">
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#uploadPage" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>

					<!-- <div class="popLayer" id="pop_SmartphoneNeglectAlert">
						<div class="imgwrap">
							<img src="../images/convenience/popup_01.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Smartphone neglect alert</h2>
							<p>Convenience has also increased with the wireless charging pad for smartphones, which alerts passengers when the smartphone is unattended.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div> -->

					<div class="popLayer" id="pop_WirelessCharging">
						<div class="imgwrap">
							<img src="../images/convenience/popup_01.png" alt="">
							<img src="../images/convenience/popup_02.png" alt="">
						</div>
						<div class="textwrap text1">
							<h2>Wireless Smartphone Charging</h2>
							<p>User convenience is improved through the wireless charging pad for smartphones that alerts the passenger when it has been left unattended.</p>
						</div>
						<div class="textwrap text2">
							<h2>Wireless Smartphone Charging</h2>
							<p>The Sonata New Rise has wireless charging function for smartphone and an alert system for smartphone left unattended when the driver leaves the car.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
						<div class="btn_arrow">
							<img src="../images/button/btn_turbo_previous_nonactive.png" alt="">
							<img src="../images/button/btn_turbo_next.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_AirClean">
						<div class="imgwrap">
							<img src="../images/convenience/popup_03.png" alt="">
						</div>
						<div class="textwrap text1">
							<h2>Air Clean Mode</h2>
							<p>The air cleaning mode uses a high-performance air-conditioner filter capable of absorbing basic gas and filtering micro dusts by forcing air circulation inside the vehicle.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_carplay">
						<div class="imgwrap">
							<img src="../images/convenience/popup_04.png" alt="">
						</div>
						<div class="textwrap text1">
							<h2>Apple CarPlay / Android Auto</h2>
							<p>Installing smartphone applications for the car makes it possible to use the smartphone functions such as interactive internet, mobile service, remote control, navigation through voice, and phone calls on the car display.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>
				</div>	
			</section>

			<section data-role="page" id="uploadPage" class="container">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<form id="Frm" name="Frm" method="post" enctype="multipart/form-data">
						<div class="inputbox">
							<div class="imgwrap">
								<img id="current-img" src="../images/btn_picture.png" alt="upload img">
								<input type="file" id="upload" name="LMS_IMAGE" accept="image/*">
							</div>
							<div class="textwrap">
								<textarea placeholder="PLEASE ENTER TEXT" class="con_text"></textarea>
							</div>
						</div>
						<div class="btn_upload">
							<a href="#" id="form_sumit"><img src="../images/btn_upload.png" alt=""></a>
						</div>
					</form>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#convenience" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>
				</div>	
			</section>
			<input type="hidden" id="SESSION_LMS_SEQ" name="SESSION_LMS_SEQ" value="<?=$_SESSION["HY_LMS_SEQ"]?>">
			<input type="hidden" id="LMS_LANGUAGE" name="LMS_LANGUAGE" value="en">
			<input type="hidden" id="SESSION_APP_GB" name="SESSION_APP_GB" value="<?=$_SESSION["HY_APP_GB"]?>">
			<input type="hidden" id="LMS_TYPE" name="LMS_TYPE" value="ms">

			
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
