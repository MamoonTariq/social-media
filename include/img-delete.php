<?php
if (isset($_POST['img']) || isset($_POST['img_collection'])) {
	$img_collection = $_POST['img_collection'];
	// $img = $_POST['img'];
	// $explodeImg = explode( 'images/', $img );
	// $imgext = end($explodeImg);
	// $path = '../images/';
	// unlink($path.$imgext);
	echo $img_collection;

}

?>