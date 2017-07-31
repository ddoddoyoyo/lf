a = document.getElementById("mycurve");
len = a.getTotalLength();
updatePosition = function(element, path, value){
	/*
	element = jquery object;
	path = svg path element;
	value = from 0 - 1;
	*/
	var car = $('.car', element);
	/*var trailer = $('.trailer', element);*/
	//console.log(element);// #rocket
	var svg = $(path).closest('svg');
	var svgWidth = svg.width();
	var svgHeight = svg.height();
	var pathLength = path.getTotalLength();

	var newpoint = path.getPointAtLength((pathLength * value) + 50);
	var middlepoint = path.getPointAtLength(pathLength * value);
	var oldpoint = path.getPointAtLength((pathLength * value) - 50);

	var bbox = path.getBBox();
	//console.log(bbox);
	var newYPercent = ((newpoint.y - bbox.y) / (bbox.height)) * 100;
	var newXPercent = ((newpoint.x - bbox.x) / bbox.width) * 100;

	/*var trailerAngle = (Math.atan2(oldpoint.y - newpoint.y, oldpoint.x - newpoint.x) * 180 / Math.PI) - 90;*/
	var carAngle = (Math.atan2(middlepoint.y - newpoint.y, middlepoint.x - newpoint.x) * 180 / Math.PI) + 90;
	//var carAngle = (Math.atan2(middlepoint.y - newpoint.y, middlepoint.x - newpoint.x) * 180 / Math.PI) + 90;

	var newYpx = newpoint.y;
	var newXpx = newpoint.x;

	/*element.css({*/
	$('.roadBg').css({
		left:-(newXPercent)+'%',
		//top:-(newYPercent)+'%'
		top:-scroll
		/*,
		transform:'translateX(-50%) translateY(-50%) rotate('+newAngle+'deg)'
		*/
	});
	//console.log($('.roadBg').attr('left')+ "    " +$('.roadBg').attr('top')); 
	/*element.css({*/
	car.css({
		transform:'rotate('+carAngle+'deg)'
	});
	/*trailer.css({
		transform:'rotate('+trailerAngle+'deg)'
	});*/
//console.log(len, ui.value, newpoint.x,newpoint.y);
}

updatePosition($('#rocket'), document.getElementById("mycurve"), 0);

// --- jQueryUI Controls --- //

/*$("#slider").slider({
	range: false,
	min: 0,
	max: 1,
	step:0.001,
	slide: function ( event, ui ) {
		console.log(ui.value);
		updatePosition($('#rocket'), document.getElementById("mycurve"), ui.value);
		//adjust the timeline's progress() based on slider value
		//console.log( ui.value);
	}
});*/


var _angle = 0;
var _angleBg = 0;
var scroll;
/*var _height = $('body').height();*/
var _bodyHeight = $('.body').height();
var _height = $('.roadBg').height();
var _left;
var _top;
$(window).on('scroll',function() {
	if (scroll < $(this).scrollTop())
		_scrollTo = 1;
	else
		_scrollTo = -1;

	scroll = $(this).scrollTop();

	var _tmp = scroll / _height;
	updatePosition($('#rocket'), document.getElementById("mycurve"), _tmp);
	/*console.log("스크롤 : "+ scroll);
	console.log("높이 : "+ _height);
	console.log("스크롤 비율 : "+ _tmp);*/
	/*console.log(scroll);*/
});
