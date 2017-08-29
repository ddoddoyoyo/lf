$(document).ready(function() {

	//setTimeout(function(){
	/*	var t = performance.timing;
		var s =  (t.loadEventEnd - t.navigationStart) / 100;
		//$('.loding_bar .londing2').css({transform:'rotate('+ carAngle +'deg)'}, s);
		console.log(t.loadEventEnd);
		console.log(t.navigationStart);
		console.log(s);
		$('#car1').rotate({
			duration:s,
			angle: 0,
			//center: ["50%", "50%"],
			animateTo:180
		});*/


		/*setTimeout(function(){
			$.mobile.changePage("#page2");
		}, s-1);*/
	//},0);

	testdrive.init();

});

var testdrive = {
	carHeight : 0,
	popupStat : false,
	bodyWidth : $('body').width(),
	scrollHeight : $('.scrollWrap').height(),
	n : 0,
	bgHeight : 5000,	//포인트 간 거리 = BG 이미지 높이
	pointCnt : 7,	//포인트 갯수
	bgWidth : 640,
	bodyHeight : 0,
	point : 0,
	scrollAmnt : 0,
	popupLength : 0,
	popupSwipe : 0,
	onInit : false,
	cloudCnt : 10,

	init : function() {
		this.onInit = true;
		$('html, body').animate({'scrollTop':0}, function() {
			testdrive.onInit = false;
		});

		this.bodyHeight = $(window).width() * this.bgHeight / this.bgWidth;
		this.point = this.bodyHeight - this.scrollHeight - 100;
		$('.roadBg .bg').css({'height':this.bodyHeight});
		//$('#car').addClass('blink');
		$('#car').css({'width':this.bodyWidth, 'height':this.scrollHeight});
		//$('#car').css({'width':this.bodyWidth / 4});

		$(".point .pointBtn a").click(function(e) {
			e.preventDefault();
			testdrive.showPopup();
		});

		$(".point .pointClose a").click(function(e) {
			e.preventDefault();
			$('body').css({'overflow-y':'auto', 'overflow-x':'hidden'});
			$(".point").animate({'bottom':-$(".point").height(), 'opcaity':0}).hide();
			$(".popup .popupDesc").css({'left':0});
			$(".popup .el").empty();
			testdrive.popupStat = false;
			testdrive.n++;
		});

		$(".popup .popupClose a").click(function(e) {
			e.preventDefault();
			$(".popup").fadeOut(500);
		});

		this.setCloud();	//구름
		this.setFlag();	//포인트 깃발

		this.updatePosition(document.getElementById("mycurve"), 0);

		$(window).on('scroll', function(e) {
			testdrive.scrolling(e);
		});

		$('.loading').delay(500).fadeOut(500);
		this.getOpponentCar('', 'down');
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
		if (this.onInit)
			return;

		if (testdrive.popupStat) {
			e.stopPropagation();
			e.preventDefault();
			$(window).scrollTop((this.point + (this.n * this.bodyHeight)));
			return;
		}

		if (this.scrollAmnt < $(window).scrollTop())
			this._scrollTo = 1;
		else
			this._scrollTo = -1;

		this.scrollAmnt = $(window).scrollTop();
		/*console.log(this.scrollAmnt);
		console.log(this.carHeight);*/
		var _tmp = (this.scrollAmnt + (this.scrollHeight * .3)) / (this.bodyHeight * this.pointCnt);
		this.updatePosition(document.getElementById("mycurve"), _tmp);

		if (this.scrollAmnt > (this.point + (this.n * this.bodyHeight * .9))) {
			this.getNextBg();
		}

		if (this.scrollAmnt >= (this.point + (this.n * this.bodyHeight))) {
			this.getPoint();
		}
	},
	getNextBg : function() {
		$('#roadBg'+ (this.n + 2)).css({'background-image':'url("./images/coss_'+ (this.n + 2) +'.jpg")'});
	},
	getPoint : function() {
		$(".point .el").empty();
		$(".point .pointTitle").html(language.point[this.n].title);
		$(".point .pointDesc").html(language.point[this.n].desc);
		$(".point").css({'bottom':-$(".point").height()}).show().animate({'bottom':0, 'opacity':0.7});
		$('body').css({'overflow':'hidden'});
		$(window).scrollTop((this.point + (this.n * this.bodyHeight)));
		this.popupStat = true;
		this.getPopup();

		$('#roadBg'+ (this.n + 1) +' .flag').fadeOut(function() {
			$('.popup').css({'width':$(window).width(), 'height':$(window).height()});
		});
	},
	getPopup : function() {
		$(".popup .el").empty();
		testdrive.popupSwipe = 0;
		this.popupLength = language.popup[this.n].length;
		$(".popup .popupDesc").css({'width':this.popupLength * this.bodyWidth});

		for (var i=0; i<this.popupLength; i++) {
			$(".popup .popupDesc").append('<div>'+ language.popup[this.n][i].desc +'</div>');
			$(".popup .popupNavi").append('<span>+</span>');
		}
		$(".popup .popupDesc > div").css({'width':this.bodyWidth});
		$(".popup .popupNavi > span:first-child").addClass('on');
	},
	showPopup : function() {
		$(".popup").fadeIn(500);

		$(".popup .popupNaviPrev, .popup .popupNaviNext").on('click', function(e) {
			//console.log($(this)[0].className);
			if (!testdrive.swipeStat) {
				if ($(this)[0].className == 'popupNaviNext' && testdrive.popupSwipe < testdrive.popupLength - 1)
					testdrive.popupSwipe++;
				else if ($(this)[0].className == 'popupNaviPrev' && testdrive.popupSwipe > 0)
					testdrive.popupSwipe--;

				$(".popup .popupNavi > span").removeClass('on');
				$(".popup .popupNavi > span:nth-child("+ (testdrive.popupSwipe + 1) +")").addClass('on');

				$(".popup .popupDesc").animate({'left':-testdrive.bodyWidth * testdrive.popupSwipe}, function() {
					testdrive.swipeStat = false;
				});

				testdrive.swipeStat = true;
			}
		});
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
	getOpponentCar : function(loc, dir) {
		var carWidth = this.bodyWidth * .298;
		var carHeight = this.scrollHeight * .345;
		console.log(carWidth);
		console.log(carHeight);
		var img = $('<img />', {
			id : 'opponentCar',
			class : 'opponentCar',
			src : './images/car_oppo.png'
		}).css({
			'width':carWidth,
			'height':carHeight,
			'top':((dir == 'down') ? -(carHeight) : (carHeight + bodyHeight)),
			'left':((loc == 'left') ? '3%' : '68%')
		}).appendTo($('#car'));
	}
}
