<!DOCTYPE html>
<html>
<style>
    h1{
        color: white;
    }
  td {color: #FF0000;}
</style>
     <div id="nav">
        <ul>
            <h2><a href="index.html">Back</a></h2>
        </ul>
    </div>
    <p>
      
    </p>
<body>

<h1>Welcome to my home page!</h1>
<?php


$peter=$_SERVER ['HTTP_USER_AGENT'];
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from prox
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
  $test=$ip_address;
  echo "<p>Your ip_address is $test.</p> Your Web Browser is $peter " . "<br />";
?>
</body>
</html>