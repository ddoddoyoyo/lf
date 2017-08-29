$(document).ready(function() {
	$('html, body').scrollTop(0);
	$('.roadBg').css({'left':'-358px', 'top':0});
});

var _angle = 0;
var _angleBg = 0;
var scroll;
var _left;
var _top;
$(window).on('scroll',function(){
	if (scroll < $(this).scrollTop())
		_scrollTo = 1;
	else
		_scrollTo = -1;
	scroll = $(this).scrollTop();
	var obj = $(".roadBg").offset();

	$('.scrollCnt').text(scroll);
	$('.angleCnt').text(_angle);
	if (scroll > 0 && scroll < 250) {
		_angle = 0;
		_left = -358;
		_top = -(scroll);
	}
	else if (scroll > 250 && scroll < 1160) {
		if (scroll < 1050)
			_angle = _angle + (0.06 * _scrollTo);
		else
			_angle = _angle - (0.1 * _scrollTo);

		_left = -(358 - (110 / (1160 - 250) * (scroll - 250))) ;

		_top = -(scroll);
	}
	else if (scroll > 1160 && scroll < 3300) {
		_angle = 0;
		_left = -358 + 110;
		_top = -(scroll);
	}
	else if (scroll > 3300 && scroll < 4255) {
		if (scroll < 3777)
			_angle = _angle - (0.1 * _scrollTo);
		else
			_angle = _angle + (0.1 * _scrollTo);

		_left = -(248 + (110 / (4255 - 3300) * (scroll - 3300))) ;

		_top = -(scroll);
	}
	else if (scroll > 4255 && scroll < 5500) {
		_angle = 0;
		_left = -358;
		_top = -(scroll);
	}
	else if (scroll > 5560 && scroll < 8670) {
		//_angle = Math.sin(parseInt((5560 - scroll) / ((8670 - 5560) / 90))) * 100;
		if (scroll < (5560+777)) {
			_angle = Math.sin((scroll - 5560) / ((7114 - 5560) / 100) * 0.01) * -100;
			_left = -(358 + (1500 / (7114 - 5560) * (scroll - 5560))) ;
			//_left = -357 + ((1500 / 2) / 90) * _angle;
		}
		else if (scroll < (5560+777)) {
			_angle = Math.sin((scroll - 5560) / ((7114 - 5560) / 100) * 0.01) * -100;
			_left = -(358 + (1500 / (7114 - 5560) * (scroll - 5560))) ;
			//_left = -357 + ((1500 / 2) / 90) * _angle;
		}
		else {
			_angle = Math.sin((7114 - scroll) / ((7114 - 5560) / 100) * 0.01) * -100;
			_left = -(358 + (1500 / (7114 - 5560) * (scroll - 5560))) ;
			//_left = -(358 + (1500 / (7114 - 5560) * (scroll - 5560))) ;
			//_left = -357 + ((1500 / 2) / 90) * (Math.sin((scroll - 5560) / ((7114 - 5560) / 100) * 0.01) * -100);
		}

		console.log("1 : "+ (scroll - 5560) / ((7114 - 5560) / 100) * 0.01);
		console.log("2 : "+ (7114 - scroll) / ((7114 - 5560) / 100) * 0.01);
		console.log(_angle - 45);
		//console.log("사인값 : "+ Math.sin((scroll - 5560) / ((7114 - 5560) / 100)));




		/*if (scroll > 5560 && scroll < 5819) {
			_angle = -15;
			_left = -(358 + (53 / (5819 - 5560) * (scroll - 5560))) ;
		}
		else if (scroll > 5819 && scroll < 6078) {
			_angle = -30;
			_left = -(358 + 53 + (164 / (6078 - 5819) * (scroll - 5819))) ;
		}
		else if (scroll > 6078 && scroll < 6347) {
			_angle = -45;
			_left = -(358 + (853 / (6347 - 6078) * (scroll - 6078))) ;
		}
		else if (scroll > 6347 && scroll < 6596) {
			_angle = -30;
			_left = -(358 + (853 / (6596 - 6347) * (scroll - 6347))) ;
		}
		else if (scroll > 6596 && scroll < 6819) {
			_angle = -15;
			_left = -(358 + (853 / (6819 - 6596) * (scroll - 6596))) ;
		}
		else if (scroll > 6819 && scroll < 7114) {
			_angle = 0;
			_left = -(358 + (853 / (7114 - 6819) * (scroll - 6819))) ;
		}*/


		/*if (scroll > 5500 && scroll < 6277)
			_angle = _angle - (_tmp * _scrollTo);
		else if (scroll > 6277 && scroll < 7054)
			_angle = _angle + (_tmp * _scrollTo);
		else if (scroll > 7054 && scroll < 7831)
			_angle = _angle - (_tmp * _scrollTo);
		else
			_angle = _angle + (_tmp * _scrollTo);
			*/

		if (scroll > 5560 && scroll < 7114)
			_left = -(358 + (853 / (7114 - 5560) * (scroll - 5560))) ;
		else if (scroll > 7114 && scroll < 8670)
			_left = -(358 - (853 / (8670 - 7114) * (scroll - 7114))) ;

		_top = -(scroll);
	}
	else {
		_angle = 0;
		_left = -358;
		_top = -(scroll);
	}

	rotateObj('.roadwrap img', _angle);
	$('.roadBg').css({'left':_left});
	$('.roadBg').css({'top':_top});

	/*if(scroll >0 && scroll <2200){
		$('.roadwrap img').css({'left':+ (54 - (scroll / 100))+'%'});
	}*/




// 	else if(scroll >2000 && scroll <3000){
// 		$('.roadwrap img').css({'left':+ (55 - (scroll / 100) + 10)+'%'});
// 	}
});

function rotateObj(obj, angle) {
	$(obj).css({
		'transform':'rotate('+ angle +'deg)', '-moz-transform':'rotate('+ angle +'deg)', '-webkit-transform':'rotate('+ angle +'deg)', '-o-transform':'rotate('+ angle +'deg)'
	});
}
