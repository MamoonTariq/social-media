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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<script src="css/js/jquery.js"></script>
	<script src="css/js/bootstrap.js"></script>
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
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        <!--/.container-fluid -->
      </nav>
	</div>

</body>
</html>