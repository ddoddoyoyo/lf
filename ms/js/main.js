var cnt;
var getClassName;
$(document).ready(function(){
	$('.popLayer .btn_close').click(function(){
		$('.popLayer').hide();
	});

	$('#exFront').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#exFront .img_overlay img').show();
			$('#exFront .popLayer,#exFront .btn_nextPage').hide();
			$('#exFront .popLayer#pop_cascadingGrille .textwrap .text1').show();
			$('#exFront .popLayer#pop_cascadingGrille .textwrap .text2').hide();
			$('#exFront .popLayer .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous_nonactive.png');
			$('#exFront .popLayer .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text1').show();
			$('#exFront .popLayer#pop_frontTurbo .textwrap.text2').hide();
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(1)').show();
			$('#exFront .popLayer#pop_frontTurbo .imgwrap img:nth-child(2)').hide();
			$('#exFront .btn_turbo,#exFront .img_overlay img').removeClass('twinkle');
			$('#exFront .img_overlay img:last-child').addClass('twinkle');
		},
		"pageshow" :function(){

		}
	});

	$('#exFront .img_overlay img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class').split(" ")[0];
			console.log(getClassName);
			//$('#exFront .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$(this).removeClass('twinkle');
			$(this).prev().addClass('twinkle');		
			$('#exFront .popLayer#pop_'+getClassName).delay(300).fadeIn(500);
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

	$('#exFrontLast').on({
		"pagebeforeshow" : function(){
			$('#exFrontLast .carChange .newCar').css({"width":"50%"});
			$('#exFrontLast .dragbar .dragline').css({"width":"50%"});
			$('#exFrontLast .dragbar .ui-slider-handle').css({"left":"50%"});
		},
		"pageshow" :function(){
			$("#exFrontLast .drawSlider").slider({ //붓 움직이기
				range:"max",
				min: 0,
				max: 100,
				value:50,
				slide: function( event, ui ){
					//console.log(ui.value);
					$(this).find(".ui-slider-handle").css({"left": - ui.value + "%"}); //붓
					$('#exFrontLast .carChange .newCar').css({"width": ui.value + "%"});
				}				
			});

		}
	});


	$('#exSide').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#exSide .img_overlay img').show();
			$('#exSide .popLayer,#exSide .btn_nextPage').hide();
			$('#exSide .popLayer .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous_nonactive.png');
			$('#exSide .popLayer .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text1').show();
			$('#exSide .popLayer#pop_sideTurbo .textwrap.text2').hide();
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(1)').show();
			$('#exSide .popLayer#pop_sideTurbo .imgwrap img:nth-child(2)').hide();
			$('#exSide .btn_turbo,#exSide .img_overlay img').removeClass('twinkle');
			$('#exSide .img_overlay img:last-child').addClass('twinkle');
		},
		"pageshow" :function(){

		}
	});

	$('#exSide .img_overlay img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class').split(" ")[0];;
			//console.log(getClassName);
			//$('#exSide .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$(this).removeClass('twinkle');
			$(this).prev().addClass('twinkle');
			$('#exSide .popLayer#pop_'+getClassName).delay(300).fadeIn(500);
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
			$('#exRear .img_overlay img').show();
			$('#exRear .popLayer,#exRear .btn_nextPage').hide();
			$('#exRear .img_overlay img:last-child').addClass('twinkle');
			$('#exRear .btn_turbo,#exRear .img_overlay img').removeClass('twinkle');
			$('#exRear .img_overlay img:last-child').addClass('twinkle');
		},
		"pageshow" :function(){

		}
	});

	$('#exRear .img_overlay  img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class').split(" ")[0];
			//console.log(getClassName);
			//$('#exRear .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$(this).removeClass('twinkle');
			$(this).prev().addClass('twinkle');
			$('#exRear .popLayer#pop_'+getClassName).delay(300).fadeIn(500);
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

	$('#exRearLast').on({
		"pagebeforeshow" : function(){
			$('#exRearLast .carChange .newCar').css({"width":"50%"});
			$('#exRearLast .dragbar .dragline').css({"width":"50%"});
			$('#exRearLast .dragbar .ui-slider-handle').css({"left":"50%"});
		},
		"pageshow" :function(){
			$("#exRearLast .drawSlider").slider({ //붓 움직이기
				range:"max",
				min: 0,
				max: 100,
				value:50,
				slide: function( event, ui ){
					//console.log(ui.value);
					$(this).find(".ui-slider-handle").css({"left": - ui.value + "%"}); //붓
					$('#exRearLast .carChange .newCar').css({"width": ui.value + "%"});
				}				
			});

		}
	});


	$('#interior').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#interior .img_overlay img').show();
			$('#interior .popLayer,#interior .btn_nextPage').hide();
			$('#interior .img_overlay img').removeClass('twinkle');
			$('#interior .img_overlay img:last-child').addClass('twinkle');
		},
		"pageshow" :function(){

		}
	});

	$('#interior .img_overlay img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class').split(" ")[0];
			//console.log(getClassName);
			//$('#interior .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$(this).removeClass('twinkle');
			$(this).prev().addClass('twinkle');
			$('#interior .popLayer#pop_'+getClassName).delay(300).fadeIn(500);
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
			$('#ADAScover2 .text_box .btn_box.AEB').text('AEB');
			$('#ADAScover2 .text_box .btn_box.HBA').text('HBA');
			$('#ADAScover2 .text_box .btn_box.ASCC').text('ASCC');
			$('#ADAScover2 .text_box .btn_box.BSD').text('BSD');
			$('#ADAScover2 .text_box .btn_box.LDWS').text('LDWS');
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
			$('#ADAS .btn_nextPage, #ADAS .popLayer,#ADAS .popLayer .imgwrap img').hide();
			$('#ADAS .btn_ADAS img.LKAS').attr('src','../images/adas/btn_LKAS.png');
			$('#ADAS .btn_ADAS img.DBL').attr('src','../images/adas/btn_DBL.png');
			$('#ADAS .btn_ADAS img.DAA').attr('src','../images/adas/btn_DAA.png');
			$('#ADAS .btn_ADAS img.AVM').attr('src','../images/adas/btn_AVM.png');
			$('#ADAS .btn_ADAS img.DRM').attr('src','../images/adas/btn_DRM.png');
		},
		"pageshow" :function(){

		}
	});

	$('#ADAS .btn_ADAS img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class');
			//console.log(getId);
			$('#ADAS .popLayer#pop_'+getClassName+' .imgwrap img').hide();
			$('#ADAS .popLayer#pop_'+getClassName).delay(500).fadeIn(500);
			$('#ADAS .btn_ADAS img.'+getClassName).attr('src','../images/adas/btn_'+getClassName+'_02.png');
			if(cnt == 5){
				$('#ADAS .btn_nextPage').delay(500).fadeIn(500);
			}
			$('#ADAS .popLayer#pop_'+getClassName+' .imgwrap img').each(function(index,elem){
				setTimeout(function(){
					$(elem).fadeIn(500);
				},index*100);		
			});

		});
	});

	$('#convenience').on({
		"pagebeforeshow" : function(){
			cnt=0;
			$('#convenience .btn_nextPage, #convenience .popLayer').hide();
			$('#convenience .img_overlay img').show();
			$('#convenience .popLayer .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous_nonactive.png');
			$('#convenience .popLayer .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
			$('#convenience .popLayer#pop_WirelessCharging .textwrap.text1').show();
			$('#convenience .popLayer#pop_WirelessCharging .textwrap.text2').hide();
			$('#convenience .popLayer#pop_WirelessCharging .imgwrap img:nth-child(1)').show();
			$('#convenience .popLayer#pop_WirelessCharging .imgwrap img:nth-child(2)').hide();
			$('#convenience .img_overlay img').removeClass('twinkle');
			$('#convenience .img_overlay img:last-child').addClass('twinkle');
		},
		"pageshow" :function(){

		}
	});

	$('#convenience .img_overlay img').each(function(){
		$(this).click(function(){
			cnt++;
			getClassName = $(this).attr('class').split(" ")[0];
			//console.log(getClassName);
			//$('#convenience .img_overlay img.'+getClassName).hide();
			$(this).hide();
			$(this).removeClass('twinkle');
			$(this).prev().addClass('twinkle');
			$('#convenience .popLayer#pop_'+getClassName).delay(300).fadeIn(500);
			if(cnt == 3){
				$('#convenience .btn_nextPage').delay(500).fadeIn(500);
			}
			if(getClassName == 'WirelessCharging'){
				$('#convenience .popLayer#pop_WirelessCharging .btn_arrow img:nth-child(1)').click(function(){//pre
					$(this).attr('src','../images/button/btn_turbo_previous_nonactive.png');
					$('#convenience .popLayer#pop_WirelessCharging .btn_arrow img:nth-child(2)').attr('src','../images/button/btn_turbo_next.png');
					$('#convenience .popLayer#pop_WirelessCharging .imgwrap img:nth-child(1)').show();
					$('#convenience .popLayer#pop_WirelessCharging .imgwrap img:nth-child(2)').hide();
					$('#convenience .popLayer#pop_WirelessCharging .textwrap.text1').show();
					$('#convenience .popLayer#pop_WirelessCharging .textwrap.text2').hide();
				});
				$('#convenience .popLayer#pop_WirelessCharging .btn_arrow img:nth-child(2)').click(function(){//next
					$('#convenience .popLayer#pop_WirelessCharging .btn_arrow img:nth-child(1)').attr('src','../images/button/btn_turbo_previous.png');
					$(this).attr('src','../images/button/btn_turbo_next_nonactive.png');
					$('#convenience .popLayer#pop_WirelessCharging .imgwrap img:nth-child(1)').hide();
					$('#convenience .popLayer#pop_WirelessCharging .imgwrap img:nth-child(2)').show();
					$('#convenience .popLayer#pop_WirelessCharging .textwrap.text1').hide();
					$('#convenience .popLayer#pop_WirelessCharging .textwrap.text2').show();
				});
			}
		});
	});

});//ready
