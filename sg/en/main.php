<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	header("Content-Type: text/html; charset=UTF-8");

	if($_SESSION["HY_LMS_SEQ"] > 0 ){
	}else{
		$tools->JavaGo("/lf/sg/en/");
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
		<link rel="stylesheet" href="../css/jquery.fullPage.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="../common/js/common.js"></script>
		 <script>
			 $(document).on("mobileinit", function () {
				 $.mobile.hashListeningEnabled = false;
				 $.mobile.pushStateEnabled = false;
				 $.mobile.changePage.defaults.changeHash = false;
			});
		</script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/jquery.fullPage.js"></script>
		<script src="../js/device.js"></script>
		<script src="../js/lf_main.js"></script>
		<script src="../js/menu.js"></script>
		<script src="../js/pageMap.js"></script>
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
			<section data-role="page" id="cover" class="container">
				<div data-role="main" class="ui-content">
					<div class="title">
						<div class="text">Dramatic changes</div>
						<h1><span>Sonata</span> <span>New</span> <span>Rise</span></h1>
					</div>
				</div>
				<a href="#pageMap" id="btn_start">START</a>
			</section>

			<section data-role="page" id="pageMap" class="container">
				<div data-role="header" class="contentPageHeader">
					<div class="header">
						<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
						<h1>Sonata New Rise</h1>
					</div>
				</div>
				<div data-role="main" class="ui-content">
					<div class="wrap">
						<h3>Section Key Selling Points</h3>
						<div class="top_box">
							<div><strong>P</strong> : Performance</div>
							<div><strong>D</strong> : Design</div>
							<div><strong>S</strong> : Safety</div>
							<div><strong>C</strong> : Convenience</div>
						</div>
						<div class="main_box">
							<div class="words_wrap">
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_02_D.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_03_S.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word_front">Front</div>
							</div>
							<div class="words_wrap">
								<div class="word">
									<img src="../images/map/001_btn_01_P.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_02_D.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word_front">Front 3/4</div>
							</div>
							<div class="words_wrap">
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_02_D.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_04_C.png" alt="">
								</div>
								<div class="word_front">Driver's seat</div>
							</div>
							<div class="words_wrap">
								<div class="word">
									<img src="../images/map/001_btn_01_P.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_02_D.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_03_S.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word_front">Passenger<br>Side exterior</div>
							</div>
							<div class="words_wrap">
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_05_NA.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_03_S.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_04_C.png" alt="">
								</div>
								<div class="word_front">Rear interior</div>
							</div>
							<div class="words_wrap">
								<div class="word">
									<img src="../images/map/001_btn_01_P.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_02_D.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_03_S.png" alt="">
								</div>
								<div class="word">
									<img src="../images/map/001_btn_04_C.png" alt="">
								</div>
								<div class="word_front">Rear exterior</div>
							</div>
							<a id="btnPageMove" href="#contentPage" class="ui-btn go-next" style="width:1px; height:1px; overflow:hidden;">page move</a>
						</div>
						<div class="map_pop">
							<div class="close">
								<img src="../images/map/002_btn_close.png" alt="">
							</div>
							<div class="pop_title_wrap">
								<div class="pop_title"></div>
							</div>
							<div class="pop_btn_wrap"></div>
						</div>
					</div>
				</div>
			</section>

			<section data-role="page" id="contentPage" class="container">
				<div data-role="header" class="contentPageHeader">
					<div class="header">
						<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
						<h1>Sonata New Rise</h1>
					</div>
				</div>
				<div data-role="main" id="fullpage" class="ui-content">
					<div class="popLayer" id="scroll"></div>
					<!-- exterior -->
					<article class="sub_cover section" id="exterior">
						<div class="textwrap_top">
							<h2>Exterior</h2>
							<p>Introducing New Sonata <span>for lifestyle changes.</span></p>
						</div>
						<div class="btn_play">
							<img src="../images/exterior/101_video_thumbnail.png" alt="">
						</div>
						<div class="popLayer" id="exteriorMov">
							<div class="btn_close">
								<img src="../images/button/btn_close.png" alt="">
							</div>

							<video controls="true">
								<source src="http://of01-qb5150.ktics.co.kr/2018_New_Sonata.mp4" type="video/mp4" >
									Your browser does not support HTML5 video.
							</video>
						</div>
					</article>
					<!-- frontstyle -->
					<article class="sub_cover section" id="frontstyle">
						<div class="textwrap_top">
							<h2>Front Style</h2>
							<p>Introducing New Sonata <span>for lifestyle changes.</span></p>
						</div>
					</article>
					<article class="slidePage section" id="sFront">
						<h2>Front Style</h2>
						<div class="imgwrap_top">
							<div class="imgTitle">
								<p>Cascading grille</p>
								<p>Chrome garnish</p>
								<p>Hood</p>
								<p>Headlamp</p>
								<p>Chrome molding</p>
								<p>Vertical LED DRL</p>
							</div>
							<div class="slideImg">
								<img src="../images/exterior/103_image_default.png" class="slide" alt="cascading grille" id="sFront1">
								<img src="../images/exterior/104_image_default.png" class="slide" alt="chrome garnish" id="sFront2">
								<img src="../images/exterior/105_image_default.png" class="slide" alt="hood" id="sFront3">
								<img src="../images/exterior/106_image_default.png" class="slide" alt="headlamp" id="sFront4">
								<img src="../images/exterior/107_image_default.png" class="slide" alt="chrome molding" id="sFront5">
								<img src="../images/exterior/108_image_default.png" class="slide" alt="vertical LED DRL" id="sFront6">
							</div>
							<div class="slideImgOver">
								<img src="../images/exterior/103_image_overay.png" class="twinkle" alt="cascading grille">
								<img src="../images/exterior/104_image_overay.png" class="twinkle" alt="chrome garnish">
								<img src="../images/exterior/105_image_overay.png" class="twinkle" alt="hood">
								<img src="../images/exterior/106_image_overay.png" class="twinkle" alt="headlamp">
								<img src="../images/exterior/107_image_overay.png" class="twinkle" alt="chrome molding">
								<img src="../images/exterior/108_image_overay.png" class="twinkle" alt="vertical LED DRL">
							</div>
						</div>
						<div class="textwrap">
							<div class="slideControler">
								<img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">
								<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt="">
								<div class="indicator">
									<img src="../images/button/indicator_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
								</div>
							</div>
							<div class="textbox">
								<p>The three-dimensionally designed cascading grille emphasizes the difference in thickness of chrome in the middle and the outline.</p>
								<p>The chrome garnish on the lower bumper lowers the visual attention and makes the nose look lower.</p>
								<p>Tense, extruded engine hood volume.</p>
								<p>Slim LED headlamps with horizontal lines (Bi-function)</p>
								<p>Chrome molding surrounds the upper outline of headlamp connected with the beltline to create a unique and luxurious look.</p>
								<p>Vertically designed DRL is integrated with the air-curtain to create a wider look.</p>
							</div>
						</div>
					</article>
					<!-- sidestyle -->
					<article class="sub_cover section" id="sidestyle">
						<div class="textwrap_top">
							<h2>Side Style</h2>
							<p>Lowered the end of hood and raised the rear tailgate to create a sleek image from the side.</p>
						</div>
					</article>

					<article class="slidePage section" id="sSide">
						<h2>Side Style</h2>
						<div class="imgwrap_top">
							<div class="imgTitle">
								<p>DLO surround Chrome molding</p>
								<p>Side Sill Molding</p>
								<p>Wheels &amp; Tires</p>
							</div>
							<div class="slideImg">
								<img src="../images/exterior/110_image_default.png" class="slide" alt="DLO surround Chrome molding">
								<img src="../images/exterior/111_image_default.png" class="slide" alt="Side Sill Molding">
								<img src="../images/exterior/111_image.png" class="slide" alt="Wheels & Tires">
							</div>
							<div class="slideImgOver">
								<img src="../images/exterior/110_image_overay.png" class="twinkle" alt="DLO surround Chrome molding">
								<img src="../images/exterior/111_image_overay.png" class="twinkle" alt="Side Sill Molding">
								<img src="../images/exterior/111_image.png" class="twinkle" alt="Wheels & Tires">
							</div>
						</div>
						<div class="textwrap">
							<div class="slideControler">
								<img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">
								<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt="">
								<div class="indicator">
									<img src="../images/button/indicator_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
								</div>
							</div>
							<div class="textbox">
								<p>Application of DLO outer surround chrome molding and more dimensional design of the c-pillar make a sporty look from the side.</p>
								<p>Engraved side seal molding expresses speed to differentiate the side design.</p>
								<p>18 inch alloy wheels &amp; tires.</p>
							</div>
						</div>
					</article>
					<!-- rearstyle -->
					<article class="sub_cover section" id="rearstyle">
						<div class="textwrap_top">
							<h2>Rear Style</h2>
							<p>The trunk switch integrated with the emblem and the widely spaced car name letters maximize the back make a clean and wide look.</p>
						</div>
					</article>
					<article class="slidePage section" id="sRear">
						<h2>Rear Style</h2>
						<div class="imgwrap_top">
							<div class="imgTitle">
								<p>Rear combination lamp</p>
								<p>Rear Bumper</p>
								<p>Rear reflector</p>
								<p>Twin Muffler</p>
							</div>
							<div class="slideImg">
								<img src="../images/exterior/114_image_default.png" class="slide" alt="Rear combination lamp">
								<img src="../images/exterior/115_image.png" class="slide" alt="Rear Bumper">
								<img src="../images/exterior/116_image_default.png" class="slide" alt="Rear reflector">
								<img src="../images/exterior/118_image_default.png" class="slide" alt="Twin Muffler">
							</div>
							<div class=" slideImgOver">
								<img src="../images/exterior/114_image_overay.png" class="twinkle" alt="Rear combination lamp">
								<img src="../images/exterior/115_image.png" class="twinkle" alt="Rear Bumper">
								<img src="../images/exterior/116_image_overay.png" class="twinkle" alt="Rear reflector">
								<img src="../images/exterior/118_image_overay.png" class="twinkle" alt="Twin Muffler">
							</div>
						</div>
						<div class="textwrap">
							<div class="slideControler">
								<img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">
								<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt="">
								<div class="indicator">
									<img src="../images/button/indicator_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
								</div>
							</div>
							<div class="textbox">
								<p>Sleek and bold design of the horizontal rear lamp highlights the clean and modern sensibility.</p>
								<p>Position of license plate lowered to create simple and unique image.</p>
								<p>Applied vertical type rear reflector to realize stable stance and sporty image.</p>
								<p>Expressing dynamic rear image by dual twin-tip muffler composed of each 2 tale trim left &amp; right. <br><br>(Twin Muffler : 2.0 turbo only)</p>
							</div>
						</div>
					</article>

					<!-- interior -->
					<article class="sub_cover section" id="interior">
						<div class="textwrap_top">
							<h2>Interior</h2>
							<p>Convenience features of ergonomic design(HMI) deliver enjoyable driving experience.</span></p>
						</div>
					</article>
					<article class="slidePage section" id="sInterior">
						<h2>Interior</h2>
						<div class="imgwrap_top">
							<div class="imgTitle">
								<p>Steering Wheel</p>
								<p>8-inch navigation</p>
								<p>Supervision Cluster</p>
								<p>Electric Parking Brake(EPB)</p>
								<p>Heated Seats</p>
								<p>Ventilated Seats</p>
								<p>IMS(Integrated Memory System)</p>
							</div>
							<div class="slideImg">
								<img src="../images/interior/203_image_default.png" class="slide" alt="Steering Wheel">
								<img src="../images/interior/204_image_default.png" class="slide" alt="8-inch navigation">
								<img src="../images/interior/206_image_default.png" class="slide" alt="Supervision Cluster">
								<img src="../images/interior/207_image_default.png" class="slide" alt="Electric Parking Brake(EPB)">
								<img src="../images/interior/209_image_default.png" class="slide" alt="Heated Seats">
								<img src="../images/interior/210_image_default.png" class="slide" alt="Ventilated Seats">
								<img src="../images/interior/211_image_default.png" class="slide" alt="IMS(Integrated Memory System)">
							</div>
							<div class=" slideImgOver">
								<img src="../images/interior/203_image_overay.png" class="twinkle" alt="Steering Wheel">
								<img src="../images/interior/204_image_overay.png" class="twinkle" alt="8-inch navigation">
								<img src="../images/interior/206_image_overay.png" class="twinkle" alt="Supervision Cluster">
								<img src="../images/interior/207_image_default.png" class="twinkle" alt="Electric Parking Brake(EPB)">
								<img src="../images/interior/209_image_default.png" class="twinkle" alt="Heated Seats">
								<img src="../images/interior/210_image_default.png" class="twinkle" alt="Ventilated Seats">
								<img src="../images/interior/211_image_overay.png" class="twinkle" alt="IMS(Integrated Memory System)">
							</div>
						</div>
						<div class="textwrap">
							<div class="slideControler">
								<img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">
								<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt="">
								<div class="indicator">
									<img src="../images/button/indicator_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
								</div>
							</div>
							<div class="textbox">
								<p>A sporty design of circular three-spoke type is applied to the steering wheel.</p>
								<p>8-Inch Navigation &amp; Phone Connectivity (Apple Car Play, Mirror Link)</p>
								<p>Optimized information display function with simple, refined graphics.<br><br>Supervision Cluster 7 Color LCD(Turbo model only).</p>
								<p>With Electric Parking Brake(EPB), parking brake can be turned on with a simple switch.</p>
								<p>Need minimal adjustment because the temperature is automatically lowered over time to prevent burns.</p>
								<p>Always pleasant regardless of the weather condition.</p>
								<p>Stores the preferred seat positions for up to two drivers.</p>
							</div>
						</div>
					</article>

					<!-- Safety -->
					<article class="sub_cover section" id="safety">
						<div class="textwrap_top">
							<h2>Safety</h2>
							<p>51% of the chassis of this car is made from Advanced High Strength Steel (AHSS), which is 10% lighter and twice more durable than regular steel.</p>
						</div>
					</article>
					<article class="section" id="safetyDetail">
						<div class="textwrap">
							<p>Through improved structure and use of more rigid materials, the chassis of Sonata New Rise is now stronger and safer.</p>
						</div>
						<div class="btn_more">
							<img src="../images/button/002_btn_default.png" id="rigidity" alt="btn more">
							<img src="../images/button/002_btn_default.png" id="adhesive" alt="btn more">
							<img src="../images/button/002_btn_default.png" id="structure" alt="btn more">
							<img src="../images/button/002_btn_default.png" id="collision" alt="btn more">
						</div>
						<div class="popLayer" id="popRigidity">
							<div class="textwrap_top">
								<h3>Enhancement in Body Rigidity</h3>
								<p>60kgf advanced high strength steel used 51% Use of hot stamping parts</p>
							</div>
							<div class="imgwrap">
								<img src="../images/safety/popup_01_frame.png" alt="Enhancement in Body Rigidity">
								<div class="textbox">
									<p>The proportion of AHSS  used in chassis of SONATA New Rise is 2.4 times more than the previous model and 3.8 times more than the PASSAT.</p>
								</div>
								<img src="../images/safety/popup_01_graph.png" class="imgStyle" alt="Enhancement in Body Rigidity table">
							</div>
							<div class="btn_close">
								<img src="../images/button/btn_close.png" alt="">
							</div>
						</div>
						<div class="popLayer" id="popAdhesive">
							<div class="textwrap_top">
								<h3>Structural Adhesive</h3>
								<p>Body strength reinforced with higher use of structural adhesives.</p>
							</div>
							<div class="imgwrap">
								<div class="imgText">
									<p><span>119m</span>Total length of structural adhesive application</p>
								</div>
								<img src="../images/safety/popup_02_frame.png" class="imgSize" alt="Structural Adhesive">
								<div class="textbox">
									<p>High strength body is achieved by expanded use of adhesives specialized for vehicle body.<br>Areas of overlapping vehicle structure to which adhesives were applied.</p>
								</div>

							</div>
							<div class="btn_close">
								<img src="../images/button/btn_close.png" alt="">
							</div>
						</div>
						<div class="popLayer" id="popStructure">
							<div class="textwrap_top">
								<h3>Enhanced Shock Absorbing Chassis Structure</h3>
								<p>Achieved the ideal shock absorption system by diversifying functions according to collision stage.</p>
							</div>
							<div class="imgwrap">
								<img src="../images/safety/popup_03.png" alt="Enhanced Shock Absorbing Chassis Structure">
								<div class="textbox textStyle">
									<p><span>Front area</span>Increased energy absorption</p>
									<p><span>Middle area</span>Distribution collision force</p>
									<p><span>Passenger area</span>Minimize structural distortion</p>
								</div>

							</div>
							<div class="btn_close">
								<img src="../images/button/btn_close.png" alt="">
							</div>
						</div>
						<div class="popLayer" id="popCollision">
							<div class="textwrap_top">
								<h3>Improved Collision Test Results</h3>
								<p>Best grade for all the collision test <br>IIHS small overlap test GOOD.</p>
							</div>
							<div class="imgwrap imgwrap2">
								<img src="../images/safety/popup_04.png" alt="Improved Collision Test Results">
							</div>
							<div class="btn_close">
								<img src="../images/button/btn_close.png" alt="">
							</div>
						</div>
					</article>
					<article class="sub_cover section" id="airbag">
						<div class="textwrap_top">
							<h2>Advanced 7-airbag</h2>
							<p>2 advanced frontal airbags for the driver’s seat and front passenger seat, 1 knee airbag for the driver’s seat, 2 side airbags for the driver’s seat and front passenger seat, and 2 curtain shield airbags.</p>
						</div>
					</article>

					<!-- Performance -->
					<article class="sub_cover section" id="performance">
						<div class="textwrap_top">
							<h2>Performance</h2>
							<p>You can enjoy more dynamic driving performance with enhanced fuel efficiency.</p>
						</div>
					</article>
					<article class="section" id="fuelDetail">
						<div class="title">
							<p>Improved Fuel Efficiency</p>
							<p>12.3 <span>km/&#8467;</span></p>
							<p>(based on Gasoline-Fueled 2.0 with 205/65 R16 tires)</p>
						</div>
						<div class="imgwrap">
							<img src="../images/performance/402_graph.png" alt="fuel efficiency table">
						</div>
						<div class="textwrap">
							<p>The combined fuel efficiency is calculated based on the application of 205/65 R16 tires (235/45 R18 tires for Gasoline-Fueled 2.0 turbo)</p>
						</div>
					</article>
					<article class="section" id="transmissionDetail">
						<div class="imgwrap">
							<img src="../images/performance/403_img_01.png" alt="">
							<p>8-speed automatic transmission<br>(2.0 T-Gdi)</p>
						</div>
						<div class="imgwrap">
							<img src="../images/performance/403_img_02.png" alt="">
							<p>6-speed automatic transmission</p>
						</div>
					</article>
					<!-- Suspension -->
					<article class="sub_cover section" id="suspension">
						<div class="textwrap_top">
							<h2>Suspension</h2>
							<p>Achieving the highest level of driving performance and steering stability among competitors through suspension structure innovation.</p>
						</div>
					</article>
					<article class="section" id="suspensionDetail">
						<div class="imgwrap">
							<img src="../images/performance/002_btn_01.png" id="frontSuspnImg" alt="Front Suspension (McPherson strut)">
						</div>
						<div class="imgwrap">
							<img src="../images/performance/002_btn_02.png" id="rearSuspnImg" alt="Rear Suspension (Multi-link)">
						</div>
						<div class="popLayer" id="frontSuspn">
							<div class="imgwrap">
								<img src="../images/performance/popup_01.png" alt="">
								<p>Front Suspension <span>(McPherson strut)</span></p>
							</div>
							<div class="textwrap">
								<div class="textbox">
									<p>Newly designed front wheel geometry <br>Strengthened front bearing Brake tow-in minimized.</p>
								</div>
								<div class="btn_arrow">
									<img src="../images/button/popup_arrow.png" alt="">
								</div>
								<div class="textbox">
									<p>1. Steering responsiveness enhanced</p>
									<p>2. Linearity in vehicle responsiveness enhanced when increasing steering angle</p>
									<p>3. Enhanced stability through decrease in steering angle during braking</p>
								</div>
							</div>
							<div class="btn_close">
								<img src="../images/button/btn_close.png" alt="">
							</div>
						</div>
						<div class="popLayer" id="rearSuspn">
							<div class="imgwrap">
								<img src="../images/performance/popup_02.png" alt="">
								<p>Rear Suspension <span>(Multi-link)</span></p>
							</div>
							<div class="textwrap">
								<div class="textbox">
									<p>Newly designed rear wheel geometry <br>Dual low arm used Upper and lower arm span expanded.</p>
								</div>
								<div class="btn_arrow">
									<img src="../images/button/popup_arrow.png" alt="">
								</div>
								<div class="textbox">
									<p>Enhanced stability during high speed driving and turning.</p>
								</div>
							</div>
							<div class="btn_close">
								<img src="../images/button/btn_close.png" alt="">
							</div>
						</div>
					</article>

					<!-- Smart Sense -->
					<article class="sub_cover section" id="smartSense">
						<div class="textwrap_top">
							<h2>Smart Sense</h2>
							<p>Hyundai Smart Sense is a set of technologies that ensures safety of driver, other vehicles, and pedestrians by preventing accidents.</p>
						</div>
					</article>
					<article class="slidePage section" id="sSmartSense">
						<h2>Smart Sense</h2>
						<div class="imgwrap_top">
							<div class="imgTitle">
								<p>Autonomous Emergency Braking(AEB)</p>
								<p>Lane Keeping Assist System(LKAS)</p>
								<p>Blind Spot Detection(BSD)</p>
								<p>Driver Attention alert(DAA)</p>
								<p>Advanced Smart Cruise Control(ASCC)</p>
								<p>High Beam Assist(HBA)</p>
								<p>Around View Monitor(AVM)</p>
								<p>Driving Rear view Monitoring(DRM)</p>
								<p>Dynamic Bending Light(DBL)</p>
							</div>
							<div class="slideImg">
								<img src="../images/smartSense/503_image_01.png" class="slide" alt="Autonomous Emergency Braking(AEB)">
								<img src="../images/smartSense/503_image_02.png" class="slide" alt="Lane Keeping Assist System(LKAS)">
								<img src="../images/smartSense/503_image_03.png" class="slide" alt="LBlind Spot Detection(BSD)">
								<img src="../images/smartSense/503_image_04.png" class="slide" alt="Driver Attention alert(DAA)">
								<img src="../images/smartSense/503_image_05.png" class="slide" alt="Advanced Smart Cruise Control(ASCC)">
								<img src="../images/smartSense/503_image_06.png" class="slide" alt="LHigh Beam Assist(HBA)">
								<img src="../images/smartSense/503_image_07.png" class="slide" alt="Around View Monitor(AVM)">
								<img src="../images/smartSense/503_image_08.png" class="slide" alt="Driving Rear view Monitoring(DRM)">
								<img src="../images/smartSense/503_image_09.png" class="slide" alt="Dynamic Bending Light(DBL)">

							</div>
						</div>
						<div class="textwrap">
							<div class="slideControler">
								<img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">
								<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt="">
								<div class="indicator">
									<img src="../images/button/indicator_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
								</div>
							</div>
							<div class="textbox">
								<p>Alerts the driver and provides braking assistance automatically whenever there is a risk of collision with another vehicle or a pedestrian.</p>
								<p>The camera analyzes lane markings and automatically corrects the steering angle to prevent unintended lane departure.</p>
								<p>Prevents accidents by alerting the driver whenever there is a risk of collision with another vehicle in the blind spot.</p>
								<p>Suggests the driver to take a rest when a fatigue/distracted driving pattern is detected.</p>
								<p>Detects the vehicle in front using the front radar and keeps a safe distance automatically.</p>
								<p>Automatically turns on/off the high beam by sensing the light source of oncoming vehicles.</p>
								<p>Assists driver to park by providing virtual view of vehicle's surroundings reconstructing 4ch-camera images into a single image like bird's-eye view.</p>
								<p>Driving Rear view Monitoring(DRM) is a function that lets the driver view behind the car through the display with a graphic guildeline to sense the distance from the car behind while driving.</p>
								<p>DBL provides more accurate illumination of the road ahead by turning in the same direction as the steering wheel.</p>
							</div>
						</div>
					</article>

					<!-- Convenience -->
					<article class="sub_cover section" id="convenience">
						<div class="textwrap_top">
							<h2>Convenience</h2>
							<p>Iphone can be synchrozied with the vehicle display system for the driver to use various features of iphone such as phone call, text message, and music safely and conveniently.</p>
						</div>
					</article>
					<article class="slidePage section" id="sConvenience">
						<h2>Convenience</h2>
						<div class="imgwrap_top">
							<div class="imgTitle">
								<p>Wireless charging system for smartpones</p>
								<p>Air clean mode</p>
								<p>Emblem Integrated Trunk Switch</p>
								<p>Trunk space</p>
							</div>
							<div class="slideImg">
								<img src="../images/convenience/603_image_01.png" class="slide" alt="Wireless charging system for smartpones">
								<img src="../images/convenience/603_image_02.png" class="slide" alt="Air clean mode">
								<img src="../images/convenience/113_image.png" class="slide" alt="Emblem Integrated Trunk Switch">
								<img src="../images/convenience/603_image_03.png" class="slide" alt="Trunk space">
							</div>
						</div>
						<div class="textwrap">
							<div class="slideControler">
								<img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">
								<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt="">
								<div class="indicator">
									<img src="../images/button/indicator_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
									<img src="../images/button/indicator_non_active.png" alt="">
								</div>
							</div>
							<div class="textbox">
								<p>Increased convenience with a wireless charging pad for smartphones, which also alerts the passengers when a smartphone is left unattended.</p>
								<p>Applied a high-performance air conditioning filter capable of absorbing basic gas and an one-touch air cleaning mode that foces air circulation in the vehicle to filter microdust.</p>
								<p>A hidden switch trunk for both convenience and clean image.</p>
								<p>Trunk space has increased, making it larger than that of any other competitiors. Up to 4 golf bags and 4 boston bags can be loaded.</p>
								<div class="table" id="trunkSpace">
									<img src="../images/convenience/603_graph.png" alt="trunkSpace">
								</div>
							</div>
						</div>
					</article>
					<!--article class="section" id="uploadPage">
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
					</article-->

				</div>
			</section>
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
			<input type="hidden" id="SESSION_LMS_SEQ" name="SESSION_LMS_SEQ" value="<?=$_SESSION["HY_LMS_SEQ"]?>">
			<input type="hidden" id="LMS_LANGUAGE" name="LMS_LANGUAGE" value="en">
			<input type="hidden" id="SESSION_APP_GB" name="SESSION_APP_GB" value="<?=$_SESSION["HY_APP_GB"]?>">
			<input type="hidden" id="LMS_TYPE" name="LMS_TYPE" value="sg">

		</div>
	</body>
</html>
