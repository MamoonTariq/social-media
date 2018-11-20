$(document).ready(function(){
	$(document).on('click' , ".like-btn", function(){
		var post_id = $(this).data('id');
		$clicked_btn = $(this);
		//alert($clicked_btn);
		if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
			action = 'like';
		} else if ($clicked_btn.hasClass('fa-thumbs-up')) {
			action = 'unlike';
		}

		$.ajax({
			url: 'include/like-system.php',
			type: 'POST',
			data: {
				'action': action,
				'post_id': post_id
			},
			success: function(data){
				res = JSON.parse(data);

				if (action == 'like') {
					$clicked_btn.removeClass('fa-thumbs-o-up');
					$clicked_btn.addClass('fa-thumbs-up');
				} else if (action == 'unlike') {
					$clicked_btn.removeClass('fa-thumbs-up');
					$clicked_btn.addClass('fa-thumbs-o-up');
				}

				$clicked_btn.siblings('span.likes').text(res.likes);
				
			}
		});
	});


});