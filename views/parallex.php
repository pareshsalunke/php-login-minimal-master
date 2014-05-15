<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Parallax page</title>
<style type="text/css">
body{
	margin:0;
	padding:0;
}
ul {
	margin:0;
	padding:0;
}
ul li{
	list-style:none;
	overflow:hidden;
	height:600px;
}

.parallax-background {
	height:910px;
}
#map-canvas{
	height:800px;
}
.firstpage{
	height:800px;
}
.about{
	
}

</style>


<?php

$temp= file_get_contents('IP.txt');
$ip_address= file_get_contents('IP.txt', NULL, NULL, 0, strlen($temp)-1);

$url = "http://api.ipinfodb.com/v3/ip-city/?key=7c2ecc77856353b39e33e46a71e4c41fb39891459923a338f85b6e54263aff0e&ip=$ip_address&format=json";
 
$d = file_get_contents($url);
$data = json_decode($d , true);
 
/*
{
"statusCode" : "OK",
"statusMessage" : "",
"ipAddress" : "74.125.45.100",
"countryCode" : "US",
"countryName" : "UNITED STATES",
"regionName" : "CALIFORNIA",
"cityName" : "MOUNTAIN VIEW",
"zipCode" : "94043",
"latitude" : "37.3956",
"longitude" : "-122.076",
"timeZone" : "-08:00"
}*/


if(strlen($data['countryCode']))
{
$info = array(
'ip' => $data['ipAddress'] ,
'country_code' => $data['countryCode'] ,
'country_name' => $data['countryName'] ,
'region_name' => $data['regionName'] ,
'city' => $data['cityName'] ,
'zip_code' => $data['zipCode'] ,
'latitude' => $data['latitude'] ,
'longitude' => $data['longitude'] ,
'time_zone' => $data['timeZone'] ,
);
}


?>



<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY9j5GM-50W60pw0LtmT_ew75lTSMuoAg&sensor=true">
       
    </script>

 <script type="text/javascript">
function initialize() {
   var lat= 40.7317;
   var lon= -73.9885;
 var latlng= new google.maps.LatLng(lat,lon);
     
    
        var mapOptions = {
            zoom: 9,
            scrollwheel: false,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
		
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        marker = new google.maps.Marker({
	    map:map,
	    draggable:false,
	    animation: google.maps.Animation.DROP,
	    position: latlng
	    }); 

      
        var infowindow = new google.maps.InfoWindow({
           content: '<a href="http://localhost/php_programs/slideshow/slide.php"> Click for Slideshow</a>'
        });
        
        
  google.maps.event.addListener(marker, 'click', function () {
      infowindow.open(map, marker);
        });

}

// Call initialize -- in prod, add this to window.onload or some other DOM ready alternative
google.maps.event.addDomListener(window, 'load', initialize);

 </script>



</head>

<body>
	<ul class="parallax">
		<li>
			<div class="parallax-background firstpage">
			<img src="aps_backpage_bnd.jpg" height="100%" width="100%">
			</div>
		</li>
		<li>
			<div class="parallax-background">
					<div id="map-canvas"></div>
			</div>
		</li>
		<li>
			<div class="parallax-background about"></div>
		</li>
		
    </ul>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script>
		   (function($)  {

		      var $container =$(".parallax");
			  var $divs = $container.find(".parallax-background");
			    
			  var beingscrolled = document.body;
			  var liHeight= $divs.eq(0).closest("li").height();
			  var diffHeight = $divs.eq(0).height() -liHeight;
			  var i,len,li,div,offset,scroll,top;
			  var render = function()    {
				// thing we were scrolling
				top= beingscrolled.scrollTop;

				//loop through divs
				for(i=0,len=$divs.length;i<len;i++)
				 {
					//get one div
					div=$divs[i];
					//get the parent li
					li=div.parentNode;
					//calculate the offsetTop of div
					offset=$(div).offset().top;
					//calculate the amount to scroll
					scroll =Math.round(((top - offset)/liHeight)* diffHeight);

					//apply the scroll amount
	div.style.webkitTransform = "translate3d(0px,"+scroll+"px,0px)"; }
};
			    (function loop(){
				    requestAnimationFrame(loop);
				     render();
			     })();

		      })(jQuery);
	       </script>

	
</body>
</html>
