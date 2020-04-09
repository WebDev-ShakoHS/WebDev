// Tutorial by http://youtube.com/CodeExplained
// api key : 82005d27a116c2880c8f0fcb866998a0

// SELECT ELEMENTS
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");
const notificationElement = document.querySelector(".notification");
const monsterElement = document.querySelector(".monster p")

// App data
const weather = {};

weather.temperature = {
    unit : "celsius"
}

// APP CONSTS AND VARS
const KELVIN = 273;
// API KEY
const key = "82005d27a116c2880c8f0fcb866998a0";

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
        })
        .then(function(){
            monsterWatch();
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

function monsterWatch(){
    if(iconElement.innerHTML == '<img src="icons/01d.png">'){
        monsterElement.innerHTML = '<p>A horde of goblins has been spottd in your area. While an individual goblin is a nuisance at worst, they can easily get out of hand in groups!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/02d.png">'){                  monsterElement.innerHTML = "<p>A pair of hippogriffs has been spotted in your area. Keep out of their way and they shouldn't cause you any trouble!</p>"
    };
    if(iconElement.innerHTML == '<img src="icons/01n.png">'){
        monsterElement.innerHTML = "<p>A werewolf has been spotted in your area. These creatures are bloodthirsty, so it's best to stay inside tonight!</p>"
    };
    if(iconElement.innerHTML == '<img src="icons/02n.png">'){
        monsterElement.innerHTML = '<p>A pack of zombies has been spotted in your area. The quickest way to take care of these undead pests is to get ahold of your local cleric!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/03d.png">'){
       monsterElement.innerHTML = '<p>A roc has been spotted in your area. Keep your livestock inside for the time being!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/03n.png">'){
        monsterElement.innerHTML = '<p>A pack of worgs has been spotted in your area. Beware the ferocity of these wolf-like creatures!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/04d.png">'){
        monsterElement.innerHTML = '<p>A cockatrice has been spotted in your area. Be careful, its bite can turn your flesh to stone!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/04n.png">'){
        monsterElement.innerHTML = "<p>A manticore has been spotted in your area. The venom from this beast's stinger can be fatal!</p>"
    };
    if(iconElement.innerHTML == '<img src="icons/09d.png">'){
        monsterElement.innerHTML = '<p>An owlbear has been spotted in your area. These monsters are deceptively dangerous, despite their odd appearance.</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/09n.png">'){
        monsterElement.innerHTML = '<p>A cyclops has been spotted in your area. Take advantage of its overly large blindspot to remain unseen!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/10d.png">'){
        monsterElement.innerHTML = '<p>A troll has been spotted in your area. Circumvent its regenerative abilities by using acid or fire!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/10n.png">'){
        monsterElement.innerHTML = '<p>A phase spider has been spotted in your area. This monster can phase in and out of reality, so it could be anywhere!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/11d.png">'){
        monsterElement.innerHTML = '<p>A blue dragon has been spotted in your area. Wherever this dragon goes, thunderstorms are sure to follow!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/11n.png">'){
        monsterElement.innerHTML = '<p>A storm giant has been spotted in your area. In spite of their intimidating stature, storm giants are generally benevolent!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/13d.png">'){
        monsterElement.innerHTML = "<p>A revenant has been spotted in your area. As long as you stay out of this spectre's way, it should leave you alone!</p>"
    };
    if(iconElement.innerHTML == '<img src="icons/13n.png">'){
        monsterElement.innerHTML = '<p>A flock of blood hawks has been spotted in your area. Keep your head down; they go for the eyes!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/50d.png">'){
        monsterElement.innerHTML = '<p>A pseudodragon has been spotted in your area. These little creatures are likely to be more scared of you than you are of them!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/50n.png">'){
        monsterElement.innerHTML = '<p>A trio of harpies has been spotted in your area. Keep your valuables well hidden!</p>'
    };
    if(iconElement.innerHTML == '<img src="icons/unknown.png">'){
        monsterElement.innerHTML = '<p>There have been no monsters spotted in your area...</p>'
    };
}

