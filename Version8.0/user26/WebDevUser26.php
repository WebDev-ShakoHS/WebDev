

<!DOCTYPE html>
<html lang="en">
<!--Version 5.0
	Name: Nihad Syed
	Date Completed: 09/27/18
 -->

<head>
        <!-- your webpage info goes here -->
        <title>My First Website</title>
        <meta name="author" content="your name" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="CSS/SampleCSS.css" type="text/css" />
</head>

<body background="images/user26/NihadFishSelfie.jpg">
        <!-- webpage content goes here in the body -->
        <script LANGUAGE="javascript">

                var space = " ";
                var pos = 0;
                var msg = "User 26";

                function Scroll() {
                        document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

                        pos++;
                        if (pos > msg.length) pos = 0;
                        window.setTimeout("Scroll()", 0);
                }
                Scroll();

        </script>

        <div id="page">
                <div id="logo">
                        <h1><a href="WebDevUser26_AboutMe.html">Click here to learn about the man himself</a></h1>
                        <h2>Nihad is the Messiah</h2>
                        <h2><a href="https://www.instagram.com/therealnihadsyed/">Follow Me on Insta</a></h2>

                </div>

                <div id="nav">
                        <ul>
                                <li><a href="WebDevUser26Game.html">Click here for Snake</a></li>
                                <li><a href="WebDevUser26Presidents.html">President Rankings</a></li>
                        </ul>
                </div>
                <div id="content">
                        <p>
                                This is my webpage. I was able to code all the HTML and CSS in order to make it.
                                Watch out world of web design here I come!
                        </p>
                        <p>
                                I can use my skills here to create websites for my business, my friends and family, my
                                C.V, blog or articles. As well as any games or more experiment stuff (which is what the
                                web is really all about).
                        </p>
                </div>
        </div>
        
        <div id="content">
            <p>
                Check out these attributes!
            </p>
        </div>
        

        <form method = 'post' action = 'process.php'>
            <input type='text' placeholder='First Name' name='firstname'/>
            <input type='submit' value = 'Enter Name into my database' name = 'enter'/>
        </form>
        
<script type="text/javascript">

    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }

</script>

<a href="#" onclick="toggle_visibility('file');">Click here to see the file name</a>
<div id="file"><?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>
</div>

<p>
 
</p>

<a href="#" onclick="toggle_visibility('http');">Click here to see if website is http enabled</a>
<div id="http"><?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."\n";
}
?>
</div>

<p>
 
</p>

<a href="#" onclick="toggle_visibility('lines');">Click here to see the number of lines in the file</a>
<div id="lines">
<?php
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
?>
</div>

<p>
 
</p>

<a href="#" onclick="toggle_visibility('URL');">Click here to see the full URL</a>
<div id="URL"><?php
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";
?>
</div>

<p>
 
</p>

<a href="#" onclick="toggle_visibility('PHP');">Click here to see the PHP version</a>
<div id="PHP"><?php
echo 'Current PHP version : ' . phpversion();
  // prints e.g. '2.0' or nothing if the extension isn't enabled
  echo phpversion('tidy')."\n";
?>
</div>

<p>
 
</p>

        <div id="footer">
                <p>
                        Webpage made by <a href="/" target="_blank">[Nihad Syed]</a>
                </p>
        </div>
        </div>
</body>

</html>