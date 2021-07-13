<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "update students_table set name='$_POST[name]',father_name='$_POST[father_name]',class=$_POST[year],mobile='$_POST[ph_no]',email='$_POST[email]',password='$_POST[password]',' where roll_no = $_POST[roll_no]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "student_dashboard.php";
</script>
