$(document).ready(function() {
	$.event.special.tap.tapholdThreshold = 250;
	document.body.scrollTop = 0;
	document.documentElement.documentElement = 0;
	$('body').css({'overflow':'hidden'});
	testdrive.init();
	testdrive.load();
});

var duration = 3;
var engineAudio;			// = document.querySelector("audio#lka_sound");
var lkaAudio;			// = document.querySelector("audio#lka_sound");
var fcaAudio2;			// = document.querySelector("audio#lka_sound");
var fcaAudio3;			// = document.querySelector("audio#lka_sound");
var rearCameraMovie;	// = document.querySelector("audio#lka_sound");
function scrollToTop() {
	//alert(1);
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
	$('html, body').css({'scrollTop':0});
	$(window).scrollTop(0);
	//testdrive.scrollAmnt = 0;
	//testdrive.n = 0;
}

$('body').on('beforeunload', scrollToTop);
window.onbeforeunload = scrollToTop();


var handler = function(e) { 
	e.preventDefault();
}
//$(window).bind('touchmove', handler);
//$(window).unbind('touchmove', handler);

var tag;
var carMove;
var testdrive = {
	first : true,
	carHeight : 0,
	popupStat : false,
	bodyWidth : $('body').width(),
	scrollHeight : $('.scrollWrap').height(),
	n : 0,
	bgHeight : 5000,	//포인트 간 거리 = BG 이미지 높이
	pointCnt : 10,	//포인트 갯수
	bgWidth : 640,
	bodyHeight : 0,
	point : 0,
	scrollAmnt : 0,
	popupLength : 0,
	popupSwipe : 0,
	onInit : false,
	cloudCnt : 10,
	correction : 80,
	_oppo : false,
	scrollAble : true,
	oppoWidth : 0,
	oppoHeight : 0,
	_carEffect : false,


	init : function() {
		this.scrollAmnt = 0;

		/*console.log(document.body.scrollTop);
		console.log(document.documentElement.scrollTop);
		console.log($(window).scrollTop());*/

		button = document.querySelector(".accel");
		engineAudio = document.querySelector("audio#engine_sound");
		lkaAudio = document.querySelector("audio#lka_sound");
		fcaAudio2 = document.querySelector("audio#fca_sound_2");
		fcaAudio3 = document.querySelector("audio#fca_sound_3");
		rearCameraMovie = document.querySelector("video#rear_camera");

		if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0 || $(window).scrollTop() > 0) {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
			$(window).scrollTop(0);
		}

		this.bodyHeight = $(window).width() * this.bgHeight / this.bgWidth;
		this.oppoWidth = this.bodyWidth * .205;
		this.oppoHeight = this.scrollHeight * .224;
		this.point = this.bodyHeight - this.scrollHeight - this.correction;
		$('.roadBg .bg').css({'height':this.bodyHeight});
		$('#Layer_1').css({'height':this.bodyHeight * this.pointCnt, 'width':this.bodyHeight});
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

		$('.accel').on('taphold', function(e) {
			if (testdrive.scrollAble) {
				if (carMove)
					carMove.timeScale(1).play();
				else
					carMove = TweenLite.to($('.roadBg'), duration, {scrollTo:{y:testdrive.n * testdrive.bodyHeight + (testdrive.bodyHeight * .78)}, ease:Power2.easeInOut, onUpdate:testdrive.scrolling});
			}
		});

		$('.accel').on('touchend blur focusout mouseup', function(e) {
			if (testdrive.scrollAble) {
				carMove.timeScale(0.33333);
			}
		});

		this.getPopupCount(true);	//팝업 카운트 최초 호출
	},
	load : function() {
		/*console.log('loading?');*/
		$('.carGlow').each(function() {
			$(this).fadeIn(function() {
				$(this).delay(250).addClass('carGlowOn');
			});
		});
		$('.ui-loader').hide();
	},
	firstJob : function() {
		$('.loadingText p').remove();
		$('.carFinger').hide(function() {
			$(this).remove();
		});
		$('.carGlow').each(function() {
			$(this).fadeOut(function() {
				$(this).remove();
			});
		});
		$('.scrollWrap').addClass('scrollWrapBgHide');
		$('.ui-loader').hide();
	},
	updatePosition : function(path, value) {
		var svg = $(path).closest('svg');
		var svgWidth = svg.width();
		var svgHeight = svg.height();
		var pathLength = path.getTotalLength();
		var newpoint = path.getPointAtLength((pathLength * value) + 50);
		var middlepoint = path.getPointAtLength(pathLength * value);
		var bbox = path.getBBox();
		var carAngle = (Math.atan2(middlepoint.y - newpoint.y, middlepoint.x - newpoint.x) * 180 / Math.PI) + 90;

		$('#car').css({
			left:(newpoint.x - bbox.x) - ($(window).width() * .23),
			transform:'rotate('+ carAngle +'deg)'
		});
	},
	scrolling : function(e) {
		testdrive.scrollAmnt = $('.roadBg').scrollTop();

		if (testdrive.scrollAmnt > 20) {
			testdrive.firstJob();
		}

		if (testdrive.onInit || testdrive.onInit)
			return;
		
		if (testdrive.popupStat) {
			return;
		}

		var _tmp = (testdrive.scrollAmnt + (testdrive.scrollHeight * .6)) / (testdrive.bodyHeight * testdrive.pointCnt);
		/*console.log(_tmp);
		console.log('testdrive.n : '+ testdrive.n);
		console.log('testdrive.scrollAmnt : '+ testdrive.scrollAmnt);
		console.log('testdrive.point : '+ testdrive.point);
		console.log('testdrive.pointCnt : '+ testdrive.pointCnt);
		console.log('testdrive.scrollHeight : '+ testdrive.scrollHeight);
		console.log('testdrive.bodyHeight : '+ testdrive.bodyHeight);
		console.log('testdrive : '+ (testdrive.n * testdrive.bodyHeight + (testdrive.bodyHeight * .77)));*/

		testdrive.updatePosition(document.getElementById("mycurve"), _tmp);

		if (testdrive.scrollAmnt > testdrive.n * testdrive.bodyHeight + (testdrive.bodyHeight * .6)) {
			testdrive.getNextBg();
		}

		var _tmp1 = testdrive.n * testdrive.bodyHeight + (testdrive.bodyHeight * .77);
		if (testdrive.scrollAmnt >= _tmp1) {
			console.log('scrollamnt : '+ _tmp1);
			//$(window).scrollTop(_tmp1);
			//document.body.scrollTop = _tmp1;
			//document.documentElement.scrollTop = _tmp1;
			testdrive.getPoint();
		}

		if ((testdrive.n == 1 || testdrive.n == 3) && testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .65)) && !testdrive._oppo) {
			if (testdrive.n == 1)
				testdrive.setOpponentCar('middle', 'down');
			else if (testdrive.n == 3) {
				testdrive.setOpponentCar('right', 'down');
				testdrive.setCarEffect('signal', 'rear_right');
				testdrive._carEffect = true;
			}
		}
		if (testdrive.n == 2 && testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .45)) && !testdrive._oppo) {
			testdrive.setOpponentCar('middle', 'top');
		}

		if (testdrive.n == 7 && testdrive.scrollAmnt >= (testdrive.bodyHeight * (testdrive.n) + (testdrive.bodyHeight * .5)) && !testdrive._carEffect) {
			testdrive.setCarEffect('light');
			testdrive._carEffect = true;
		}
	},
	getNextBg : function() {
		$('#roadBg'+ (testdrive.n + 2)).css({'background-image':'url("../images/testdrive/course_'+ (testdrive.n + 2) +'.jpg")'});
	},
	getPoint : function() {
		testdrive.getNextBg();
		carMove = null;
		testdrive.scrollAble = false;
		var pointTime = (testdrive.n == 2) ? 500 : 0;
		$('.accel').fadeOut();
		$('body').css({'overflow':'hidden'});
		$('body').bind('scroll touchmove', handler);
		$(".point .el").empty();
		$(".point .pointTitle").html(language.point[this.n].title);
		$(".point .pointDesc").html(language.point[this.n].desc);
		$(".point").delay(pointTime).css({'bottom':-$(".point").height()}).show().animate({'bottom':0, 'opacity':1});
		testdrive.popupStat = true;
		this.getPopup();
	},
	closePoint : function() {
		$(".point").animate({'bottom':-$(".point").height(), 'opacity':0}, function() {
			testdrive.popupStat = false;
			$('body').unbind('scroll touchmove', handler);
			//$('body').css({'overflow':'auto'});
			$('.cloud').css({'display':'block'});
			$(".popup .popupDesc").css({'left':0});
			$(".popup .el").empty();
			$(this).fadeOut();
		});//.fadeOut();


		if (testdrive.n == 1 || testdrive.n == 3) {	//효과 없애기
			testdrive.removeOpponentCar('down');
			if (testdrive.n == 3) {
				testdrive.removeCarEffect();
				testdrive._carEffect = false;
			}
		}
		else if (testdrive.n == 2) {	//효과 없애기
			testdrive.removeOpponentCar('top');
		}

		if (testdrive.n == 9) {	//시승신청 넘어가기
			location.href = "./applicationIntro.php";
		}

		testdrive.n++;
		if (testdrive.n < testdrive.pointCnt)
			testdrive.getNextPoint();
	},
	getNextPoint : function() {
		$(".nextPoint").css({'bottom':-$(".nextPoint").height()}).show().animate({'bottom':0, 'opacity':1}, function() {
			$(this).delay(1000).animate({'bottom':-$(".nextPoint").height(), 'opacity':0}, function() {
				testdrive.scrollAble = true;
			});
			$('.accel').delay(1000).fadeIn();
		});
		$(".nextPoint .nextPointTitle").html(language.point[this.n].title);
	},
	closeNextPoint : function() {
		$(".nextPoint").animate({'bottom':-$(".nextPoint").height(), 'opacity':0}).fadeOut();
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

		$(".popup .popupNaviPrev, .popup .popupNaviNext").on('click', function(e) {
			e.preventDefault();
			if (!testdrive.swipeStat) {
				if ($(this)[0].className == 'popupNaviNext' && testdrive.popupSwipe < testdrive.popupLength - 1)
					testdrive.popupSwipe++;
				else if ($(this)[0].className == 'popupNaviPrev' && testdrive.popupSwipe > 0)
					testdrive.popupSwipe--;
				else
					return;

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
		$(".popup").fadeOut(500);
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
		var img;
		if (val == 'light') {
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
				class : 'blink1 img100',
				src : '../images/testdrive/signal_'+ pos +'.png'
			}).appendTo($('#car'));
		}
	},
	removeCarEffect : function(val) {
		$('#carEffect').fadeOut('slow', function() {
			(this).remove();
		});
	},
	setOpponentCar : function(loc, dir) {
		testdrive._oppo = true;
		var _left;
		if (loc == 'left')
			_left = '25%';
		else if (loc == 'right')
			_left = '64%';
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
			'top':((dir == 'down') ? '-4%' : '55%')
		}, ((dir == 'down') ? 1000 : 1500));
	},
	removeOpponentCar : function(dir) {
		$('#opponentCar').animate({
			'top':((dir == 'down') ? -(testdrive.oppoHeight) : testdrive.scrollHeight)
		}, 1000, function() {
			testdrive._oppo = false;
			$(this).remove();
		});
	}
}
