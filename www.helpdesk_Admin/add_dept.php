<?php
		
	if(isset($_POST['submit']))
	{
		$img_name=$_FILES['my_image']['name'];
		$tmp_name=$_FILES['my_image']['tmp_name'];
		$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
		$img_ex_lc=strtolower($img_ex);
		$new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
		$image_upload_path='uploads/'.$new_img_name;
		move_uploaded_file($tmp_name,$image_upload_path);
		$did=$_POST['did'];
		$dname=$_POST['dname'];
		$desi=$_POST['desi'];
		$conn = mysqli_connect('localhost','root','','helpdesk');
		$insert ="INSERT INTO department(de_id,de_name, de_desc,de_photo) VALUES('$did','$dname','$desi','$new_img_name')";
		if(mysqli_query($conn,$insert))
		{
				//echo"<html><script>alert('Data Inserted Successfully.')</script></html>";	
				header("location:AdminFirst.php");
		}
		mysqli_close($conn);
	}

?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
body{
  background-image: linear-gradient(to right,blue,white);
}
.headerr{
	margin: 0px;
	width: 100%;
	height: 15%;
	box-shadow: 0px 0px 20px black;
	background-color: #5d96f0;
	display: inline-block;
	justify-content: center;
	flex-direction: column;
	
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #5d96f0;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  width: 500px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="headerr">
  <h1 class="heading" name="head_1">Add New Department</h1>
 </div>
 
<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
     <label for="fname">Department Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="dname" placeholder="Enter name..">
    </div>
  </div>
  
   <div class="row">
    <div class="col-25">
      <label for="fname">Deprtment ID</label>
    </div>
    <div class="col-75">
      <input type="text" name="did" placeholder="Enter ID..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="fname">Descrption</label>
    </div>
    <div class="col-75">
      <input type="text" name="desi" placeholder="Enter Description..">
    </div>
  </div>
	<div class="row">
    <div class="col-25">
      <label for="img">Select image:</label>
    </div>
    <div class="col-75">
       
  <input type="file" name="my_image" />
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit" name="submit" />
  </div>
  </form>
</div>

</body>
</html>