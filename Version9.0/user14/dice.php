<?php
error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = 'DND Dice';  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0
// Create a PHP array of the item filters you want to use in your request
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

// Generates an indexed URL snippet from the array of item filters
function buildURLArray ($filterarray) {
  global $urlfilter;
  global $i;
  // Iterate through each filter in the array
  foreach($filterarray as $itemfilter) {
    // Iterate through each key in the filter
    foreach ($itemfilter as $key =>$value) {
      if(is_array($value)) {
        foreach($value as $j => $content) { // Index the key for each value
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
  foreach($resp->searchResult->item as $item) {
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

<!DOCTYPE html>
<html lang="en">
<!--Version 3.0
        Name:Tate Hartmann
        Date Completed:
    -->

<head>
    <link rel='icon' href='images/favicon.ico' type='image/x-icon' />
    <link href="CSS/day.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Dice</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">DND</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="" class="nav-item nav-link active">Dice</a>
                    <a href="classes.html" class="nav-item nav-link" tabindex="-1">Classes</a>
                    <a href="races.html" class="nav-item nav-link" tabindex="-2">Races</a>
                    <a href="characters.php" class="nav-item nav-link" tabindex="-2">Characters</a>
                    <a href="faq.php" class="nav-item nav-link" tabindex="-2">FAQ</a>
                    <a href="contact.html" class="nav-item nav-link" tabindex="-2">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">

                </div>
            </div>
        </nav>
    </div>


    <body style="background-image: url('https://www.syfy.com/sites/syfy/files/styles/1200x680/public/wire/legacy/ChessexDice.jpeg');">
        <h2 class="white wideMargin" style="color: white;">Dice</h2>
        <div class="wideMargin" style="background-color: white;">
            <table>
                <tr>
                    <th>
                        <p>d4</p>
                    </th>
                    <th><img src="data:image/jpeg;base64,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" alt="d4" width="50"></th>
                    <th>Range: 1-4</th>
                    <th>
                        <p id="d4">result</p><br />
                        <button onclick="rolld4(1,4)">Roll a d4!</button>
                    </th>
                </tr>
                <tr>
                    <td>
                        <p>d6</p>
                    </td>
                    <td><img src="data:image/jpeg;base64,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" alt="d6" width="50"></td>
                    <td>Range: 1-6</td>
                    <td>
                        <p id="d6">result</p><br />
                        <button onclick="rolld6(1,6)">Roll a d6!</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>d8</p>
                    </td>
                    <td><img src="data:image/jpeg;base64,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" alt="d8" width="50"></td>
                    <td>Range: 1-8</td>
                    <td>
                        <p id="d8">result</p><br />
                        <button onclick="rolld8(1,8)">Roll a d8!</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>d10</p>
                    </td>
                    <td><img src="https://cdn11.bigcommerce.com/s-70184/images/stencil/1280x1280/products/543/7142/d10-red-opaque__26369.1522248361.jpg?c=2&imbypass=on" alt="d10" width="50"></td>
                    <td>Range: 1-10</td>
                    <td>
                        <p id="d10">result</p><br />
                        <button onclick="rolld10(1,10)">Roll a d10!</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>d12</p>
                    </td>
                    <td><img src="https://cdn11.bigcommerce.com/s-70184/images/stencil/1280x1280/products/575/7526/d12-red-dice__12834.1531856195.jpg?c=2?imbypass=on" alt="d12" width="50"></td>
                    <td>Range: 1-12</td>
                    <td>
                        <p id="d12">result</p><br />
                        <button onclick="rolld12(1,12)">Roll a d12!</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>d20</p>
                    </td>
                    <td><img src="https://cdn11.bigcommerce.com/s-70184/images/stencil/1280x1280/products/648/7091/red-d20__25213.1521839155.jpg?c=2&imbypass=on" alt="d20" width="50"></td>
                    <td>Range: 1-20</td>
                    <td>
                        <p id="d20">result</p><br />
                        <button onclick="rolld20(1,20)">Roll a d20!</button>
                    </td>
                </tr>

            </table>
            

            <head>
                <title>eBay Search Results for <?php echo $query; ?></title>
                <style type="text/css">
                    body {
                        font-family: arial, sans-serif;
                    }

                    table,
                    th,
                    td {
                        border: 1px solid black;
                    }

                    `

                </style>
            </head>

            <body>

                <h1>eBay Search Results for <?php echo $query; ?></h1>

                <table>
                    <tr>
                        <td>
                            <?php echo $results;?>
                        </td>
                    </tr>
                </table>
            
        </div>
        <div class="wideMargin" id="footer">

            <p>

                Webpage made with love.
            </p>
        </div>
        <script src="JS/SampleJS.js"></script>
    </body>
</body>

</html>
