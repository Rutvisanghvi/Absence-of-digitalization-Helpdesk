<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Employees</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
		<link rel="stylesheet" href="Emp.css">
		<style>
			.card{
margin : 20px 15px;
height : 350px;
}
.btn{
	    display: block;
    width: 100px;
    margin-left: 70px;
}
		</style>
	</head>
	<body>
		<div id="google_translate_element">
		<div class="heading">
		<header>
        <h1 class="Employees" style="color: black; text-transform: uppercase; letter-spacing: 3px; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Employees</h1>
        <form class="sbar">
		<input type="search" placeholder="Search" class="search" id="search">
		<button type="submit" class="Go"><i class="fa fa-search" style=""></i></button>
		
        </form>
		</header>
		<nav>
        <button type="button" onclick="window.history.back()" class="Back"><i class="fa fa-arrow-left" style="margin-right: 10px;"></i>Back</button>
        <a href="index.php" class="Home" style="text-decoration: none;"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</a>
		</nav>
		</div>
		<!-- wavy background -->
		<div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
		</div>
		
		<!-- cards -->
		<div class="container">
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
		echo "<h6 class='card-des'>".$row['em_status']."</h6>";
		echo "<a href='location.php?em_contact=$contact' class='btn btn-primary'>View Location</a>";
		echo "</div></div>";
	}
	mysqli_close($conn); 
?>

		
		</div>   
		</div>

		<!-- Search Button JavaScript -->
		<script>
		const searchInput = document.querySelector("#search");
		const employeeCards = document.querySelectorAll(".card");
		
		searchInput.addEventListener("input", function() {
		const searchTerm = searchInput.value.toLowerCase();
		employeeCards.forEach(function(employeeCard) {
		const employeeName = employeeCard.querySelector(".card-title").textContent.toLowerCase();
		const employeeTitle = employeeCard.querySelector(".card-des").textContent.toLowerCase();
		if (employeeName.includes(searchTerm) || employeeTitle.includes(searchTerm)) {
		employeeCard.style.display = "block";
		
		} else {
		employeeCard.style.display = "none";
		}
		});
		});
		
		
		// const submitButton = document.querySelector("button[type='submit']");
		// submitButton.addEventListener("click", function() {
		// const searchTerm = searchInput.value.toLowerCase();
		// deptCards.forEach(function(deptCard) {
		//     const deptName = deptCard.querySelector(".dept-name").textContent.toLowerCase();
        
		//     if (deptName.includes(searchTerm)) {
		//     deptCard.style.display = "block";
		//     } else {
		//     deptCard.style.display = "none";
		//     }
		// });
		// });
		</script>
		
		<!-- Language Translate -->
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<script type="text/javascript">
		// const queryString = window.location.search;
		// const urlParams = new URLSearchParams(queryString);
		// const product = urlParams.get('dept');
		
		// if(product == 'emp'){
		// var value = "/en/hi";
		// }else{
		// var value = "/en/";
		// }
		
		var value = localStorage.getItem('lang'); //Retrieving Value Of Language from Local Storage

		function googleTranslateElementInit() {
        
			setCookie('googtrans', 1);
		
			new google.translate.TranslateElement({ pageLanguage: 'ES', layout: google.translate.TranslateElement.InlineLayout.SIMPLE,autoDisplay: false }, 'google_translate_element');
		}
		
		function setCookie(key, expiry) {
		// value="/en/hi";
			var expires = new Date();
			expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
			document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
		}
		
		</script>
		
	</body>
</html>
				