<?php
	session_start();
	echo "Hello";
	$id=$_SESSION["id"];
	$satus="Deactivate";
	$conn=mysqli_connect('localhost','root','','helpdesk');
	$query="UPDATE employee SET em_status='$satus' WHERE em_contact='$id'";
	$result=mysqli_query($conn,$query);
	header("location:employeeActive.php");	
?>