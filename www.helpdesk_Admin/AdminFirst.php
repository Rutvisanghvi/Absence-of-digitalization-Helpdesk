<html>
<head>
 <title>Department</title>
	<link rel="stylesheet" href="NewDeptadmin.css" type="text/css">
</head>
<body>   
   <!--header-->
 <div class="headerr">
  <h1 class="heading" name="head_1">Departments</h1>
 </div>
  <button id="b1"><a href="add_dept.php">AddDepartment</a></button>
 
<div class="main"  style="padding-right: 20px;">
<?php
$conn = mysqli_connect('localhost', 'root', '','helpdesk'); 
$query = "SELECT * FROM department"; 
$result = mysqli_query($conn,$query); 
while($row = mysqli_fetch_array($result))
{
	echo "<div class='card'>";
	echo "<div class='image'><img name='image_6' src='uploads/$row[3]'></div>";
	echo "<div class='title'><h1 name='head_7'>";
	echo "<h1>ID:$row[0]<br/>";
	echo $row['de_name']."</h1>";
	$de_id=$row[0];
	echo "</h1></div><div class='des'><p name='para_6'>";
	echo $row['de_desc']."</p>";
	echo "<button name='bt_1'><a href='employeeadmin.php?de_id=$de_id'>View Employee</a></button>";
	echo "<button class='r2'><a href='edit_dept.php?de_id=$row[0]&de_name=$row[1]&de_desc=$row[2]'>Edit</a></button>";
	echo "<button name='bt_2'><a href='Delete_dept.php?de_id=$row[0]&de_name=$row[1]&de_desc=$row[2]'>Remove</a></button>";
	echo "</div></div>";
	}
	mysqli_close($conn); 
	?>
  </div>
</body>
</html>
