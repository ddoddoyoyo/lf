var totalSlides,slideWidth;
var pos;
$(document).ready(function(){
	
	$('#content .slidePage#sExterior .slideImg img').on("swipeleft",function(){
		slideNext();
	});
	$('#content .slidePage#sExterior .slideImg img').on("swiperight",function(){
		slidePrev();
	});
	$('#content .slidePage#sExterior .slideControler .nextImg').click(function(){
		slideNext();
	});
	$('#content .slidePage#sExterior .slideControler .prevImg').click(function(){
		slidePrev();
	});	
	$("#content").onepage_scroll({
		sectionContainer: "article",
		loop: false,
		updateURL: false,
		responsiveFallback: false,
		beforeMove : function(index){
			//console.log(index);
			if(index ==3){
				$('#content .slidePage#sExterior .imgTitle p').hide();
				$('#content .slidePage#sExterior .imgTitle p:nth-child(1)').show();
				$('#content .slidePage#sExterior .textbox p').hide();
				$('#content .slidePage#sExterior .textbox p:nth-child(1)').show();
				$('#content .slidePage#sExterior .slideImg').css({"width":slideWidth});
				$('#content .slidePage#sExterior .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
				$('#content .slidePage#sExterior .indicator img:nth-child(1)').attr({"src":"../images/button/indicator_active.png"});
				$('#content .slidePage#sExterior .slideImg').css({"left":0});
			}
		},
		afterMove : function(index){
			
			if(index ==3){//#sExterior
				totalSlides = $('#content .slidePage#sExterior .slideImg img').length;
				slideWidth = $('#content .slidePage#sExterior .slideImg').width();
				//console.log(slideWidth + "   " + totalSlides + "     " + slideWidth * totalSlides);
				$('#content .slidePage#sExterior .slideImg').css({"width":slideWidth * totalSlides});
				$('#content .slidePage#sExterior .slideImg img').css({"width":slideWidth});
				pos=1;
				//console.log(pos);
				
			}
		}
	});//onepage_scroll
	function slideNext(){
		if(pos >= totalSlides){
			return false;
		}
		else{
			pos++;
			console.log(pos);
			slideNextImg(totalSlides,slideWidth,pos);			
		}
	}
	function slidePrev(){
		if(pos <= 1){
			return false;
		}
		else{
			pos--;
			slidePrevImg(totalSlides,slideWidth,pos);			
		}
	}
	function slideNextImg(totalSlides,slideWidth,pos){
		//console.log(pos);
		$('#content .slidePage#sExterior .slideImg').animate({"left":-(slideWidth * (pos-1))},500);
		$('#content .slidePage#sExterior .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
		$('#content .slidePage#sExterior .indicator img:nth-child('+pos+')').attr({"src":"../images/button/indicator_active.png"});
		$('#content .slidePage#sExterior .imgTitle p').hide();
		$('#content .slidePage#sExterior .imgTitle p:nth-child('+pos+')').show();
		$('#content .slidePage#sExterior .textbox p').hide();
				$('#content .slidePage#sExterior .textbox p:nth-child('+pos+')').show();
	}

	function slidePrevImg(totalSlides,slideWidth,pos){
		//console.log(pos);
		$('#content .slidePage#sExterior .slideImg').animate({"left":-(slideWidth * (pos-1))},500);
		$('#content .slidePage#sExterior .indicator img').attr({"src":"../images/button/indicator_non_active.png"});
		$('#content .slidePage#sExterior .indicator img:nth-child('+pos+')').attr({"src":"../images/button/indicator_active.png"});
		$('#content .slidePage#sExterior .imgTitle p').hide();
		$('#content .slidePage#sExterior .imgTitle p:nth-child('+pos+')').show();
		$('#content .slidePage#sExterior .textbox p').hide();
		$('#content .slidePage#sExterior .textbox p:nth-child('+pos+')').show();
	}
});

