<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into 3_2results(roll_no,web_technologies,computer_networks,daa,artificial_intelligence)  values('$_POST[roll_no]','$_POST[web_technologies]','$_POST[computer_networks]','$_POST[daa]','$_POST[artificial_intelligence]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("marks added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
