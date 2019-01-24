<!DOCTYPE html>
<html>
<body>

<h1>PHP page</h1>

<?php
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
?>

<li><a href="php.html">Back</a></li>
</body>
</html>