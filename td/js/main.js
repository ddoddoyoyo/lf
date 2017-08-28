var cnt;
var getClassName;
$(document).ready(function(){
	$('.popLayer .btn_close').click(function(){
		$('.popLayer').hide();
	});

	$('#drivingMap').on({
		"pagebeforeshow" : function(){
			$('#drivingMap .popLayer.imgbox').hide();
			$('#drivingMap .imgbox.map img:first-child').addClass('twinkle');
		},
		"pageshow" :function(){
		}
	});

	$('#drivingMap .imgbox.map img').each(function(){
		$(this).click(function(){
			getClassName = $(this).attr('class').split(' ');
			$(this).removeClass('twinkle');
			$(this).next().addClass('twinkle');
			$('#drivingMap .popLayer.imgbox#pop_'+getClassName[1]).fadeIn(500);	
		});
	});
	$('#exFront .btn_turbo').click(function(){
		
	});

	$("#btn_ex_color_wrap").each(function(){
		var slice;
		var ex_colorBtn = $(this).children("li").children("a");
		ex_colorBtn.click(function(){
			if($(this).hasClass("on")) return;
			ex_colorBtn.removeClass("on");
			$(this).addClass("on");
			ex_colorBtn.each(function(){
				var src;
				var img = $(this).children("img");
				if($(this).hasClass("on")){
					src = img.attr("src").replace("_defalt", "_over");
				} else {
					src = img.attr("src").replace("_over", "_defalt");
				}
				img.attr("src", src);
			});
			if($(this).parents("li").attr("id") == "btn_ex_color01"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Polar_White/###.png");
				$("#back_img").attr("src","../images/002_01.png"); 
			} else if($(this).parents("li").attr("id") == "btn_ex_color02"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Phantom_Black/###.png");
				$("#back_img").attr("src","../images/002_02.png"); 
			} else if($(this).parents("li").attr("id") == "btn_ex_color03"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Platinum_Silver/###.png");
				$("#back_img").attr("src","../images/002_03.png"); 
			} else if($(this).parents("li").attr("id") == "btn_ex_color04"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Iron_Gray/###.png");
				$("#back_img").attr("src","../images/002_04.png"); 
			} else if($(this).parents("li").attr("id") == "btn_ex_color05"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Aurora_Silver/###.png");
				$("#back_img").attr("src","../images/002_05.png"); 
			} else if($(this).parents("li").attr("id") == "btn_ex_color06"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Demitasse_Brown/###.png");
				$("#back_img").attr("src","../images/002_06.png"); 
			} else if($(this).parents("li").attr("id") == "btn_ex_color07"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Marina_Blue/###.png");
				$("#back_img").attr("src","../images/002_07.png"); 
			} else if($(this).parents("li").attr("id") == "btn_ex_color08"){
				$("#ex_color").reel("images", "../VR/AE_HEV_Phoenix_Orange/###.png");
				$("#back_img").attr("src","../images/002_08.png"); 
			}
		});
	});


});//ready
