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
 
while ($result = mysqli_fetch_array($run)) {
//   echo '<pre>';
// print_r($result);
 
//  echo '</pre>';

  echo '<div class="shown_data">
          <div class="posts-content">
          <h4>'.$result['post_text'].'</h4>
            <table width="100%">
              <tr>
               <th class="post-name"></th>
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
          $a = 1;
          foreach ($ImplodeImg as $img) {
          	echo '<img class="'.$a.'" src="'.$img.'"></br>';
            $a++;
          }
          //echo'gggghgggggg'.userLiked($result['id']);
           echo '
          </div>
          <div class="row">
            <div class="col-md-6 post-inf">
                <i '; 
                if (userLiked($result['id'])) {
                  echo 'class="fa fa-thumbs-up like-btn"';
                } else{
                  echo 'class="fa fa-thumbs-o-up like-btn"';
                }
                echo 'data-id="'.$result['id'].'"></i>
                <span class="likes">'.getLikes($result['id']).'</span>
            </div>
            <div class="col-md-6 comment-system">
              <a href="#comment-'.$result['id'].'">Comment</a>
            </div>
          </div>
          <div class="comm">
            <input type="hidden" id="user_id" value="'.$user_id.'" >
            <input id="comment-'.$result['id'].'" type="text" class="comment" placeholder="Write a Comment.." />

            <div class="show-comments" >
              <input type="hidden" id="user_id" value="'.$user_id.'" >
              <input id="comment" value="'.$result['id'].'" type="hidden" class="comment" />
             
            </div>
          </div>
        </div>';
  
}

function getLikes($id){
  include 'connect.php';
  $like_query ="SELECT COUNT(*) FROM post_likes WHERE post_id = $id AND like_info = 'like'";
  $run = mysqli_query( $conn , $like_query );
  $result = mysqli_fetch_array($run);
  return $result[0];
}

function userLiked($id){
  global $user_id;
  include 'connect.php';
  echo $like_query ="SELECT * FROM post_likes WHERE user_id = $user_id AND post_id = $id AND like_info = 'like'";
  $run = mysqli_query( $conn , $like_query );
  if (mysqli_num_rows($run)>0) {
    return true;
  } else{
    return false;
  }
}

?>