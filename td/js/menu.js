$(document).ready(function(){
	var _td = $('body').hasClass('tdBody');
	var sidePanel ='<div class="sidePanel_wrap"><div class="sidePanel"><a href="#" class="btn_close"><img src="../images/common/btn_menu_close.png" alt=""></a><ul class="menu_list">';
	sidePanel +='<li><a id="m_showroom" href="javascript:;">SHOW <span>ROOM</a></li>';
	sidePanel +='<li><a id="m_testdrive" href="javascript:;">TEST <span>DRIVE</span></a></li>';
	sidePanel +='<li><a id="m_request" href="javascript:;">REQUEST <span>ACTUAL TEST </span><span>DRIVE</span></a></li>';
	sidePanel +='</ul></div></div>';

	$(".container, .tdBody").append(sidePanel);
	$('.sidePanel_wrap').hide();

	$('.btn_sidePanel,.menuWrap').click(function(){//menu click
		if(_td){
			$('body').css({'overflow':'hidden'});
			$(".sidePanel_wrap").css({'position':'fixed'}).show();
			$(".sidePanel_wrap").fadeIn(500,function(){
				$(".sidePanel").animate({"left":"50%"},500);
			});
		}
		else{
			$(this).parents(".container").find(".sidePanel_wrap").fadeIn(500);
			$(this).parents(".container").find(".sidePanel").animate({"left":"50%"},500);
		}
		
	});

	$('.sidePanel_wrap').click(function(){//close
		$(this).children('.sidePanel').animate({"left":"105%"},500);
		$(this).fadeOut(500);
	});

	$('a#m_showroom').click(function(){
		parent.location.href="../en/showroom.php";
	});
	$('a#m_testdrive').click(function(){
		parent.location.href="../en/testdriveIntro.php";
	});
	$('a#m_request').click(function(){
		parent.location.href="../en/application.php";
	});
	if(!mobile){
		$('#exColor .btn_sidePanel').click(function(){
			$(".vr").css({"z-index":"1"});
		});
		$('#exColor .sidePanel_wrap').click(function(){
			setTimeout(function(){
				$(".vr").css({"z-index":"10"});
			},500);			
		})
	}
})

