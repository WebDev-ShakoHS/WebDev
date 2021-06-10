<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
} else {
  echo "Click one of the pictures";
}


error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = $_POST["query"];
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
  <title>eBay Search Results for <?php echo $query; ?></title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <!-- Confirmation meta data -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Confirmation">

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="CSS/style.css">

  <!-- JavaScript -->
  <!-- These are needed to get the responsive menu to work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="JS/script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <style>
input {
  background-size: cover;
  min-height: 300px;
  min-width: 450px;
  color: white;
}
  </style>
</head>

<body ondblclick="whichElement(event)">
  <menu>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a href="#" class="nav-item nav-link disabled"><img src="images/favicon.ico" style="height: 40px;"></img></a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="R6S.php" class="nav-item nav-link ">R6S</a>
          <a href="BO3.php" class="nav-item nav-link">BO3</a>
          <a href="GTAV.php" class="nav-item nav-link">GTAV</a>
          <a href="eBayAPI.php" class="nav-item nav-link active">eBay</a>
          <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
        </div>
        <div class="navbar-nav ml-auto">
          <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
          <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
          } else {
            echo "<a href='login.php' class='nav-item nav-link'> Login </a>";
          } ?>
        </div>
      </div>
    </nav>
  </menu>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <input type="submit" value="Rainbow Six Seige" name="query" style="background-image: url(https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2015/09/30/1331750916642_2/tom-clancy%E2%80%99s-rainbow-six-siege);">
        </div>
        <div class="col-sm-4">
          <input type="submit" value="Black Ops 3" name="query" style="background-image: url(https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2015/11/09/1331758482843_2/what-were-you-exspectreing);">
        </div>
        <div class="col-sm-4">
          <input type="submit" value="Grand Theft Auto V" name="query" style="background-image: url(https://images.indianexpress.com/2020/08/GTA-Online-1200-1.jpg);">
        </div>
      </div>
    </div>
  </form>
  <h1>eBay Search Results for <?php echo $query; ?></h1>

  <table>
    <tr>
      <td>
        <?php echo $results; ?>
      </td>
    </tr>
  </table>
</body>
<footer>
  <span class="title title-small">Footer</span>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <b>Sources</b>
        <p>My Brain</p>
        <p>Mr. M</p>
      </div>
      <div class="col-sm-6">
        <b>JavaScript</b>
        <p>Double Click Elements to See What I Used</p>
        <p>Jump Scare Warning on Black Ops 3</p>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <table id="footerTable">
          <tr>
            <td>
              <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
            </td>
            <td>
              <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
            </td>
            <td>
              <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</footer>

</html>