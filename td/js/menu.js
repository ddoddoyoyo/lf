$(document).ready(function(){
	var sidePanel ='<div class="sidePanel_wrap"><div class="sidePanel"><a href="#" class="btn_close"><img src="../images/common/btn_menu_close.png" alt=""></a><ul class="menu_list">';
	sidePanel +='<li><a id="m_showroom" href="javascript:;">SHOW <span>ROOM</a></li>';
	sidePanel +='<li><a id="m_testdrive" href="javascript:;">TEST <span>DRIVE</span></a></li>';
	sidePanel +='<li><a id="m_request" href="javascript:;">REQUEST <span>FOR DRIVE</span></a></li>';
	sidePanel +='</ul></div></div>';

	$(".container").append(sidePanel);
	$('.sidePanel_wrap').hide();

	$('.btn_sidePanel').click(function(){//menu click
		$(this).parents(".container").find(".sidePanel_wrap").fadeIn(500);
		$(this).parents(".container").find(".sidePanel").animate({"left":"50%"},500);
	});

	$('.sidePanel_wrap').click(function(){//close
		$(this).children('.sidePanel').animate({"left":"105%"},500);
		$(this).fadeOut(500);
	});

	$('a#m_showroom').click(function(){
		location.href="../en/showroom.php";
	});
	$('a#m_testdrive').click(function(){
		location.href="../en/testdrive.php";
	});
	$('a#m_request').click(function(){
		location.href="../en/application.php";
	});
})

