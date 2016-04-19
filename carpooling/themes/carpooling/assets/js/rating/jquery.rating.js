function highlightStar(obj,id) {
	removeHighlight(id);		
	$('.rating-table #rating-'+id+' li').each(function(index) {
		$(this).addClass('highlight');
		if(index == $('.rating-table #rating-'+id+' li').index(obj)) {
			return false;	
		}
	});
}

function removeHighlight(id) {
	$('.rating-table #rating-'+id+' li').removeClass('selected');
	$('.rating-table #rating-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
	$('.rating-table #rating-'+id+' li').each(function(index) {
		$(this).addClass('selected');
		$('#rating-'+id+' #rating').val((index+1));
		if(index == $('.rating-table #rating-'+id+' li').index(obj)) {
			return false;	
		}
	});
	var rating =  'user_id='+id+'&rating='+$('#rating-'+id+' #rating').val();
	var comment =  'user_id='+id+'&comment='+$('#rating-'+id+' #comment').val();
	var date =  'user_id='+id+'&trip_date='+$('#rating-'+id+' #trip_date').val();
	var trip_id =  'user_id='+id+'&trip_id='+$('#rating-'+id+' #trip_id').val();
	$.ajax({
	url: baseurl+"rating/add_rating",
	data:rating+date+trip_id+comment,
	type: "POST"
	});
}

function resetRating(id) {
	if($('#rating-'+id+' #rating').val() != 0) {
		$('.rating-table #rating-'+id+' li').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $('#rating-'+id+' #rating').val()) {
				return false;	
			}
		});
	}
} 
