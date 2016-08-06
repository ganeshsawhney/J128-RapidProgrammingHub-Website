<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION["logincheck"]))
		{
		header('Location: index.php');
		}
?>
<html>
<head>

<link rel="stylesheet" href="../css/hoverstyle.css" type="text/css" />
</head>
<body>

<?php
require ("../database/dbconnect.php");
if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['pass']);
		//Ganesh made it so that when we get famous we would decrypt pass ==>>>  $password=md5($password);
        $strSQL = mysqli_query($connection,"select * from users where email='".$email."' and password='".$password."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
			$_SESSION["logincheck"]="valid";
			$_SESSION["email"]=$Results['email'];
			$_SESSION["name"]=$Results['name'];
			$_SESSION["enroll"]=$Results['enroll'];
            $message = "Hey ".$Results['name']."!!<br> You are Logged in!!";
			?><script>
			window.top.location.href = "../coordinator.php"; 
			</script>
			<?php
        }
        else
        {
            $message = "Invalid email or password!!";
			unset($_POST['action']);
        }
			echo $message;
    }
}
?>


<div class="container">
  <h2>Add a Notice</h2>
  <form action="pages/upload.php" method="post" role="form">
    <div class="form-group">
      <label for="text">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter Subject">
    </div>
    <div class="form-group">
      <label for="text">Type:</label>
      <input type="text" class="form-control" id="type" placeholder="Enter Type ex: Lecture/Contest/Notification">
    </div>
	<div class="form-group">
      <label for="text">Date Of Event:</label>
      <input type="date" class="form-control" id="dateofevent" placeholder="Enter Date of Event if Required">
    </div>
	
    <div class="form-group">
		<label for="notice">Notice:</label>
		<textarea class="form-control" rows="5" id="notice" placeholder="Details here"></textarea>
	</div>
    
	<div class="form-group">
		<label for="notice">Add All Files in a zip or rar(if any):</label>    
		<input type="file" name="fileToUpload" id="fileToUpload">
	</div>	

    <input type="submit" class="btn btn-primary"  name="submit">Submit</input>
  </form>
</div>


</body>
</html>