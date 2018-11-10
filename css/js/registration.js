$(document).ready(function(){
	$(document).on('click',"#insert", function(e){
		e.preventDefault();
		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
		var email2 = $('#email2').val();
		var password = $('#password').val();
		if (first_name =="") {
			$('#first_name').css({"border": "2px solid red"});
			//$('#last_name').css({"border": "2px solid red"});
		} else if(last_name == '') {
			$('#last_name').css({"border": "2px solid red"});
		} else if(email2 == ''){
			$('#email2').css({"border": "2px solid red"});
		} else if (password == '') {
			$('#password').css({"border": "2px solid red"});
		} else if ($("input[name='sex']:checked").val() == null) {
			$('.gender-span').show();
		}

		else{
		//alert('I Clicked here');
		$.ajax({
			url: 'include/insert.php',
			type: 'POST',
			data: new FormData($('#form-insert')[0]),
			contentType:false,
			processData:false,
			success:function(respose){
				$('.afterresponce').html(respose);
				 //alert(respose);
			}
		}); // AJAX
		}
	});// ON CLICK FUNCTION
});