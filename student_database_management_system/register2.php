<?php 
include 'server.php' ;
error_reporting(0);
session_start();
 if (isset($_POST['submit']))
 {  $rollno=$_POST['rollno'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

  if($password ==$cpassword)
 {
	    $sql = "SELECT * FROM students WHERE rollno='$rollno' ";
	    $result = mysqli_query($conn,$sql);
	       	$sql ="INSERT INTO users (rollno,email,password_1)
                     VALUES ('$rollno','$email','$password')";
              $result = mysqli_query($conn,$sql);
    
          if (!$result) 
          {
            	echo "<script>alert('Oops! something went wrong .')</script>";
          }
          else
          {
             	echo "<script>alert('Registration successfull')</script>";
             	header("Location: admin_dashboard.php");
            	$rollno="";
            	$email="";
            	$_POST['password']="";
            	$_POST['cpassword']="";
          }

	    
      
            
	 }
	    
	  

	else
	   {
	    	echo "<script>alert('password not matched.')</script>";

	   }

}
 	


 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body style="background: url(back2.jpg) no-repeat;
	background-size: cover";>


  


		<div class="register-box">
			<h1>Register</h1>
			
		
		<form method ="POST" action="register.php">
			
			<div class="input-group">
				<label>Rollno</label>
				<input type="text" name="rollno" placeholder="18VV1A0508" value="<?php echo $rollno;?>" required>
				
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="name@gmail.com" value="<?php echo $email;?>" required>
				
			</div>
			<div class="input-group">
				<label>Password</label>

								<input type="password" name="password" placeholder="password" value="<?php echo $_POST['password'];?>"  required>
				
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="cpassword" placeholder="confirm password" value="<?php echo $_POST['cpassword'] ;?>"  required>
				
			</div>
			<div class="input-group">
				<button type="submit" name="submit" class="btn">Register</button>
			</div>
			<p> 
				Already a member? <a href="faculty_login.php">Sign in</a></p>
		</form>

	</div>
	</body></html>
