<?php
session_start();
if(!isset($_SESSION["logincheck"]))
		{
		header('Location: index.php');
		}
?>
<!DOCTYPE html>
<html>
<body>

<form action="pages/upload.php" method="post" enctype="multipart/form-data">
<div class="container">
  <h2>Add a Notice</h2>
    <div class="form-group">
      <label for="text">Subject:</label>
      <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>
    </div>
    <div class="form-group">
      <label for="text">Type:</label>
      <input type="text" class="form-control" name="type" placeholder="Enter Type ex: Lecture/Contest/Notification" required>
    </div>
	<div class="form-group">
      <label for="text">Date Of Event:</label>
      <input type="date" class="form-control" name="date" placeholder="Enter Date of Event if Required" >
    </div>
	
    <div class="form-group">
		<label for="notice">Notice:</label>
		<textarea class="form-control" rows="5" name="notice" placeholder="Details here"></textarea>
	</div>
    

    <div class="form-group">
		<label for="notice">Add All Files in a zip or rar(if any):</label> 
    <input type="file" name="fileToUpload" id="fileToUpload">
	</div>
	
    <input type="submit" class="btn btn-primary" value="Add Notice and Upload Zip/Rar(if selected)" name="submit">

</div>   
</form>


</body>
</html>