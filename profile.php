<?php

session_start();
$user_id = $_SESSION['id'];
if (!isset($_SESSION['email'])) {
	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo$_SESSION['first_name'] ;?></title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css/profile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
	<script src="css/js/jquery.js"></script>
	<script src="css/js/bootstrap.js"></script>
  <script src="css/js/upload-posts.js"></script>
  <script src="css/js/show-post-imag-bef-upload.js"></script>
  <script src="css/js/show-posts.js"></script>
  <script src="css/js/like-system.js"></script>
  <script src="css/js/comment-upload.js"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default">  
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/fb-logo.png"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li>
	              <form class="search">
      					  <input type="text" placeholder="Search" name="search">
      					  <button type="submit"><i class="fa fa-search"></i></button>
      				  </form>
			       </li>   
            </ul>
            <ul class="nav navbar-nav">
            	<li><a class="navtext" href=""><?php echo $_SESSION['first_name'] ;?></a></li>
            	<li><a class="navtext" href="">Home</a></li>
              <li><a class="navicons" href="./"><i class="fas fa-user-friends"></i></a></li>
              <li><a class="navicons" href="../navbar-static-top/"><i class="fab fa-facebook-messenger"></i></a></li>
              <li><a class="navicons" href="../navbar-fixed-top/"><i class="fas fa-bell"></i></a></li>
              <li><a class="navicons" href="../navbar-fixed-top/"><i class="fas fa-question-circle"></i></a></li>
              <li class="dropdown">
                <a class="navicons" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdownbtn"><a href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </nav>
	</div>

  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-5">
        <div class="col-posts">
        <ul>
          <li>Make Post</li>
          <li>Photo/Vedio</li>
          <li>Live Video</li>
          <li>Life Event</li>
        </ul>
        <form method="POST" enctype="multipart/form-data" id="form-insert">
          <input type="hidden" name="user_id" id="users" value="<?php echo $_SESSION['id']; ?>">
          <div class="post-input">
            <input type="text" name="name" placeholder="Whats on your Mind">
          </div>
          <div class="post-img">
            <form method="POST" enctype="multipart/form-data" id="add">
              <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['id']; ?>"> 
              <input type="hidden" name="store-images" id="store-images">
              <input type="file" name="file_name" id="files" >
              <div class="live-posts">
              </div>
            </form>
          </div>
          <div class="post-button">
            <div style="width: 20%">
              <button type="button" name="submit" class="btn btn-success" id="insert">Upload
              </button>
            </div>
          </div>
        </form>
        </div>
        <div class="show-posts"></div>
      </div> <!-- col-md-5 -->
    </div> <!-- Row -->
  </div>
</body>
</html>
