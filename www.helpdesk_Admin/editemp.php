<?php
	if(isset($_POST['update']))
	{
		$fn=$_POST['fullname'];
		$desi=$_POST['Designation'];
		$id=$_GET['de_id'];
		$pn=$_GET['em_contact'];
		$description=$_POST['l_desc'];
		$photo_name=$_FILES['photo']['name'];
		$phtmp_name=$_FILES['photo']['tmp_name'];
		$img_ex=pathinfo($photo_name,PATHINFO_EXTENSION);
		$img_ex_lc=strtolower($img_ex);
		$new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
		$image_upload_path='emp/'.$new_img_name;
		move_uploaded_file($phtmp_name,$image_upload_path);
		
		//Wing Image..
		$wing=$_FILES['wing']['name'];
		$wingtmp_name=$_FILES['wing']['tmp_name'];
		$wing_ex=pathinfo($wing,PATHINFO_EXTENSION);
		$wing_ex_lc=strtolower($wing_ex);
		$new_wing_name=uniqid("IMG-",true).'.'.$wing_ex_lc;
		$wing_upload_path='location/wing/'.$new_wing_name;
		move_uploaded_file($wingtmp_name,$wing_upload_path);
		
		//Floor Image..
		$floor=$_FILES['floor']['name'];
		$floortmp_name=$_FILES['floor']['tmp_name'];
		$floor_ex=pathinfo($floor,PATHINFO_EXTENSION);
		$floor_ex_lc=strtolower($floor_ex);
		$new_floor_name=uniqid("IMG-",true).'.'.$floor_ex_lc;
		$floor_upload_path='location/floor/'.$new_floor_name;
		move_uploaded_file($floortmp_name,$floor_upload_path);
		
		//Room Image..
		$room=$_FILES['room']['name'];
		$roomtmp_name=$_FILES['room']['tmp_name'];
		$room_ex=pathinfo($room,PATHINFO_EXTENSION);
		$room_ex_lc=strtolower($room_ex);
		$new_room_name=uniqid("IMG-",true).'.'.$room_ex_lc;
		$room_upload_path='location/room/'.$new_room_name;
		move_uploaded_file($roomtmp_name,$room_upload_path);
		
		//Audio File..
		$aduio=$_FILES['audio']['name'];
		$audiotmp_name=$_FILES['audio']['tmp_name'];
		$audio_ex=pathinfo($aduio,PATHINFO_EXTENSION);
		$audio_ex_lc=strtolower($audio_ex);
		$new_audio_name=uniqid("MP3-",true).'.'.$audio_ex_lc;
		$audio_upload_path='location/'.$new_audio_name;
		move_uploaded_file($audiotmp_name,$audio_upload_path);
		
		
		$conn=mysqli_connect('localhost','root','','helpdesk');
		$query="UPDATE employee SET em_photo='$new_img_name',em_name='$fn',em_desi='$desi' WHERE em_contact='$pn'";
		$query1="UPDATE location SET l_desi='$description',l_audio='$new_audio_name',l_wing='$new_wing_name' ,l_floor='$new_floor_name',l_room='$new_room_name' WHERE em_contact='$pn'";
		$result=mysqli_query($conn,$query);
		$result1=mysqli_query($conn,$query1);
		header("location:AdminFirst.php");
	
	}
?>
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
  <h1 class="heading" name="head_1">Edit employee details</h1>
 </div>
 
<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="fullname" value="<?php echo $_GET['fn']?>"/>
    </div>
  </div>
  
   <div class="row">
    <div class="col-25">
      <label for="fname">Designation</label>
    </div>
    <div class="col-75">
      <input type="text" name="Designation" value="<?php echo $_GET['des']?>"/>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="fname">Deprtment ID</label>
    </div>
    <div class="col-75">
       <label><?php echo $id=$_GET['de_id']; ?></label>
    </div>
  </div>
  
  

  <div class="row">
    <div class="col-25">
      <label for="fname">Phone Number</label>
    </div>
    <div class="col-75">
      <label><?php echo $pn=$_GET['em_contact']; ?></label>
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="img">Select image:</label>
    </div>

    <div class="col-75">
  <input type="file" name="photo" accept="image/*"/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="img">Select wing's image:</label>
    </div>

    <div class="col-75">
  <input type="file" name="wing" accept="image/*"/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="img">Select floor's image:</label>
    </div>

    <div class="col-75">
  <input type="file" name="floor" accept="image/*"/>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="img">Select room no's image:</label>
    </div>

    <div class="col-75">
  <input type="file" name="room" accept="image/*" name="image"/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="audio">Select Audio:</label>
    </div>

    <div class="row">
      <input type="file" accept="audio/*" name="audio"/>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Add Description:</label>
      </div>
      <div class="col-75">
        <textarea name="l_desc" rows="4" cols="40" >
          </textarea>
      </div>
    </div>

  <br>
  <div class="row">
    <input type="submit" value="Update" name="update" />
  </div>
  </form>
</div>

</body>
</html>