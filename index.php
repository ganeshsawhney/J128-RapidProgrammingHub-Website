<!DOCTYPE html>
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





$(function() {
  $('#hovering').hover(function() {
    $('#b').css({"height": "200px", "width": "500px" });
  }, function() {
    // on mouseout, reset the background colour

    $('#b').css({ "height": "0", "width": "0"});
  });
});

$(function() {
  $('#b').hover(function() {
    $('#b').css({"height": "200px", "width": "500px" });
  }, function() {
    // on mouseout, reset the background colour

    $('#b').css({ "height": "0", "width": "0"});
  });
});
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
        <li><a onclick="loadDoc('pages/contact.php');" href="#CONTACT">CONTACT</a></li>
        <li><a id="hovering" href="#ADMINLOGIN">AdminLogin</a></li>
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar-fixed-top">
<div class="container">
  <div class="row">
<iframe id="b" style="height: 0;width: 0;" frameBorder="0" align="right" src="pages/login.php"></iframe>
</div></div>
</nav>
<div class="container-fluid">
  <div class="row">
<div id="demo">
<script>
$(document).ready(function(){
$("#submit").click(function(){
var email = $("#email").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&email1='+ email;
if(email=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "pages/emailfeed.php",
data: dataString,
cache: false,
success: function(result){
 $('#demoajax').html(result);
}
});
}
return false;
});
});

</script>

<div class="jumbotron text-center">
<div id="demoajax">
  <p>Get Notified via Mail</p> 
  <form class="form-inline" >
	<input id="email" type="text" class="form-control" size="50" placeholder="Email Address" required>
	<input id="submit" type="submit" value="Submit" class="btn btn-danger">
  </form>
  </div>
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
