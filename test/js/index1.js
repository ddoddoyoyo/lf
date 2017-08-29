var a = document.getElementById("mycurve");
var len = a.getTotalLength();
var carHeight = $("#car").height();
updatePosition = function(element, path, value){
	var car = $('.car', element);
	var obj = $('.roadBg').width();
	var svg = $(path).closest('svg');
	var svgWidth = svg.width();
	var svgHeight = svg.height();
	var pathLength = path.getTotalLength();
	var newpoint = path.getPointAtLength((pathLength * value) + (carHeight * .5));
	//var newpoint = path.getPointAtLength((pathLength * value) + 150);
	var middlepoint = path.getPointAtLength(pathLength * value);
	var bbox = path.getBBox();
	var newYPercent = ((newpoint.y - bbox.y) / (bbox.height)) * 100;
	var newXPercent = ((newpoint.x - bbox.x) / bbox.width) * 100;
	var carAngle = (Math.atan2(middlepoint.y - newpoint.y, middlepoint.x - newpoint.x) * 180 / Math.PI) + 90;
	var newYpx = newpoint.y;
	var newXpx = newpoint.x;

	/*console.log(svgWidth);
	console.log(svgHeight);
	console.log(pathLength);
	console.log("carHeight : "+ carHeight);
	console.log("scroll : "+ _scroll);
	console.log("newpoint.x : "+ newpoint.x);
	console.log("bbox.x : "+ bbox.x);
	console.log("bbox.width : "+ bbox.width);
	console.log("newpoint.x - bbox.x : "+ (newpoint.x - bbox.x));
	console.log("( -(obj / 2) + (newpoint.x - bbox.x) ) : "+ ( -(obj / 2) + (newpoint.x - bbox.x) ) );
	console.log("newXPercent : "+ newXPercent);*/
	console.log("===================================");

	$('.roadBg').css({
		//left:( -(obj / 2) + (newpoint.x - bbox.x)) - 50 +'px',
		/*left:( -(obj / 2) - (newpoint.x - bbox.x) + 500 ) + 'px',*/
		/*left:-( (svgWidth / 2) + (newXPercent * svgWidth / 100) ) + 'px',*/
		//top:-_scroll
	});

	car.css({
		//left : -(newpoint.x - bbox.x),
		left:(newpoint.x - bbox.x) * 4,
		transform:'rotate('+carAngle+'deg)'
	});
}

updatePosition($('#rocket'), document.getElementById("mycurve"), 0);

var _popup = false;
var _angle = 0;
var _angleBg = 0;
var _scroll;
var _bodyHeight = $('body').height();
var _bodyWidth = $('body').width();
var _scrollHeight = $('.scrollWrap').height();
var _left;
var _top;
var n = 0;
var _height = $(window).width() * 5000 / 640;
var _stop = _height - _scrollHeight - 100;
console.log(_stop);
$(window).on('scroll', function(e) {
	/*e.preventDefault();
	e.stopPropagation();
	return;*/
	onScroll(e);
});

function onScroll(e) {
	if (_popup) {
		$(window).scrollTop((_stop + (n*_height)));
		return;
	}


	if (_scroll < $(window).scrollTop())
		_scrollTo = 1;
	else
		_scrollTo = -1;

	_scroll = $(window).scrollTop();

	//var _tmp = (_scroll + (_scrollHeight * .33) + (carHeight / 2)) / (_height*7);
	var _tmp = (_scroll + 0) / (_height*7);

	updatePosition($('#rocket'), document.getElementById("mycurve"), _tmp);
	console.log(_scroll);
	console.log(_tmp);
	console.log(_scrollHeight);
	console.log(_stop);
	console.log(n);
	console.log(_stop + (n*_height));

	if (_scroll >= (_stop + (n*_height))) {
		$("#popup"+ (n+1)).fadeIn(500);
		$('body').css({'overflow':'hidden'});
		$(window).scrollTop((_stop + (n*_height)));
		$('#roadBg'+ (n+2)).css({'background-image':'url("./images/coss_'+ (n+2) +'.jpg")'});
		$('.popup').css({'width':$(window).width(), 'height':$(window).height()});
		_popup = true;
	}
	/*else if(_scroll >= (_stop + (n*_height)) && n == 1) {
		$("#popup2").fadeIn(500);
		$('body').css({'overflow':'hidden'});
		$(window).scrollTop((_stop + (n*_height)));
		$('#roadBg3').css({'background-image':'url("./images/2_3.jpg")'});
		$('.popup').css({'width':$(window).width(), 'height':$(window).height()});
		_popup = true;
	}
	else if(_scroll >= (_stop + (n*_height)) && n == 2) {
		$("#popup3").fadeIn(500);
		$(window).scrollTop((_stop + (n*_height)));
		$('body').css({'overflow':'hidden'});
		$('.popup').css({'width':$(window).width(), 'height':$(window).height()});
		_popup = true;
	}*/
}


$(document).ready(function() {
	$('.roadBg > div').css({'height':_height});
	$('#car').css({'width':_bodyWidth / 4, 'height':'auto'});
	//$('.roadBg').css({'height':_height});

	$(".popup").click(function(){
		$('body').css({'overflow-y':'auto', 'overflow-x':'hidden'});
		//$('body').css({'overflow':'auto'});
		$(".popup").fadeOut(500);
		_popup = false;
		n++;
	});
});

