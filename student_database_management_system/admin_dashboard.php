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
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php">Logout</a>
		</center>
	</div>
	
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<div class="input-group">
						<input type="submit" class="buttons" name="search_student" value="Search Student">
					</div>
					<div class="input-group">
						<input type="submit" class="buttons" name="edit_student" value="Edit Student">
					</div>

					<div class="input-group">
				<input type="submit" class="buttons" name="delete_students" value="delete students">
			</div> 
					<div class="input-group">
				<input type="submit" class="buttons" name="show_students" value="show students">
			</div>
			<div class="input-group">
				<input type="submit" class="buttons" name="3-1_marks" value="3-1 marks">
			</div>
			<div class="input-group">
				<input type="submit" class="buttons" name="3-2_marks" value="3-2 marks">
			</div>

		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Student's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students_table where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?><center>
						<table>
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
									<b>Mobile No:</b>
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
							
						</table></center>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students_table where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?><centre>
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
								<input type="text" name="class" value="<?php echo $row['year']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile no:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['ph_no']?>">
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
						
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form></centre>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_students']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			
			<?php
				if(isset($_POST['show_students']))
				{
					?>
					<center>
						<h5>Students's Details</h5>
						<table>
							<tr>
								<td id="td"><b>Roll No</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Mobile</b></td>
								<td id="td"><b>Email</b></td>
								
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from students_table";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['roll_no']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['ph_no']?></td>
								<td id="td"><?php echo $row['email']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>

			<?php 
				if(isset($_POST['3-1_marks'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="3-1_results.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>software engineering</b>
							</td> 
							<td>
								<input type="text" name="software_engineering" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>operating system</b>
							</td> 
							<td>
								<input type="text" name="operating_system" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>data base management system</b>
							</td> 
							<td>
								<input type="text" name="database_management_system" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>compiler design</b>
							</td> 
							<td>
								<input type="text" name="compiler_design" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add 3-1 marks"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			<?php 
				if(isset($_POST['3-2_marks'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="3_2results.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>web technologies</b>
							</td> 
							<td>
								<input type="text" name="web_technologies" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>computer network</b>
							</td> 
							<td>
								<input type="text" name="computer_networks" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>data algorithm and analysis</b>
							</td> 
							<td>
								<input type="text" name="daa" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>artificial intelligence</b>
							</td> 
							<td>
								<input type="text" name="artificial intelligence" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add 3-2 marks"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
		</div>
	</div>
</body>
</html>