var cnt;
var getClassName;
var _clickPop;
$(document).ready(function(){
	$('.popLayer .btn_close').click(function(){
		$('.popLayer').hide();
	});
	// $('section').on({
	// 	"pageshow":function(){
	// 		if($('#exColor').hasClass('ui-page-active')){
	// 			$('#exColor .imgwrap').append('<img src="../sonata_360VR/BlueSapphire/00001.jpg" class="reel" id="ex_color" data-images="../sonata_360VR/BlueSapphire/#####.jpg" data-frames="60" data-frame="9" data-rows="1" data-row="1">');
	// 		}
			
	// 	}
	// })
	

	//testdrive
	$('#drivingMap').on({
		"pagebeforeshow" : function(){
			$('#drivingMap .popLayer.imgbox').hide();
			$('#drivingMap .imgbox.map img').removeClass('twinkle');
			$('#drivingMap .imgbox.map img:first-child').addClass('twinkle');
		},
		"pageshow" :function(){
		}
	});

	$('#drivingMap .imgbox.map img').each(function(){
		$(this).click(function(){
			if($(this).hasClass('twinkle')){
				_clickPop = $(this).attr('alt');
				//console.log($(this)[0]);
				//console.log($(this).attr('alt'));
				getClassName = $(this).attr('class').split(' ');
				//$('#drivingMap .imgbox.map img').removeClass('twinkle');
				$(this).removeClass('twinkle');
				$(this).next().addClass('twinkle');
				$('#drivingMap .popLayer.imgbox#pop_'+getClassName[1]).fadeIn(500);
				//console.log(this);
				//console.log(_clickPop);
			}
			else if ($(this).attr('alt') <= _clickPop) {
				//console.log(_clickPop);
				var tmpImgId = $('#mapIcon'+ $(this).attr('alt')).attr('class').split(' ');
				//console.log(tmpImgId);
				$('#drivingMap .popLayer.imgbox#pop_'+ tmpImgId[1]).fadeIn(500);
			}
			else{
				return;
			}
		});
	});
	//showroom
	var imgW,marginR,move,imgLength,totalW,pos;
	$('#exColor').on({
		"pagebeforeshow" : function(){	
			pos=$('#exColor .colorPick').css('left').slice(0,-2);
			//console.log($(this).width());
			imgW = $('#exColor .colorPick img').width();
			imgLength = $('#exColor .colorPick img').length;
			marginR = 16;
			move = 50;
			totalW = imgW * imgLength + marginR*imgLength;
			$('#exColor .colorPick').css({'width':totalW});
			// $('#exColor .imgwrap .imgText p,#exColor .imgwrap img').hide();
			// $('#exColor .imgwrap .imgText p:first-child,#exColor .imgwrap img:first-child').show();
			$('.vr .imgwrap .imgText p').hide();
			$('.vr .imgwrap .imgText p:first-child').show();
			$('#exColor .colorBox .colorPick img').siblings().removeClass('active');
			$('#exColor .colorBox .colorPick img:first-child').addClass("active");
			$(".vr img#ex_color").reel("images", "../images/sonata_360VR/WhiteCream/###.jpg");
			$(".scrollbar").addClass('ps--active-x');
			$(".ps__scrollbar-x-rail").css({"width":$('#exColor').width()});
			$(".ps__scrollbar-x").css({"width":$('#exColor').width() / 2});
			//vr
			setTimeout(function(){
				$('.vr').css({"z-index":"10"});
			},200);		
			
		},
		"pageshow" :function(){

		}
	});

	// $('#exColor .colorBox .btn_next').click(function(){
	// 	pos=$('#exColor .colorPick').css('left').slice(0,-2);
	// 	var tmpW = totalW - $('#exColor .colorLayout').width();
	// 	if(pos > - tmpW){
	// 		$('#exColor .colorPick').animate({'left':-move+parseInt(pos)});
	// 	}		
	// });
	// $('#exColor .colorBox .btn_prev').click(function(){
	// 	pos=$('#exColor .colorPick').css('left').slice(0,-2);
	// 	if(pos<0){
	// 		$('#exColor .colorPick').animate({'left': move+parseInt(pos)});
	// 	}	
	// });

	$('#exColor .colorBox .colorPick img').each(function(){
		$(this).click(function(){
			getClassName = $(this).attr('class').split(" ")[0];
			console.log(getClassName);
			$(this).addClass('active');
			$(this).siblings().removeClass('active');
			$(".vr img#ex_color").reel("images", "../images/sonata_360VR/"+getClassName+"/###.jpg");
			$('.vr .imgwrap .imgText p').hide();
			$('.vr .imgwrap .imgText p.'+getClassName).show();
			//$('#exColor .imgwrap img.'+getClassName).show();
		})
	});

	$('#exColor .btn_nextPage, #exColor .btn_back').click(function(){
		$('.vr,#exColor').css({"z-index":"0"});		
	});

	$('#inColor').on({
		"pagebeforeshow" : function(){
			imgW = $('#inColor .colorPick img').width();
			imgLength = $('#inColor .colorPick img').length;
			marginR = 14;
			totalW = imgW * imgLength + marginR*imgLength +20;
			$('#inColor .colorPick').css({'width':totalW});
			$('#inColor .imgwrap .imgText p,#inColor .imgwrap img').hide();
			$('#inColor .imgwrap .imgText p:first-child,#inColor .imgwrap img:first-child').show();
			$('#inColor .colorBox .colorPick img').siblings().removeClass('active');
			$('#inColor .colorBox .colorPick img:first-child').addClass("active");

		},
		"pageshow" :function(){

		}
	});

	$('#inColor .colorBox .colorPick img').each(function(){
		$(this).click(function(){
			getClassName = $(this).attr('class').split(" ")[0];
			console.log(getClassName);
			$(this).addClass('active');
			$(this).siblings().removeClass('active');
			$('#inColor .imgwrap .imgText p,#inColor .imgwrap img').hide();
			$('#inColor .imgwrap .imgText p.'+getClassName).show();
			$('#inColor .imgwrap img.'+getClassName).show();
		})
	})

});//ready
