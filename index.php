<!DOCTYPE HTML>
<?php

/**
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Paresh
 * @license http://opensource.org/licenses/MIT MIT License
 */

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("views/logged_in.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}

?>

<html>
<head>
<title>CitySynth</title>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="css/main.css">
<script type="text/javascript">
$(document).ready(function({
	$('.carousel').carousel({
		interval:3000
	});
}));
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery-2.0.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/carousel.js"></script>
</head>
<body>
    <!-- Navigation bar --> 
    <div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#" class="navbar-brand"> CitySynth </a>
	</div>	 
	<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services <b class="caret"></b></a>
		
                <ul class="dropdown-menu">
                    <li><a href="#">JSHSJGS</a></li>
                    <li><a href="#">JSHSJGS</a></li>
                    <li><a href="#">JSHSJGS</a></li>
                    <li><a href="#">JSHSJGS</a></li>
            </ul>
	</li>
		<li><a href="#">Contact Us</a></li>
    </ul>
						 
						
                <form style="float:right" action="signin.html">
                    <input type="submit" class="btn btn-primary" value="Sign in">
            </form>
							  
                <form style="float:right" action="register.html">
                    <input type="submit" class="btn btn-primary" value="Sign up">
            </form>
						
	</div>					 
    </div>
</div>
			
<!-- Carousel-->
<br/>   <br/>   <br/>   <br/>
	    <div class="container">
		<div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
        
	        <div class="carousel-inner">
	            <div class="item active">
	               <center>
                            <img src="img/img1.jpeg" height="500" width="1200">
	                
                <div class="container">
	            <div class="carousel-caption">
	                <h4>NYU CUSP</h4>
	                <p>Center for urban observatory and Science.</p>
	                <p><a class="btn btn-large btn-primary">Learn more..</a></p>
	        </div>
	    </div>
	</center>
    </div>
            
	            <div class="item">
			<center>
	                <img src="img/img2.jpeg" height="500" width="1200">
	                <div class="container">
	                    <div class="carousel-caption">
	                        <h1>NYU CUSP</h1>
	                        <p>Center for urban observatory and Science.</p>
	                        <p><a class="btn btn-large btn-primary">Learn more..</a></p>
                        </div>
	            </div>
		</center>
	    </div>
            
	            <div class="item">
			<center>
                        <img src="img/img3.jpeg" height="500" width="1200">
	                <div class="container">
	                    <div class="carousel-caption">
	                        <h5>NYU CUSP</h5>
	                        <p>Center for urban observatory and Science..</p>
	                        <p><a class="btn btn-large btn-primary">Learn more..</a></p>
	                    </div>
	                </div>
                    </center>
	        </div>
            </div>
        
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>

                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
	    </div>
	</div>	
    </body>
</html>