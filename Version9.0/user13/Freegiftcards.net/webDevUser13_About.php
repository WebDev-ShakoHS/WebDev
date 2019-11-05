<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<html lang="en">
<!--Version 6.0 
	Name:Ben Sebastian
	Date Completed:9/5/2019
 -->
<head>

<title> FreeGiftcards.Net/About</title>
    <meta name="author" content="your name" />

        <meta name="description" content="" />

<script src="JS/WebDevUser13.js"></script>
<link rel="stylesheet" href="User13css/day.css">  
<style>
   
    .titlemania{
        color: #003b6f;
        font-family: cursive;
        text-align: center;
        font-size: 250%;
    }
    </style>


<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->        


</head>

<body>


<!-- webpage content goes here in the body -->

  <button data-file="day">Day</button>
    <button data-file="night">Night</button>

     
                    <marquee>   <h1><a href="webDevUser13.php" id="logoLink">Free Giftcards</a></h1>
                    </marquee>
             
                           
                <div id="nav">

             <a class="a2" href="webDevUser13.php">Home</a>

                                <a class="acurrent" href="webDevUser13_About.php">About</a>

                                <a class="a2" href="webDevUser13_Games.php">Games</a>
                                
                                <a class="a2" href="webDevUser13_FAQ.php">FAQ</a>

                                <a class="a2" href="webDevUser13_Giftcards.php">About Giftcards</a>
<a href="webDevUser13_Movies.php" class="a2">Free Movies</a>
                    <a href="myaccount.php" class="a2">My Account</a>

                </div>
<h1>About Us</h1>                
<br>
    <p> We at Free Giftcards.org are fully commited to give you free giftcards because you deserve it.</p>
    <div class="richard">
                   <div class="container">
        <div class="app-title">
        </div>
        <div class="notification"> </div>
        <div class="weather-container">
            <div class="weather-icon">
                <img src="icons/unknown.png" alt="">
            </div>
            <div class="temperature-value">
                <p>- °<span>C</span></p>
            </div>
            <div class="temperature-description">
                <p> - </p>
            </div>
            <div class="location">
                <p>-</p>
            </div>
        </div>
    </div>
 </div>
    <script src="JS/jquery-1.7.1.js"></script>
<script>
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");
const notificationElement = document.querySelector(".notification");

// App data
const weather = {};

weather.temperature = {
    unit : "celsius"
}

// APP CONSTS AND VARS
const KELVIN = 273;
// API KEY
const key = "d5dc061b1da80782c059a54aaf5cc045";

// CHECK IF BROWSER SUPPORTS GEOLOCATION
if('geolocation' in navigator){
    navigator.geolocation.getCurrentPosition(setPosition, showError);
}else{
    notificationElement.style.display = "block";
    notificationElement.innerHTML = "<p>Browser doesn't Support Geolocation</p>";
}

// SET USER'S POSITION
function setPosition(position){
    let latitude = position.coords.latitude;
    let longitude = position.coords.longitude;
    
    getWeather(latitude, longitude);
}

// SHOW ERROR WHEN THERE IS AN ISSUE WITH GEOLOCATION SERVICE
function showError(error){
    notificationElement.style.display = "block";
    notificationElement.innerHTML = `<p> ${error.message} </p>`;
}

// GET WEATHER FROM API PROVIDER
function getWeather(latitude, longitude){
    let api = `http://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;
    
    fetch(api)
        .then(function(response){
            let data = response.json();
            return data;
        })
        .then(function(data){
            weather.temperature.value = Math.floor(data.main.temp - KELVIN);
            weather.description = data.weather[0].description;
            weather.iconId = data.weather[0].icon;
            weather.city = data.name;
            weather.country = data.sys.country;
        })
        .then(function(){
            displayWeather();
        });
}

// DISPLAY WEATHER TO UI
function displayWeather(){
    iconElement.innerHTML = `<img src="icons/${weather.iconId}.png"/>`;
    tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city}, ${weather.country}`;
}

// C to F conversion
function celsiusToFahrenheit(temperature){
    return (temperature * 9/5) + 32;
}

// WHEN THE USER CLICKS ON THE TEMPERATURE ELEMENET
tempElement.addEventListener("click", function(){
    if(weather.temperature.value === undefined) return;
    
    if(weather.temperature.unit == "celsius"){
        let fahrenheit = celsiusToFahrenheit(weather.temperature.value);
        fahrenheit = Math.floor(fahrenheit);
        
        tempElement.innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    }else{
        tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
        weather.temperature.unit = "celsius"
    }
});

</script>
    <script>
    (function(){
        
        var link = $('link');
        $('button').on('click', function() {
            var $this = $(this),
                stylesheet = $this.data('file');
            
            link.attr('href','User13css/' + stylesheet + '.css');
            
            $this
                .siblings('button')
                    .removeAttr('disabled')
                    .end()
                    .attr('disabled', 'disabled');
            
            
        });
        
        
        
    })();
    
    </script>
  <script>
      $("h1").addClass('titlemania');
    </script>  
</body>

</html>