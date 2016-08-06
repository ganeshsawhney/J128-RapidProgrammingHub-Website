<?php
session_start();
if(!isset($_SESSION["logincheck"]) && $_SESSION["type"]=="Faculty")
		{
		header('Location: index.php');
		}


require ("../database/dbconnect.php");
if(isset($_POST['submit']))
{    
		$name = mysqli_real_escape_string($connection,$_POST['name']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		$year = mysqli_real_escape_string($connection,$_POST['year']);
		$psw = mysqli_real_escape_string($connection,$_POST['password']);
        $contact = mysqli_real_escape_string($connection,$_POST['contact']);
		$enroll = mysqli_real_escape_string($connection,$_POST['enroll']);
		$by = $_SESSION["name"];
		
		//Ganesh made it so that when we get famous we would decrypt pass ==>>>  $password=md5($password);
        $sql="insert into users (`enroll`,`email`,`password`,`name`,`contact`,`year`,`type`) VALUES('".$enroll."','".$email."','".$psw."','".$name."','".$contact."','".$year."','"."Student"."')";
        
        if ($connection->query($sql) === TRUE) 
		{
		
            ?>
			<script>alert("Record Added \n");
window.location = "../index.php";</script>
			<?php
		
        }
        else
        {
			
            ?>
			<script>alert("Error Occured");
window.location = "../index.php";</script>
			<?php
			unset($_POST['submit']);
		//	header('Location: index.php');
        }

}
?>


<!DOCTYPE html>
<html>
<body>

<form  method="post" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
<div class="container">
  <h2>Add a Coordinator</h2>
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
    </div>
    <div class="form-group">
      <label for="text">Enrollment:</label>
      <input type="number" class="form-control" name="enroll" placeholder="Enter Full Enrollment" min="9900000000" max="9999999999" required>
    </div>
    <div class="form-group">
      <label for="text">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
    </div>
    <div class="form-group">
      <label for="text">Contact Number:</label>
      <input type="number" class="form-control" name="contact" placeholder="Enter Contact/Mobile no" min="6666666666" max="9999999999" required>
    </div>
    <div class="form-group">
      <label for="text">Year:</label>
	  
	<select class="form-control" name="year">
		  <option value="1" >1</option>
		  <option value="2" >2</option>
		  <option value="3" >3</option>
		  <option value="4" >4</option>
		  <option value="5" >1 Mtech</option>
		  <option value="6" >2 Mtech</option>
	</select>
    </div>
	<div class="form-group">
      <label for="text">Password of Login</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password" required>
    </div>
	
	
    <input type="submit" class="btn btn-primary" value="Add a Coordinator" name="submit">

</div>   
</form>


</body>
</html>