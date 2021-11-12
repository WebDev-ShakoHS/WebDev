<script>
  alert('Welcome! Use this website to browse an Ebay selection and create a wishlist')
</script>

<?php
error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = 'Screwdriver';  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0
// Create a PHP array of the item filters you want to use in your request
$filterarray =
  array(
    array(
      'name' => 'MaxPrice',
      'value' => '25',
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
  // If the response was loaded, parse it and build links
  $l = 0;
  foreach ($resp->searchResult->item as $item) {
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;
    $price = $item->sellingStatus->currentPrice;

    /////////////////////////EDIT THIS LINE/////////////////////////////////////////////////////
    // For each SearchResultItem node, build a link and append it to $results
    if ($l % 2) {
      $results .= "<div class='col-md-4 centeredElement';><img src=\"$pic\"></div><div class='col-md-4 centeredElement';>$price</div><div class='col-md-4 centeredElement';><a href=\"$link\">$title</a></div>";
    } else {
      $results .= "<hr class='roundedDivider'><div class='col-md-4 centeredElement';><img src=\"$pic\"></div><div class='col-md-4 centeredElement';>$price</div><div class='col-md-4 centeredElement';><a href=\"$link\">$title</a></div>";
    }
  }
  ////////////////////////EDIT THIS LINE//////////////////////////////////////////////////////      
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
  <title>eBay Search Results for <?php echo $query; ?></title>

  <!-- CSS -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Animate -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="style.css">

  <!-- JavaScript -->
  <!-- These are needed to get the responsive menu to work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body {
      font-family: arial, sans-serif;
      background-color: lightblue;
      margin-left: 15px;
      margin-right: 15px;
    }

    h2 {
      text-align: center;
    }

    .centeredElement {
      align-content: center;
      align-self: center;
      text-align: center;
      margin: auto;
    }

    .itemListClass {
      border-style: solid;
      border-width: 5px;
      border-color: black;
    }

    .listContainer {
      display: block;
      padding-left: 25px;
      padding-right: 25px;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .roundedDivider {
      border: 0;
      clear: both;
      display: block;
      width: 96%;
      background-color: #FFFF00;
      height: 1px;
    }

    .navbarDiv {
      margin: auto;
      text-align: center;
      font-size: smaller;
      padding-top: 15px;
      padding-bottom: 25px;
    }
  </style>

</head>

<body>

  <h2>eBay Search Results for <?php echo $query; ?></h2>

  <hr class='roundedDivider'>

  <div class="row" style="padding-bottom: 15px;">
    <div class="centeredElement col-md-12">Enter an items name and link to build your wishlist here:</div>
    <div class="col-md-6"><input type="text" name="itemName" id="itemName"></div>
    <div class="col-md-6"><input type="button" value="add item" onclick="appendItemList()" id="mainButton"></div>
    <div class="col-md-12 centeredElement">
      <ul id="itemList" class="itemListClass centeredElement">
      </ul>
      <div><input style="margin: auto; text-align:center;" type="button" value="clear entries" name="clearButton" id="clearButton" onclick="clearWishlist()"></div>
    </div>
  </div>

  <div class="row">
    <?php echo $results; ?>
  </div>

  <div>
    <h1 class="navbarDiv">
      <input type="button" value="scroll up" onclick="scrollMove()">
    </h1>
  </div>

</body>

<script>
  const listToUse = document.querySelector('ul');
  const input = document.getElementById('itemName');

  function appendItemList() {

    if (input.value == '') {
      alert('The item text field has been left blank!');
      return
    } else {

      let itemName = input.value;
      input.value = '';

      const listItem = document.createElement('li');
      const listText = document.createElement('span');

      listItem.appendChild(listText);
      listText.textContent = itemName;
      listToUse.appendChild(listItem);

      document.getElementById("itemList").innerHTML += listToUse;
    }
  }

  function clearWishlist() {
    const clearList = document.querySelector('ul');
    document.getElementById("itemList").innerHTML = clearList
  }

  function scrollMove() {
    window.scrollTo(0, 5000);
  }
</script>

</html>