<?php 
include 'include/connect.php';

if (isset($_POST['submits'])) {
	$email = $_POST['email2'];
	$pass = md5($_POST['pass2']);
	
	$sql = " SELECT * FROM user_information where email = '$email' and password = '$pass' ";
	$con = mysqli_query($conn , $sql);
	$run = mysqli_fetch_assoc($con);
	if (!$run) {
		header('Location: signin.php');
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
	<title>Facebook – log in or sign up</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css/fb_sign_page.css">
	<script src="css/js/jquery.js"></script>
	<script src="css/js/bootstrap.js"></script>
	<script src="css/js/registration.js"></script>
</head>
<body>
	<div class="head">
		<div class="container">
			<div class="row fb-nav">
				<div class="col-md-6 col-fb-logo">
					<div class="fb-logo">
						<h1 style="margin-top: 10px">
							<u>facebook</u>
						</h1>
					</div>
				</div> <!-- END OF FIRST COL -->
				<div class="col-md-6" style="padding: 0px;">
					<div class="login">
						<form method="POST">
							<table cellspacing="0" role="presentation">
								<tbody>
									<tr>
										<td>
											<label for="email">Email or Phone</label>
										</td>
										<td>
											<label for="pass">Password</label>
										</td>
									</tr>
									<tr>
										<td>
											<input style="color: black" type="text" name="email2" id="email" class="fb-login-inp">
										</td>
										<td>
											<input style="color: black" type="password" name="pass2" id="pass" class="fb-login-inp" >
										</td>
										<td>
											<label class="login-btn">
												<input type="submit" name="submits" value="Log In" class="btn-inp">
											</label>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<div style="font-size: 12px;">
												<a href="" class="forgot-btn">Forgotten account?</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div> <!-- END OF SECOND COL -->
			</div> <!-- END OF ROW -->
		</div> <!-- END OF CONTAINER -->
	</div> <!-- END OF HEAD -->


	<div class="form">
		<div class="container">
			<div class="row">
				<div class="col-md-7" style="padding: 0px">
					<div class="connect-people">
						<div>Facebook helps you connect and share with the people in your life.</div>
						<img src="images/connect-people.png">
					</div>
				</div> <!-- FIRST COL OF FACEBOOK PICTURE -->
				<div class="col-md-5" style="padding: 0px;">
					<div class="create-acc-tag">
						<span>Create an account</span>
					</div>
					<div style="color: #1d2129;font-size: 19px;">
						It's free and always will be.
					</div>
					<form method="POST" class="insert-form" id="form-insert">
                   	<input class="text name-inp"  id="first_name" type="text" name="first_name" placeholder="First Name">
                    <input class="text sure-input" id="last_name" type="text" name="last_name" placeholder="Last Name" >
                    <input class="text email-input" type="email" id="email2" name="email2" placeholder="Email" >
                    
                    <input class="text pass-input" type="password" id="password" name="password" placeholder="Password" >
                    <div class="birthday-block">
                    	<div class="birthday">Birthday</div>
                    	<div class="birthday-selection">
                    		<span class="birth-values">
                    			<select aria-label="day" name="birthday-day" title="day">
                    				<option value="1">1</option>
                    				<option value="2">2</option>
                    				<option value="3">3</option>
                    				<option value="4">4</option>
                    				<option value="5">5</option>
                    				<option value="6">6</option>
                    				<option value="7">7</option>
                    				<option value="8">8</option>
                    				<option value="9">9</option>
                    				<option value="10">10</option>
                    				<option value="11">11</option>
                    				<option value="12">12</option>
                    				<option value="13">13</option>
                    				<option value="14">14</option>
                    				<option value="15">15</option>
                    				<option value="16">16</option>
                    				<option value="17">17</option>
                    				<option value="18">18</option>
                    				<option value="19">19</option>
                    				<option value="20">20</option>
                    				<option value="21">21</option>
                    				<option value="22">22</option>
                    				<option value="23" selected="1">23</option>
                    				<option value="24">24</option>
                    				<option value="25">25</option>
                    				<option value="26">26</option>
                    				<option value="27">27</option>
                    				<option value="28">28</option>
                    				<option value="29">29</option>
                    				<option value="30">30</option>
                    				<option value="31">31</option>
                    			</select>
                    			<select aria-label="month" name="birthday-month" title="month">
                    				<option value="1">Jan</option>
                    				<option value="2">Feb</option>
                    				<option value="3">Mar</option>
                    				<option value="4">Apr</option>
                    				<option value="5">May</option>
                    				<option value="6">Jun</option>
                    				<option value="7">Jul</option>
                    				<option value="8">Aug</option>
                    				<option value="9">Sept</option>
                    				<option value="10" selected="1">Oct</option>
                    				<option value="11">Nov</option>
                    				<option value="12">Dec</option>
                    			</select>
                    			<select aria-label="year" name="birthday-year" title="year">
                    				<option value="2018">2018</option>
                    				<option value="2017">2017</option>
                    				<option value="2016">2016</option>
                    				<option value="2015">2015</option>
                    				<option value="2014">2014</option>
                    				<option value="2013">2013</option>
                    				<option value="2012">2012</option>
                    				<option value="2011">2011</option>
                    				<option value="2010">2010</option>
                    				<option value="2009">2009</option>
                    				<option value="2008">2008</option>
                    				<option value="2007">2007</option>
                    				<option value="2006">2006</option>
                    				<option value="2005">2005</option>
                    				<option value="2004">2004</option>
                    				<option value="2003">2003</option>
                    				<option value="2002">2002</option>
                    				<option value="2001">2001</option>
                    				<option value="2000">2000</option>
                    				<option value="1999">1999</option>
                    				<option value="1998">1998</option>
                    				<option value="1997">1997</option>
                    				<option value="1996">1996</option>
                    				<option value="1995">1995</option>
                    				<option value="1994">1994</option>
                    				<option value="1993" selected="1">1993</option>
                    				<option value="1992">1992</option>
                    				<option value="1991">1991</option>
                    				<option value="1990">1990</option>
                    				<option value="1989">1989</option>
                    				<option value="1988">1988</option>
                    				<option value="1987">1987</option>
                    				<option value="1986">1986</option>
                    				<option value="1985">1985</option>
                    				<option value="1984">1984</option>
                    				<option value="1983">1983</option>
                    				<option value="1982">1982</option>
                    				<option value="1981">1981</option>
                    				<option value="1980">1980</option>
                    				<option value="1979">1979</option>
                    				<option value="1978">1978</option>
                    				<option value="1977">1977</option>
                    				<option value="1976">1976</option>
                    				<option value="1975">1975</option>
                    				<option value="1974">1974</option>
                    			</select>
                    		</span>
                    		<a href="#" title="Click for more information" style="font-size: 11px;">
                    			Why do I need to provide my date of birth
                    		</a>
                    	</div>
                    </div>
                    <div class="gender">
                    	<span>
	                    	<input type="radio" name="sex" value="female" id="gen-m">
	                    	<label class="gender-female">Female</label>
                    	</span>
                    	<span>
	                    	<input type="radio" name="sex" value="male" id="gen-f">
	                    	<label class="gender-male">Male</label>
                    	</span><span class="gender-span"><b>Fill the Checkbox</b> </span>
                    </div>
                    <div class="conditions">
                    	<p>By clicking Sign Up, you agree to our 
                    		<a href="#">Terms</a>,
                    		<a href="#">Data Policy</a>and
                    		<a href="#">Cookie Policy</a>
                    		. You may receive SMS notifications from us and can opt out at any time.
                    	</p>
                    </div>
                    <span class="afterresponce"></span>
                    <div class="clearfix">
                    	<button id="insert">Sign Up</button>
                    </div>
                </form>
                <div class="reg-page-msg">
                	<a href="#">Create a Page</a> for a celebrity,brand or bussiness
                </div>
				</div>
				</div> <!-- SECOND COL OF REGISTRATION  -->
			</div>
		</div>

	
	<div class="container">	
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
	</div>
</body>
</html>