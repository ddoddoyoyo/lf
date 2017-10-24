var button;			// = document.querySelector(".accel");
var engineAudio;			// = document.querySelector("audio#lka_sound");
var lkaAudio;			// = document.querySelector("audio#lka_sound");
var fcaAudio2;			// = document.querySelector("audio#lka_sound");
var fcaAudio3;			// = document.querySelector("audio#lka_sound");
var rearCameraMovie;	// = document.querySelector("audio#lka_sound");
var svg = '';
var svgWidth = '';
var svgHeight = '';
var pathLength = '';
var path = '';
var newpoint = '';
var middlepoint = '';
var bbox = '';
var carAngle = '';
var spppp = 0;

$(document).ready(function() {
	path = document.getElementById("carPath");
	svg = $(path).closest('svg');
	svgWidth = svg.width();
	svgHeight = svg.height();
	pathLength = path.getTotalLength();
	bbox = path.getBBox();

	//속도계 - 실서버에서 뺴기
	$('.gaugeWrap').on('click', function() {
		testdrive.carMove.timeScale(2).play();
	});

	$.event.special.tap.tapholdThreshold = 250;
	$('body').bind('scroll touchmove', handler);
	testdrive.init();
	//testdrive.load();

});

var handler = function(e) {
	e.preventDefault();
}

