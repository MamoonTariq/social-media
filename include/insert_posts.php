<?php
include 'connect.php';
if (isset($_POST['name']) || isset($_FILES['file_name']['name'])) {
	 $mind = $_POST['name'];
	 $user_id = $_POST['user_id'];

	 $img = $_FILES['file_name']['name'];
	 $tmp = $_FILES['file_name']['tmp_name'];
	 $path = '../images/';
	if ( empty($mind) && empty($img) ) {
		
	} elseif (empty($img)) {
		 $sql = " INSERT INTO posts ( user_id , image , mind ) VALUES ( '$user_id' ,  '$img' , '$mind' ) ";
	      $query_run = mysqli_query( $conn , $sql );
	} else{
	  $allowed = array( 'png' , 'jpg' , 'jpeg' , 'gif' );
	  $explodeImg = explode( '.', $img );

	  $imgext = end($explodeImg);
	  if (in_array($imgext, $allowed)) {
	    if (move_uploaded_file($tmp, $path.$img)) {
	      $sql = " INSERT INTO posts ( user_id , image , mind ) VALUES ( '$user_id' ,       '$img' , '$mind' ) ";
	      $query_run = mysqli_query( $conn , $sql );
	    }
	  } else {
	    echo "Invalid File";
	  }
	}
}

?>