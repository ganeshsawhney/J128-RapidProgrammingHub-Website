<?php
session_start();
if(!isset($_SESSION["logincheck"]))
{
header('Location: index.php');
}
require ("../database/dbconnect.php");
if(isset($_POST['submit']))
{    

        $sql="SELECT MAX(id) as whatt from notice";
        $strSQL = mysqli_query($connection,$sql);
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
			$myid = $Results['whatt'] + 1;
		}
		else
		{
            ?>
			<script>alert("Error Occured \n");</script>
			<?php
			unset($_POST['submit']);
		//	header('Location: index.php');
		}

		$subject = mysqli_real_escape_string($connection,$_POST['subject']);
        $type = mysqli_real_escape_string($connection,$_POST['type']);
		$date = mysqli_real_escape_string($connection,$_POST['date']);
		$notice = mysqli_real_escape_string($connection,$_POST['notice']);
		$by = $_SESSION["name"];
		
		//Ganesh made it so that when we get famous we would decrypt pass ==>>>  $password=md5($password);
        $sql="insert into notice (`by`,subject,notice,type,dateofevent) VALUES('".$by."','".$subject."','".$notice."','".$type."','".$date."')";
        
        if ($connection->query($sql) === TRUE) 
		{
		
		
            ?>
			<script>alert("Record Added \n");</script>
			<?php
		
        }
        else
        {
			
            ?>
			<script>alert("Error Occured");</script>
			<?php
			unset($_POST['submit']);
		//	header('Location: index.php');
        }

$contentoffile="Type: ".$type."\nBy: ".$by."\nSubject: ".$subject."\nDate Of Event: ".$date."\nNotice: ".$notice;


$check = filesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
$contentoffile.="\nDownload Related files at: "."www.....com/uploads/".$myid.".".pathinfo(basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION);
}

$filename1="../uploads/".$myid.".txt";
$file = @fopen($filename1,"x");
if($file)
{
    fwrite($file,$contentoffile); 
    fclose($file); 
}

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$target_file = $target_dir . $myid.".".$imageFileType ;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
       $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    
            ?>
			<script>alert("Sorry, file already exists.\n");</script>
			<?php
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
                ?>
			<script>alert("Sorry, your file is too large.\n");</script>
			<?php
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
                    ?>
			<script>alert("Sorry, your file was not uploaded.\n");</script>
			<?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         ?>
			<script>alert("<?php echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";?>");</script>
			<?php
    } else {
         ?>
			<script>alert("Sorry, there was an error uploading your file.");</script>
			<?php
    }
}
}
?>
<script>
window.location = "../index.php";
</script>
			<?php