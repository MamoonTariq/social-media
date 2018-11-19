<?php
include 'connect.php';
$user_id = $_POST['val'];
$sql = "
SELECT 
posts.post_text,
posts.id, 
GROUP_CONCAT(post_images.image SEPARATOR ', ') AS 'image' 
FROM `posts` 
Left JOIN `post_images` on posts.id = post_images.posts_id && posts.user_id = 45 
GROUP BY post_images.posts_id";
$run = mysqli_query($conn , $sql);
// echo '<pre>';
// print_r($run);
// echo '</pre>';
while ($result = mysqli_fetch_array($run)) {
  echo '<div class="shown_data">
          <div class="posts-content">
          <h3>'.$result['post_text'].'</h3>
            <table width="100%">
              <tr>
               <th class="post-name">Mamoon<br>date</th>
               <th>
                  <ul class="nav navbar-nav post-icon">
                    <div class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                      <ul class="dropdown-menu ddm-e-d">
                        <li class="dropdownbtn change"><a href="">Edit</a></li>
                        <li class="dropdownbtn change"><a href="">Delete</a></li>
                      </ul>
                    </div>
                  </ul>
                </th>
              </tr>
           </table>
          </div>
          <div class="old_image">';
          $dbimages = $result['image'];
          $ImplodeImg = explode(',', $dbimages);
          foreach ($ImplodeImg as $img) {
          	echo '<img src="'.$img.'"></br>';
          }
           echo '
          </div>
          <div>
              <i class="fa fa-thumbs-up"></i>
          </div>
        </div>';
  
}

?>