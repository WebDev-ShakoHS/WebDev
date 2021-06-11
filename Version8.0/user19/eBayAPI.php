<?php
error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = 'Light Novel';  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0
// Create a PHP array of the item filters you want to use in your request
$filterarray =
    array(
        array(
            'name' => 'MaxPrice',
            'value' => '100',
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
    foreach ($resp->searchResult->item as $item) {
        $pic   = $item->galleryURL;
        $link  = $item->viewItemURL;
        $title = $item->title;
        /////////////////////////EDIT THIS LINE/////////////////////////////////////////////////////
        // For each SearchResultItem node, build a link and append it to $results
        $results .= "<tr><td><img src=\"$pic\"></td><td><a href=\"$link\">$title</a></td></tr>";
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
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Magic" content="SHS WebDev Version 7.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>eBay Search Results for <?php echo $query; ?></title>
    <style type="text/css">
        body {
            font-family: arial, sans-serif;
        }
    </style>
</head>

<body>

    <h1>eBay Search Results for <?php echo $query; ?></h1>
    <p><button onclick="sortTable()">Sort</button></p>
    <div class="container-fluid">
        <div calss="row">
                <table id="myTable">
                    <tr>
                        <td>
                            <?php echo $results; ?>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
    <script>
        function sortTable() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[0];
                    y = rows[i + 1].getElementsByTagName("TD")[0];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }
    </script>

</body>

</html>