<?php 
	require('db.php');
	
	$id=$_GET['emp_id'];
	$query = "DELETE FROM employee WHERE emp_id=$id"; 
	$result = mysql_query($query) or die ( mysql_error());
	header("Location: home_employee.php"); 
 ?>