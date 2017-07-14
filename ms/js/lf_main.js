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

	slidingImg('sFront');
	slidingImg('sSide');
	slidingImg('sRear');
	$("#content").onepage_scroll({
		sectionContainer: "article",
		loop: false,
		updateURL: false,
		responsiveFallback: false,
		beforeMove : function(index){
			//console.log(index);
			if(index ==3){
				beforePage('sFront');
			}
			else if(index == 5){
				beforePage('sSide');
			}
			else if(index == 7){
				beforePage('sRear');
			}
		},
		afterMove : function(index){
			if(index ==3){
				afterPage('sFront');	
			}
			else if(index == 5){
				afterPage('sSide');
			}
			else if(index == 7){
				afterPage('sRear');
			}
		}
	});//onepage_scroll
	function slidingImg(pageId){
		$('#content .slidePage#'+pageId+' .slideImg img').on("swipeleft",function(){
			slideNext(pageId);
		});
		$('#content .slidePage#'+pageId+' .slideImg img').on("swiperight",function(){
			slidePrev(pageId);
		});
		$('#content .slidePage#'+pageId+' .slideControler .nextImg').click(function(){
			slideNext(pageId);
		});
		$('#content .slidePage#'+pageId+' .slideControler .prevImg').click(function(){
			slidePrev(pageId);
		});	
	}
	function beforePage(pageId){
		$('#content .slidePage#'+pageId+' .imgTitle p').hide();
		$('#content .slidePage#'+pageId+' .imgTitle p:nth-child(1)').show();
		$('#content .slidePage#'+pageId+' .textbox p').hide();
		$('#content .slidePage#'+pageId+' .textbox p:nth-child(1)').show();
		$('#content .slidePage#'+pageId+' .slideImg').css({"width":slideWidth});
		$('#content .slidePage#'+pageId+' .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
		$('#content .slidePage#'+pageId+' .indicator img:nth-child(1)').attr({"src":"../images/button/indicator_active.png"});
		$('#content .slidePage#'+pageId+' .slideImg').css({"left":0});
	}
	function afterPage(pageId){
		totalSlides = $('#content .slidePage#'+pageId+' .slideImg img').length / 2;
		slideWidth = $('#content .slidePage#'+pageId+' .slideImg').width();
		//console.log(slideWidth + "   " + totalSlides);
		$('#content .slidePage#'+pageId+' .slideImg').css({"width":slideWidth * totalSlides});
		$('#content .slidePage#'+pageId+' .slideImg img').css({"width":slideWidth});
		pos=1;
		//console.log(pos);
	}
	function slideNext(pageId){
		if(pos >= totalSlides){
			return false;
		}
		else{
			pos++;
			//console.log(pos);
			slideNextImg(pageId,totalSlides,slideWidth,pos);			
		}
	}
	function slidePrev(pageId){
		if(pos <= 1){
			return false;
		}
		else{
			pos--;
			slidePrevImg(pageId,totalSlides,slideWidth,pos);			
		}
	}
	function slideNextImg(pageId,totalSlides,slideWidth,pos){
		//console.log(pos);
		$('#content .slidePage#'+pageId+' .slideImg').animate({"left":-(slideWidth * (pos-1))},500);
		$('#content .slidePage#'+pageId+' .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
		$('#content .slidePage#'+pageId+' .indicator img:nth-child('+pos+')').attr({"src":"../images/button/indicator_active.png"});
		$('#content .slidePage#'+pageId+' .imgTitle p').hide();
		$('#content .slidePage#'+pageId+' .imgTitle p:nth-child('+pos+')').show();
		$('#content .slidePage#'+pageId+' .textbox p').hide();
				$('#content .slidePage#'+pageId+' .textbox p:nth-child('+pos+')').show();
	}

	function slidePrevImg(pageId,totalSlides,slideWidth,pos){
		//console.log(pos);
		$('#content .slidePage#'+pageId+' .slideImg').animate({"left":-(slideWidth * (pos-1))},500);
		$('#content .slidePage#'+pageId+' .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
		$('#content .slidePage#'+pageId+' .indicator img:nth-child('+pos+')').attr({"src":"../images/button/indicator_active.png"});
		$('#content .slidePage#'+pageId+' .imgTitle p').hide();
		$('#content .slidePage#'+pageId+' .imgTitle p:nth-child('+pos+')').show();
		$('#content .slidePage#'+pageId+' .textbox p').hide();
		$('#content .slidePage#'+pageId+' .textbox p:nth-child('+pos+')').show();
	}
});