var testdrive = {
	svgWidth : 96.497,
	svgHeight : 13508.5,
	first : true,
	carHeight : 0,
	popupStat : false,
	bodyWidth : $('body').width(),
	scrollHeight : $('.scrollWrap').height(),
	n : 0,
	bgStopPosition : 0,
	bgHeight : 10000,	//포인트 간 거리 = BG 이미지 높이
	totalBgHeight : 100000,	//총 배경 길이 ㅠ
	pointCnt : 10,	//포인트 갯수
	bgWidth : 640,
	bodyHeight : 0,
	orgBodyHeight : 0,
	accumBodyHeight : 0,		//누적 body height
	point : 0,
	scrollAmnt : 0,
	popupLength : 0,
	popupSwipe : 0,
	onInit : false,
	cloudCnt : 10,
	correction : 90,
	_truck : false,
	lka : false,
	duration : 6,		//속도
	durationAlt : .5,		//감속속도
	carShake : null,
	carMove : null,
	carGauge : null,
	scrollAble : true,
	audioLoad : false,
	carShaking : false,
	carEffect : false,
	carSpeed : {'score':0},
	targetSpeed : 80,
	preTargetSpeed : 0,
	oldTargetSpeed : 0,
	cornering : false,
	driveMode1 : false,
	driveMode2 : false,
	trafficLight : false,
	daw : 0,
	pcMobileLeft : 3,
	deviceAdj : 0,

	init : function() {
		this.scrollAmnt = 0;

		if (ios) {
			button = document.querySelector(".accel");
			engineAudio = $('#engine_sound').get(0);
			lkaAudio = document.querySelector("audio#lka_sound");
			fcaAudio2 = document.querySelector("audio#fca_sound_2");
			fcaAudio3 = document.querySelector("audio#fca_sound_3");
			rearCameraMovie = document.querySelector("video#rear_camera");
		}
		else {
			button = document.querySelector(".accel");
			engineAudio = document.querySelector("audio#engine_sound");
			lkaAudio = document.querySelector("audio#lka_sound");
			fcaAudio2 = document.querySelector("audio#fca_sound_2");
			fcaAudio3 = document.querySelector("audio#fca_sound_3");
			rearCameraMovie = document.querySelector("video#rear_camera");
		}

		this.pcMobileLeft = (!mobile) ? 2.5 : 3;

		this.bodyHeight = this.orgBodyHeight = $(window).width() * this.bgHeight / this.bgWidth;
		this.oppoWidth = this.bodyWidth * .205;
		this.oppoHeight = this.scrollHeight * .224;
		this.point = this.bodyHeight - this.scrollHeight - this.correction;
		$('.roadBg .bg').css({'height':this.bodyHeight});
		$('svg').css({'height':this.bodyHeight * 10, 'width':this.svgWidth * this.bodyHeight * 10 / this.svgHeight});	//코나만 특이하게 -1
		$('#car, .loadingText').css({'width':this.bodyWidth, 'height':this.scrollHeight});

		$(".point .pointBtn a").click(function(e) {
			e.preventDefault();
			testdrive.showPopup();
		});

		$(".point .pointClose").click(function(e) {
			e.preventDefault();
			testdrive.closePoint();
		});

		$(".popup .popupClose").click(function(e) {
			e.preventDefault();
			testdrive.closePopup();
		});

		this.setCloud();	//구름

		$(window).on('resize', function(e) {
			$('.popup').css({'width':$(window).width(), 'height':$(window).height() * 1.2});
			$('.scrollWrap').css({'height':$(window).height() * 1.2});
		});

		$('#page8 .start').click(function(){ //testdrive start page
			// $('#page8 .glow').hide();
			 $('#page8 .start >img').prop('src', '../images/testdrive/002_00_03_btn_01.png');
			// $('#page8 .start >img').animate({'width':'145px', 'height':'145px'},500);
			// $('#page8 .start >img').animate({'width':'130px', 'height':'130px'},100);
			// $('#page8 .bg img.bgLast').fadeIn(500);
			// $('#page8 .title').delay(500).fadeOut(500);
			if (!testdrive.audioLoad) {
				engineAudio.play();
				lkaAudio.play();
				fcaAudio2.play();
				fcaAudio3.play();
				testdrive.audioLoad = true;
				//rearCameraMovie.play();
			}
			setTimeout(function(){
				$('#page8').fadeOut(500);
			},500);
		});
		$('.accel').on('taphold', function(e) {
			testdrive.onEvent();
		});

		$('.accel').on('touchend mouseup', function(e) {
			if (testdrive.scrollAble && testdrive.carMove) {
				testdrive.carMove.timeScale(0.125);
				testdrive.targetSpeed = 10;
				testdrive.tweenSpeed();
			}
			engineAudio.pause();
			engineAudio.currentTime = 0;
			engineAudio.volume = 0;
			$('#engine_audio').prop('muted', true);
		});

		this.getPopupCount(true);	//팝업 카운트 최초 호출

		testdrive.deviceAdj = (/samsungbrowser/i.test(navigator.userAgent.toLowerCase())) ? -0.08 : 0;
	},
	onEvent : function() {
		$('#engine_sound').prop('muted', false);
		engineAudio.currentTime = 0;
		engineAudio.volume = 1;
		engineAudio.play();
		//$('#engine_sound')[0].play();

		if (testdrive.scrollAble) {
			testdrive.bgStopPosition = (testdrive.n == 9) ? .86 : .89 ;

			if (testdrive.carMove) {
				testdrive.carMove.timeScale(1).play();
			}
			else {
				testdrive.carMove = TweenLite.to($('.roadBg'), testdrive.duration, {scrollTo:{y:testdrive.accumBodyHeight + (testdrive.bodyHeight * (testdrive.bgStopPosition))}, ease:Power0.easeInOut, onUpdate:testdrive.scrolling, onComplete:function() {
						if (testdrive.n == 9)
							//return;
							testdrive.setParking();
						else
							testdrive.getPoint();
					}
				});
				if (testdrive.n == 0)
					testdrive.carMove.timeScale(1.25).play();
			}

			// if (testdrive.n == 0)
			// 	testdrive.targetSpeed = 100;
			// else
				testdrive.targetSpeed = 80;
				testdrive.tweenSpeed();

			// 신호등 켜있으면 끈다
			if (testdrive.trafficLight) {
				testdrive.removeCarEffect();
			}
		}
	},
	load : function() {
		//$('.ui-loader, .loading').hide();
	},
	firstJob : function() {
		if (testdrive.onInit)
			return;

		$('.loadingText').remove();
		/*$('.carFinger').hide(function() {
			$(this).remove();
		});*/
		$('.carGlow').each(function() {
			$(this).fadeOut(function() {
				$(this).remove();
			});
		});
		$('.scrollWrap').addClass('scrollWrapBgHide');
		$('.gaugeWrap').fadeIn();
		$('.accel').removeClass('blink1');

		testdrive.getNextPoint();
	},
	updatePosition : function(value) {
		newpoint = path.getPointAtLength((pathLength * value) + 1);
		middlepoint = path.getPointAtLength(pathLength * value);
		carAngle = (Math.atan2(middlepoint.y - newpoint.y, middlepoint.x - newpoint.x) * 180 / Math.PI) + 90;


		$('#car').css({
			//left:(newpoint.x - bbox.x) - ($(window).width() * .185),
			//left:(2.5 * (newpoint.x - bbox.x)),
			//left:(testdrive.pcMobileLeft * (newpoint.x - bbox.x)) - ($(window).width() * .3),
			left : (((newpoint.x - bbox.x) / bbox.width) - 0.38 + testdrive.deviceAdj) * 100 +'%',
			transform:'rotate('+ carAngle +'deg)'
		});
		$('.roadBg').css({
			//left:(newpoint.x - bbox.x) - ($(window).width() * .23)
		});
	},
	scrolling : function(e) {
		testdrive.scrollAmnt = $('.roadBg').scrollTop();

		if (testdrive.scrollAmnt > 10 && !testdrive.onInit) {
			testdrive.firstJob();
			testdrive.onInit = true;
		}

		if (testdrive.popupStat) {
			return;
		}

		testdrive.updatePosition( ((testdrive.scrollAmnt + (testdrive.scrollHeight * .4)) / (testdrive.orgBodyHeight * 10)) );
		//engine
		if (testdrive.n == 0) {
			if (testdrive.scrollAmnt >= (testdrive.accumBodyHeight + (testdrive.bodyHeight * .35))) {
				testdrive.setCarEffect('engine');
			}
		}
		//drm
		if (testdrive.n == 1 && testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .35)) && !testdrive._oppo) {
			testdrive.setOpponentCar('middle', 'down');
			testdrive.setCarEffect('drm');
		}
		//ascc
		if (testdrive.n == 2 && testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .35)) && !testdrive._oppo) {
			testdrive.setOpponentCar('middle', 'top');
			testdrive.setCarEffect('signal', 'front');
			testdrive._carEffect = true;
		}
		//bsd
		if (testdrive.n == 3 && testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .35)) && !testdrive._oppo) {
			testdrive.setOpponentCar('right', 'down');
			testdrive.setCarEffect('signal', 'rear_right');
			testdrive._carEffect = true;
		}
		//aeb truck effect
		if (testdrive.n == 4 && testdrive.scrollAmnt >= (testdrive.accumBodyHeight + (testdrive.bodyHeight * .75))) {
			testdrive.setTruck();
		}
		//lkas
		if (testdrive.n == 5) {
			if(testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .13)) && testdrive.scrollAmnt <= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .2))){
				testdrive._carEffect = true;
				//testdrive.setCarEffect('signal', 'front_right');
				testdrive.setCarEffect('lkas');
			}
			else if(testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .3))){
				testdrive._carEffect = true;
				//testdrive.setCarEffect('signal', 'front_right');
				testdrive.setCarEffect('lkas');
			}
			else{
				testdrive.removeCarEffect();
			}

		}


		if (testdrive.n == 7  && testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .7)) && !testdrive._carEffect) {
			testdrive.setCarEffect('light');
			testdrive._carEffect = true;
		}
	},
	getNextBg : function() {
		$('#roadBg'+ (testdrive.n + 2)).css({'background-image':'url("../images/testdrive/course_'+ (testdrive.n + 2) +'.jpg")'});
	},
	getPoint : function() {
		testdrive.fadeVolume(engineAudio, '#engine_audio');

		if (testdrive.n == 0) {
			$('.sign').fadeOut(function() {
				$(this).remove();
			});
		}
		else if (testdrive.n == 1) {
			$('.signBottom').fadeOut(function() {
				$(this).remove();
			});
		}
		else if (testdrive.n == 4) {
			testdrive.removeTruck();
		}
		testdrive.targetSpeed = 0;
		testdrive.tweenSpeed();

		testdrive.closeNextPoint();

		/*testdrive.getNextBg();*/
		testdrive.carMove = null;
		testdrive.scrollAble = false;
		var pointTime;
		if (testdrive.n == 4)
			pointTime = 750;//delay
		else
			pointTime = 0;
		$('.accel').fadeOut();
		$(".point .el").empty();
		$(".point .pointTitle").html(language.point[this.n].title);
		$(".point .pointDesc").html(language.point[this.n].desc);
		$(".point").delay(pointTime).css({'bottom':-$(".point").height()}).show().animate({'bottom':0, 'opacity':1});
		testdrive.popupStat = true;
		this.getPopup();
	},
	closePoint : function() {
		testdrive.targetSpeed = 0;
		testdrive.tweenSpeed();

		$(".point").animate({'bottom':-$(".point").height(), 'opacity':0}, function() {
			testdrive.popupStat = false;
			//$('body').unbind('scroll touchmove', handler);
			$('.cloud').css({'display':'block'});
			$(".popup .popupDesc").css({'left':0});
			$(".popup .el").empty();
			$(this).fadeOut();
		});

		//누적 body height 더하기
		testdrive.accumBodyHeight += testdrive.bodyHeight;

		//car effect remove
		if(testdrive.n==0){
			testdrive.removeCarEffect();
		}
		else if (testdrive.n == 1 || testdrive.n == 3) {	//효과 없애기
			testdrive.removeOpponentCar('down');
			testdrive.removeCarEffect();
			testdrive._carEffect = false;
		}
		else if (testdrive.n == 2) {	//효과 없애기
			testdrive.removeOpponentCar('top');
			testdrive.removeCarEffect();
			testdrive._carEffect = false;
		}
		else if (testdrive.n == 4) {	//효과 없애기
			testdrive.removeCarEffect();
			testdrive.removeTruck();
			testdrive._carEffect = false;
		}
		else if (testdrive.n == 5) {	//효과 없애기
			testdrive.removeCarEffect();
			testdrive._carEffect = false;
		}

		if (testdrive.n == 9) {	//시승신청 넘어가기
			// if (url)
			// 	location.href = "./applicationIntro.php";
			// // else if (dealerUrl)
			// // 	location.href = "./applicationDealer.php";
			// else
				parent.location.href = "./applicationIntro.php";
		}

		testdrive.scrollAble = true;
		$('.accel').fadeIn();

		testdrive.n++;

		if (testdrive.n < testdrive.pointCnt)
			testdrive.getNextPoint();
	},
	getNextPoint : function() {
		/*$(".nextPoint").css({'top':-$(".nextPoint").height()}).show().animate({'top':0, 'opacity':1}, function() {
			$(this).delay(1000).animate({'top':-$(".nextPoint").height(), 'opacity':0}, function() {
				testdrive.scrollAble = true;
			});
			$('.accel').delay(1000).fadeIn();
		});
		$(".nextPoint .nextPointTitle").html(language.point[this.n].title);*/
		$(".nextPoint").css({'top':-$(".nextPoint").height()}).show().animate({'top':'2%', 'opacity':1});
		//$(".nextPoint .nextPointTitle").html(language.point[this.n].title.replace(/(<([^>]+)>)/gi, ""));
		if (this.n == 0 || this.n == 6 || this.n == 8){
			$(".nextPoint .nextPointTitle").html(language.point[this.n].title.replace(/(<([^>]+)>)/gi, "")).parent().removeClass("doubleline");
		}
		else{
			$(".nextPoint .nextPointTitle").html(language.point[this.n].title).parent().addClass("doubleline");
			if(this.n == 4)
				$(".nextPoint .nextPointTitle .pointTitleSub").addClass('letterSpacing');
		}
	},
	closeNextPoint : function() {
		$(".nextPoint").animate({'top':-$(".nextPoint").height(), 'opacity':0}).fadeOut();
		$(".nextPoint .nextPointTitle").empty();
	},
	getPopup : function() {
		//$('.cloud').css({'z-index':1});
		$('.popup').css({'width':$(window).width(), 'height':$(window).height() * 1.2});
		$(".popup .el").empty();
		testdrive.popupSwipe = 0;
		this.popupLength = language.popup[this.n].length;
		$(".popup .popupDesc").css({'width':this.popupLength * this.bodyWidth * .9});

		for (var i=0; i<this.popupLength; i++) {
			$(".popup .popupDesc").append('<div>'+ language.popup[this.n][i].desc +'</div>');
			$(".popup .popupNavi").append('<span>+</span>');
		}

		if (this.popupLength == 1)
			$(".popup .popupNaviWrap").hide();
		else
			$(".popup .popupNaviWrap").show();

		$(".popup .popupDesc > div").css({'width':this.bodyWidth * .9});
		$(".popup .popupNavi > span:first-child").addClass('on');
	},
	showPopup : function() {
		testdrive.getPopupCount();	//팝업 카운트
		$(".popup").fadeIn(500);
		$(".popup .popupWrap").css({'margin-top':(this.scrollHeight - $(".popup .popupWrap").height()) / 2});
		$(".popup .popupDesc").css({'height':$(".popup .popupDesc > div:nth-child(1)").height()});
		$(".popup .popupWrap").animate({'margin-top':(testdrive.scrollHeight - $(".popup .popupWrap").height()) / 2}, 500);
		$('.popupNaviPrev').css({'opacity':0});
		$('.popupNaviNext').css({'opacity':1});

		$(".popup .popupNaviPrev, .popup .popupNaviNext").on('click', function(e) {
			e.preventDefault();
			if (!testdrive.swipeStat) {
				if ($(this)[0].className == 'popupNaviNext' && testdrive.popupSwipe < testdrive.popupLength - 1)
					testdrive.popupSwipe++;
				else if ($(this)[0].className == 'popupNaviPrev' && testdrive.popupSwipe > 0)
					testdrive.popupSwipe--;
				else
					return;

				if (testdrive.popupSwipe == 0) {
					$('.popupNaviPrev').animate({'opacity':0});
					$('.popupNaviNext').animate({'opacity':1});
				}
				else if (testdrive.popupSwipe == testdrive.popupLength - 1) {
					$('.popupNaviPrev').animate({'opacity':1});
					$('.popupNaviNext').animate({'opacity':0});
				}
				else {
					$(".popupNaviPrev, .popupNaviNext").animate({'opacity':1});
				}

				$(".popup .popupDesc").animate({'left':-testdrive.bodyWidth * .9 * testdrive.popupSwipe, 'height':$(".popup .popupDesc > div:nth-child("+ (testdrive.popupSwipe + 1) +")").height()}, 500, function() {
					$(".popup .popupNavi > span").removeClass('on');
					$(".popup .popupNavi > span:nth-child("+ (testdrive.popupSwipe + 1) +")").addClass('on');
					testdrive.swipeStat = false;
					$(".popup .popupWrap").animate({'margin-top':(testdrive.scrollHeight - $(".popup .popupWrap").height()) / 2}, 500);
				});

				testdrive.swipeStat = true;
			}
		});
	},
	// 팝업 카운트 ajax
	getPopupCount : function(bool) {
		$.ajax({
			url : (bool) ? "/lf/td/common/get_like_action.php" : "/lf/td/common/like_action.php",
			type: "POST",
			dataType: "json",
			data:{
				DEALER_ID: dealerId
				, DEALER_REGION: dealerRegion
				, DEALER_COUNTRY: dealerCountry
				, PART: testdrive.n
				, BRAND: brand
				, CAR_GB: carGb
			},
			success : function(json) {
				console.log(json);
				if (json.CNT == 0)
					$('.pointHeart').text(0);
				else {
					var reg = /(^[+-]?\d+)(\d{3})/;
					var num = (json.CNT + '');
					while (reg.test(num)) num = num.replace(reg, '$1' + ',' + '$2');
					$('.pointHeart').text(num);
				}
			},
			error : function(xhr, status, error) {
				console.log(error);
			}
		});
	},
	closePopup : function() {
		$(".popup").fadeOut(500, function() {
			$(".popup .popupNavi > span").removeClass('on');
			$(".popup .popupNavi > span:nth-child(1)").addClass('on');
			$(".popup .popupDesc").css({'left':0});
			testdrive.popupSwipe = 0;
		});
	},
	setCloud : function() {
		var heightPcnt, cloudNo, cloudMove;
		for (var i=1; i<this.cloudCnt; i++) {
			cloudMove = Math.floor(Math.random() * 2) + 1;
			cloudNo = Math.floor(Math.random() * 3) + 1;
			heightPcnt = Math.floor(Math.random() * 95) + 1 + 5;
			$('.roadBg').append('<div class="cloud cloud'+ cloudNo +' cloudMove'+ cloudMove +'" style="top:'+ heightPcnt +'%"></div>');
			//result = Math.floor(Math.random() * 10) + 1;
		}
	},
	setFlag : function() {
		$('.bg').each(function() {
			$(this).append('<div class="flag bottom_bounce"></div>');
		}).find('.flag').css({'height':this.bodyWidth*.5});
	},
	setCarEffect : function(val, pos) {
		if (testdrive.carEffect)
			return;

		var img;
		if (val == 'engineStart') {		// engine start
			img = $('<img />', {
				id : 'carEffect',
				class : 'carEffect sign blink1',
				src : '../images/testdrive/sign_02.png'
			}).appendTo($('.scrollWrap')).fadeIn();
			testdrive.carEffect = true;
		}
		else if (val == 'engine') {		// engine
			testdrive.carEffect = true;
			img = $('<img />', {
				id : 'carEffect',
				class : 'img100 carEffect blink1',
				src : '../images/testdrive/car_engine.png'
			}).appendTo($('#car'));
			$('.scrollWrap').append('<img src="../images/testdrive/engine.gif" class="sign">').find('.sign').fadeIn();
		}
		else if (val == 'drm') {
			testdrive.carEffect = true;
			$('.scrollWrap').append('<img src="../images/testdrive/drm_img.png" class="signBottom">').find('.signBottom').fadeIn();
		}
		else if (val == 'turnsignal') {		// 7 dct
			$('.turnsignal').remove();
			img = $('<img />', {
				id : 'carEffect',
				class : 'img100 carEffect blink2 turnsignal turnsignal'+ pos,
				src : '../images/testdrive/turnsignal_'+ pos +'.png'
			}).appendTo($('#car'));
			testdrive.carEffect = true;
		}
		else if (val == 'turn') {		//cornering performance
			$('.turn').remove();
			img = $('<img />', {
				id : 'carEffect',
				class : 'img100 carEffect blink2 turn turn'+ pos,
				//src : '../images/testdrive/turn_'+ pos +'.png'
				src : '../images/testdrive/cornering_arrow.png'
			}).appendTo($('#car'));
			testdrive.carEffect = true;
		}
		else if (val == 'shake') {		// electric 4wd system
			if (!testdrive.carShaking) {
				$('.car').prop('src', '../images/testdrive/car_4wd.png');
				$('.offroadWrap').show();
				testdrive.carShake = TweenLite.to($('.offroadWrap'), 0.1, {y:2, ease:Power0.easeInOut, onComplete:function() {
						testdrive.carShake.reverse();
					}, onReverseComplete:function() {
						testdrive.carShake.restart();
					}
				});
				testdrive.carShaking = true;
			}
		}
		else if (val == 'lamp') {
			testdrive.scrollAble = false;
			testdrive.carMove.pause();
			testdrive.trafficLight = true;
			testdrive.targetSpeed = 0;
			testdrive.tweenSpeed();

			img = $('<img />', {
				id : 'carEffect',
				class : 'carEffect lamp',
				src : '../images/testdrive/lamp_1.png'
			}).appendTo($('.scrollWrap')).fadeIn(function() {
				//$('#carEffect').delay(2000).prop('src', '../images/testdrive/lamp_2.png');
				setTimeout(function() {
					$('#carEffect').prop('src', '../images/testdrive/lamp_2.png');
				}, 1000);
				setTimeout(function() {
					$('#carEffect').prop('src', '../images/testdrive/lamp_3.png');
					testdrive.scrollAble = true;
				}, 2000);
			});
		}
		else if (val == 'enlarge') {
			testdrive.carEffect = true;
			TweenLite.to($('.car'), 1, {scale:1.25});
		}
		else if (val == 'ensmall') {
			testdrive.carEffect = true;
			testdrive.targetSpeed = 10;
			testdrive.tweenSpeed();
			testdrive.carMove.timeScale(0.25);
			TweenLite.to($('.car'), 7, {scale:1});

			$('.scrollWrap').append('<img src="../images/testdrive/sign_03.png" class="sign blink1">').find('.sign').fadeIn();
		}
		else if (val == 'aeb' || val =='lkas') {
			testdrive.carEffect = true;
			img = $('<img />', {
				id : 'carEffect',
				class : 'img100 carEffect',
				src : '../images/testdrive/rador.png'
			}).appendTo($('#car'));
		}

		else if (val == 'light') {
			var carNight = $('<img />', {
				class : 'carNight',
				src : '../images/testdrive/car_night.png'
			}).appendTo($('#car'));
			$('.car').animate({'opacity':0});
			$('.carNight').animate({'opacity':1});
			img = $('<img />', {
				id : 'carEffect',
				class : 'img100',
				src : '../images/testdrive/headlight_00.png'
			}).appendTo($('#car')).css({'opacity':0}).animate({'opacity':1});
		}
		else if (val == 'signal') {
			img = $('<img />', {
				id : 'carEffect',
				class : 'blink1 img100 carEffect',
				src : '../images/testdrive/signal_'+ pos +'.png'
			}).appendTo($('#car'));
			testdrive.carEffect = true;
		}
	},
	removeCarEffect : function(val) {
		$('.carEffect, .sign, .signBottom').fadeOut(function() {
			$(this).remove();
		});
		$('.car').fadeIn();
		testdrive.carEffect = false;
	},
	setTruck : function() {
		if (!testdrive._truck) {
			$('#roadBg5').append('<div class="truck"><img src="../images/testdrive/truck1.png"></div>');
			$('.truck').animate({'left':0});
			testdrive._truck = true;
			testdrive.setCarEffect('aeb');
			//testdrive.setCarEffect('signal', 'front_left');
		}
	},
	removeTruck : function() {
		$('#roadBg5 .truck').animate({'left':'-5%', 'opacity':0}, function() {
			$(this).remove();
		});
		testdrive.removeCarEffect();
	},
	/*setParking : function() {
		testdrive.carMove = TweenLite.to($('#car'), 2, {left:'50%', top:'15%', onComplete:function() {
			testdrive.getPoint();
		}});
	},*/
	setParking : function() {
		console.log("parking");
		testdrive.carMove = TweenLite.to($('#car'), 2, {left:'60%', rotation:-90, transformOrigin:"50% 43%", onComplete:function() {
			$('.accel').css({'background-image':'url(../images/testdrive/btn_rear.png)'}).addClass('blink1').on('click taphold touchstart', function() {
				$(this).removeClass('blink1');
				//$('.movieWrap').css({'height':$(window).height()}).fadeIn();
				TweenLite.to($('#car'), 4, {left:((!mobile) ? '-5%' : '-5%'), onComplete:function() {
					testdrive.getPoint();
					/*$('.movieWrap').fadeOut(function() {
						testdrive.getPoint();
						$(this).remove();
					});*/
				}});
			});
		}});
	},
	setOpponentCar : function(loc, dir) {
		testdrive._oppo = true;
		var _left;
		if (loc == 'left')
			_left = '25%';
		else if (loc == 'right')
			_left = '62%';
		else if (loc == 'middle')
			_left = '41.5%';
		var img = $('<img />', {
			id : 'opponentCar',
			class : 'opponentCar',
			src : '../images/testdrive/car_oppo.png'
		}).css({
			'width':testdrive.oppoWidth,
			'height':testdrive.oppoHeight,
			'top':((dir == 'down') ? -(testdrive.oppoHeight) : testdrive.scrollHeight),
			'left':_left
		}).appendTo($('#car')).animate({
			'top':((dir == 'down') ? '-4%' : '62%')
		}, ((dir == 'down') ? 1000 : 1500));
	},
	removeOpponentCar : function(dir) {
		$('#opponentCar').animate({
			'top':((dir == 'down') ? -(testdrive.oppoHeight) : testdrive.scrollHeight)
		}, 1000, function() {
			testdrive._oppo = false;
			$(this).remove();
		});
	},
	tweenSpeed : function() {
		testdrive.carGauge = null;
		testdrive.carGauge = TweenLite.to(testdrive.carSpeed, testdrive.durationAlt, { score:testdrive.targetSpeed, onUpdate:function() {
				$('.gaugeText > span').text(testdrive.carSpeed.score.toFixed(0));
				if (testdrive.carSpeed.score.toFixed(0) > 0 && testdrive.carSpeed.score.toFixed(0) <= 10)
					$('.gaugeText > span, .gaugeMode > span').removeClass().addClass('gaugeWhite');
				else if (testdrive.carSpeed.score.toFixed(0) > 10 && testdrive.carSpeed.score.toFixed(0) <= 80)
					$('.gaugeText > span, .gaugeMode > span').removeClass().addClass('gaugeGreen');
				else if (testdrive.carSpeed.score.toFixed(0) > 80)
					$('.gaugeText > span, .gaugeMode > span').removeClass().addClass('gaugeRed');
			}, ease:Linear.easeNone});
		testdrive.preTargetSpeed = testdrive.targetSpeed;
	},
	fadeVolume : function(obj, id) {
		/*engineAudio.pause();
		engineAudio.currentTime = 0;
		engineAudio.volume = 0;
		$('#engine_audio').prop('muted', true);
		return;*/

		//재생 문제로 사용하지 않음
		var factor = 0.1;
		var speed = 50;
		if (obj.volume > factor) {
			setTimeout(function() {
				obj.volume -= factor;
				testdrive.fadeVolume(obj, id);
			}, speed);
		} else {
			$(id).prop('muted', true);
			obj.pause();
			obj.currentTime = 0;
			obj.volume = 1;
			//(typeof(callback) !== 'function') || callback();
		}
	}
}
