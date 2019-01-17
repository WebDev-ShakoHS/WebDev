<?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."\n";
}
echo "<a href='WebDevUser26.php'>Home</a>"."\n";
?>