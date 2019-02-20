<?php
include 'connect.php';

if (isset($_POST['user_id']) && isset($_POST['post_id'])) {

	$user_id = $_POST['user_id'];
	$post_id = $_POST['post_id'];
	echo $user_id;
	exit();
	$user = "SELECT first_name FROM user_information WHERE id = $user_id";
	$query = mysqli_query($conn , $user);
	$row = mysqli_fetch_assoc($query);
	$user_name = $row['first_name'];

	$sql = "SELECT * FROM comments WHERE post_id = $post_id";
	$query = mysqli_query($conn , $sql);

	while ($result = mysqli_fetch_array($query)) {
	echo '	 <h6><span class="name-comment">'.$user_name.'</span>This is my best posts of theme ur the bes t poda lkgoij gam aa
                <span class="dropdown">
                  <span data-toggle="dropdown" class="caret"></span>
                  <ul class="dropdown-menu">
                    <li> <button class="btn btn-primary">edit</button></li>
                    <li><button class="btn btn-danger">Delete</button></li>
                  </ul>
              </span>
              </h6> ';
	}
}

?>