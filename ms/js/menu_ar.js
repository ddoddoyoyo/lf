$(document).ready(function(){
	var sidePanel ='<div class="sidePanel_wrap"><div class="sidePanel"><a href="#" class="btn_close"><img src="../images/menu/btn_close.png" alt=""></a><ul class="menu_list">';
	sidePanel +='<li><a id="m_exterior" href="#exFront">الخارجي</a></li>';
	sidePanel +='<li><a id="m_interior" href="#interior">الخارجي</a></li>';
	sidePanel +='<li><a id="m_safety" href="#ADAScover">مواصفات السلامهل</a></li>';
	sidePanel +='<li><a id="m_performane" href="#engineCover">الاداء</a></li>';
	sidePanel +='<li><a id="m_convenience" href="#convenienceCover">وسائل الاتصال</a></li>';
	sidePanel +='</ul></div></div>';

	$(".container").append(sidePanel);
	$('.sidePanel_wrap').hide();

	$('.btn_sidePanel').click(function(){//menu click
		$(this).parents(".container").find(".sidePanel_wrap").fadeIn(500);
		$(this).parents(".container").find(".sidePanel").animate({"left":"0%"},500);
	});

	$('.sidePanel_wrap').click(function(){//close
		$(this).children('.sidePanel').animate({"left":"105%"},500);
		$(this).fadeOut(500);
	});
})

