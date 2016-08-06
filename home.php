
<?php

echo '<div class="jumbotron text-center">
  <p>Get Notified via Mail</p> 
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
    <button type="submit" class="btn btn-danger">Subscribe</button>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>Rapid Programming Club is all about learning & preparing for programming competitions, where problems, that test a variety of concepts and logical skills, have to be solved efficiently in as short a duration as possible.</h4><br>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong>
		To expose members to the programming competitions and learn how to tackle them.<br>
		Functioning of the Club:<br>
		<ol>
			<li>Providing guidance and material to prepare the members for the upcoming programming competitions</li>
			<li>Informing members about prestigious competitions that take place every year, e.g, ACM-ICPC, Google CodeJam, etc.</li>
			<li>Organizing intra-college events that help create a competitive environment</li>
		</ol>
	  </h4>
    </div>
  </div>
</div>



<!-- Container (Service Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Benefits</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>Regular Weekly Lectures<br><span style="font-style:normal;">Get the Schedule</span></h4>
      </div>
      <div class="item">
        <h4>Compitative Online/Offline Contests<br><span style="font-style:normal;">Get the Schedule</span></h4>
      </div>
      <div class="item">
        <h4>Read notes<br><span style="font-style:normal;">Ask your Doubts</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we will get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Jaypee Institute of Information Technology<br>
															Sector-128, Jaypee Wish Town Village, Sultanpur, Noida-201 304, Uttar Pradesh, India.</p>
      <!--p><span class="glyphicon glyphicon-phone"></span></p-->
      <p><span class="glyphicon glyphicon-envelope"></span>webadmin@jiit.ac.in</p>	   
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>	
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(28.5191692,77.3656154);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:17,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, "load", initialize);
</script>
';
?>