$(document).ready(function(){

	var select = $("select#country");
    select.change(function(){
        var select_name = $(this).children("option:selected").text();
        $(this).siblings("label").text(select_name);
        // $(this).siblings("label").css({"color":"#002c5f","background-image":"url('../images/button/icon_country_arrow_select.png')"});
    });
	
	$("#page0").on({
		"pagebeforeshow" : function(){
			//$("#mokup, #wrap.mobile").removeClass("landscape");
		}, 
		"pageshow" : function(){
			
		}
	});

		
	//});

	
});
