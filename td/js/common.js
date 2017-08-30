$(document).ready(function(){
	
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