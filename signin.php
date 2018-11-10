<?php 
include 'include/connect.php';

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	
	$sql = " SELECT * FROM user_information where email = '$email' and password = '$pass' ";
	$con = mysqli_query($conn , $sql);
	$run = mysqli_fetch_assoc($con);
	if (!$run) {
		$error = "Account Not found";
	} else{
		session_start();
		$_SESSION['id']=$run['id'];
		$_SESSION['email']=$email;
       $_SESSION['first_name']=$run['first_name'];
       header('Location: profile.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css/signin.css">
	<script src="css/js/jquery.js"></script>
	<script src="css/js/bootstrap.js"></script>
</head>
<body>
	<div class="head">
		<div class="container">
			<div class="row fb-nav">
				<div class="col-md-6 col-fb-logo">
					<div class="fb-logo">
						<h1 style="margin-top: 10px;margin-bottom: 14px;">
							<u>facebook</u>
							<a class="signin-btn" href="index.php">Sign Up</a>
						</h1>

					</div>
				</div> <!-- END OF FIRST COL -->
			</div> <!-- END OF ROW -->
		</div> <!-- END OF CONTAINER -->
	</div> <!-- END OF HEAD -->
	<div class="container-fluid">
		<div class="box">
			<div class="login-system">
				<div class="login-title">
					<span>Log in to Facebook</span>
				</div>
				<div class="login-form">
					<form method="POST">
						<input type="text" name="email" required="" placeholder="Email address or phone number"><br>
						<input type="password" name="password" required="" placeholder="Password"><br>
							<?php if (isset($error)): ?>
								<span style="color: red;"><?php echo $error; ?></span>
							<?php endif ;?>
						<div class="login-button" style="padding-bottom: 10px;">
							<button class="login-btn" name="login" >Log In</button>
						</div>
						<div class="links">
							<a href="#">Forgotton account?</a>
							<span><a href="index.php">Sign Up for Facebook</a></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<div class="container" style="margin-top: 127px;">	
		<div class="footer">
			<ul class="lang-list">
				<li>English(UK)</li>
				<li><a href="#">اردو</a></li>
				<li><a href="#">پښتو</a></li>
				<li><a href="#">العربية</a></li>
				<li><a href="#">हिन्दी</a></li>
				<li><a href="#">বাংলা</a></li>
				<li><a href="#">ਪੰਜਾਬੀ</a></li>
				<li><a href="#"></a>فارسی</li>
				<li><a href="#"></a>ગુજરાતી</li>
				<li><a href="#"></a>Deutsch</li>
				<li><a href="#">Español</a></li>
				<li class="plus-btn"><a role="button" href="#">+</a></li>
			</ul>
		</div>
		<div class="line"></div>
		<div class="footer-second ">
			<ul class="lang-list">
				<li><a href="">Sign Up</a></li>
				<li><a href="#">login</a></li>
				<li><a href="#">Messanger</a></li>
				<li><a href="#">Facebook Lite</a></li>
				<li><a href="#">Mobile</a></li>
				<li><a href="#">Find Friends</a></li>
				<li><a href="#">People</a></li>
				<li><a href="#"></a>Pages</li>
				<li><a href="#"></a>Video</li>
				<li><a href="#"></a>Places</li>
				<li><a href="#">Games</a></li>
				<li><a href="#">Locations</a></li>
				<li><a href="#">MarketPlace</a></li>
				<li><a href="#">Groups</a></li>
				<li><a href="">Sign Up</a></li>
				<li><a href="#">login</a></li>
				<li><a href="#">Messanger</a></li>
				<li><a href="#">Facebook Lite</a></li>
				<li><a href="#">Mobile</a></li>
				<li><a href="#">Find Friends</a></li>
				<li><a href="#">People</a></li>
				<li><a href="#"></a>Pages</li>
				<li><a href="#"></a>Video</li>
				<li><a href="#"></a>Places</li>
				<li><a href="#">Games</a></li>
				<li><a href="#">Locations</a></li>
				<li><a href="#">MarketPlace</a></li>
				<li><a href="#">Groups</a></li>
			</ul>
		</div>		
		<div class="main-footer">
			<span> Facebook © 2018</span>
		</div>
	</div>

</body>
</html>