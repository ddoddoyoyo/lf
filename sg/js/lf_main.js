var totalSlides,slideWidth;
var pos,loc=0;

$(document).ready(function(){
	// $('#pageMap p').click(function(){
	// 	location.href = "#contentPage";
	// 	setTimeout(function(){
	// 		$.fn.fullpage.moveTo(3,1);
	// 	},500);
	// });

	$('#pageMap').on({
		"pagebeforeshow": function(){
			loc=0;
			console.log(loc);
		}
	})

	$('#contentPage').on({
		"pagebeforeshow": function(){
			$('.popLayer#scroll').show();
			$('.popLayer#exteriorMov').hide();
			$('#safetyDetail .btn_more img').addClass('activate');
			$('.popLayer#frontSuspn, .popLayer#rearSuspn').hide();
			$('.slidePage#sConvenience .table#trunkSpace').hide();
			$('.popLayer#popRigidity, .popLayer#popAdhesive,  .popLayer#popStructure, .popLayer#popCollision').hide();
			loc= 1;
			console.log(loc);
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
		//$.fn.fullpage.moveTo(3, 2);//moveTo(PageIndex,slideIndex) : slideIndex 0부터 시작
	});

	$('#safetyDetail .btn_more img').each(function(){
		var btn_moreID = $(this).attr('id');
		$(this).click(function(){
			if($(this).hasClass('activate')){
				$(this).addClass('deactivate');
				$(this).attr('src','../images/button/002_btn_action.png');
				if(btn_moreID =='rigidity'){
					//console.log(btn_moreID);
					$(this).css({'cursor':'default'});
					$('.popLayer#popRigidity').fadeIn(500);
				}
				else if(btn_moreID =='adhesive'){
					//console.log(btn_moreID);
					$(this).css({'cursor':'default'});
					$('.popLayer#popAdhesive').fadeIn(500);
				}
				else if(btn_moreID =='structure'){
					//console.log(btn_moreID);
					$(this).css({'cursor':'default'});
					$('.popLayer#popStructure').fadeIn(500);
				}
				else if(btn_moreID =='collision'){
					//console.log(btn_moreID);
					$(this).css({'cursor':'default'});
					$('.popLayer#popCollision').fadeIn(500);
				}

			}			
		});
	});
	$('#safetyDetail .popLayer .btn_close').click(function(){
		$('.popLayer#popRigidity, .popLayer#popAdhesive,  .popLayer#popStructure, .popLayer#popCollision').fadeOut(500);
	});

	$('#suspensionDetail>.imgwrap img').each(function(){
		var suspnImg_ID = $(this).attr('id');
		$(this).click(function(){
			if(suspnImg_ID =='frontSuspnImg'){
				$('.popLayer#frontSuspn').fadeIn(500);
			}
			else if(suspnImg_ID =='rearSuspnImg'){
				$('.popLayer#rearSuspn').fadeIn(500);
			}
		});
	});

	$('#suspensionDetail .popLayer .btn_close').click(function(){
		$('.popLayer#frontSuspn, .popLayer#rearSuspn').fadeOut(500);
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
			else if(index == 9){
				_slide = 'sInterior';
				beforePage('sInterior');
			}
			else if(index == 19){
				_slide = 'sSmartSense';
				beforePage('sSmartSense');
			}
			else if(index == 21){
				_slide = 'sConvenience';
				beforePage('sConvenience');
			}
			//$('#fullpage .slidePage#'+ _slide +' .slideImgOver img').css('height', $('#fullpage .slidePage#'+ _slide +' .slideImg img').height());
		},
		'afterLoad': function(anchorLink, index){
			if(index ==3){
				afterPage('sFront');
			}
			else if(index == 5){
				afterPage('sSide');
			}
			else if(index == 7){
				afterPage('sRear');
			}
			else if(index == 9){
				afterPage('sInterior');
			}
			else if(index == 19){
				afterPage('sSmartSense');
			}
			else if(index == 21){
				afterPage('sConvenience');
			}
		},
	});//fullpage

	$('#fullpage .slidePage .imgTitle p').hide();
	$('#fullpage .slidePage .imgTitle p:nth-child(1)').show();
	$('#fullpage .slidePage .textbox p').hide();
	$('#fullpage .slidePage .textbox p:nth-child(1)').show();
});//ready

var _slide;
var _index = {'sFront':1, 'sSide':1, 'sRear':1,'sInterior':1,'sSmartSense':1,'sConvenience':1};
var _tmpIndex = 0; //slide link temp value
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

function fnAfterSlideLoad (direction) { //fullpage.js : afterSlideLoads에서 call
	if (direction == 'right' || typeof direction === 'undefined') {
		_index[_slide] = (_tmpIndex) ? _tmpIndex + 1 : _index[_slide] + 1;
		_tmpIndex = 0;
		slideNextImg(_slide, totalSlides, slideWidth, _index[_slide]);
	}
	if (direction == 'left') {
		_index[_slide] = _index[_slide] - 1;
		slidePrevImg(_slide, totalSlides, slideWidth, _index[_slide]);
	}
	if(_slide == 'sConvenience' && _index[_slide] == 4){
		$('.slidePage#sConvenience .table#trunkSpace').show();
	}
}