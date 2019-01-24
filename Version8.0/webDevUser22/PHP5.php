<html lang="en">
    
<h1>Operating system</h1>

<?php
 echo php_uname()."\n";
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo ',Not Windows';
} else {
echo ',Not Windows'."\n";
}
?>
<html>
    <div>
        <a href="php.html">Back</a>
    </div>
</html>