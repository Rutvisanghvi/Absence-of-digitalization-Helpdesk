<?php
	session_start();
	$id=$_SESSION["id"];
	$proxy=$_POST['proxy'];
	$conn=mysqli_connect('localhost','root','','helpdesk');
	$query = "SELECT * FROM employee where em_contact='$id'"; 
	//echo $proxy;
	$result = mysqli_query($conn,$query); 
	while($row = mysqli_fetch_array($result))
	{
		if($row[6]=='Deactivate')
	{
		$satus=$row[6].' '.$proxy;
	//echo $satus;	
		$query="UPDATE employee SET em_status='$satus' WHERE em_contact='$id'";
		$result=mysqli_query($conn,$query);
		header("location:employeeActive.php");	
	}
		else if($row[6]=='On Leave')
	{
		$satus=$row[6].' '.$proxy;
		$query="UPDATE employee SET em_status='$satus' WHERE em_contact='$id'";
		$result=mysqli_query($conn,$query);
		header("location:employeeActive.php");
	}
	else
	{
		header("location:employeeActive.php");
	}
	}
?>