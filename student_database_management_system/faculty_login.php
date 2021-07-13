<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(back2.jpg) no-repeat;
	background-size: cover;">
	<center><a href="index.php" style="color:white;font-size: larger;"><b>Student Management System</b><a> </center>
	<center><br><br>
		<div class="login-box">
		<h3 style="text-shadow: 1px 1px #eeeeee; color:#4cef50;">Faculty LogIn Page</h3><br>
		<form action="" method="post">
			<div class="input-group">
				<i class="fas fa-user"></i>
				
				<input type="email" name="email" required>
				
			</div>
			<div class="input-group">
				<i class="fas fa-lock"></i>
				
				<input type="password" name="password" required>
				
			</div>
			
			
            <div>
				<button type="submit" name="submit" class="btn"><b>Login</b></button>
			</div>
			 
				Are you a student? <a href="student_register1.php">Student register</a></p>

			
		</form><br>
	</div>

<div style="color:white;"><b>
	Note : please import the data.sql file into database with name registration_table</b> </div>
	      <div style="color:white;"> <b>Then use the login credentials : username:geetikaellipilli12@gmail.com passsword:geetika1234</b>
		</div>
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['s_no'] =  $row['s_no'];
							$_SESSION['email'] =  $row['email'];
							header("Location: admin_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
							
						}
					}
				}
			}	
			
		?>
	</center>
</body>
</html>