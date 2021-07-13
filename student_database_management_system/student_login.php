<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(back2.jpg) no-repeat;
	background-size: cover;">
<center><a href="index.php" style="color:white;font-size: larger;"><b>Student Management System</b><a> </center>
	<center><br><br>
	<center><br><br>
		<div class="login-box">
		<h3 style="text-shadow: 1px 1px #eeeeee; color:#4cef50;">Student LogIn Page</h3><br>
		<form action="student_login.php" method="post">
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
			<p> 
				Are you a faculty member? <a href="faculty_login.php">faculty login</a></p>
			
		</form><br>
	</div>
		
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students_table where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['roll_no'] =  $row['roll_no'];
							$_SESSION['father_name'] =  $row['father_name'];
							$_SESSION['year'] =  $row['year'];
							$_SESSION['ph_no'] =  $row['ph_no'];
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							
							header("Location: student_dashboard.php");
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