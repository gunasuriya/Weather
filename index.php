<?php
$servername = "localhost";
$username = "id2366159_funkypanda";
$password = "hakunamatata";
$dbname = "id2366159_funkypanda";
date_default_timezone_set("Asia/Kolkata");
$dat = date("d-m-Y h:i:sa");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
$sql = "UPDATE View_Counter SET Views = Views + 1, Date_Time ='".$dat."' WHERE Id=5";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

?>
<html>
<head>
<title>Weather</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="prefetch" href="img1.jpg" pagespeed_no_transform>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<meta name="theme-color" content="rgba(0,0,0,1)">
<style>




@import url('https://fonts.googleapis.com/css?family=Bree+Serif');
@import url('https://fonts.googleapis.com/css?family=Poiret+One');

.container-fluid{
   z-index:100;
  width:100%;
background-color:rgba(0,0,0,0.5);
  height:100%;
 border-radius:10px;


}
#fucked1{
  display:none;
  margin:0 auto;
}#fucked2{
  display:none;
  margin:0 auto;
}
#apu{
  color:white;
  font-family:Bree Serif;
  font-size:17px;
  padding-bottom:3%;
  text-align:center;
  width:100%;
}

.bg{
  z-index:10;
    /* The image used */
       /* Full height */
    height: 100%;
    background-image: url("img1.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    /* Center and scale the image nicely */

}

#fuck{
border-radius:5px;
background-color:rgba(0,0,0,0);
color:white;
  opacity:0;
margin:2% auto auto auto;
font-size:25px;
border-width:1px;
  z-index:105;
  font-family: 'Poiret One', cursive;
}
#fucked1{
border-radius:5px;
background-color:rgba(0,0,0,0);
color:white;

  font-family: 'Poiret One', cursive;
font-size:22px;
  z-index:105;
border-width:1px;
}
#fucked2{
border-radius:5px;
background-color:rgba(0,0,0,0);
color:white;
  z-index:105;
font-family: 'Poiret One';

font-size:22px;
border-width:1px;
}
.col{
  color:white;
  font-size:20px;
  font-family:Bree Serif;
}

#myBar{
  background: rgba(245, 245, 245, 0);
  border: 1px solid rgba(245, 245, 245, 1);
 width:50%;
 margin:auto;
  background-color:rgba(0,0,0,1);
  border-width:1px;
  border-color:white;
  height:10px;
}
#barda{
   border-width:1px;
  border-color:white;
  background-color:white;
}

.ogod{
z-index:9;

     background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  position:absolute;
  height:100%;
  width:100%;
}



.turnDeviceNotification {
             background-image:url('turndevice.png');
             background-size:cover;
             position:fixed;
             top: 0;
             left:0;
             z-index:9999;
             height:100%;
             width:100%;
             display: none;
         }

