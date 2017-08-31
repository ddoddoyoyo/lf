var cnt;
var getClassName;
$(document).ready(function(){
	$('.popLayer .btn_close').click(function(){
		$('.popLayer').hide();
	});
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
				getClassName = $(this).attr('class').split(' ');
				$('#drivingMap .imgbox.map img').removeClass('twinkle');
				$(this).next().addClass('twinkle');
				$('#drivingMap .popLayer.imgbox#pop_'+getClassName[1]).fadeIn(500);
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
			$('#exColor .imgwrap .imgText p,#exColor .imgwrap img').hide();
			$('#exColor .imgwrap .imgText p:first-child,#exColor .imgwrap img:first-child').show();
			$('#exColor .colorBox .colorPick img').siblings().removeClass('active');
			$('#exColor .colorBox .colorPick img:first-child').addClass("active");
			
		},
		"pageshow" :function(){

		}
	});

	$('#exColor .colorBox .btn_next').click(function(){
		pos=$('#exColor .colorPick').css('left').slice(0,-2);
		var tmpW = totalW - $('#exColor .colorLayout').width();
		if(pos > - tmpW){
			$('#exColor .colorPick').animate({'left':-move+parseInt(pos)});
		}		
	});
	$('#exColor .colorBox .btn_prev').click(function(){
		pos=$('#exColor .colorPick').css('left').slice(0,-2);
		if(pos<0){
			$('#exColor .colorPick').animate({'left': move+parseInt(pos)});
		}	
	});

	$('#exColor .colorBox .colorPick img').each(function(){
		$(this).click(function(){
			getClassName = $(this).attr('class');
			//console.log(getClassName);
			$(this).addClass('active');
			$(this).siblings().removeClass('active');
			$('#exColor .imgwrap .imgText p,#exColor .imgwrap img').hide();
			$('#exColor .imgwrap .imgText p.'+getClassName).show();
			$('#exColor .imgwrap img.'+getClassName).show();
		})
	})

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
			getClassName = $(this).attr('class');
			//console.log(getClassName);
			$(this).addClass('active');
			$(this).siblings().removeClass('active');
			$('#inColor .imgwrap .imgText p,#inColor .imgwrap img').hide();
			$('#inColor .imgwrap .imgText p.'+getClassName).show();
			$('#inColor .imgwrap img.'+getClassName).show();
		})
	})

	//3d
	// $("#btn_ex_color_wrap").each(function(){
	// 	var slice;
	// 	var ex_colorBtn = $(this).children("li").children("a");
	// 	ex_colorBtn.click(function(){
	// 		if($(this).hasClass("on")) return;
	// 		ex_colorBtn.removeClass("on");
	// 		$(this).addClass("on");
	// 		ex_colorBtn.each(function(){
	// 			var src;
	// 			var img = $(this).children("img");
	// 			if($(this).hasClass("on")){
	// 				src = img.attr("src").replace("_defalt", "_over");
	// 			} else {
	// 				src = img.attr("src").replace("_over", "_defalt");
	// 			}
	// 			img.attr("src", src);
	// 		});
	// 		if($(this).parents("li").attr("id") == "btn_ex_color01"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Polar_White/###.png");
	// 			$("#back_img").attr("src","../images/002_01.png"); 
	// 		} else if($(this).parents("li").attr("id") == "btn_ex_color02"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Phantom_Black/###.png");
	// 			$("#back_img").attr("src","../images/002_02.png"); 
	// 		} else if($(this).parents("li").attr("id") == "btn_ex_color03"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Platinum_Silver/###.png");
	// 			$("#back_img").attr("src","../images/002_03.png"); 
	// 		} else if($(this).parents("li").attr("id") == "btn_ex_color04"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Iron_Gray/###.png");
	// 			$("#back_img").attr("src","../images/002_04.png"); 
	// 		} else if($(this).parents("li").attr("id") == "btn_ex_color05"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Aurora_Silver/###.png");
	// 			$("#back_img").attr("src","../images/002_05.png"); 
	// 		} else if($(this).parents("li").attr("id") == "btn_ex_color06"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Demitasse_Brown/###.png");
	// 			$("#back_img").attr("src","../images/002_06.png"); 
	// 		} else if($(this).parents("li").attr("id") == "btn_ex_color07"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Marina_Blue/###.png");
	// 			$("#back_img").attr("src","../images/002_07.png"); 
	// 		} else if($(this).parents("li").attr("id") == "btn_ex_color08"){
	// 			$("#ex_color").reel("images", "../VR/AE_HEV_Phoenix_Orange/###.png");
	// 			$("#back_img").attr("src","../images/002_08.png"); 
	// 		}
	// 	});
	// });


});//ready
