$(document).ready(function(){
	var sidePanel ='<div class="sidePanel_wrap"><div class="sidePanel"><a href="#" class="btn_close"><img src="../images/button/003_btn_close.png" alt=""></a><ul class="menu_list">';
	sidePanel +='<li><a id="m_return" href="#pageMap">Return</a></li>';
	sidePanel +='<li><a id="m_exterior" href="#">Exterior</a></li>';
	sidePanel +='<li><a id="m_interior" href="#">Interior</a></li>';
	sidePanel +='<li><a id="m_safety" href="#">Safety</a></li>';
	sidePanel +='<li><a id="m_performane" href="#">Performance</a></li>';
	sidePanel +='<li><a id="m_sense" href="#">Smart Sense</a></li>';
	sidePanel +='<li><a id="m_convenience" href="#">Convenience</a></li>';
	sidePanel +='</ul></div></div>';

	$(".container").append(sidePanel);
	$('.sidePanel_wrap').hide();

	$('.btn_sidePanel').click(function(){//menu click
		$(this).parents(".container").find(".sidePanel_wrap").fadeIn(500);
		$(this).parents(".container").find(".sidePanel").animate({"left":"35%"},500);
	});

	$('.sidePanel_wrap').click(function(){//close
		$(this).children('.sidePanel').animate({"left":"105%"},500);
		$(this).fadeOut(500);
	});

	$('a#m_exterior').click(function(){
		pageMapNav(1);
		//moveTo(PageIndex,slideIndex) : slideIndex 0부터 시작
	});

	$('a#m_interior').click(function(){
		pageMapNav(8);
	});

	$('a#m_safety').click(function(){
		pageMapNav(10);
	});

	$('a#m_performane').click(function(){
		pageMapNav(13);
	});

	$('a#m_sense').click(function(){
		pageMapNav(18);
	});

	$('a#m_convenience').click(function(){
		pageMapNav(20);
	});
})



function pageMapNav(pageN){ //menu
	//console.log(window.location.href.search('#pageMap'));
	//console.log(loc);
	_slideInit = true;
	//slideInit();
	//if(window.location.href.search('#pageMap') > -1){
	//if(loc == 0) {
		//location.href = "#contentPage";
		$.mobile.changePage('#contentPage');
		setTimeout(function(){
			$('.slideControler .fp-controlArrow').remove();
			$('.slideControler').append('<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt=""><img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">');
			$.fn.fullpage.moveTo(pageN);
		},500);
	// }
	// else{
	// 	$.fn.fullpage.moveTo(pageN);
	// }
}


var _slideInit;
function pageMapNav1(pageN, nbhnn){ //pageMap
	//console.log(window.location.href.search('#pageMap'));
	$('#pageMap .close').click();
	//if(window.location.href.search('#pageMap') > -1){

	_slideInit = true;
	//slideInit();
	//if(loc == 0) {
		$('#btnPageMove').click();//contentPage로 이동
		//location.href = "#contentPage";
		setTimeout(function(){
			$('.slideControler .fp-controlArrow').remove();
			$('.slideControler').append('<img src="../images/button/indicator_btn_right.png" class="nextImg fp-controlArrow  fp-next" alt=""><img src="../images/button/indicator_btn_left.png" class="prevImg fp-controlArrow  fp-prev" alt="">');
			$.fn.fullpage.moveTo(pageN, nbhnn);
		},500);
	// }
	// else{
	// 	alert('else');
	// 	$.fn.fullpage.moveTo(pageN, nbhnn);
	// }
}
