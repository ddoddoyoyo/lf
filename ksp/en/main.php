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
		<script src="../js/device.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/menu.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
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
			<!-- <section data-role="page" id="" class="container">
				<div data-role="main" class="ui-content">
					<div class="title">
						<div class="text">Dramatic changes</div>
						<h1><span>Sonata</span> <span>New</span> <span>Rise</span></h1>
					</div>
				</div>
				<a href="#pageMap" id="btn_start">START</a>
			</section> -->

			<section data-role="page" id="cover" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>Sonata New Rise has made a lot of difference compared to existing LF. <br>Shall we get together?</p>
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
						<p>FRONT has changed six places. Take a closer look at each one.</p>
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
							<p class="text1">The front part of SONATA NEW RISE versus LF is the biggest change point of the three-dimensional designed cascading grill.</p>
							<p class="text2">The cascading grilles emphasize dynamic and sporty with the difference in chrome thickness between the middle and the outside.</p>
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
							<p>The chrome garnish at the bottom of the bumper pulled down the visual concentration and emphasized the effect of the body being lower.</p>
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
							<h2>Front hood</h2>
							<p>The protruding engine volume and lowered hood make the overall silhouette look slicker.</p>
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
							<p>The chrome surround molding that connects the upper part of the head lamp and the belt line produces a unique sense of quality.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_headLamp">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_05.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Slim LED Head Lamp</h2>
							<p>'LED by function head lamp' is applied to head lamp and down light in one head lamp. Simplicity and sophistication are implemented simultaneously in design.</p>
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
							<p>Vertical DRL (daytime driving, etc.) is applied to give a more sporty and wide feeling, resulting in a wide-looking effect.</p>
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
							<p>Air curtain-linked vertical type LED DRL further emphasizes the sporty frontal appearance. (1.6 2.0 turbo only)</p>
						</div>
						<div class="textwrap text2">
							<h2>Mesh Type Radiator Grille</h2>
							<p>Black mesh type (net type) The large cascading grill has completed the differentiated face of New Rise Turbo.</p>
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
						<p>From the front, New Rise has achieved a more robust and dynamic style compared to the existing LF.</p>
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
						<p>There are three armies in SIDE. Take a closer look at each one.</p>
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
							<p>DLO Outside Surround We applied sporty side image by applying glossy chrome and changing C-pillar side effect.</p>
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
							<p>A carved side seal is used to express speed to create a differentiated side style.</p>
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
							<p>Turbo-exclusive exterior colors and front end design details(1.6 2.0 turbo only)</p>
						</div>
						<div class="textwrap text2">
							<h2>Dark Hyper Silver Wheel</h2>
							<p>The 18-inch Dark Hyper Silver wheel was used to express toughness.</p>
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
						<p>From the side, the hood end is lowered and the tailgate end is raised, so it is fast and slim.</p>
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
						<p>There are three troops in REAR. Take a closer look at each one.</p>
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
							<p>Horizontal slick and bold design with rear lamps emphasizes a sense of clean and modern sensibility.</p>
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
							<p>We moved the license plate mounting position to the bottom of the bumper, creating a simple and differentiated atmosphere.</p>
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
							<p>A hidden switch is applied to the upper part of the emblem so that the trunk can be released conveniently while maintaining a clean rear image.</p>
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
							<h2>Rear reflector</h2>
							<p>The vertical type rear reflector was applied to achieve stable stance and sporty image.</p>
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
							<p>Dual mufflers, including the rear diffuser with aeropin to reduce air resistance, make the rear view more attractive.</p>
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
					<div class="textwrap">
						<p>The rear part has a wide stance compared to the LF with a three-dimensional volume sense.</p>
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
						<p>INTERIOR has three troops in place. Take a closer look at each one.</p>
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
							<p>The steering wheel design is applied in a sporty style circular three-spoke type.</p>
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
							<p>The three-dimensional design emphasizes sportiness and luxury, and the high-tech and balanced image is realized by the silver button application of the audio switch part.</p>
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
							<h2>4.2 inch Supervision Cluster</h2>
							<p>Considering ease of use, the system is uniquely designed considering the user-oriented intuitive operation convenience by optimally arranging the operating system in a coherent and harmonious manner.</p>
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
						<p>Comfortable ergonomic design allows you to enjoy pleasant driving by applying specifications that are easy to use in the interior space.</p>
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
						<p>Five safety systems have been added to the SONATA NEW RISE, which takes into consideration the safety of the driver. What are the five new safety systems?</p>
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
						<p>It is safety specification applied to existing LF SONATA.</p>
						<div class="btn_box AEB">AEB</div>
						<div class="btn_box HBA">HBA</div>
						<div class="btn_box ASCC">ASCC</div>
						<div class="btn_box BSD">BSD</div>
						<div class="btn_box LDWS">LDWS</div>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#ADAS" class="btn_nextPage">New 5 Systems &nbsp;&nbsp;&gt;</a>
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
							<img src="../images/adas/popup_01.png" alt="">
						</div>
						<div class="textwrap">
							<h2>LKAS <span>(Lane Keeping Assist System)</span></h2>
							<p>It detects the road lanes through the front camera and controls the steering wheel to stay in that line.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_DBL">
						<div class="imgwrap">
							<img src="../images/adas/popup_02.png" alt="">
						</div>
						<div class="textwrap">
							<h2>DBL <span>(Dynamic Bending Light)</span></h2>
							<p>Moving headlight beams that follow the curve of the road when cornering. For the best possible visibility when driving at night on twisting roads.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_DAA">
						<div class="imgwrap">
							<img src="../images/adas/popup_03.png" alt="">
						</div>
						<div class="textwrap">
							<h2>DAA <span>(Driver Attention Alert)</span></h2>
							<p>It detects driver’s unusual driving pattern from fatigue or carelessness and suggest the driver's to take a rest.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_AVM">
						<div class="imgwrap">
							<img src="../images/adas/popup_04.png" alt="">
						</div>
						<div class="textwrap">
							<h2>AVM <span>(Around View Monitor)</span></h2>
							<p>It shows the surroundings of the car for safe parking.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_DRM">
						<div class="imgwrap">
							<img src="../images/adas/popup_05.png" alt="">
						</div>
						<div class="textwrap">
							<h2>DRM <span>(Driving Rear view Monitoring)</span></h2>
							<p>The driver's seat monitor shows the rear position so that you can recognize the distance to the following vehicle.</p>
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
						<p>We have added five new safety systems in order to prevent unexpected situations by considering the importance of safe driving.</p>
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
						<p>The combined fuel efficiency is calculated based on the application of 205/65 R16 tires (235/45 R18 tires for Gasoline-Fueled 2.0 turbo)</p>
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
						<p>For the first time in Korea, we applied the front-wheel drive 8-speed automatic transmission to improve fuel efficiency and driving performance.</p>
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
						<p>SONATA NEW RISE has been specially designed for the convenience of the driver.</p>
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
						<img src="../images/convenience/overlay_01.png" class="SmartphoneNeglectAlert" alt="">
						<img src="../images/convenience/overlay_02.png" class="WirelessCharging" alt="">
						<img src="../images/convenience/overlay_03.png" class="AirClean" alt="">
						<img src="../images/convenience/overlay_04.png" class="carplay" alt="">
					</div>
					<div class="btn_more">
						<img src='../images/button/btn_more.png' class="SmartphoneNeglectAlert">
						<img src='../images/button/btn_more.png' class="WirelessCharging">
						<img src='../images/button/btn_more.png' class="AirClean">
						<img src='../images/button/btn_more.png' class="carplay">
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#uploadPage" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>

					<div class="popLayer" id="pop_SmartphoneNeglectAlert">
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
					</div>

					<div class="popLayer" id="pop_WirelessCharging">
						<div class="imgwrap">
							<img src="../images/convenience/popup_02.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Wireless charging</h2>
							<p>Available on smart phones that provide wireless charging function.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_AirClean">
						<div class="imgwrap">
							<img src="../images/convenience/popup_03.png" alt="">
						</div>
						<div class="textwrap text1">
							<h2>Air clean mode</h2>
							<p>We applied air purifying mode which filters fine dust by forced circulation of indoor air by one-touch by applying high performance air conditioner filter that can adsorb to basic gas.</p>
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
							<p>Installing a car operating system allows you to use two-way internet, mobile services, remote control, voice map search, and dialing.</p>
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
					<form action="">
						<div class="inputbox">
							<div class="imgwrap">
								<img id="current-img" src="../images/btn_picture.png" alt="upload img">
								<input type="file" id="upload" name="LMS_IMAGE" accept="image/*">
							</div>
							<div class="textwrap">
								<textarea name="" id="" placeholder="PLEASE ENTER TEXT"></textarea>
							</div>
						</div>
						<div class="btn_upload">
							<a href="#"><img src="../images/btn_upload.png" alt=""></a>
						</div>
					</form>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#convenience" class="btn_nextPage">
						<img src="../images/button/next btn_alt.png" alt="">
					</a>
				</div>	
			</section>


			
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
