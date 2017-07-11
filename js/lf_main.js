$(document).ready(function(){

	var select = $("select#country");
    select.change(function(){
        var select_name = $(this).children("option:selected").text();
        $(this).siblings("label").text(select_name);
        // $(this).siblings("label").css({"color":"#002c5f","background-image":"url('../images/button/icon_country_arrow_select.png')"});
    });
	
	$("#content").onepage_scroll({
		sectionContainer: "article",
		loop: false,
		//updateURL: false,
		responsiveFallback: false
	});
	// $("#content").addClass('fullpage');
	// $("#content article").addClass('section');
	// $("#fullpage").fullpage();





	$("#content .slidePage#exterior").on({
		"pagebeforeshow" : function(){
			
		}, 
		"pageshow" : function(){
			
		}
	});

	
});

// (function() {
//   var delay = false;

//   $(document).on('mousewheel DOMMouseScroll', function(event) {//DOMMouseScroll :FF , mousewheel: IE, chrome. safari
//     event.preventDefault();
//     if(delay) return;

//     delay = true;
//     setTimeout(function(){delay = false})

//     var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;
//     var article= document.getElementsByTagName('article');
//     //console.log(a.length);
//     if(wd < 0) { //down scroll
//       for(var i = 0 ; i < article.length ; i++) {
//         var t = article[i].getClientRects()[0].top;
//         console.log(i);
//         if(t >= 1) break;
//       }
//     }
//     else {//up scroll
//       for(var i = article.length-1 ; i >= 0 ; i--) {
//         var t = article[i].getClientRects()[0].top;
//         //console.log(t);
//         if(t < -1) break;
//       }
//     }
//     $('#content').animate({
//       scrollTop: article[i].offsetTop
//       //scrollTop: 505
//     });
//     //console.log(i);
//   });
// })();