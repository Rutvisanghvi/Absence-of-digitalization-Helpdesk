<?php
	echo "Welcome";
		$id=$_GET['de_id'];
		$conn=mysqli_connect('localhost','root','','helpdesk');
		$query="DELETE from department WHERE de_id='$id'";
		mysqli_query($conn,$query);
		mysqli_close($conn);
		echo "<html><script>alert('Delete record successfully');</script></html>";
		header("location:AdminFirst.php");
?>