<?php




error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = 'yeezys';  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
$i = 0;  // Initialize the item filter index to 0
// Create a PHP array of the item filters you want to use in your request
$filterarray =
  array(
    array(
      'name' => 'MaxPrice',
      'value' => '19000',
      'paramName' => 'Currency',
      'paramValue' => 'USD'
    ),
    array(
      'name' => '',
      'value' => 'true',
      'paramName' => '',
      'paramValue' => ''
    ),
    array(
      'name' => 'ListingType',
      'value' => array('AuctionWithBIN', 'FixedPrice'),
      'paramName' => '',
      'paramValue' => ''
    ),
  );

// Generates an indexed URL snippet from the array of item filters
function buildURLArray($filterarray)
{
  global $urlfilter;
  global $i;
  // Iterate through each filter in the array
  foreach ($filterarray as $itemfilter) {
    // Iterate through each key in the filter
    foreach ($itemfilter as $key => $value) {
      if (is_array($value)) {
        foreach ($value as $j => $content) { // Index the key for each value
          $urlfilter .= "&itemFilter($i).$key($j)=$content";
        }
      } else {
        if ($value != "") {
          $urlfilter .= "&itemFilter($i).$key=$value";
        }
      }
    }
    $i++;
  }
  return "$urlfilter";
} // End of buildURLArray function

// Build the indexed item filter URL snippet
buildURLArray($filterarray);


// Construct the findItemsByKeywords HTTP GET call
$apicall = "$endpoint?";
$apicall .= "OPERATION-NAME=findItemsByKeywords";
$apicall .= "&SERVICE-VERSION=$version";
$apicall .= "&SECURITY-APPNAME=$appid";
$apicall .= "&GLOBAL-ID=$globalid";
$apicall .= "&keywords=$safequery";
$apicall .= "&paginationInput.entriesPerPage=50";
$apicall .= "$urlfilter";
// Load the call and capture the document returned by eBay API
$resp = simplexml_load_file($apicall);

// Check to see if the request was successful, else print an error
if ($resp->ack == "Success") {
  $results = '';
  $i=0;
  // If the response was loaded, parse it and build links
  foreach ($resp->searchResult->item as $item) {
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;
    $i++;
    ////////////////////////EDIT THIS LINE/////////////////////////////////////////////////////
    if ($i % 4 === 1) {
      $results .= "<div class='row'><div class='col-sm-4'><span></span><img src =\"pic\"><a href =\"$link\">$title</a></div>";
    }
    if ($i % 4 === 2 || $i % 4 === 3) {
      $results .= "<div class='col-sm-4'><img src=\"$pic\"<a href=\"$link\">$title</a></div>";
    }
    if ($i % 4 === 0) {
      $results .= "<div class ='col-sm-4'><img src=\"$pic\"><a href=\"$link\">$title</a></div></div>";
    }

    ////////////////////////EDIT THIS LINE//////////////////////////////////////////////////////      
  }
}
// If the response does not indicate 'Success,' print an error
else {
  $results  = "<h3>Oops! The request was not successful. Make sure you are using a valid ";
  $results .= "AppID for the Production environment.</h3>";
}
?>
<!-- Build the HTML page with values from the call response -->
<html>

<head>
  <title>eBay Search Results for YEEZY'S<?php echo $query; ?></title>

  <!-- Bootstrap meta data -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="SHS WebDev Bootstrap sample">

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



  <!-- JavaScript -->
  <!-- These are needed to get the responsive menu to work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
  <h2>Star Rating</h2>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>


  <h2>Frank Ocean</h2>



  <nav class="tab">
    <a href="index.php" class="tablinks" onclick="openCity(event, 'Index')">Index</a>
    <a href="frankocean.html">Frank Ocean</a>
    <a href="Tyler.html" class="tablinks" onclick="openCity(event, 'Tyler')">Tyler</a>
    <a href="Jcole.html" class="tablinks" onclick="openCity(event, 'J cole')">J cole</a>
    <a href="kanye.html" class="tablinks" onclick="openCity(event, 'Kanye')">Kanye</a>
    <a href="eBAY.API.PHP" class="tablinks" onclick="openCity(event, 'Yeezys')">Yeezy</a>
  </nav>
  <main>

    <h1>eBay Search Results for <?php echo $query; ?></h1>
    <h2>Kanye's Shoes <?php echo $query; ?></h2>
    <div class="container-fluid">


      <?php echo $results; ?>



    </div>

  </main>
</body>

</html>