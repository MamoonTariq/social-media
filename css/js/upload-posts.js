$(document).ready(function(){
	$(document).on('click', '#insert', function(e){
		e.preventDefault();
		console.log('I am here 3333');
		$.ajax({
			url: 'include/insert_posts.php',
			type: 'POST',
			data: new FormData($('#form-insert')[0]),
			contentType: false,
			processData: false,
			success: function(response){
				console.log(response);
				//$(".show-posts").append(response);
			}
		});
	});
});

// function showdata(){
// 	$.ajax(){
// 		url: 'include/showposts.php',
// 		type: 'POST',
// 	}
// }


// 
// 