</style>
</head>
<body>
<div class="turnDeviceNotification"></div>
<div class="ogod"></div>
<div class="bg" style="position:absolute;height:100%;width:100%;"><div style="background-color:rgba(0,0,0,0.5);width:100%;height:100%;"></div></div>
<div style="position:absolute;width:100%;height:100%;padding:2%;z-index:99">
<div class="container-fluid" style="text-align:center;">
  <h1 style="color:white;font-family:Bree Serif;padding-top:5%;">Weather</h1>
  <button id="fuck">Check Weather</button><br>
  <div  style="padding-top:10px;" class="col" id="weath-temp"></div>
  <div  style="padding-top:10px;" class="col" id="weath-loc"></div>
  <div  style="padding-top:10px;" class="col" id="weath-icon"></div>
  <div  style="padding-top:10px;" class="col" id="err1"></div>
  <div  style="padding-top:10px;" class="col"  id="err2"></div>
   <button  id="fucked1">Toggle to Fahrenheit</button>
     <button id="fucked2">Toggle to Celsius</button>
  <div id="myBar" class="progress">
  <div id="barda" class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
 <div id="apu" class="navbar-fixed-bottom">
  <h6 style="color:#42e5f4;text-decoration:none;" > Powered by DARKSKY API</h6>
   <div class="container" style="display:inline-block;"><a target="_blank" href="https://www.facebook.com/Gunalopez97"><i style="font-size:20px;border-radius:5px;padding-left:15px;padding-right:15px;padding-top:10px;padding-bottom:10px;background-color:rgba(0,0,0,0);color:white;" class="fa fa-facebook" aria-hidden="true"> </i></a>&nbsp;&nbsp;
       <a target="_blank" href="https://twitter.com/Gunainspire"><i style="font-size:20px;border-radius:5px;padding:10px;background-color:rgba(0,0,0,0);color:white;" class="fa fa-twitter" aria-hidden="true"> </i></a>&nbsp;&nbsp; <a target="_blank" href="https://github.com/gunasuriya"><i style="font-size:20px;border-radius:5px;padding:10px;background-color:rgba(0,0,0,0);color:white;" class="fa fa-github" aria-hidden="true"></i></a>&nbsp;&nbsp;
          <a target="_blank" href="https://www.linkedin.com/in/gunasuriya-balasubramani-470015b1/"><i style="font-size:20px;border-radius:5px;padding:10px;background-color:rgba(0,0,0,0);color:white;" class="fa fa-linkedin" aria-hidden="true"></i></a>
  </div>
   <br>
   Created By&nbsp;<a target="_blank" href="http://funkypanda.000webhostapp.com/" style="color:#42e5f4;text-decoration:none;" target="_blank"> Gunasuriya</a></div>

</div>

</div>



