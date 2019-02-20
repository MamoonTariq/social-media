<?php
include 'connect.php';
if (isset($_POST['post_id']) && isset($_POST['user_id']) && isset($_POST['comment'])) {
	$post_id = $_POST['post_id'];
	$comment = $_POST['comment'];
	$user_id = $_POST['user_id'];

	$post_idExp = explode('-', $post_id);
	$posts_id = end($post_idExp);
	//echo $po;
	
	if ($comment == '') {
		
	} else{
		$sql = "INSERT INTO comments ( user_id , post_id , comments ) VALUES ( '$user_id' , '$posts_id' 	, '$comment' )";
		$query = mysqli_query($conn , $sql);
		
	}
}


?>