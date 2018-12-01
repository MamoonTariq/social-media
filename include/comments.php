<?php
include 'connect.php';
if (isset($_POST['post_id']) && isset($_POST['user_id'])) {
	$post_id = $_POST['post_id'];
	$user_id = $_POST['user_id'];
	echo $post_id;
}


?>