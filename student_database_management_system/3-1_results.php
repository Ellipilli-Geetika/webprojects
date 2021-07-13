<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into 3_1results(roll_no,software_engineering,operating_system,database_management_system,compiler_design)  values('$_POST[roll_no]','$_POST[software_engineering]','$_POST[operating_system]','$_POST[database_management_system]','$_POST[compiler_design]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("marks added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
