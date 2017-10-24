$(document).ready(function(){
	$("#LoginAction").click(function(){
		if($("input[name=LMS_ID]").val() == ""){
			alert("Please enter your id.");
			$("input[name=LMS_ID]").focus();
			return; 
		}
		if($("input[name=LMS_PASSWORD]").val() == ""){
			alert("Please enter your password.");
			$("input[name=LMS_PASSWORD]").focus();
			return; 
		}


		frm.submit();
	});

	$("#USER_EMAIL").keyup(function() {
		$("input[name=EMAIL_CK]").val("");
		$("#user_info").hide();
	});
	

	$("#Email_check").click(function(){
		
		var EMAIL = $("input[name=USER_EMAIL]").val();
		var RETURN_URL = $("input[name=RETURN]").val();
		var LMS_GB = $("input[name=LMS_GB]").val();


		$.ajax({

			url:"../common/email_check.php",
			type: "POST",
			dataType: "json",
			data:{
				EMAIL: EMAIL,
				RETURN_URL: RETURN_URL,
				LMS_GB: LMS_GB,
			},
			success:  function(json){
				console.log(json);

				if(json.result == "EMAIL_FAIL"){
					alert("Please enter a valid email address.");
					$("input[name=USER_EMAIL]").focus();
				}else{
					$.mobile.changePage("#userCheck02");
					$("#TD_DEALER_ID").val(EMAIL);
					$("input[name=EMAIL_CK]").val("Y");
					//$("#current-img").attr("src", json.DEALER_PHOTO);
					$('#current-img').css({"background-image":"url("+json.DEALER_PHOTO+")"});
					$("input[name=TD_DEALER_NAME]").val(json.DEALER_NAME);
					$("input[name=HIDDEN_PHOTO]").val(json.DEALER_PHOTO);
					$("input[name=TD_DEALER_NAME]").val(json.DEALER_NAME);
					$("#uCountry").val(json.DEALER_CONTRY).attr("selected", "selected");
				}

			},
		   error : function(xhr, status, error) {
				console.log(error);
		   }
		});
	});

	$("#Dealer_insert").click(function(){
		
		if($("input[name=TD_DEALER_NAME]").val() == ""){
			alert("Please enter your name.");
			$("input[name=TD_DEALER_NAME]").focus();
			return; 
		}

		if($("select[name=TD_DEALER_CONTRY]").val() == ""){
			alert("Please enter your contry.");
			$("select[name=TD_DEALER_CONTRY]").focus();
			return; 
		}


		


		Form.submit();

	});
});

function like_add(DEALER_ID,DEALER_REGION,DEALER_COUNTRY,PART,BRAND,CAR_GB){

	$.ajax({
		url:"../common/like_action.php",
		type: "POST",
		dataType: "json",
		data:{
			DEALER_ID: DEALER_ID,
			DEALER_REGION: DEALER_REGION,
			DEALER_COUNTRY: DEALER_COUNTRY,
			PART: PART,
			BRAND: BRAND,
			CAR_GB: CAR_GB,
		},
		success:  function(json){
			console.log(json.CNT);
		},
	   error : function(xhr, status, error) {
			console.log(error);
	   }
	});
}