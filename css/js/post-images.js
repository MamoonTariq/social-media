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

			var d = Math.floor(Date.now()/1000);
			//var d = dt.toUTCString();

			var url_image =	$('#store-images').val();
			var live_image = $('.live-posts').html();
			if (url_image !== '') {
				url_image = url_image+','+responce;
				live_image = live_image+'<div id="image-id-'+d+'" style="border: 1px solid;width: 33%;">\
				  <input type="hidden" name="date-time" value="'+d+'">\
                  <button id="'+d+'" value="'+d+'" style="float: left;width: 100%" class="btn btn-danger" value="'+d+'" type="button">X</button>\
                  <img style="max-width: 146px;" id="img" src="'+responce+'">\
                  <input type="hidden" id="img-'+d+'" value="'+responce+'">\
                </div>';
			} else{
				url_image = responce;
				live_image = '<div id="image-id-'+d+'" style="border: 1px solid;width: 33%;">\
                  <button id="'+d+'" value="'+d+'" style="float: left;width: 100%" class="btn btn-danger" value="'+d+'" type="button">X</button>\
                  <input type="hidden" name="date-time" value="'+d+'">\
                  <img style="max-width: 146px;" id="img" src="'+responce+'">\
                  <input type="hidden" id="img-'+d+'" value="'+responce+'">\
                </div>';
			}
			$('#store-images').val(url_image);
			$('.live-posts').html(live_image);
			}
		});
	});

	$(document).on('click','.btn-danger',function(){
		//
		var img = $("#img-"+this.id).val();
		$('#image-id-'+this.id).remove();
		var img_collection = $("#store-images").val();
		$.ajax({
			url: 'include/img-delete.php',
			type: 'POST',
			data: {img:img,img_collection:img_collection},
			success: function(responce){
				$("#store-images").val(responce);

			}
		});
	});
});


