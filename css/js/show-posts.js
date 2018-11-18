$(document).ready(function(){
	var val = $('#users').val();
	//alert(val);
		$.ajax({
			url: 'include/show-posts.php',
			type: 'POST',
			data: { val : val },
			success: function(response){
				//console.log(response);
				$('#show-pos').html(response);
			}
	})
});