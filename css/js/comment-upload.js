
$(document).on('keypress', '.comment' , function(){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){

		var post_id = $(this).attr('id');
		var user_id = $('#user_id').val();
		var comment = $('#'+post_id).val(); //#comment-14 
		//console.log(comment);
		$.ajax({
			url: 'include/comments.php',
			type: "POST",
			data: {
				post_id : post_id,
				user_id: user_id,
				comment: comment
			},
			success: function(response){
				console.log(response);
			}
		});
 }
});










// $('#comment').keypress(function(event){
// 	alert('sss');
	
// 	var keycode = (event.keyCode ? event.keyCode : event.which);
// 	if(keycode == '13'){
// 		alert('You pressed a "enter" key in textbox');	
// 	}
// 	event.stopPropagation();
// });

// $(document).keypress(function(event){
	
// 	var keycode = (event.keyCode ? event.keyCode : event.which);
// 	if(keycode == '13'){
// 		alert('You pressed a "enter" key in somewhere');	
// 	}	
//  });



//  var id = $('comment'+id);
// $(document).on('click',id , function(){
// 	alert(id);
// });


// var input = document.getElementById("comment");
// input.addEventListener("keyup", function(event) {
//     event.preventDefault();
//     if (event.keyCode === 13) {
//         alert("This enter button is working correctly");
//     }
// });