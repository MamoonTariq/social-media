<?php
include 'connect.php';


if (isset($_POST['action'])) {
	$user_id = '46';
	$post_id = $_POST['post_id'];
	$action = $_POST['action'];

	switch ($action) {
		case 'like':
			$sql = " INSERT INTO `post_likes` (post_id , user_id , like_info) VALUES ($post_id , 		$user_id , '$action' ) 
					ON DUPLICATE KEY UPDATE like_info = 'like' ";
			break;

		case 'unlike':
			$sql = " DELETE FROM post_likes WHERE user_id = $user_id AND post_id = $post_id ";
			break;
		default:
			# code...
			break;
	}

	$run = mysqli_query( $conn , $sql );

	echo getRating($post_id);
	exit(0);

	
}

function getRating($id){
	include 'connect.php';
	
	$rating = array();
	$like_query ="SELECT COUNT(*) FROM post_likes WHERE post_id = $id AND like_info = 'like'";
	$run = mysqli_query( $conn , $like_query );
	$likes = mysqli_fetch_array($run);
	$rating = [
		'likes' => $likes[0]
	];
	

	return json_encode($rating);
}

// function userLiked($id){
// 	global $user_id;
// 	include 'connect.php';
// 	$like_query ="SELECT * FROM post_likes WHERE post_id = $id AND like_info = 'like'";
// 	$run = mysqli_query( $conn , $like_query );
// 	if (mysqli_num_rows($run)>0) {
// 		return true;
// 	} else{
// 		return false;
// 	}
// }





?>