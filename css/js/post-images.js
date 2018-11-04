$(document).ready(function(){
	jQuery("#files").on('change',function(){
		var fd = new FormData();
      	var file = jQuery(document).find('input[name="file_name"]');
      	var user_id = $('#user_id').val();

        var individual_file = file[0].files[0];
       	fd.append("file_name", individual_file);
       	
       	fd.append("user_id" , user_id);

		$.ajax({
			url: 'include/addpost.php',
			type: 'POST',
			data: fd,
			contentType: false,
			processData: false,
			success: function(responce){
			var url_image =	$('#store-images').val();
			var live_image = $('.live-posts').html();
			if (url_image !== '') {
				url_image = url_image+','+responce;
				live_image = live_image+'<div style="border: 1px solid;width: 33%;">\
                  <button style="float: left;width: 100%" class="btn btn-danger" type="button">X</button>\
                  <img style="max-width: 146px;" src="'+responce+'">\
                </div>';
			} else{
				url_image = responce;
				live_image = '<div style="border: 1px solid;width: 33%;">\
                  <button style="float: left;width: 100%" class="btn btn-danger" type="button">X</button>\
                  <img style="max-width: 146px;" src="'+responce+'">\
                </div>';
			}
			$('#store-images').val(url_image);
			$('.live-posts').html(live_image);
			}
		});
	});
});


// jQuery('input[name="student_scrapbook_category_photo"]').on('change', function() {
      
//       var fd = new FormData();
      
//       var file = jQuery(document).find('input[name="student_scrapbook_category_photo"]');

//       var individual_file = file[0].files[0];

//       fd.append("student_scrapbook_category_photo", individual_file);