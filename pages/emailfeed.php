<?php
session_start();
require ("../database/dbconnect.php");

if(isset($_SESSION["ip"]))
{
	if($_SESSION["ip"]>2)
	{
		exit( "You trying to Spam us??");
	}
	else
	{$_SESSION["ip"]++;}
}
else{
$_SESSION["ip"]="1";}
		$email = $_POST['email1'];
        $sql="insert into feed (`email`) VALUES('".$email."')";
        
        if ($connection->query($sql) === TRUE) 
		{
            echo $email." added successfully";
        }
        else
        {
			echo "Error Occured";
        }