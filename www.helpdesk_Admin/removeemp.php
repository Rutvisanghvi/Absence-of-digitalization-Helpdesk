<?php
		$pno=$_GET['em_contact'];
		$conn=mysqli_connect('localhost','root','','helpdesk');
		$query="DELETE from employee WHERE em_contact='$pno'";
		if(mysqli_query($conn,$query))
		{
			header("location:AdminFirst.php");
		}
		mysqli_close($conn);
?>
