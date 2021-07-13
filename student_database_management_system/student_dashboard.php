<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 14%;
			width: 100%;
			
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 20%;
			top: 15%;
			background-color: burlywood;
			position: fixed;
			border: solid 1px black;
			box-shadow: 2px 2px #333333;
			
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color : lightcyan;
			position: fixed;
			left: 17%;
			right: 20%;
			top: 15%;
			color: red;
			border: solid 1px black;
			box-shadow: 2px 2px #333333;
		}
         
        .buttons{
        	padding: 5px 5px;
        	padding-right: 10px;
        	width: 100%;

        }
        
	.img img{
	
			width: 650px;
			height: 470px;

	}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body style="background-color: grey;">
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			<div class="input-group">
						<input type="submit" class="buttons" name="edit_detail" value="Edit Detail">
				</div>
				<div class="input-group">
						<input type="submit" class="buttons" name="show_detail" value="Show Detail">
				</div>
				<div class="input-group">
						<input type="submit" class="buttons" name="time_table" value="Time table">
				</div>
				<div class="input-group">
						<input type="submit" class="buttons" name="3-1_results" value="3-1 results">
				</div>
				<div class="input-group">
						<input type="submit" class="buttons" name="3-2_results" value="3-2 results">
				</div>
				</center>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students_table where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<center><table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Father's Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>year:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['year']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Ph_no:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['ph_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					
				</table></center>
				<?php
				}	
			}
			?>

			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from students_table where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<center>
					<form action="edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>year:</b>
							</td> 
							<td>
								<input type="text" name="year" value="<?php echo $row['year']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Ph_no:</b>
							</td> 
							<td>
								<input type="text" name="ph_no" value="<?php echo $row['ph_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<br>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form></center>
					<?php
				}
			}
			?>
			

<?php
			if(isset($_POST['3-1_results']))
			{
				$query = "select * from 3_1results where roll_no = '$_SESSION[roll_no]'";
				$query_run = mysqli_query($connection,$query);
			if($query_run){
				while ($row = mysqli_fetch_assoc($query_run)) 
				{?>
				<center><table>
					
					<tr>
						<td>
							<b>software enginnering</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['software_engineering']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>data base management system</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['database_management_system']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>operating system</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['operating_system']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>compiler design:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['compiler_design']?>" disabled>
						</td>
					</tr>
					
					
				</table></center><?php 
				}}}
			
			?>
				<?php
			if(isset($_POST['time_table']))
			{   ?><center> <div class="img"><img src="table.jpg"></div></center><?php
				}
?>

<?php
			if(isset($_POST['3-2_results']))
			{
				$query = "select * from 3_2results where roll_no = '$_SESSION[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				if($query_run){
				while ($row = mysqli_fetch_assoc($query_run)) 
				{?>
				<center><table>
					
					<tr>
						<td>
							<b>web technologies</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['web_technologies']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>computer networks</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['computer_networks']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>data algorithm and analysis</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['daa']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>artificial intelligence:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['artificial_intelligence']?>" disabled>
						</td>
					</tr>
					
					
				</table></center><?php 
				}}
			}	
			?>
		</div>
	</div>
</body>
</html>