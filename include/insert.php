<?php
 include 'connect.php';
?>
<?php
if( isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['email2']) || isset($_POST['password']) || isset($_POST['birthday-day']) ) {
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email2 = $_POST['email2'];
    $password = $_POST['password'];
    $dateOfBirth = $_POST['birthday-year']."-". $_POST['birthday-month']."-".$_POST['birthday-day'];
   $gender = $_POST['sex'];

     $count = " SELECT * FROM user_information WHERE email = '$email2' ";
     
        $res_u = mysqli_query($conn,$count);
        if (mysqli_num_rows($res_u) > 0 ) {
          echo "Email is Already Exist:";
        } else { 
        	$sql = " INSERT INTO user_information ( first_name, last_name, email, password, dob, gender ) VALUES ('$first_name',
                '$last_name', '$email2', MD5('$password'), '$dateOfBirth', '$gender' ) ";
            $query_run = mysqli_query($conn,$sql );
            if ($query_run) {  
                 echo "Your Account is Created Success";                   
            } 
          }
      } 
//http://localhost/facebook/login.php
?>