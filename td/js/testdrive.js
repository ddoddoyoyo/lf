$(document).ready(function() {
	testdrive.init();
});

var handler = function(e) { 
	e.preventDefault();
}
//$(window).bind('touchmove', handler);
//$(window).unbind('touchmove', handler);

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


	init : function() {
		this.onInit = true;
		$('html, body').animate({'scrollTop':0}, function() {
			testdrive.onInit = false;
		});
		$(window).scrollTop(0);

		this.bodyHeight = $(window).width() * this.bgHeight / this.bgWidth;
		this.point = this.bodyHeight - this.scrollHeight - this.correction;
		$('.roadBg .bg').css({'height':this.bodyHeight});
		$('#car').css({'width':this.bodyWidth, 'height':this.scrollHeight});
		/*$('.menuWrap').css({'width':this.bodyWidth * 0.09, 'height':this.bodyWidth * 0.09});
		$('.pointClose').css({'width':this.bodyWidth * 0.068, 'height':this.bodyWidth * 0.068});*/

		$(".point .pointBtn").click(function(e) {
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
		//this.setFlag();	//포인트 깃발
		//파도 적용
		$('#roadBg2 .wave').each(function() {
			$(this).delay($(this).index() * 500).addClass('wave'+ ($(this).index()+1));
		});

		this.updatePosition(document.getElementById("mycurve"), 0);

		$(window).on('scroll', function(e) {
			if (!this.first)
				testdrive.scrolling(e);
		});

		$(window).on('resize', function(e) {
			$('.popup').css({'width':$(window).width(), 'height':$(window).height() * 1.2});
			$('.scrollWrap').css({'height':$(window).height() * 1.2});
		});

		$('.loading').delay(500).fadeOut(500, function() {
			$('.loading').remove();
			testdrive.load();
		});

		this.getPopupCount(true);	//팝업 카운트 최초 호출
	},
	load : function() {
		$('.carGlow').each(function() {
			$(this).fadeIn(function() {
				$(this).addClass('carGlowOn');
			});
		});
	},
	firstJob : function() {
		$('.carGlow').each(function() {
			$(this).fadeOut(function() {
				$(this).remove();
			});
		});
		$('.scrollWrap').addClass('scrollWrapBgHide');
		$('#car > p, .carFinger').fadeOut(function() {
			$(this).remove();
		});
	},
	updatePosition : function(path, value) {
		var svg = $(path).closest('svg');
		var svgWidth = svg.width();
		var svgHeight = svg.height();
		var pathLength = path.getTotalLength();
		var newpoint = path.getPointAtLength((pathLength * value) + 50);
		var middlepoint = path.getPointAtLength(pathLength * value);
		var bbox = path.getBBox();
		//var carAngle = (Math.atan2(middlepoint.y - newpoint.y, middlepoint.x - newpoint.x) * 180 / Math.PI) + 90;
		var carAngle = (Math.atan2(middlepoint.y - newpoint.y, middlepoint.x - newpoint.x) * 180 / Math.PI) + 90;

		$('.roadBg').css({
		});

		$('#car').css({
			left:(newpoint.x - bbox.x) - 25,
			transform:'rotate('+ carAngle +'deg)'
		});
	},
	scrolling : function(e) {
		this.scrollAmnt = $(window).scrollTop();

		if (this.scrollAmnt > 20) {
			testdrive.firstJob();
		}

		if (this.onInit || testdrive.onInit)
			return;
		
		if (testdrive.popupStat) {
			/*$(b)*/
			/*document.body.addEventListener('touchmove', function(e) {
				e.preventDefault();
			}, false);*/
			/*e.stopPropagation();
			e.preventDefault();
			$(window).scrollTop((this.point + (this.n * this.bodyHeight)));*/
			return;
		}

		var _tmp = (this.scrollAmnt + (this.scrollHeight * .3)) / (this.bodyHeight * this.pointCnt);
		this.updatePosition(document.getElementById("mycurve"), _tmp);

		console.log('this.scrollAmnt : '+ this.scrollAmnt);
		console.log('this.point : '+ this.point);
		console.log('this.n : '+ this.n);
		console.log('this.bodyHeight : '+ this.bodyHeight);
		console.log('this : '+ (this.point + (this.n * this.bodyHeight - this.correction)));
		console.log('this : '+ (this.point + (this.n * this.bodyHeight * .8)));


		if (this.scrollAmnt > (this.point + (this.n * this.bodyHeight * .8))) {
			this.getNextBg();
		}

		if (this.scrollAmnt >= (this.point + (this.n * this.bodyHeight - this.correction))) {
			this.getPoint();
		}
	},
	getNextBg : function() {
		$('#roadBg'+ (this.n + 2)).css({'background-image':'url("../images/testdrive/course_'+ (this.n + 2) +'.jpg")'});
	},
	getPoint : function() {
		$('body').css({'overflow':'hidden'});
		$('body').bind('touchmove', handler);
		$(".point .el").empty();
		$(".point .pointTitle").html(language.point[this.n].title);
		$(".point .pointDesc").html(language.point[this.n].desc);
		$(".point").css({'bottom':-$(".point").height()}).show().animate({'bottom':0, 'opacity':1});
		//$(window).scrollTop((this.point + (this.n * this.bodyHeight - this.correction)));
		$(window).scrollTop(this.scrollAmnt);
		testdrive.popupStat = true;
		this.getPopup();

		$('#roadBg'+ (this.n + 1) +' .flag').fadeOut();
	},
	closePoint : function() {
		testdrive.popupStat = false;
		$('body').unbind('touchmove', handler);
		/*$('body').on('touchmove', function(e) {
			alert(1);
			testdrive.scrolling();
		});*/
		$('body').css({'overflow':'auto'});
		//$('.roadBg').css({'height':'auto'});
		$('.cloud').css({'display':'block'});
		$(".point").animate({'bottom':-$(".point").height(), 'opacity':0}).fadeOut();
		$(".popup .popupDesc").css({'left':0});
		$(".popup .el").empty();
		$('.cloud').css({'z-index':7});
		testdrive.n++;
	},
	getPopup : function() {
		$('.cloud').css({'z-index':1});
		$('.popup').css({'width':$(window).width(), 'height':$(window).height() * 1.2});
		$(".popup .el").empty();
		testdrive.popupSwipe = 0;
		this.popupLength = language.popup[this.n].length;
		$(".popup .popupDesc").css({'width':this.popupLength * this.bodyWidth * .9});

		for (var i=0; i<this.popupLength; i++) {
			$(".popup .popupDesc").append('<div>'+ language.popup[this.n][i].desc +'</div>');
			$(".popup .popupNavi").append('<span>+</span>');
		}
		$(".popup .popupDesc > div").css({'width':this.bodyWidth * .9});
		$(".popup .popupNavi > span:first-child").addClass('on');
	},
	showPopup : function() {
		testdrive.getPopupCount();	//팝업 카운트
		$(".popup").fadeIn(500);
		$(".popup .popupWrap").css({'margin-top':(this.scrollHeight - $(".popup .popupWrap").height()) / 2});

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
			heightPcnt = Math.floor(Math.random() * 100) + 1;
			$('.roadBg').append('<div class="cloud cloud'+ cloudNo +' cloudMove'+ cloudMove +'" style="top:'+ heightPcnt +'%"></div>');
			//result = Math.floor(Math.random() * 10) + 1;
		}
	},
	setFlag : function() {
		$('.bg').each(function() {
			$(this).append('<div class="flag bottom_bounce"></div>');
		}).find('.flag').css({'height':this.bodyWidth*.5});
	},
	setCarEffect : function(val, pos='') {
		var img;
		if (val == 'light') {
			img = $('<img />', {
				id : 'carEffect',
				class : 'img100',
				src : '../images/testdrive/headlight_00.png'
			}).appendTo($('#car'));
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
		$('#carEffect').fadeOut(function() {
			(this).remove();
		});
	},
	setOpponentCar : function(loc, dir) {
		var carWidth = this.bodyWidth * .298;
		var carHeight = this.scrollHeight * .345;
		console.log(carWidth);
		console.log(carHeight);
		var _left;
		if (loc == 'left')
			_left = '3%';
		else if (loc == 'right')
			_left = '68%';
		else if (loc == 'middle')
			_left = '37%';
		var img = $('<img />', {
			id : 'opponentCar',
			class : 'opponentCar',
			src : '../images/testdrive/car_oppo.png'
		}).css({
			'width':carWidth,
			'height':carHeight,
			'top':((dir == 'down') ? -(carHeight) : this.scrollHeight),
			'left':_left
		}).appendTo($('#car')).delay(500).animate({
			'top':((dir == 'down') ? '-20%' : '70%')
			//'left':_left
		}, 2000);
	},
	removeOpponentCar : function(dir) {
		var carWidth = this.bodyWidth * .298;
		var carHeight = this.scrollHeight * .345;
		$('#opponentCar').animate({
			'top':((dir == 'down') ? -(carHeight) : this.scrollHeight)
		}, 2000, function() {
			$(this).remove();
		});
	}
}
/*document.body.addEventListener('touchmove',
    function(event) {
        //if($(document).height() <= $(window).height()){
            event.preventDefault();
        //}
    }, false);
*/
