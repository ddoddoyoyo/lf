<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	header("Content-Type: text/html; charset=UTF-8");

	if($_SESSION["HY_LMS_SEQ"] > 0 ){
	}else{
		$tools->JavaGo("/lf/ms/ar/");
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
		<script src="../js/menu_ar.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#upload').change(function(){
					readURL(this);
				});
				$(".text_box p, .btn_box, .textwrap,p").css({"direction":"rtl"});
				$(".popLayer .textwrap,.detail .textwrap").css({"text-align":"right"});
				//$(".subcover .textwrap").css({"text-align":"center"});
				// $("html,body").css({"background":"#fff","height":"100.1vh"});
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
			<section data-role="page" id="cover" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>لقد أثبتت سيارة سوناتا بالتصميم المطور أنها أكثر من ممتازة في العديد من النواحي مقارنه بموديل إل إف سوناتا. هيا نتحقق من ذلك.</p>
						<a href="#exFront" class="btn_box">بدء</a>
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
					<!-- <div class="btn_more">
						<img src='../images/button/btn_more.png' class="cascadingGrille">
						<img src='../images/button/btn_more.png' class="chromeMoling">
						<img src='../images/button/btn_more.png' class="frontHood">
						<img src='../images/button/btn_more.png' class="headLamp">
						<img src='../images/button/btn_more.png' class="LEDDRL">
						<img src='../images/button/btn_more.png' class="chromeGarnish">
					</div> -->
					<div class="btn_turbo">
						<img src="../images/button/btn_turbo_arabic.png" alt="">
					</div>
					<div class="textwrap">
						<p>هناك ست مناطق شملها التغيير في الجزء الأمامي دعونا نلقي نظرة اقرب  على كل واحدة منها.</p>
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
							<h2>الشبكة الامامية المتوالية</h2>
							<p class="text1">يتميز الجزء الأمامي من السيارة سوناتا بالتصميم المطور بأنه يضم شبكة امامية متتالية ثلاثية الأبعاد، وهذا يمثل تغييرًا كبيرًا عن موديل سوناتا السابق  إل إف.</p>
							<p class="text2">تمتاز الشبكة المتتالية بوجود فارق في سماكة مخطط الكروم بين الأجزاء الوسطى والخارجية، مما يسلط الضوء على مظهرها الديناميكي والرياضي.</p>
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
							<h2>التصميم الخارجي  المزود  بالكروم</h2>
							<p>تحول التصميم الخارجي  المزود بالكروم في الجزء السفلي من المصد التركيز البصري إلى الأسفل، مما يجعل الجسم يبدو منخفض و رياضي.</p>
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
							<h2>غطاء المحرك</h2>
							<p>نظرًا للمحرك البارز والغطاء السفلي، يوضح التصميم الجديد والبروزات بأكملها على إنشاء تصميم حاد المظهر.</p>
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
							<h2>قولبة مطلية بالكروم</h2>
							<p>تصل قولبة الكروم المحيطية الجزء العلوي من المصابيح الأمامية بخط  رابط وبالتالي تعطي نظرة فاخرة وفريدة من نوعها.</p>
						</div>
						<div class="btn_close">
							<img src="../images/button/btn_close.png" alt="">
						</div>
					</div>

					<div class="popLayer" id="pop_headLamp">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_05.png" alt="">
							<div class="img_text">
								<p>قبل</p>
								<p>اتش اي دي المصابيح الاماميه</p>
							</div>
						</div>
						<div class="textwrap">
							<h2>سليم ليد المصابيح الأمامية هيد</h2>
							<p>يتم دمج الشعاع العالي والشعاع المنخفض في وحدة واحدة ”مصباح أمامي ذو وظيفة ثنائية"، مما يعمل على تقديم تصميم بسيط وأنيق.</p>
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
							<h2>مصباح ال اي دي  افقي للاضائة النهارية</h2>
							<p>تم وضع الاضاءه الافقيه  النهارية علي تباين التصميم الرياضي.</p>
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
							<h2>فتحات امامية هوائية</h2>
							<p>يؤكد مصباح ال اي دي  العمودي للضوء النهاري المدمج مع الستائر الهوائيه على التصميم الرياضي للمنطقة الامامية.</p>
						</div>
						<div class="textwrap text2">
							<h2>تصميم شبكالمتداخلة مبرد المحرك من النوع</h2>
							<p>إن تصميم الشبكة المتتالية الكبيرة والسوداء من النوع المتداخل تكمل الوجه المتميز لتيربو بتصميمها المطور.</p>
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
						<p>عند النظر من الأمام، تظهر سوناتا بالتصميم المطور أسلوبًا أقوى وأكثر ديناميكية بالمقارنة مع إل إف سوناتا السابقة.</p>
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
					<!-- <div class="btn_more">
						<img src='../images/button/btn_more.png' class="DLOChromeMolding">
						<img src='../images/button/btn_more.png' class="SideSillMolding">
					</div> -->
					<div class="btn_turbo">
						<img src="../images/button/btn_turbo_arabic.png" alt="">
					</div>
					<div class="textwrap">
						<p>هناك ثلاثة مناطق شملها التغيير على الجانبين، دعونا نلقي نظرة فاحصة على كل واحد منها.</p>
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
							<h2>القولبة المطية بالكروم لفتحات الإنارة النهارية</h2>
							<p> تظهر شكل  جانبي رياضي من خلال وضع الكروم اللامع على مخطط فتحات الإنارة النهارية وإضافة تأثير ثلاثي الأبعاد إلى القائم الخلفي سي.</p>
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
							<h2>قولبة خطوط واطارات الابواب  الجانبيه</h2>
							<p>من أجل تقديم نمط متباين على الجانبين، تمت قولبة خطوط واطارات الابواب  الجانبيه بالكروم.</p>
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
							<h2>قولبة خطوط واطارات الابواب  الجانبيه</h2>
							<p>الألوان الخارجية الحصرية  الخاصه بموديلات المحركات  ذات الشحن التوربيني والعتبة الجانبية للكروم ذو الالوان الامعه الداكنه (تيربو 1.6 و2.0 فقط)</p>
						</div>
						<div class="textwrap text2">
							<h2>العجلة الفضية الداكنة</h2>
							<p>تم تطبيق العجلات الفضية الداكنة 18 بوصة لتتماشي مع قوة موديل تيربو.</p>
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
						<p>عند النظر إليها من الجانبين، تم خفض نهاية غطاء محرك السيارة وتم رفع نهاية غطاء حقيبة السيارة، مما يجعل السيارة تبدو انيقه ورياضيه.</p>
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
					<!-- <div class="btn_more">
						<img src='../images/button/btn_more.png' class="RearCombinationLamp">
						<img src='../images/button/btn_more.png' class="RearBumper">
						<img src='../images/button/btn_more.png' class="TrunkOpenSwitch">
						<img src='../images/button/btn_more.png' class="RearReflector">
					</div> -->
					<div class="btn_turbo">
						<img src="../images/button/btn_turbo_arabic.png" alt="">
					</div>
					<div class="textwrap">
						<p>هناك ثلاثة مناطق شملها التغيير في الجزء الخلفي. دعونا نلقي نظرة فاحصة على كل واحدة منها.</p>
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
							<h2>مجموعة المصابيح الخلفية</h2>
							<p>المصابيح الخلفية الأفقية التي تتميز بتصميم أنيق وجريء.</p>
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
							<h2>المصد الخلفي</h2>
							<p>تم نقل لوحة الترخيص إلى الجزء السفلي من المصد للحصول على مظهر بسيط ومتمايز.</p>
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
							<h2>كيفيه فتح حقيبة السيارة في شعار هيونداي</h2>
							<p>من أجل الحفاظ على الجزء الخلفي بسيطًا ونظيفًا وجعله أسهل لفتح حقيبة السيارة، تم وضع زر الفتح الخفي على الجزء العلوي من الشعار.</p>
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
							<h2>العاكس الخلفي</h2>
							<p>تم استخدام  العاكسات الخلفية العمودية لتحقيق وضع ثابت وصورة رياضية.</p>
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
							<h2>مخرج العوادم الخلفي</h2>
							<p>يعمل مخرج العوادم الخلفي مع  الزوائد الخلفية الهوائية على تقليل الهواء وتعمل فتحات العادم الثنائية على بروز الجانب الخلفي بصورة أكبر عندما تكون السيارة في وضع التشغيل.</p>
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
						<p>بالمقارنة بالسيارة إل إف سوناتا السابقة، يتمتع الجزء الخلفي من سوناتا بالتصميم المطور بتصميم اكبر مع سمات ثلاثية الأبعاد بمواد لامعه.</p>
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
					<!-- <div class="btn_more">
						<img src='../images/button/btn_more.png' class="SteeringWheel">
						<img src='../images/button/btn_more.png' class="CenterFascia">
						<img src='../images/button/btn_more.png' class="SupervisionCluster">
					</div> -->
					<div class="textwrap">
						<p>هناك ثلاثة مناطق شملها التغيير في الأجزاء الداخلية للسيارة. هيا نلقي نظرة فاحصة على كل واحدة منها.</p>
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
							<h2>عجلة القيادة</h2>
							<p>يتم استخدام عجلة القيادة الرياضية المستديرة ثلاثية الأقطاب.</p>
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
							<h2>شاشة الملاحة والنظام الصوتي</h2>
							<p>يتم التأكيد على المميزات الرياضية والراقية من خلال تصميم ثلاثي الأبعاد بشكل عام، وأزرار  التحكم في الصوت فضيه اللون  ، مما يجسد صورة عالية للتقنية الراقية.</p>
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
							<h2>شاشة المعلومات والضبط 4.2 بوصة</h2>
							<p>مع الرسم التصويري البسيط والمحسن، تسهُل قراءة المعلومات الموجودة على لوحه المعلومات الوسطي.</p>
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
						<p>يسمح لك التصميم المريح بتجربة قيادة ممتعة من خلال تطبيق ميزات مريحة في المساحة الداخلية.</p>
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
						<p>يتوفر بالسيارة سوناتا بالتصميم المطور، عوامل سلامة السائق وراحته، خمسة أنظمة سلامة مضافة حديثا. دعونا نعرف ما هي.</p>
						<a href="#ADAScover2" class="btn_box">نبذة عنها</a>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
				</div>	
			</section>

			<script>
				$(document).ready(function(){
					$('#ADAScover2 .text_box .btn_box').each(function(){
						$(this).click(function(){
							cnt++;
							getClassName = $(this).attr('class').split(' ');
							var adasName = getClassName[1];
							$(this).css({'font-family':'HyundaiSansHeadRegular','font-size':'16px'});
							console.log(adasName);
							if(adasName == 'AEB'){
								$(this).text('فرامل التوقف التلقائي');
							}
							else if(adasName == 'HBA'){
								$(this).text('نظام الاضائة العالية التلقائي');
							}
							else if(adasName == 'ASCC'){
								$(this).text('نظام مثبت السرعه الذكي');
							}
							else if(adasName == 'BSD'){
								$(this).text('نظام تحذير النقاط العمياء');
							}
							else if(adasName == 'LDWS'){
								$(this).text('نظام تحذير الخروج عن المسار');
							}
							if(cnt == 5){
								$('#ADAScover2 .btn_nextPage').delay(500).fadeIn(500);
							}
						});
					});
								});
			</script>

			<section data-role="page" id="ADAScover2" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>هذه هي الميزات المتوفرة في سيارة إل إف سوناتا السابقة.</p>
						<div class="btn_box AEB">AEB</div>
						<div class="btn_box HBA">HBA</div>
						<div class="btn_box ASCC">ASCC</div>
						<div class="btn_box BSD">BSD</div>
						<div class="btn_box LDWS">LDWS</div>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#ADAS" class="btn_nextPage">تحقق من الأنظمة الخمسة الجديدة &nbsp;&nbsp;&gt;</a>
				</div>	
			</section>

			<section data-role="page" id="ADAS" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="btn_ADAS">
						<img src="../images/adas/btn_LKAS.png" class="LKAS" alt="">
						<img src="../images/adas/btn_DBL.png" class="DBL" alt="">
						<img src="../images/adas/btn_DAA.png" class="DAA" alt="">
						<img src="../images/adas/btn_AVM.png" class="AVM" alt="">
						<img src="../images/adas/btn_DRM.png" class="DRM" alt="">
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
							<h2>LKAS <span>(نظام المساعدة في الحفاظ على المسارات)</span></h2>
							<p>صدر LDWS (نظام تحذير الخروج من المسار) من سيارة إل إف سوناتا السابقة صوت تنبيه فقط عند الخروج من. ومع ذلك، فإن نظام LKASالحارة (نظام مساعدة الحفاظ على المسار) يكشف حارات الطريق من خلال الكاميرا الأمامية ويساعد في السيطرة على عجلة القيادة لضمان أن تبقى السيارة داخل المسار </p>
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
							<h2>DBL <span>(خاصية الانحناء الضوئي الديناميكي)</span></h2>
							<p>مع هذه الميزة، تتحرك أشعة المصابيح الأمامية في اتجاه عجلة القيادة لتوفير أفضل رؤية ممكنة في الليل، وخصوصا عند المنعطفات.</p>
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
							}?>
						</div>
						<div class="textwrap">
							<h2>DAA <span>(نظام تنبيه السائق)</span></h2>
							<p> يكشف عن نمط القيادة غير العادي بسبب التعب أو الإهمال، ويقترح على السائق أخذ قسط من الراحة أولاً.</p>
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
							<h2>AVM <span>(نظام المراقبة لمحيط السيارة)</span></h2>
							<p>كاميرات محيطية تكشف الأشياء المحيطة بالسيارة لضمان مواقف آمنة للسيارات.</p>
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
							<h2>DRM <span>(نظام المراقبة االخلفي عند القيادة)</span></h2>
							<p>من أجل المساعدة على التعرف على المسافة من السيارة التي في الوراء، يمكن مراقبة الرؤية الخلفية من خلال شاشة الملاحة الوسطي أثناء القيادة.</p>
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
						<p>من أجل منع الامور من الخروج فجأة عن السيطرة، وكذلك لمواصلة المساعدة  على القيادة الآمنة، تم تطبيق خمسة أنظمة جديدة للسلامة حديثًا.</p>
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
						<p>تحسين كفاءة الوقود</p>
						<p>12.3 <span style="font-size:32px;">كم / لتر</span></p>
						<p>(لمحرك جازولين 2 لتر مع إطارات 205/65 R16)</p>
					</div>
					<div class="imgwrap">
						<img src="../images/engine/graph.png" alt="fuel efficiency table">
					</div>
					<div class="textwrap">
						<p>يقدم المحرك ذو الشحن التوربيني  كفاءه في استهلاك الوقود بمقدار 180 كيلووات (عند 6000 لفة في الدقيقة) وعزم دوران 350 نانومتر (عند 1400 - 4000 لفة في الدقيقة).</p>
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
						<h2>محرك  ذو الشاحن التوربيني سعة 2 لتر</h2>
						<p>يقدم محرك  ذو الشاحن التوربيني سعة 2 لتر طاقة مرضية بمقدار 180 كيلووات (عند 6000 لفة في الدقيقة) و350 نانومتر (عند 1400 - 4000 لفة في الدقيقة).</p>
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
						<h2>مقبض TGS المميز في محرك ذو شاحن التوربيني</h2>
						<p> يتميز مقبض ناقل الحركة  الحصري التوربيني بتصميم متطور ورياضي.</p>
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
						<p> تم تطبيق ميزات جديدة لراحة السائق إلى سيارة سوناتا بالتصميم المطور.</p>
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
						<!-- <img src="../images/convenience/overlay_02.png" class="WirelessCharging" alt=""> -->
						<img src="../images/convenience/overlay_03.png" class="AirClean" alt="">
						<img src="../images/convenience/overlay_04.png" class="carplay" alt="">
					</div>
					<!-- <div class="btn_more">
						<img src='../images/button/btn_more.png' class="WirelessCharging">
						<img src='../images/button/btn_more.png' class="AirClean">
						<img src='../images/button/btn_more.png' class="carplay">
					</div> -->
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
							<h2>شحن لاسلكي للهواتف الذكية</h2>
							<p>تم تحسين راحة المستخدم من خلال لوحة شحن لاسلكية للهواتف الذكية تنبه الراكب عند ترك الهاتف في السيارة.</p>
						</div>
						<div class="textwrap text2">
							<h2>شاحن لاسلكي للهواتف الذكية</h2>
							<p>يتوفر بسيارة سوناتا بالتصميم المطور وظيفة شحن لاسلكية للهاتف الذكي ونظام تنبيه للهاتف الذكي المتروك بلا مراقبة عندما يغادر السائق السيارة.</p>
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
							<h2>وضع تنظيف الهواء</h2>
							<p>يستخدم وضع تنظيف الهواء مكيف الهواء فلتر عالي الأداء  القادر على امتصاص الغاز الأساسي وتصفية ذرات الغبار الصغيرة من خلال دوران الهواء داخل السيارة.</p>
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
							<p>يجعل تثبيت تطبيقات الهاتف الذكي للسيارة من الممكن استخدام وظائف الهاتف الذكي مثل الإنترنت التفاعلي، وخدمة الهاتف النقال، وخاصية التحكم عن بعد، والملاحة من خلال الصوت، والمكالمات الهاتفية على شاشة العرض بالسيارة.</p>
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
								<textarea placeholder="يُرجى المشاركة في اختبار" class="con_text"></textarea>
							</div>
						</div>
						<div class="btn_upload">
							<a href="#" id="form_sumit"><img src="../images/btn_upload_arabic.png" alt=""></a>
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
