<?php
	$conn = mysqli_connect('localhost', 'root', '','helpdesk'); 
	$id=$_GET['de_id'];
 //echo $id;
	$query = "SELECT * FROM employee where de_id=$id"; 
	$result = mysqli_query($conn,$query); 
	while($row = mysqli_fetch_array($result))
	{
		echo "<div class='card' style='width: 18rem;'>";
		echo "<img src='../www.helpdesk_Admin/emp/$row[em_photo]' class='card-img-top' alt='...'>";
		echo "<div class='card-body'>";
		echo "<h5 class='card-title'>".$row['em_name']."</h5>";
		$contact=$row['em_contact'];
		echo "<h6 class='card-des'>".$row['em_desi']."</h6>";
		echo "<h6 class='card-des' id='autodata'>".$row['em_status']."</h6>";
		echo "<a href='location.php?em_contact=$contact' class='btn btn-primary'>View Location</a>";
		echo "</div></div>";
	}
	mysqli_close($conn); 
?>

		