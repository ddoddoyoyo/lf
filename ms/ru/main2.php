<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	header("Content-Type: text/html; charset=UTF-8");

	if($_SESSION["HY_LMS_SEQ"] > 0 ){
	}else{
		$tools->JavaGo("/lf/ms/ru/");
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
		<style>
		.btn_back{left:3%;}
		.btn_nextPage{right:3%}
		.popLayer#pop_frontTurbo .textwrap, .popLayer#pop_DLOChromeMolding .textwrap, .popLayer#pop_TrunkOpenSwitch .textwrap,.popLayer#pop_LKAS .textwrap,.popLayer#pop_carplay .textwrap,.popLayer#pop_AirClean .textwrap{top:0;}
		.popLayer#pop_carplay .imgwrap{height: 	48%}
		#exSideLast .textwrap{top:0;}
		#exSideLast .textwrap{top:76%;}
		.popLayer#pop_TrunkOpenSwitch .textwrap h2,.popLayer#pop_LKAS .textwrap h2 span{letter-spacing: -1px}
		#engineCover .title p:nth-child(1){font-size: 19px}
		#engineCover .title p:nth-child(2){font-size: 52px}
		#ADAScover2 .btn_nextPage{line-height: normal;    height: 34px;    bottom: 4%;};
		</style>
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		 <script>
			//  $(document).on("mobileinit", function () {
			// 	 $.mobile.hashListeningEnabled = false;
			// 	 $.mobile.pushStateEnabled = false;
			// 	 $.mobile.changePage.defaults.changeHash = false;
			// });
		</script>
		<script src="../js/main.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/jquery.ui.touch-punch.min.js"></script>
		<script src="../common/js/common.js"></script>
		<script src="../js/device.js"></script>
		<script src="../js/menu_ru.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#upload').change(function(){
					readURL(this);
				});

				$('#exFront .btn_back').click(function(){
					location.href="main.php";
				})
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
						<p>Модель Sonata New Rise по сравнению с предыдущей моделью LF Sonata стала во многих отношениях более совершенной. Узнаем подробней.</p>
						<a href="#exFront" class="btn_box">СТАРТ</a>
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
						<img src="../images/button/btn_turbo.png" alt="">
					</div>
					<div class="textwrap">
						<p>В передней части было обновлено шесть элементов. Узнайте подробнее.</p>
					</div>
					<a href="javascript:;" class="btn_back" data-rel="back"><img src="../images/button/next btn_default.png" alt=""></a>
					<a href="#exFrontLast" class="btn_nextPage">
						<img src="../images/button/next btn_default.png" alt="">
					</a>

					<div class="popLayer" id="pop_cascadingGrille">
						<div class="imgwrap">
							<img src="../images/exterior/front/popup_01.png" alt="">
						</div>
						<div class="textwrap">
							<h2>Каскадная решетка радиатора</h2>
							<p class="text1">TОбъемная каскадная решетка радиатора Sonata New Rise — одно из основных отличий от LF.</p>
							<p class="text2">Разная толщина хромированных элементов посредине и снаружи подчеркивает динамичный спортивный образ.</p>
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
							<h2>Хромированный декоративный элемент</h2>
							<p>Хромированный декоративный элемент в нижней части бампера смещает фокус внимания вниз, благодаря чему посадка кузова выглядит более низкой.</p>
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
							<h2>Капот</h2>
							<p>Благодаря дизайну с выступающими линиями и низкому профилю весь силуэт приобретает пикантный вид.</p>
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
							<h2>Хромированные молдинги</h2>
							<p>Хромированные молдинги, обрамляющие фары, соединяют нижнюю часть фар с продольной боковой линией, что создает роскошный и уникальный образ.</p>
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
								<p>газоразрядные Лампы(LF)</p>
							</div>
						</div>
						<div class="textwrap">
							<h2>элегантные светодиодные Лампы</h2>
							<p>Ближний и дальний свет объединены в один «бифункциональный модуль фар», имеющий простой, но стильный дизайн.</p>
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
							<h2>Вертикальные дневные ходовые огни(LED)</h2>
							<p>Вертикально расположенные лампы дневных ходовых огней придают автомобилю спортивный вид и визуально делают его шире.</p>
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
							<h2>Боковые воздухоотводы на бампере</h2>
							<p>Вертикальные светодиодные дневные ходовые огни интегрированы в боковые воздухоотводы бампера и подчеркивают спортивный дизайн передней части автомобиля.</p>
						</div>
						<div class="textwrap text2">
							<h2>Сетчатая решетка радиатора</h2>
							<p>Большая черная каскадная решетка радиатора, выполненная в виде сетки, является еще одной отличительной особенностью New Rise Turbo.</p>
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
						<p>Если посмотреть на Sonata New Rise спереди, можно заметить, что по сравнению с предыдущей моделью LF Sonata, она имеет более энергичный и динамичный облик.</p>
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
						<img src="../images/button/btn_turbo.png" alt="">
					</div>
					<div class="textwrap">
						<p>Боковые стороны имеют три обновленных элемента. Узнайте о них подробнее.</p>
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
							<h2>Хромированные молдинги вокруг окон</h2>
							<p>Спортивный боковой профиль дополняют блестящая хромированная линия, обрамляющая окна и добавляющая объем задней стойке.</p>
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
							<h2>Молдинги порогов</h2>
							<p>Хромированные молдинги порогов являются еще одной отличительной особенностью боковой части автомобиля.</p>
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
							<h2>Молдинги порогов</h2>
							<p>Эксклюзивные цвета интерьера и темные глянцевые хромированные молдинги порогов модификации Turbo. (Только у 1.6 и 2.0 turbo)</p>
						</div>
						<div class="textwrap text2">
							<h2>Темные диски цвета «гиперсеребро»</h2>
							<p>Чтобы подчеркнуть высокую мощность модификации Turbo, установлены 18-дюймовые колесные диски цвета «Гипер серебро».</p>
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
						<p>Если посмотреть сбоку, можно заметить, что край капота стал ниже, а край багажника — выше. Благодаря этому автомобиль приобрел  образ устремленности и элегантности.</p>
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
						<img src="../images/button/btn_turbo.png" alt="">
					</div>
					<div class="textwrap">
						<p>Задняя часть имеет три обновленных элемента. Узнайте подробнее о них.</p>
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
							<h2>Задние комбинированные фонари</h2>
							<p>Горизонтально расположенные задние фонари имеют современный и стильный дизайн.</p>
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
							<h2>Задний бампер</h2>
							<p>Другой отличительной особенностью является смещенная в нижнюю часть бампера площадка для установки номерного знака, благодаря чему достигается простота в дизайне.</p>
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
							<h2>Встроенная в логотип Hyundai кнопка замка багажника</h2>
							<p>Для простоты дизайна задней части автомобиля и избавления от лишних деталей в верхней части логотипа скрыта кнопка, с помощью которой можно легко открыть багажник.</p>
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
							<h2>Задние светоотражатели</h2>
							<p>Вертикальные задние светоотражатели подчеркивают спортивный образ и визуально делают автомобиль более широким и приземистым.</p>
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
							<h2>Наконечники глушителя</h2>
							<p>Благодаря заднему диффузору с направляющими воздух ребрами и двум наконечникам глушителя, задняя часть автомобиля обращает на себя больше внимания во время движения.</p>
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
						<p>В отличие от предшествующей модели, LF Sonata, объемная и эффектная задняя часть Sonata New Rise имеет широкий приземистый вид.</p>
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
						<p>В интерьере обновлены три элемента. Узнайте подробнее.</p>
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
							<h2>Рулевое колесо</h2>
							<p>В новой модели установлено спортивное круглое трехспицевое рулевое колесо.</p>
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
							<h2>Центральная панель</h2>
							<p>Все элементы имеют объемный дизайн, подчеркивающий спортивность и добротность. Серебристые детали управления аудиосистемы также дополняют сбалансированный высокотехнологичный образ.</p>
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
							<h2>4,2-дюймовая панель приборов Supervision</h2>
							<p>Простая качественная графика обеспечивает удобство считывания информации.</p>
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
						<p>Эргономичный дизайн функциональных элементов в салоне автомобиля обеспечивает удобство во время движения.</p>
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
						<p>При проектировании Sonata New Rise большое внимание было уделено безопасности и комфорту водителя. В результате появились пять новых систем безопасности. Давайте выясним, какие.</p>
						<a href="#ADAScover2" class="btn_box">Подробно</a>
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
						<p>Это системы, имевшиеся у предыдущей модели — LF Sonata.</p>
						<div class="btn_box AEB">AEB</div>
						<div class="btn_box HBA">HBA</div>
						<div class="btn_box ASCC">ASCC</div>
						<div class="btn_box BSD">BSD</div>
						<div class="btn_box LDWS">LDWS</div>
					</div>
					<a href="#" class="btn_back" data-rel="back"><img src="../images/button/next btn_alt.png" alt=""></a>
					<a href="#ADAS" class="btn_nextPage" >Узнайть подробнее о 5-ти новых системах &nbsp;&nbsp;&gt;</a>
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
							<h2>LKAS <span>(система удержания полосы)</span></h2>
							<p>Система LDWS прошлой модели, LF Sonata, лишь издавала предупреждающий сигнал при отклонении от полосы движения. Однако новая LKAS (система удержания полосы) следит за полосой движения при помощи фронтальной камеры и помогает водителю контролировать рулевое колесо для предотвращения схода с нее</p>
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
							<h2>DBL <span>(динамическая подсветка поворотов)</span></h2>
							<p>Система направляет свет фар в ту же сторону, в какую водитель поворачивает рулевое колесо, что обеспечивает максимально хорошую видимость ночью, в том числе на поворотах, что особенно важно.</p>
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
							<h2>DAA <span>(система контроля за вниманием водителя)</span></h2>
							<p>Система распознает нестандартные действия, вызванные усталостью или неосторожностью, и предлагает водителю отдохнуть.</p>
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
							<h2>AVM <span>(система кругового обзора)</span></h2>
							<p>Система позволяет видеть пространство вокруг автомобиля, что обеспечивает более высокий уровень безопасности во время парковки.</p>
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
							<h2>DRM <span>(монитор заднего вида)</span></h2>
							<p>Во время движения система позволяет водителю наблюдать за ситуацией надисплее плавающего типа определяет дистанцию до позади идущего автомобиля.</p>
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
						<p>Автомобиль оснащен пятью новыми системами безопасности, которые позволяют предотвратить выход ситуации из-под контроля и обеспечивают более высокий уровень безопасности во время движения.</p>
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
						<p>Улучшенная топливная экономичность</p>
						<p>12.3 <span>км/л</span></p>
						<p>(модификация с бензиновым двигателем объемом 2.0 и шинами 205/65 R16)</p>
					</div>
					<div class="imgwrap">
						<img src="../images/engine/graph.png" alt="fuel efficiency table">
					</div>
					<div class="textwrap">
						<p>2-литровый двигатель GDI с турбонаддувом имеет мощность 180 кВт (при 6000 об/мин) и крутящий момент 350 Н·м (при 1400–4000 об/мин).</p>
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
						<p>2-литровый двигатель GDI с турбонаддувом имеет мощность 180 кВт (при 6000 об/мин) и крутящий момент 350 Н·м (при 1400–4000 об/мин).</p>
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
						<h2>Эксклюзивный рычаг переключения передач в модификации Turbo</h2>
						<p>Эксклюзивный рычаг переключения передач в модификации Turbo имеет изящный спортивный дизайн.</p>
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
						<p>Sonata New Rise также имеет новые функции для комфорта водителя.</p>
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
							<h2>Беспроводная зарядка смартфона</h2>
							<p>Коврик для беспроводной зарядки и функция напоминания о забытом в салоне смартфоне обеспечивают дополнительное удобство для водителя и пассажиров.</p>
						</div>
						<div class="textwrap text2">
							<h2>Беспроводная зарядка смартфона</h2>
							<p>Модель Sonata New Rise имеет функцию беспроводной зарядки смартфонов. Кроме того, система напомнит об оставленном в салоне смартфоне выходящему из машины водителю.</p>
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
							<h2>Система очистки воздуха</h2>
							<p>Система очистки воздуха обеспечивает принудительную циркуляцию воздуха в салоне автомобиля и прогоняет его через высокоэффективный фильтр кондиционера, способный удерживать основные виды газа и микроскопические частицы пыли.</p>
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
							<h2>Системы Apple CarPlay и Android Auto</h2>
							<p>Установка специальных приложений позволит с дисплея автомобиля управлять разными функциями смартфона, в том числе пользоваться  интернетом, мобильными службами, дистанционным управлением и навигационной системой с голосовыми подсказками, а также совершать телефонные звонки.</p>
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
