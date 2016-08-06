<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["logincheck"]))
		{
		header('Location: index.php');
		}
		
		
$tag="";
if (isset($_GET['tag']))
	$tag=$_GET['tag'];	
?>

<html lang="en">
<head>
	<title>Programming @JIIT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="icon" href="assets/logo.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/mystyle.CSS">
	<script src="js/js.js"></script>
	


<script type="text/javascript">

function logout() { 
        window.location.href = "?tag=logout";  // Change This
}


function loadDoc(str) {
$("#demo").animate({
		marginLeft: '400px',
        width: '400px',
        height: '100px'
    });
$("#demo").slideUp("slow");
$("#demo").load(str, function() {
    $(this).slideDown("slow");});

$("#demo").animate({
		marginLeft: '0px',
        opacity: '1',
        height: '100%',
        width: '100%'
    });
}

</script>
	
	
	
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top"  role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" onclick="loadDoc('home.php');" href="#HOME">Programming @JIIT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a onclick="loadDoc('pages/home.php');" href="#HOME">HOME</a></li>
        <li ><a onclick="loadDoc('pages/notice.php');" href="#NOTICES">NOTICES</a></li>
        <li><a onclick="loadDoc('pages/notice.php');" href="#SCHEDULE">SCHEDULE</a></li>
        <li><a onclick="loadDoc('pages/contact.php');" href="#CONTACT">CONTACT</a></li>
        <li><a onclick="loadDoc('pages/addnotice.php');" href="#ADDNOTICE">ADDNOTICE</a></li>
		<?php if($_SESSION["type"]=="Faculty"){?>
        <li><a onclick="loadDoc('pages/addcoordinators.php');" href="#Coordinators">ADD CO.</a></li>
		<?php }?>
        <li><a onclick="logout();"href="?tag=logout">SIGNOUT</a></li>
      </ul>
    </div>
  </div>
</nav>



<?php
if($tag=='logout')
{
	session_destroy();
	header('Location: index.php');
}
?>


<div class="container-fluid">
  <div class="row">
<div id="demo">


<div class="jumbotron text-center">
  <p>Get Notified via Mail</p> 
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
    <button type="submit" onClick="alert('This Feature will be active within few days\nApologies for the inconvenience')" class="btn btn-danger">Subscribe</button>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>Rapid Programming Club is all about learning & preparing for programming competitions, where problems, that test a variety of concepts and logical skills, have to be solved efficiently in as short a duration as possible.</h4><br>
      <h4><strong>MISSION:</strong>
		To expose members to the programming competitions and learn how to tackle them.<br>
		Functioning of the Club:<br>
		<ol>
			<li>Providing guidance and material to prepare the members for the upcoming programming competitions</li>
			<li>Informing members about prestigious competitions that take place every year, e.g, ACM-ICPC, Google CodeJam, etc.</li>
			<li>Organizing intra-college events that help create a competitive environment</li>
		</ol>
	  </h4>	  
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <img class="img-thumbnail img-responsive" alt="J128 Programming Hub"  src="assets/pics/j128proghub.png" style="max-height: 100%;max-width: 100%;">
    </div>
  </div>
</div>


</div>
</div>
</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p align="right" style="text-align:right">Developer<a href="" title="Developer">JIIT Programming HUB</a></p>		
</footer>

</body>
</html>
