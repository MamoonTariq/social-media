<?php
if (isset($_POST['img']) || isset($_POST['img_collection'])) {

	
	 $img = $_POST['img'];
	 $explodeImg = explode( 'images/', $img );
	 $imgext = end($explodeImg);
	 $path = '../images/';
	 unlink($path.$imgext);


	$img_collection = $_POST['img_collection'];
	if (!empty($img_collection)) {

	 	$explodeImg_col = explode(',', $img_collection);

	 	$pos = array_search($img, $explodeImg_col);

			//echo 'Linus Trovalds found at: ' . $pos;

			// Remove from array
			unset($explodeImg_col[$pos]);

			$response =  implode(", ", $explodeImg_col);    //prints 1, 2, 3
   			       //prints 1, 2, 3

			echo $response;
				 }
}

?>