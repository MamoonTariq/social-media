$(document).ready(function(){

	var user_id = $('#user_id').val();
	var in = $()
	$.ajax({
		url: 'include/show-comments.php',
		type: 'POST',
		data: {
			user_id : user_id,
			
		},
		success: function(response){
			 console.log(response);
			$('.show-comments').html(response);

	var post_id = $('#comment').val();
	console.log(post_id);
		}
	});
		
		
});
