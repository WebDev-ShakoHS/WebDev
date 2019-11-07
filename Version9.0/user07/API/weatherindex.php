<?php
$apiKey = "bb4d7cd078660869b2d2dbaef86709fb";
$cityId = "5046997";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=imperial&APPID=" . $apiKey;

$cityId2 = "4673179";
$googleApiUrl2 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId2 . "&lang=en&units=imperial&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_URL, $googleApiUrl2);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_VERBOSE, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$response2 = curl_exec($ch2);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

curl_close($ch2);
$data2 = json_decode($response2);
$currentTime2 = time();
?>

<!doctype html>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>

<style>
body {
    font-family: Arial;
    font-size: 0.95em;
}

.report-container {
    border: #E0E0E0 1px solid;
    padding: 20px 40px 40px 40px;
    border-radius: 2px;
    width: 550px;
    margin: 0 auto;
}

.weather-icon {
    vertical-align: middle;
    margin-right: 20px;
}

.weather-forecast {
    color: #212121;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0px;
}

span.min-temperature {
    margin-left: 15px;
    color: #929292;
}

.time {
    line-height: 25px;
}
    
article{
    width: 600px; 
    margin: auto;
}

</style>

</head>
<body class="we">
    <div class="report-container">
        <h3><a href="/../final/plants.html">To Plants</a></h3>
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
        
        <h2><?php echo $data2->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime2); ?></div>
            <div><?php echo date("jS F, Y",$currentTime2); ?></div>
            <div><?php echo ucwords($data2->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data2->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data2->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data2->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data2->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data2->wind->speed; ?> km/h</div>
        </div>
    </div>
    <div>
        <article>
            <center><h3>Best Weather For Gardening Tasks</h3></center>
            <center><h4>By Amber Kanuckle</h5></center>
            <p>
                Most of us would agree — the best weather features balmy temperatures somewhere in the 70s and plenty of sunshine. But is that the best weather to go out and work on your gardens? Maybe, but then again, maybe not. Let’s take a look at some of the best kinds of gardening weather for different gardening tasks.
            </p>
            <h5>Plant Seeds Before it Rains</h5>
            <p>
                The best time to get seeds in the ground is when the soil is relatively dry, but right before a good soaking rain. Dry soil is easier to work with than wet soil and seeds are less likely to rot in soil that doesn’t stay soggy for prolonged periods. Add in a nice rain shower, and you won’t need to drag out the garden hose to water your newly planted seeds. Just make sure that there are no severe rains forecasted any time soon. Light soaking rains are ideal, but pounding rain can very easily wash seeds right out of freshly tilled soil.
            </p>
            <h5>Do Weeding After It Rains</h5>
            <p>
                No one wants to kneel in mud puddles to clear weeds out of their gardens, but if you have a choice, then the best time to get the weeding done is a few hours after a good soaking rain. The moisture loosens the soil, making it easier for you to pull weeds out by the root. If waiting for rain isn’t an option, then give your gardens a thorough watering a few hours before you weed them to make the job easier.
            </p>
            <h5>Transplant On Cloudy Days</h5>
            <p>
                Whether you’re planting veggie starts or dividing perennials, try to do your transplanting on cloudy days. Once they’re in the ground, many transplants will suffer from a condition known as transplant shock. In other words, the plants will wilt, and if left untended, will start to lose leaves and stems until the plant either dies completely or acclimates to its new environment.
            </p>
            <p>
                Water loss is the number one cause behind transplant shock. The newly planted roots are less efficient at soaking up water, but the leaves and stems are still losing water due to evaporation. Do your transplanting when cooler, cloudy weather is in the forecast and the transplants will establish themselves more easily because they’ll be losing less water than they would on a warm, sunny day.
            </p>
            <h5>Wait For Dry Weather to Till</h5>
            <p>
                For many places around the United States, spring means lots of showers, and that can make it difficult for you to get out and do the tilling, raking and digging that needs to be done. If you’ve ever tried to dig a hole in wet soil, then you know just how badly muddy earth can cake on your tools. That’s why you should wait for a few days after a rainy spell to do your tilling. The work will be easier on both you and your tiller. In addition, dry soil is less prone to compacting, whereas tilling wet, muddy soil can actually cause more soil compaction than not tilling it at all.
            </p>
            <h5>Pay Attention to Temperatures</h5>
            <p>
                Regardless of whether it’s raining, sunny or cloudy, the most important factor of all is temperature. For instance, crops like peas, lettuce, broccoli and cabbage all prefer cooler weather. In fact, in many cases, you can plant cool weather crops shortly after the ground thaws for the year.
            </p>
            <p>
                Contrary to popular belief, hot weather doesn’t cause cool weather crops to bolt, but plant growth will slow drastically, resulting in smaller crops. Planting early in the spring gives your cool-weather veggies more time to grow.
            </p>
            <p>
                Other plants — flowers like begonias and hot-weather veggies like peppers and tomatoes — are best left until later in the spring. Seeds for warm loving plants won’t sprout in cool soil, and transplants will languish until the weather warms up.
            </p>
            <p>
                As it turns out, sunny, warm weather isn’t always the best weather for working in the garden. It isn’t always possible, but if you can plan the above jobs around the weather, you’ll find that each job will be a lot easier.
            </p>
        </article>
        </div>
</body>
</html>