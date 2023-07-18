<?php
echo"Remove";
 $id=$_GET['de_id'];
 $conn = mysqli_connect('localhost', 'root', '','helpdesk'); 
$query = "DELETE * from department where de_id=$id"; 
$result = mysqli_query($conn,$query); 
echo "<html><script>alert('Delete record successfully');</script></html>";
		header("location:AdminFirst.php");
?>
<html>
	<head>
		<title>Remove</title>
	</head>
</html>