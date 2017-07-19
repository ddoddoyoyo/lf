var totalSlides,slideWidth;
var pos;
$(document).ready(function(){
	$('#contentPage').on({
		"pagebeforeshow": function(){
			$('.popLayer#scroll').show();
			$('.popLayer#exteriorMov').hide();
		},
		"pageshow" : function(){
			$('.popLayer#scroll').delay(1000).fadeOut(500);
		}
	});

	$('.sub_cover#exterior .btn_play').click(function(){
		$('.sub_cover#exterior .popLayer#exteriorMov').fadeIn(500);
		$('.sub_cover#exterior video')[0].play();
	});

	$('.sub_cover#exterior .popLayer .btn_close').click(function(){
		$('.sub_cover#exterior .popLayer').hide();
		$('video').each(function(){
			this.pause();
		});
	});

	$('#fullpage').fullpage({
		verticalCentered: false,
		'onLeave' :function(anchorLink, index){//beforePage
			if(index ==3){
				_slide = 'sFront';
				beforePage('sFront');
			}
			else if(index == 5){
				_slide = 'sSide';
				beforePage('sSide');
			}
			else if(index == 7){
				_slide = 'sRear';
				beforePage('sRear');
			}
			//$('#fullpage .slidePage#'+ _slide +' .slideImgOver img').css('height', $('#fullpage .slidePage#'+ _slide +' .slideImg img').height());
		},
		'afterLoad': function(anchorLink, index){
			if(index ==3){
				//_index = 1;
				afterPage('sFront');
			}
			else if(index == 5){
				//_index = 1;
				afterPage('sSide');
			}
			else if(index == 7){
				//_index = 1;
				afterPage('sRear');
			}
		},
		// 'afterSlideLoad': function(direction,anchorLink,slideAnchor,slideIndex){
		// 	console.log(_slide);
		// 	console.log(_index);
		// 	console.log(direction +'    ' +anchorLink+'    ' +slideAnchor+'    ' +slideIndex);
		// 	if (direction == 'right') {
		// 		//_index[_slide] = _index[_slide] + 1;
		// 		console.log(1);
		// 		slideNextImg(_slide, totalSlides, slideWidth, slideIndex);
		// 	}
		// 	if (direction == 'left') {
		// 		//_index[_slide] = _index[_slide] - 1;
		// 		slidePrevImg(_slide, totalSlides, slideWidth, slideIndex);
		// 	}
		// }
	});//fullpage

	$('#fullpage .slidePage .imgTitle p').hide();
	$('#fullpage .slidePage .imgTitle p:nth-child(1)').show();
	$('#fullpage .slidePage .textbox p').hide();
	$('#fullpage .slidePage .textbox p:nth-child(1)').show();
});//ready

var _slide;
var _index = {'sFront':1, 'sSide':1, 'sRear':1};//fullpage.js
function beforePage(pageId){
	$('#fullpage .slidePage#'+pageId+' .slideImg').css({"width":slideWidth});
}
function afterPage(pageId){
	totalSlides = $('#fullpage .slidePage#'+pageId+' .slideImg img').length;
	slideWidth = $('#fullpage .slidePage#'+pageId+' .slideImg').width();
	$('#fullpage .slidePage#'+pageId+' .slideImg img,#fullpage .slidePage#'+pageId+' .slideImgOver img').css({"width":slideWidth});
	pos=1;
}

	
function slideImgPre(pageId) {//fullpage.js
	$('#fullpage .slidePage#'+pageId+' .slideImgOver').hide();
}

function slideNextImg(pageId,totalSlides,slideWidth,pos){//fullpage.js
	//console.log(pos);
	$('#fullpage .slidePage#'+pageId+' .slideImgOver').css({"left":-(slideWidth * (pos-1))}).show();
	$('#fullpage .slidePage#'+pageId+' .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
	$('#fullpage .slidePage#'+pageId+' .indicator img:nth-child('+pos+')').attr({"src":"../images/button/indicator_active.png"});
	$('#fullpage .slidePage#'+pageId+' .imgTitle p').hide();
	$('#fullpage .slidePage#'+pageId+' .imgTitle p:nth-child('+pos+')').show();
	$('#fullpage .slidePage#'+pageId+' .textbox p').hide();
	$('#fullpage .slidePage#'+pageId+' .textbox p:nth-child('+pos+')').show();
}

function slidePrevImg(pageId,totalSlides,slideWidth,pos){//fullpage.js
	//console.log(pos);
	$('#fullpage .slidePage#'+pageId+' .slideImgOver').css({"left":-(slideWidth * (pos-1))}).show();
	$('#fullpage .slidePage#'+pageId+' .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
	$('#fullpage .slidePage#'+pageId+' .indicator img:nth-child('+pos+')').attr({"src":"../images/button/indicator_active.png"});
	$('#fullpage .slidePage#'+pageId+' .imgTitle p').hide();
	$('#fullpage .slidePage#'+pageId+' .imgTitle p:nth-child('+pos+')').show();
	$('#fullpage .slidePage#'+pageId+' .textbox p').hide();
	$('#fullpage .slidePage#'+pageId+' .textbox p:nth-child('+pos+')').show();
}
