var cnt;
var getClassName;
$(document).ready(function(){
	$('.popLayer .btn_close').click(function(){
		$('.popLayer').hide();
	});

	$('#exFront').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#exFront .btn_more img, #exFront .img_overlay img').show();
			$('#exFront .popLayer,#exFront .btn_nextPage').hide();
			$('#exFront .popLayer#pop_cascadingGrille .textwrap .text1').show();
			$('#exFront .popLayer#pop_cascadingGrille .textwrap .text2').hide();
			$('#exFront .popLayer .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous_nonactive.png');
			$('#exFront .popLayer .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text1').show();
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text2').hide();
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(1)').show();
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(2)').hide();
		},
		"pageshow" :function(){

		}
	});

	$('#exFront .btn_more img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class');
			//console.log(getClassName);
			$('#exFront .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$('#exFront .popLayer#pop_'+getClassName).delay(500).fadeIn(500);
			if(cnt == 6){
				$('#exFront .btn_nextPage').delay(500).fadeIn(500,function(){
					$('#exFront .btn_turbo').addClass('twinkle');
				});
			}
			if(getClassName == 'cascadingGrille'){
				$('#exFront .popLayer#pop_cascadingGrille .btn_arrow img:nth-child(1)').click(function(){//pre
					$(this).attr('src','../images/button/btn_turbo_previous_nonactive.png');
					$('#exFront .popLayer#pop_cascadingGrille .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
					$('#exFront .popLayer#pop_cascadingGrille .textwrap .text1').show();
					$('#exFront .popLayer#pop_cascadingGrille .textwrap .text2').hide();
				});
				$('#exFront .popLayer#pop_cascadingGrille .btn_arrow img:nth-child(2)').click(function(){//next
					$('#exFront .popLayer#pop_cascadingGrille .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous.png');
					$(this).attr('src','../images/button/btn_turbo_next_nonactive.png');
					$('#exFront .popLayer#pop_cascadingGrille .textwrap .text1').hide();
					$('#exFront .popLayer#pop_cascadingGrille .textwrap .text2').show();
				});

			}			
		});
	});
	$('#exFront .btn_turbo').click(function(){
		$(this).removeClass('twinkle');
		$('#exFront .popLayer#pop_frontTurbo').delay(500).fadeIn(500);
		$('#exFront .popLayer#pop_frontTurbo .btn_arrow img:nth-child(1)').click(function(){//pre
			$(this).attr('src','../images/button/btn_turbo_previous_nonactive.png');
			$('#exFront .popLayer#pop_frontTurbo .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(1)').show();
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(2)').hide();
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text1').show();
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text2').hide();
		});
		$('#exFront .popLayer#pop_frontTurbo .btn_arrow img:nth-child(2)').click(function(){//next
			$('#exFront .popLayer#pop_frontTurbo .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous.png');
			$(this).attr('src','../images/button/btn_turbo_next_nonactive.png');
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(1)').hide();
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(2)').show();
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text1').hide();
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text2').show();
		});
	});


	$('#exSide').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#exSide .btn_more img, #exSide .img_overlay img').show();
			$('#exSide .popLayer,#exSide .btn_nextPage').hide();
			$('#exSide .popLayer .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous_nonactive.png');
			$('#exSide .popLayer .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text1').show();
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text2').hide();
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(1)').show();
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(2)').hide();
		},
		"pageshow" :function(){

		}
	});

	$('#exSide .btn_more img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class');
			//console.log(getClassName);
			$('#exSide .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$('#exSide .popLayer#pop_'+getClassName).delay(500).fadeIn(500);
			if(cnt == 2){
				$('#exSide .btn_nextPage').delay(500).fadeIn(500,function(){
					$('#exSide .btn_turbo').addClass('twinkle');
				});
			}			
		});
	});

	$('#exSide .btn_turbo').click(function(){
		$(this).removeClass('twinkle');
		$('#exSide .popLayer#pop_sideTurbo').delay(500).fadeIn(500);
		$('#exSide .popLayer#pop_sideTurbo .btn_arrow img:nth-child(1)').click(function(){//pre
			$(this).attr('src','../images/button/btn_turbo_previous_nonactive.png');
			$('#exSide .popLayer#pop_sideTurbo .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(1)').show();
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(2)').hide();
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text1').show();
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text2').hide();
		});
		$('#exSide .popLayer#pop_sideTurbo .btn_arrow img:nth-child(2)').click(function(){//next
			$('#exSide .popLayer#pop_sideTurbo .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous.png');
			$(this).attr('src','../images/button/btn_turbo_next_nonactive.png');
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(1)').hide();
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(2)').show();
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text1').hide();
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text2').show();
		});
	});

	$('#exRear').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#exRear .btn_more img, #exRear .img_overlay img').show();
			$('#exRear .popLayer,#exRear .btn_nextPage').hide();
		},
		"pageshow" :function(){

		}
	});

	$('#exRear .btn_more img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class');
			//console.log(getClassName);
			$('#exRear .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$('#exRear .popLayer#pop_'+getClassName).delay(500).fadeIn(500);
			if(cnt == 4){
				$('#exRear .btn_nextPage').delay(500).fadeIn(500,function(){
					$('#exRear .btn_turbo').addClass('twinkle');
				});
			}			
		});
	});

	$('#exRear .btn_turbo').click(function(){
		$(this).removeClass('twinkle');
		$('#exRear .popLayer#pop_rearTurbo').delay(500).fadeIn(500);
	});


	$('#interior').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#interior .btn_more img, #interior .img_overlay img').show();
			$('#interior .popLayer,#interior .btn_nextPage').hide();
		},
		"pageshow" :function(){

		}
	});

	$('#interior .btn_more img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class');
			//console.log(getClassName);
			$('#interior .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$('#interior .popLayer#pop_'+getClassName).delay(500).fadeIn(500);
			if(cnt == 3){
				$('#interior .btn_nextPage').delay(500).fadeIn(500);
			}
			if(getClassName == 'SteeringWheel'){
				$('.btn_wheel p:nth-child(1)').click(function(){
					$('#interior .popLayer#pop_SteeringWheel .imgwrap img').attr('src','../images/interior/popup_01_01.png');
					$(this).css({'background-color':'#fff','color':'rgb(50,50,50)'});
					$('.btn_wheel p:nth-child(2)').css({'background-color':'rgb(50,50,50)','color':'#000'});

				});
				$('.btn_wheel p:nth-child(2)').click(function(){
					$('#interior .popLayer#pop_SteeringWheel .imgwrap img').attr('src','../images/interior/popup_01_02.png');
					$(this).css({'background-color':'#fff','color':'rgb(50,50,50)'});
					$('.btn_wheel p:nth-child(1)').css({'background-color':'rgb(50,50,50)','color':'#000'});
				});
			}			
		});
	});

	$('#ADAScover2').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#ADAScover2 .btn_nextPage').hide();
			$('#ADAScover2 .text_box .btn_box').css({'font-family':'HyundaiSansHeadMedium','font-size':'18px'});
			$('#ADAScover2 .text_box .btn_box#AEB').text('AEB');
			$('#ADAScover2 .text_box .btn_box#HBA').text('HBA');
			$('#ADAScover2 .text_box .btn_box#ASCC').text('ASCC');
			$('#ADAScover2 .text_box .btn_box#BSD').text('BSD');
			$('#ADAScover2 .text_box .btn_box#LDWS').text('LDWS');
		},
		"pageshow" :function(){

		}
	});

	$('#ADAScover2 .text_box .btn_box').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class').split(' ');
			var adasName = getClassName[1];
			$(this).css({'font-family':'HyundaiSansHeadRegular','font-size':'16px'});
			console.log(adasName);
			if(adasName == 'AEB'){
				$(this).text('Autonomous Emergency Braking');
			}
			else if(adasName == 'HBA'){
				$(this).text('High Beam Assist');
			}
			else if(adasName == 'ASCC'){
				$(this).text('Advanced Smart Cruise Control');
			}
			else if(adasName == 'BSD'){
				$(this).text('Blind Spot Detection');
			}
			else if(adasName == 'LDWS'){
				$(this).text('Lane Departure Warning System');
			}
			if(cnt == 5){
				$('#ADAScover2 .btn_nextPage').delay(500).fadeIn(500);
			}
		});
	});

	$('#ADAS').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#ADAS .btn_nextPage, #ADAS .popLayer').hide();
		},
		"pageshow" :function(){

		}
	});

	$('#ADAS .btn_ADAS img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class');
			//console.log(getId);
			$('#ADAS .popLayer#pop_'+getClassName).delay(500).fadeIn(500);
			if(cnt == 5){
				$('#ADAS .btn_nextPage').delay(500).fadeIn(500);
			}
		});
	});


	$('#convenience').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#convenience .btn_nextPage, #convenience .popLayer').hide();
			$('#convenience .btn_more img').show();
		},
		"pageshow" :function(){

		}
	});

	$('#convenience .btn_more img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class');
			console.log(getClassName);
			$(this).hide();
			$('#convenience .img_overlay img.'+getClassName).hide();
			$('#convenience .popLayer#pop_'+getClassName).delay(500).fadeIn(500);
			if(cnt == 4){
				$('#convenience .btn_nextPage').delay(500).fadeIn(500);
			}
		});
	});

});//ready