<script>
$(document).ready(function(){
   function getLocation() {
   $('.progress-bar').css('width', '20'+'%').attr('aria-valuenow', '20');
    if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
   // x.innerHTML = "Latitude: " + position.coords.latitude +
    //"<br>Longitude: " + position.coords.longitude;
    lat = position.coords.latitude;
  $('.progress-bar').css('width', '30'+'%').attr('aria-valuenow', '30');
    lon = position.coords.longitude;
   $('.progress-bar').css('width', '40'+'%').attr('aria-valuenow', '40');
  fetchweather(position.coords.latitude,position.coords.longitude);
    //console.log("lat: "+lat+" lon: "+lon);
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            $('#myBar').css('display','none');
              $('#err2').html('Seems like your location is turned off. If done already <a href="https://funkypanda.000webhostapp.com/weather/">click me</a>');
            break;
        case error.POSITION_UNAVAILABLE:
            $('#err2').html("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            $('#err2').html("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            $('#err2').html("An unknown error occurred.");
            break;
    }
}


 $('.progress-bar').css('width', '10'+'%').attr('aria-valuenow', '10');

   getLocation();
  var fetch1 = $('#weath-icon');
  var fetch2 = $('#weath-temp');
  var fetch3 = $('#weath-loc');
  var temp;
  var ic;
 var lat;
var lon;
  var cel;
  var place="";
  var i;
  var j;
  function notify()  {
    alert('Img loaded!');
}




  $('#fuck').on("click",function(){
      fetch1.html(ic);
       fetch2.html(cel+" C");
      fetch3.html(place);
    $("#fucked1").css('display','block');
 $("#fucked2").css("display","none");
    if(ic=="cloudy"){
  //console.log("cloudy");

  $(".bg").animate({opacity: "0"},3000);

  $('.ogod').css('background-image', 'url(' + "img2.jpg"+ ')');

}
if(ic=="clear-day"){
  //console.log("clear-day");
  $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img3.jpg"+ ')');

}
if(ic=="clear-night"){
  //console.log("clear-night");
  $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img4.jpg"+ ')');

}
 if(ic=="rain"){
  //console.log("rain");
   $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img5.jpeg"+ ')');

}
      if(ic=="snow"){
  //console.log("snow");
        $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img6.jpg"+ ')');

}
      if(ic=="sleet"){
  //console.log("sleet");
        $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img6.jpg"+ ')');

}
      if(ic=="wind"){
 // console.log("wind");
        $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img7.jpg"+ ')');

}
      if(ic=="fog"){
  //console.log("fog");
        $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img8.jpg"+ ')');

}
      if(ic=="partly-cloudy-day"){
  //console.log("partly-cloud-day");
        $(".bg").animate({opacity: "0"},3000);
  $('.ogod').css('background-image', 'url(' + "img9.JPG"+ ')');

}
if(ic=="partly-cloudy-night"){
  //console.log("partly-cloud-night");
  $(".bg").animate({opacity: "0"},3000);
  $('.bg').css('background-image', 'url(' + "img10.jpg"+ ')');
  $(".bg").animate({opacity: "1"});
}

   });
  function fetchweather(lat,lon){
    var key="866e599947a3bb24a6e5e6207fd28aa7";
    var api_url="https://api.darksky.net/forecast/"+key+"/"+lat+","+lon;

    $.ajax({
      type: "GET",
      url: api_url,
      success: function(data){
        //console.log(data);
        //console.log("data: "+data.timezone);

         //JSON.stringify(data)
        ic=data.currently.icon;
        temp=Math.round(data.currently.temperature);
      cel = Math.round((temp-32)*.5556);
        $('.progress-bar').css('width', '50'+'%').attr('aria-valuenow', '50');
       // place=data.timezone;



              var key1="AIzaSyCVJ9KIO86m0FfqBBvFv4hZtETIWqMrK7c"; 
			  var key="c7bc952ec2a9476bbf5f021cca3247dc";
	//    var api_url2="https://maps.googleapis.com/maps/api/geocode/json?latlng="+"37.7749,122.4194"+"&key="+key1;  
	var api_url2="https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lon+"&key="+key1;		
	//console.log(api_url2);    
    //api_url2="https://api.opencagedata.com/geocode/v1/json?key="+key+"&q="+lat+"%2C"+lon+"&pretty=1&no_annotations=1";    
    //console.log(api_url2);      
	$('.progress-bar').css('width', '60'+'%').attr('aria-valuenow', '60');    
	$.getJSON(api_url2,function(data){  
		//console.log(JSON.stringify(data));
    $('.progress-bar').css('width', '75'+'%').attr('aria-valuenow', '75');    
    //place=data.results[0].formatted_address;
      
        // console.log(JSON.stringify("data_api234: "+data.results[0].address_components[0]));
       // console.log("data_api234: "+JSON.stringify(data.results[0].address_components[0].long_name+", "+data.results[0].address_components[3].long_name+", "+data.results[0].address_components[4].long_name));
      $('.progress-bar').css('width', '80'+'%').attr('aria-valuenow', '80');

        $('.progress-bar').css('width', '90'+'%').attr('aria-valuenow', '90');

        $('.progress-bar').css('width', '100'+'%').attr('aria-valuenow', '100');
        $('#myBar').animate({opacity:"0"});
        //alert("Location: "+JSON.stringify(data.results[0].components.village)+", City: "+JSON.stringify(data.results[0].components.city));
       $("#fuck").animate({opacity:"1"});
      });  //console.log(JSON.stringify(data.results[0].address_components[3]));

      // place=data.results[0].address_components[0].long_name+", "+data.results[0].address_components[3].long_name+", "+data.results[0].address_components[4].long_name;


      },
      dataType: "jsonp"

    });
    //$.getJSON(api_url,

    // function(data){
    // });


 //console.log("temp: "+temp+" ic: "+ic);



    }

  $("#fucked1").click(function(){

    fetch2.html(temp+" F");
    $("#fucked1").css("display","none");
 $("#fucked2").css("display","block");

      });
$("#fucked2").click(function(){
  fetch2.html(cel+" C");
  $("#fucked2").css("display","none");
  $("#fucked1").css("display","block");

      });










jQuery(window).bind('orientationchange', function(e) {
 switch ( window.orientation ) {
  case 0:
    $('.turnDeviceNotification').css('display', 'none');
    // The device is in portrait mode now
  break;

  case 180:
    $('.turnDeviceNotification').css('display', 'none');
    // The device is in portrait mode now
  break;

  case 90:
    // The device is in landscape now
    $('.turnDeviceNotification').css('display', 'block');
  break;

  case -90:
    // The device is in landscape now
    $('.turnDeviceNotification').css('display', 'block');
  break;
 }
});


});

</script>
</body>
</html>
