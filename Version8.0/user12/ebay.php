<?php
error_reporting(E_ALL); 
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1'; 
$version = '1.0.0'; 
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02'; 
$globalid = 'EBAY-US'; 
$query = 'bikes'; 
$safequery = urlencode($query); 
$i = '0'; 
$filterarray =
  array(
    array(
    'name' => 'MaxPrice',
    'value' => '25',
    'paramName' => 'Currency',
    'paramValue' => 'USD'),
    array(
    'name' => '',
    'value' => 'true',
    'paramName' => '',
    'paramValue' => ''),
    array(
    'name' => 'ListingType',
    'value' => array('AuctionWithBIN','FixedPrice'),
    'paramName' => '',
    'paramValue' => ''),
  );

function buildURLArray ($filterarray) {
  global $urlfilter;
  global $i;
  foreach($filterarray as $itemfilter) {
    foreach ($itemfilter as $key =>$value) {
      if(is_array($value)) {
        foreach($value as $j => $content) { 
          $urlfilter .= "&itemFilter($i).$key($j)=$content";
        }
      }
      else {
        if($value != "") {
          $urlfilter .= "&itemFilter($i).$key=$value";
        }
      }
    }
    $i++;
  }
  return "$urlfilter";
} 
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
  foreach($resp->searchResult->item as $item) {
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;

    $results .= "<tr><td><img src=\"$pic\"></td><td><a href=\"$link\">$title</a></td></tr>";
  }
}
// If the response does not indicate 'Success,' print an error
else {
  $results  = "<h3>Oops! The request was not successful. Make sure you are using a valid ";
  $results .= "AppID for the Production environment.</h3>";
}

//below is the code i found and added
$filterarray =
  array(
    array(
    'name' => 'MaxPrice',
    'value' => '25',
    'paramName' => 'Currency',
    'paramValue' => 'USD'),
    array(
    'name' => 'FreeShippingOnly',
    'value' => 'true',
    'paramName' => '',
    'paramValue' => ''),
    array(
    'name' => 'ListingType',
    'value' => array('AuctionWithBIN','FixedPrice'),
    'paramName' => '',
    'paramValue' => ''),
  );
?>
<!-- Build the HTML page with values from the call response -->
<html>

<head>
    <title>eBay Search Results for <?php echo $query; ?></title>
    <style type="text/css">
        body {
            font-family: arial, sans-serif;
        }

    </style>
</head>

<body>

    <h1>eBay Search Results for <?php echo $query; ?></h1>

    <table border="1">
        <tr>
            <td>
                <?php echo $results;?>
            </td>
        </tr>
    </table>

</body>

</html>
