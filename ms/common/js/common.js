$(document).ready(function(){

	$('#Login_Action').click(function(){
		var LMS_CONTRY = $("select[name=LMS_CONTRY]").val();
		var LMS_NAME = $("input[name=LMS_NAME]").val();
		var RETURN = $("input[name=RETURN]").val();
		var LANGUAGE = $("input[name=LANGUAGE]").val();
		var TYPE = $("input[name=TYPE]").val();
		var params="?LMS_CONTRY="+LMS_CONTRY+"&LMS_NAME="+LMS_NAME+"&RETURN="+RETURN+"&LANGUAGE="+LANGUAGE+"&TYPE="+TYPE;

		if($("select[name=LMS_CONTRY]").val() == "")	{$("select[name=LMS_CONTRY]").focus();return;}
		if($("input[name=LMS_NAME]").val() == ""){$("input[name=LMS_NAME]").focus();return;};
		
		$.ajax({
				url:"../../common/user_check.php",
				type: "POST",
				dataType: "json",
				data:{
					LMS_NAME: LMS_NAME,
					LMS_CONTRY: LMS_CONTRY,
				},
				success:  function(json){			
					console.log(json);
					if(json.CNT > 0 ){
						var result = confirm("It is already registered name. \n Do you want to sign in?"); 
						if(result) { //yes 
							//자동 로그인
							document.location.href="../../common/login_action.php"+params+"";
						} else { //no 
							//stop
							
						}	

					}else{
						//정보가 없으면 다음단계(사진등록)
						$.mobile.changePage("#page1");
						//document.Frm.submit();
					}
				},
			   error : function(xhr, status, error) {
					console.log(error);
			   }
			});

		
	});

	$("#Join_Action").click(function(){
		document.Frm.submit();
	});

	$('#input_country').change(function(){
		$("input[name=LMS_NAME]").focus();return;
	});

	
	

	$('#form_sumit').click(function(){
		var form = $('#Frm')[0];
		var data = new FormData(form);	

		var LMS_LANGUAGE = $("input[name=LMS_LANGUAGE]").val();

		var SESSION_APP_GB = $("input[name=SESSION_APP_GB]").val();


		
		
		if(typeof $('#upload')[0].files[0] == "undefinde"){
			alert('Please select an image.');
			return;
		} 

		if($('#upload').val() == ""){
			alert('Please select an image.');
			return;
		}

		
		
		data.append('CON_IMAGE',$('#upload')[0].files[0]);
		data.append('CON_TEXT',$('.con_text').val());		
		data.append('LMS_SEQ',$('#SESSION_LMS_SEQ').val());
		data.append('LMS_LANGUAGE',LMS_LANGUAGE);
		data.append('LMS_TYPE',$("input[name=LMS_TYPE]").val());
		
		
		$('#form_sumit').hide();
		
		$.ajax({
			url: "../common/content_insert.php",
			type: "POST",
			data: data, 
			dataType: "json",
			contentType: false,
			processData: false,
			success:  function(data){
				console.log(data);
				if(data.result == 'success'){
					//초기화

					$('#upload').val('');
					$('.con_text').val('');
					if(SESSION_APP_GB ==""){
						location.href='../timeline_view.php';
					}else{
						alert('success');
					}
				} else {
					alert('오류가 발생했습니다');
				}

			},
			error : function(xhr, status, error) {
				//console.log(error);
			}
		});
		

	});

	$('#s2Page8').on({
		"pagebeforeshow": function(){
			var HY_LMS_SEQ = $("input[name=SESSION_LMS_SEQ]").val();
			var LMS_LANGUAGE = $("input[name=LMS_LANGUAGE]").val();


			$.ajax({
				url:"../common/engine.php",
				type: "POST",
				dataType: "json",
				data:{
					HY_LMS_SEQ: HY_LMS_SEQ,
					LMS_LANGUAGE: LMS_LANGUAGE,
				},
				success:  function(json){		
					if(json.ig_value > 0){
						console.log(json);
						$("input:radio[name=ENGINE]:input[value="+json.ig_value+"]").attr("checked", true);
						$("label[for=engine"+json.ig_value+"]").attr('class','ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-on');
					}else{
						$('#s2Page8 .go-next').hide();
					}			
				},
			   error : function(xhr, status, error) {
					console.log(error);
			   }
			});
		},
		"pageshow" :function(){
		}
	});
	$('#s2Page8 input[type=radio]').each(function(){
		$(this).click(function(){
			$('#s2Page8 .go-next').show();
		 });
	});



	$('#engine_action').click(function(){
		var HY_LMS_SEQ = $("input[name=SESSION_LMS_SEQ]").val();
		var LMS_LANGUAGE = $("input[name=LMS_LANGUAGE]").val();
		var ENGINE = $("input:radio[name=ENGINE]:checked").val();

		$.ajax({
			url:"../common/engine_action.php",
			type: "POST",
			dataType: "json",
			data:{
				HY_LMS_SEQ: HY_LMS_SEQ,
				LMS_LANGUAGE: LMS_LANGUAGE,
				ENGINE_CHOICE : ENGINE
			},
			success:  function(json){			
				console.log(json);
				
			},
		   error : function(xhr, status, error) {
				console.log(error);
		   }
		});
		
	});

	$('#s2Page9').on({
		"pagebeforeshow": function(){
			$('#s2Page9 .go-next,#s2Page9 ul.engine_result li .engineNum').hide();
			$('#s2Page9 ul.engine_result li .graph').css({'height':'0%'});
		},
		"pageshow" :function(){

			var HY_LMS_SEQ = $("input[name=SESSION_LMS_SEQ]").val();
			var LMS_LANGUAGE = $("input[name=LMS_LANGUAGE]").val();

			$.ajax({
				url:"../common/engine_json.php",
				type: "POST",
				dataType: "json",
				data:{
					LMS_LANGUAGE : LMS_LANGUAGE,
					HY_LMS_SEQ : HY_LMS_SEQ,
				},
				success:  function(json){
				console.log(json);	
				$("#s2Page9 ul.engine_result li.text_align_center").attr('class','text_align_center');
				$("#s2Page9 ul.engine_result li:nth-child("+json.ig_value+")").addClass('Uchoice');
				

				$('#s2Page9 ul.engine_result li .graph#graph1').animate({'height':""+json.val1 / 2+"%"},function(){
					$('#s2Page9 ul.engine_result li .engineNum#engineNum1 P').html(json.val1+"%");
					$('#s2Page9 ul.engine_result li .engineNum#engineNum1').css({'top':"calc(72% - "+json.val1 / 2+"%)"});
					$('#s2Page9 ul.engine_result li .engineNum#engineNum1').fadeIn(500);
				});//result:20%
				$('#s2Page9 ul.engine_result li .graph#graph2').delay(500).animate({'height':""+json.val2 / 2+"%"},function(){
					$('#s2Page9 ul.engine_result li .engineNum#engineNum2 P').html(json.val2+"%");
					$('#s2Page9 ul.engine_result li .engineNum#engineNum2').css({'top':"calc(72% - "+json.val2 / 2+"%)"});
					$('#s2Page9 ul.engine_result li .engineNum#engineNum2').fadeIn(500);
				});//result:30%
				$('#s2Page9 ul.engine_result li .graph#graph3').delay(1000).animate({'height':""+json.val3 / 2+"%"},function(){
					$('#s2Page9 ul.engine_result li .engineNum#engineNum3 P').html(json.val3+"%");
					$('#s2Page9 ul.engine_result li .engineNum#engineNum3').css({'top':"calc(72% - "+json.val3 / 2+"%)"});
					$('#s2Page9 ul.engine_result li .engineNum#engineNum3').fadeIn(500);
				});//result:15%
				$('#s2Page9 ul.engine_result li .graph#graph4').delay(1500).animate({'height':""+json.val4 / 2+"%"},function(){
					$('#s2Page9 ul.engine_result li .engineNum#engineNum4 P').html(json.val4+"%");
					$('#s2Page9 ul.engine_result li .engineNum#engineNum4').css({'top':"calc(72% - "+json.val4 / 2+"%)"});
					$('#s2Page9 ul.engine_result li .engineNum#engineNum4').fadeIn(500);
					$('#s2Page9 .go-next').delay(500).fadeIn(500);
				});//result:35%
				},
			   error : function(xhr, status, error) {
					console.log(error);
			   }
			});
			
		}
	});


	$("#s3Page34").on({
		"pagebeforeshow" : function(){
			var HY_LMS_SEQ = $("input[name=SESSION_LMS_SEQ]").val();
			var LMS_LANGUAGE = $("input[name=LMS_LANGUAGE]").val();


			$.ajax({
				url:"../common/function.php",
				type: "POST",
				dataType: "json",
				data:{
					HY_LMS_SEQ: HY_LMS_SEQ,
					LMS_LANGUAGE: LMS_LANGUAGE,
				},
				success:  function(json){		
					if(json.ig_value > 0){
						console.log(json);
						$(".btns label").attr('class','ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off');
						$("input:radio[name=function]:input[value="+json.ig_value+"]").attr("checked", true);
						$("label[id=function_"+json.ig_value+"]").attr('class','ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-on');
						
					}else{
						$('#s3Page34 .go-vote').hide();
						$('#s3Page34 label').removeClass('active');
					}			
				},
			   error : function(xhr, status, error) {
					console.log(error);
			   }
			});
		}, 
		"pageshow" : function(){
		}
	});

	$('#s3Page34 input[type=radio]').each(function(){
		$(this).click(function(){
			$('#s3Page34 .go-vote').fadeIn(500);
		 });
	});

	$("#s3Page34_action").click(function(){
		var HY_LMS_SEQ = $("input[name=SESSION_LMS_SEQ]").val();
		var LMS_LANGUAGE = $("input[name=LMS_LANGUAGE]").val();
		var CHECK_VAL = $("input:radio[name=function]:checked").val();
		
		$.ajax({
			url:"../common/function_action.php",
			type: "POST",
			dataType: "json",
			data:{
				HY_LMS_SEQ: HY_LMS_SEQ,
				LMS_LANGUAGE: LMS_LANGUAGE,
				CHECK_VAL : CHECK_VAL
			},
			success:  function(json){			
				console.log(json);
				
			},
		   error : function(xhr, status, error) {
				console.log(error);
		   }
		});

	 });

	//시작
$("#s3Page35").on({
	"pagebeforeshow" : function(){
		$('#s3Page35 #myChart').css({"position":"relative", "top":"-40px"});
		$('#s3Page35 #myChart, #s3Page35 #myChart #myChart-license-text').hide();
		$("#s3Page35 .text").on("contextmenu",function(){
			return false;
		}); 
	}, 
	"pageshow" : function(){

	var HY_LMS_SEQ = $("input[name=SESSION_LMS_SEQ]").val();
	var LMS_LANGUAGE = $("input[name=LMS_LANGUAGE]").val();
	$.ajax({
	url:"../common/function_json.php",
	type: "POST",
	dataType: "json",
	data:{
		LMS_LANGUAGE : LMS_LANGUAGE,
		HY_LMS_SEQ : HY_LMS_SEQ,
	},
	success:  function(json){
		console.log(json);
		var no = [Number(json.val1+".00"),Number(json.val2+".00"),Number(json.val3+".00"),Number(json.val4+".00"),Number(json.val5+".00"),Number(json.val6+".00"),Number(json.val7+".00"),Number(json.val8+".00"),Number(json.val9+".00"),Number(json.val10+".00"),Number(json.val11+".00")];
		
		$('#Result_1').html(json.val1+"%");
		$('#Result_2').html(json.val2+"%");
		$('#Result_3').html(json.val3+"%");
		$('#Result_4').html(json.val4+"%");
		$('#Result_5').html(json.val5+"%");
		$('#Result_6').html(json.val6+"%");
		$('#Result_7').html(json.val7+"%");
		$('#Result_8').html(json.val8+"%");
		$('#Result_9').html(json.val9+"%");
		$('#Result_10').html(json.val10+"%");
		$('#Result_11').html(json.val11+"%");

		$('#s3Page35 #myChart').show();
			var myConfig = {
			"type":"pie",
			"backgroundColor": "transparent",
			"plot":{
			"layout":"auto",
			"value-box":{
			  "visible":false
			},
			  animation:{
						effect: 2, 
						method: 5,
						speed: 500,
						sequence: 1
					}
			},
			series : [
					
					{	
						values : [no[0]],
						text: "ASCC",
						backgroundColor: '#00e6fd',
					},
					{
						values: [no[1]],
						text: "AEB",
						backgroundColor: '#01b0f3'
					},
					{
						values: [no[2]],
						text: 'DAA',
						backgroundColor: '#f6c928'
					},
					{
						values: [no[3]],
						text: 'HBA',
						backgroundColor: '#a77c2d'
					},
					{
						values: [no[4]],
						text: 'AVM',
						backgroundColor: '#26a0ab'
					},
					{
						values: [no[5]],
						text: 'LKAS',
						backgroundColor: '#227472'
					},
					{
						values: [no[6]],
						text: 'BSD',
						backgroundColor: '#97dc1f'
					},
					{
						values: [no[7]],
						text: 'Remote starter',
						backgroundColor: '#d86f35'
					},
					{
						values: [no[8]],
						text: 'Phone connectivity',
						backgroundColor: '#549628'
					},
					{
						values: [no[9]],
						text: 'Smart electric trunk',
						backgroundColor: '#1a4771'
					},
					{
						values: [no[10]],
						text: 'Head-Up display',
						backgroundColor: '#156ac4'
					}
				]
};


			zingchart.render({ 
				id : 'myChart', 
				data : myConfig, 
				height: 270, 
				width: 270 
			});

			$('#s3Page35 #myChart #myChart-license-text').hide();
		},
			error : function(xhr, status, error) {
				console.log(error);
			}
		});
	}
});
//끝


});





function main_go(language){
	//alert($("input[name=APP_GB]").val());
	if($("input[name=APP_GB]").val() == "APP"){
		$("input[name=RETURN]").val("/lf/ms/"+language+"/main.php");
		$("input[name=LANGUAGE]").val(language);
		Frm.submit();
	}else{
		document.location.href="/lf/ms/"+language+"/";
	}
}