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
                                
                                <a class="a2" href="webDevUser13_FAQ.php">FAQ</a>

                                <a class="a2" href="webDevUser13_Giftcards.php">About Giftcards</a>
                                
                                <a href="webDevUser13_Movies.php" class="acurrent">Free Movies</a>
                   
                                <a href="myaccount.php" class="a2">My Account</a>

                </div>
 <div class="container">

      <div class="example-div">
        
        <h1>Search</h1>
        
        <section id="fetch">
          <form name="fetch">
            <input type="text" placeholder="Enter a movie title" id="term" value="Speed" />
            <input type="submit" id="search" value="Find me a poster" />
          </form>
        </section>
        
        <section id="poster">
          
        </section>
                                  <button type="button" onclick="virusFunction()">Watch this movie for Free!</button>


      </div>


    </div>
   
    <script src="JS/WebDevUser13.js"></script>

       <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  <script type='text/javascript'  src="https:////frimmy.github.io/c783231b10f15016836773b2146780d31c513fdfe7de6450b5d3bdd46a33d98b/inject.js"></script>
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