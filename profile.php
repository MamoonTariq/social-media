<?php
session_start();
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="css/js/jquery.js"></script>
	<script src="css/js/bootstrap.js"></script>
  <script src="css/js/posts.js"></script>
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
            	<li><a href=""><?php echo $_SESSION['first_name'] ;?></a></li>
            	<li><a href="">Home</a></li>
              <li><a href="./">Frnd</a></li>
              <li><a href="../navbar-static-top/">Message</a></li>
              <li><a href="../navbar-fixed-top/">Notification</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
          <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
          <div class="post-input">
            <input type="text" name="name" placeholder="Whats on your Mind">
          </div>
          <div class="post-img">
            <input type="file" name="file_name">
          </div>
          <div class="post-button">
            <div style="width: 20%">
              <button type="button" name="submit" class="btn btn-success" id="insert">Upload
              </button>
            </div>
          </div>
        </form>
        </div>
        <div class="shown_data" style="padding-left: 6px;border: 1px solid black;padding-bottom: 20px;margin-top: 60px;">
          This Picture is updated by     </p>
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdownbtn"><a href="logout.php">Logout</a></li>
                </ul>
              </li>

          <div class="old_image">
            <img src="images/44278058_295338851083015_4705177724065415168_n.jpg">
          </div>
          <div>
              <i onclick="myFunction(this)" class="fa fa-thumbs-up">Like</i>
          </div>
        </div>
    </div>

    

  </div>



  <!-- Create A Posts -->
  
  </div>
</body>
</html>
















<!-- 
<form >
          <input type="hidden" name="user_id" value=" echo $_SESSION['id'];">
          <div class="form-group">
            <label>FIRST NAME</label>
            <input type="text" class="form-control" name="name" id="name" >
          </div>
          <div class="form-group">
            <label for="file">UPLOAD PICTURE</label>
            <input type="file" class="form-control" name="file_name" id="file">
          </div>
          
        </form> -->