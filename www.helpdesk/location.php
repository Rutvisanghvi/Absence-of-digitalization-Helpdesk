<html>
	<head>
		<title>Location</title>
		<link rel="stylesheet" href="Location.css" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
	</head>
	<body>
		<div id="google_translate_element">
		<!--header-->
		<div class="heading">
			<header>
				<h1 class="Location" style="color: black; text-transform: uppercase; letter-spacing: 3px; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align: center;">Location</h1>
			</header>
			
			<nav>
				<button type="button" onclick="window.history.back()" class="Back"><i class="fa fa-arrow-left" style="margin-right: 10px;"></i>Back</button>
				<a href="index.php" class="Home" style="text-decoration: none;"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</a>
			</nav>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
<?php
	$conn = mysqli_connect('localhost', 'root', '','helpdesk'); 
	$pn=$_GET['em_contact'];
	$query = "SELECT * FROM location where em_contact=$pn"; 
	$result = mysqli_query($conn,$query); 
	while($row = mysqli_fetch_array($result))
	{
		echo"<div class='location'>";
		echo"<div class='audio'>";
			echo"<audio controls>";
				echo"<source src='../www.helpdesk_Admin/location/$row[l_audio]' type='audio/mpeg'>";
			echo"</audio></div>";
			
			echo"<div class='loc'><div class='image'>";
					echo"<img style='width:100%' name='img_wing' src='../www.helpdesk_Admin/location/wing/$row[l_wing]'></div>";
				
			echo"<div class='image'>";
					echo"<img style='width:100%' name='img_floor' src='../www.helpdesk_Admin/location/floor/$row[l_floor]'></div>";
				
			echo"<div class='image'>";
				echo"<img style='width:100%' name='img_room' src='../www.helpdesk_Admin/location/room/$row[l_room]'></div></div></div>";

			echo"<div class='desc'>";
			echo"<h1>DESCRIPTION</h1>";
			echo"<p>$row[l_desi]</p></div>";
	}
	mysqli_close($conn); 
?>
</form>
		</div>
				
				<!-- Language Translate -->
				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				<script type="text/javascript">
						// const queryString = window.location.search;
						// const urlParams = new URLSearchParams(queryString);
						// const product = urlParams.get('emp');
						
						// if(product == 'loc'){
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