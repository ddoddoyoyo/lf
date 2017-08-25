function view_search(){

	$('.moreView').remove();

	var list_cnt = $('.list .article').length;
	var limit = 0;


	if(list_cnt == $('#TOT_LIST_COUNT').val()){
		return false;
	}

	list_cnt = list_cnt; 
	
	$.ajax({
		url: "../ms/timeline_view_data.php",
		type: "POST",
		dataType: "json",
		data:{
			list: list_cnt,
			Total_Cnt: $('#TOT_LIST_COUNT').val(),
		},
		success:  function(json){
			//console.log(json);
			if(json.data){
				$('.list').append(json.data);
			}

		}
	});
}