<html lang="en">
    
<h1>URL for page</h1>

<?php
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";
?>
<html>
    <div>
       <a href="php.html">Back</a>
    </div>
</html>