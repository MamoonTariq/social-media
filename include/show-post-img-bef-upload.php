<?php
if (isset($_FILES['file_name']['name']) || isset($_POST['user_id'])) {
	$user_id = $_POST['user_id'];
 	$img = $_FILES['file_name']['name'];
 	$tmp = $_FILES['file_name']['tmp_name'];
 	$path = '../images/';
 	
	$allowed = array( 'png' , 'jpg' , 'jpeg' , 'gif' );
  	$explodeImg = explode( '.', $img );

  	$imgext = end($explodeImg);
  	if (in_array($imgext, $allowed)) {
  		if (move_uploaded_file($tmp, $path.$img)) {
  			$url = 'images/'.$img;
  			echo $url;
  		}
  	}
}

?>