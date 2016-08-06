<!DOCTYPE HTML>
<?php
session_start();
if(isset($_SESSION["logincheck"]))
		{
			if($_SESSION["logincheck"]=="valid")
			{  
			?><script>
			window.top.location.href = "../coordinator.php"; 
			</script>
			<?php
			}
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
else{
?>

<div id="login-form">
<form method="post">
<input name="action" type="hidden" value="login" />
<table align="center">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
<td><input type="submit" name="btn-login" value="Sign In" /></td>
</tr>
</table>
</form>
</div>

<?php
}
?>
</body>
</html>