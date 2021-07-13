<?php 
include 'server.php' ;
error_reporting(0);
session_start();
 if (isset($_POST['submit']))
 {  $roll_no=$_POST['roll_no'];
$email=$_POST['email'];
$name=$_POST['name'];
$father_name=$_POST['father_name'];
$year=$_POST['year'];
$ph_no=$_POST['ph_no'];
$password=$_POST['password'];

  
	    
	   
	       	$sql ="INSERT INTO students_table (roll_no,name,father_name,year,ph_no,email,password)
                     VALUES ('$roll_no','$name','$father_name','$year','$ph_no','$email','$password')";
              $result = mysqli_query($conn,$sql);
    
          if (!$result) 
          {
            	echo "<script>alert('Oops! something went wrong .')</script>";
            	header("Location: student_dashboard.php");
          }
          else
          {
             	echo "<script>alert('Registration successfull')</script>";
             	header("Location: student_dashboard.php");
            	$s_no="";
            	$email="";
            	$name="";
            	$father_name="";
            	$year="";
            	$ph_n0="";
            	$_POST['password']="";
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
			
		
		<form method ="POST" action="student_register1.php">
			<div class="input-group">
				<label>Roll No</label>
				<input type="number" name="roll_no"  value="<?php echo $roll_no;?>" required>
				
			</div>
			<div class="input-group">
				<label>Name</label>
				<input type="text" name="name"  value="<?php echo $name;?>" required>
				
			</div><div class="input-group">
				<label>Father Name</label>

								<input type="text" name="father_name"  value="<?php echo $father_name;?>"  required>
				
			</div>
			<div class="input-group">
				<label>year</label>

								<input type="text" name="year"  value="<?php echo $year;?>"  required>
				
			</div>
			<div class="input-group">
				<label>Ph No </label>

								<input type="number" name="ph_no"  value="<?php echo $ph_no;?>"  required>
				
			</div>
			<div class="input-group">
				<label>Email</label>

								<input type="email" name="email"  value="<?php echo $email;?>"  required>
				
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password"  value="<?php echo $_POST['password'] ;?>"  required>
				
			</div>
			<div class="input-group">
				<button type="submit" name="submit" class="btn">Register</button>
			</div>
			<p> 
				Already a member? <a href="student_login.php">Sign in</a></p>
				<p> 
				Are you a faculty? <a href="faculty_login.php">faculty login</a></p>
		</form>

	</div>
	</body></html>
