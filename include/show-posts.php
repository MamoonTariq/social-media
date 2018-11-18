<?php
include 'connect.php';
$user_id = $_POST['val'];
$sql = "SELECT * FROM  posts where user_id = $user_id ";
$run = mysqli_query($conn , $sql);
while ($result = mysqli_fetch_array($run)) {
  echo '<h1>'.$result['user_id'].'</h1>';
}

?>