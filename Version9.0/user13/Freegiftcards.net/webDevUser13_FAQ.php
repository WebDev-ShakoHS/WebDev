<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<html lang="en">
<!--Version 6.0 
	Name:Ben Sebastian
	Date Completed:9/5/2019
 -->
<head>

<title> FreeGiftcards.Net/About</title>
    <meta name="author" content="your name" />

        <meta name="description" content="" />

<script src="JS/WebDevUser13.js"></script>
<link rel="stylesheet" href="User13css/day.css">  
<style>
   
    .titlemania{
        color: #003b6f;
        font-family: cursive;
        text-align: center;
                font-size: 250%;

    }
    </style>

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->        

        <link rel="stylesheet" href="CSS/WebDevUser13.css" type="text/css" />

</head>

<body>


<!-- webpage content goes here in the body -->

  <button data-file="day">Day</button>
    <button data-file="night">Night</button>

     
                    <marquee>   <h1><a href="webDevUser13.php" id="logoLink">Free Giftcards</a></h1>
                    </marquee>
             
                           
                <div id="nav">
             <a class="a2" href="webDevUser13.php">Home</a>

                                <a class="a2" href="webDevUser13_About.php">About</a>

                                <a class="a2" href="webDevUser13_Games.php">Games</a>
                                
                                <a class="acurrent" href="webDevUser13_FAQ.php">FAQ</a>

                                <a class="a2" href="webDevUser13_Giftcards.php">About Giftcards</a>
<a href="webDevUser13_Movies.php" class="a2">Free Movies</a>
                    <a href="myaccount.php" class="a2">My Account</a>

                </div>
    <script src="JS/jquery-1.7.1.js"></script>
<dl>
	<dt>Is this website safe?</dt>
	<dd>Yes, 100% safe.</dd>
	<dt>Is this a scam website?</dt>
	<dd>No we are a legitamate company that will give you free giftcards.</dd>
	<dt>What giftcards do you offer?</dt>
	<dd>We offer Amazon,Target, Itunes, Walmart and Gamestop with more to come!.</dd>
	<dt>How does it work?</dt>
	<dd><ol>
        <li>Select which giftcards you want</li>
        <li>Enter your SSN</li>
        <li>Click on Get Giftcards!</li>
        </ol></dd>
	<dt>When willl we get our giftcards?</dt>
	<dd>Within 2 buisness days.</dd>
</dl>
    
    <script>

(function() {
	
	$('dd').filter(':nth-child(n+4)').addClass('hide');

	$('dl').on('mouseenter', 'dt', function() {
		$(this)
			.next()
				.slideDown(200)
				.siblings('dd')
					.slideUp(200);
	});
})();


</script>
    <script>
    (function(){
        
        var link = $('link');
        $('button').on('click', function() {
            var $this = $(this),
                stylesheet = $this.data('file');
            
            link.attr('href','User13css/' + stylesheet + '.css');
            
            $this
                .siblings('button')
                    .removeAttr('disabled')
                    .end()
                    .attr('disabled', 'disabled');
            
            
        });
        
        
        
    })();
    
    </script>
  <script>
      $("h1").addClass('titlemania');
    </script>  
</body>

</html>