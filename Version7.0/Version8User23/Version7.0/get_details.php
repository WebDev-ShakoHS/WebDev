<html>
<body>
<div id="wrapper">

<div id="detail_div">
<?php
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 //$page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 //$referrer = $_SERVER['HTTP_REFERER'];
 //$datetime = date("F j, Y, g:i a");
 //$useragent = $_SERVER['HTTP_USER_AGENT'];

 echo "<p>IP Address : ".$ipaddress."</p>";
 //echo "<p>Current Page : ".$page."</p>";
 //echo "<p>Referrer : ".$referrer."</p>";
 //echo "<p>Current Time : ".$datetime."</p>";
 //echo "<p>Browser : ".$useragent."</p>";

 $host="localhost";
 $username="mattscalf";
 $password="Thunder21";
 $databasename="shoes";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);
 
 mysql_query("insert into visitor_details values('','$ipaddress')");
 
?>
</div>

</div>
</body>
</html>
