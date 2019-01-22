<?php
 echo php_uname()."\n";
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'This is a server using Windows!';
} else {
echo 'This is a server not using Windows!'."\n";
}
?>
<html>
    <div>
        <a href="PHP.html">Back to PHP Processes</a>
    </div>
</html>