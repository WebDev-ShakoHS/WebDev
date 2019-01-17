<html>
<!--Version 3.0 
	Name: Michael Morgovsky
	Date Completed: 9/18/18
 -->
<head>
<!-- your webpage info goes here -->
<style>  
  td {color: #FF0000;}
  body {background-image: linear-gradient(to right, #00FFFF , #FF0000)}
</style>
<script src="JS/webDevUser14_script.js"></script>
	
<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->        

        <link rel="stylesheet" href="style.css" type="text/css" />

        

</head>

<body>
        <div id="page">
                <div id="logo">
                        <h1>The Flat Earth Society</h1>
                </div>
                <div id="nav">
                        <ul>
                                <a href="Version8/homeuser14.php">Home</a>
                                <a href="Version8/javascriptgamesuser14.php">Games</a>
                                <a href="Version8/mytopsongsuser14.php">Songs</a>
                        </ul>        
                </div>
                <div id="content">
                </div>
<a href="Version8/homeuser14.php">Home</a>
                                <a href="Version8/javascriptgamesuser14.php">Games</a>
                                <a href="Version8/mytopsongsuser14.php">Songs</a>

<form method ='post' action = 'process.php'>
    <input type='text' placeholder='Name' name='firstName'>
    <input name = 'enter' type='submit' value = 'Enter Name'></form>
<a href="ip.php" target="_blank">Click here to get your ip</a><br />
<a href="fileName.php" target="_blank">Filename</a><br />
<a href="https.php" target="_blank">Is https enabled?</a><br />
<a href="lastModified.php" target="_blank">Last modified</a><br />
<form action="/Version8/wordToDigit.php" method="get">
    Words:  <input type="text" name="numbers" placeholder="four;eight;nine"/>
    <input type="submit" name="submit" value="Submit me!" />
</form>
<table>
        <tr>
                <td>haha</td>
        </tr>
</table>
<p>We already have your IP</p><br />
<?php
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address;
?>
</body>
</html>