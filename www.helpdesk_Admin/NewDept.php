<html>
<head>
 <title>Department</title>

<link rel="stylesheet" href="employee.css" type="text/css">

</head>
<body>
<!--header-->
 <div class="headerr">
  <h1 class="heading" name="head_1">Departments</h1>
 </div>
 
<div class="main">

<?php
$conn = mysqli_connect('localhost', 'root', '','helpdesk'); 
$query = "SELECT * FROM department"; 
$result = mysqli_query($conn,$query); 
while($row = mysqli_fetch_array($result))
{
	echo "<div class='card'>";
	echo "<div class='image'><img name='image_6' src='https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg'></div>";
	echo "<div class='title'><h1 name='head_7'>";
	echo  "<h1>".$row['de_name']."</h1>";
	$de_id=$row[0];
	echo "</h1></div><div class='des'><p name='para_6'>";
	echo $row['de_desc']."</p>";
	echo "<button name='bt_1'><a href='employee.php?de_id=$de_id'>View Employee</a></button>";
	echo "</div></div>";
}
	mysqli_close($conn); 
	?>
</div>
</body>
</html>