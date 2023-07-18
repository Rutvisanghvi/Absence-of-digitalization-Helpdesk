<html>
<head>
 <title>employee details</title>
<link rel="stylesheet" href="employee.css" type="text/css">
</head>
<body>
<!--header-->
 <div class="headerr">
  <h1 class="heading" name="head_1">Department employees</h1>
 </div> 
 <?php
 $id=$_GET['de_id'];
 echo "<button id='b1'><a href='add_emp.php?id=$id'>AddEmployee</a></button>";
 ?>
<div class="main">
<?php
$conn = mysqli_connect('localhost', 'root', '','helpdesk'); 
 $id=$_GET['de_id'];
 //echo $id;
$query = "SELECT * FROM employee where de_id=$id"; 
$result = mysqli_query($conn,$query); 
while($row = mysqli_fetch_array($result))
	{
		echo "<div class='card'>";
		echo "<div class='image'><img name='image_1' src='emp/$row[1]'></div>";
		echo "<div class='title'><h1 name='head_2'>";
		$fn=$row['em_name'];
		echo "<h1>".$fn."</h1>";
		$contact=$row['em_contact'];
		echo "</div><div class='des'><p name='para_1'>";
		$des=$row['em_desi'];
		echo $des."<br/>";
		echo $row['6'];
		echo "</p>";
		echo "<button name='bt_1'><a href='editemp.php?em_contact=$contact&de_id=$id&fn=$fn&des=$des'>Edit</a></button>";
		echo "<button name='bt_2'><a href='removeemp.php?em_contact=$contact'>Remove</a></button>";
		echo "</div></div>";
	}
	mysqli_close($conn); 
?>
</div>
</body>
</html>