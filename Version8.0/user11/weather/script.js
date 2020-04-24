var unit = "C";
$(".checkbox").prop("checked", "checked");
function getLocation() {
$.get("https://ipapi.co/json", function(data) {
getWeather(data.city);
});
}
function getWeather(city) {
var api = "https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?q=";
var units = "&units=metric";
var appid = "&APPID=061f24cf3cde2f60644a8240302983f2";
var $http = api + city + units + appid;
$.getJSON($http, function(data) {
console.log(data);
temp = data.main.temp.toFixed(0);
status = data.weather[0].description;
iconId = data.weather[0].id;
pressure = data.main.pressure ? Math.round(data.main.pressure) : "N/A ";
humidity = data.main.humidity ? Math.round(data.main.humidity) : "N/A ";
windSpeed = data.wind.speed ? (data.wind.speed * 3.6).toFixed(0) : "N/A ";
windDirection = data.wind.deg ? data.wind.deg.toFixed(0) : "N/A ";
city = data.name;
country = data.sys.country;
var hours = new Date().getHours();
var dayOrNight = hours > 6 && hours < 22 ? "day" : "night";
inputTextValue = city + ", " + country;
$("#location").val(inputTextValue);
$(".forecast-status")
.find(".wi")
.addClass("wi-owm-" + dayOrNight + "-" + iconId);
$("#temperature").text(temp);
$("#status").text(status[0].toUpperCase() + status.slice(1));
$(".pressure").text(pressure + " hPa");
$(".humidity").text(humidity + " %");
$(".windSpeed").text(windSpeed);
$(".windDirection").text(
windDirection + "deg " + degToCompass(windDirection)
);
$(".wi-wind").addClass("towards-" + windDirection + "-deg");
changeBackground(iconId);
});
}
function degToCompass(num) {
var val = Math.floor(num / 22.5 + 0.5);
var arr = [
"(N)",
"(NNE)",
"(NE)",
"(ENE)",
"(E)",
"(ESE)",
"(SE)",
"(SSE)",
"(S)",
"(SSW)",
"(SW)",
"(WSW)",
"(W)",
"(WNW)",
"(NW)",
"(NNW)"
];
return arr[val % 16] || "";
}
function celsius_F() {
if (unit == "F") {
unit = "C";
windSpeedUnit = "km/h";
temp = Math.round((temp - 32) * 5 / 9 * 10 / 10);
windSpeed = Math.round(windSpeed * 1.609344 * 10 / 10);
} else if (unit == "C") {
unit = "F";
windSpeedUnit = "mph";
temp = Math.round((temp * (9 / 5) + 32) * 10 / 10);
windSpeed = Math.round(windSpeed * 0.62137119223733 * 10 / 10);
}
$("#temperature").text(temp);
$("#unit").text("°" + unit);
$(".windSpeed").text(windSpeed);
$(".windSpeedUnit").text(windSpeedUnit);
}
function getDate() {
var d = new Date();
var date = d.toLocaleDateString();
$("#date").html(date);
}
function getClock() {
var d = new Date(),
h = d.getHours(),
m = d.getMinutes(),
s = d.getSeconds();
h = checkTime(h);
m = checkTime(m);
s = checkTime(s);
$("#time").text(h + ":" + m + ":" + s);
var t = setTimeout(getClock, 500);
}
function checkTime(i) {
if (i < 10) {
i = "0" + i;
}
return i;
}
getDate();
getClock();
getLocation();
window.onkeyup = keyup;
var inputTextValue;
function keyup(e) {
//setting your input text to the global Javascript Variable for every key press
inputTextValue = e.target.value;
if (e.keyCode == 13) {
console.log(inputTextValue);
if (~inputTextValue.indexOf(",")) inputTextValue = "";
getWeather(inputTextValue);
}
}
$(document).ready(function() {
$("#location").on("click", function() {
$(this).val("");
inputTextValue = "";
});
$('form').submit(function() {
if (~inputTextValue.indexOf(",")) inputTextValue = "";
getWeather(inputTextValue);
return false;
});
$("#celsius_F").on("change", function() {
celsius_F();
});
$(".beforeText, .forecast-temp").on("click", function() {
$(".checkbox").prop("checked", function(idx, oldProp) {
return !oldProp;
});
celsius_F();
});
});