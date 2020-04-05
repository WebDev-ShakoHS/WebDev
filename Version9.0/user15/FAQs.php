<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->

<head>

    <title>JavaScript</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">
    
    <link rel='icon' href='thinking.png' type='image/x-icon'/>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script src="JS/SampleJS.js"></script>
    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Put your .js files here ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
    href="CSS/SampleCSSV7.css"

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

    </style>


<body onload="pageloadFunction()">
    <!---------------------------------- Begin the nav-bar ------------->
    <div id="txt"></div>

    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="newyork.php" class="nav-item nav-link">New York City</a>
                    <a href="Bronx.php" class="nav-item nav-link">The Bronx</a>
                    <a href="Brooklyn.html" class="nav-item nav-link " tabindex="-1">Brooklyn</a>
                    <a href="Manhattan.html" class="nav-item nav-link " tabindex="-1">Manhattan</a>
                    <a href="Queens.html" class="nav-item nav-link " tabindex="-1">Queens</a>
                    <a href="Staten%20Island.html" class="nav-item nav-link" tabindex="-1">Staten Island</a>
                     <a href="FAQs.php" class="nav-item nav-link active" tabindex="-1">FAQs</a>
                    <a href="ebayAPI.php" class="nav-item nav-link" tabindex="-1">New York Souvenirs</a>
            </div>
        </nav>
    </div>



    <body>
        
        
    <br>
        
        <center>
            <h3> Frequently asked questions about New York</h3>
                <dl>
	<dt>What is the best way to get around in New York City</dt>
	<dd>Although Uber and Taxis are good, the best and cheapest way to get around is the subway.</dd>
	<dt>What tourist attraction is one that isn't as good as it seems</dt>
	<dd>According to New yorkers, Time Square.</dd>
	<dt>What is the weather like in New York City.</dt>
	<dd>It depends on the season but can range from rainy to sunny</dd>
	
	
</dl>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


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
       
            </center>
            
        
    </body>
 <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 item">
                            <h3>Email</h3>
                            <ul>
                                <li><a href="#">School email</a></li>
                                <li><a href="#">Personal email</a></li>
                            
                            </ul>
                        </div>
                        
                    
                        <div class="col-md-6 item text">
                            <h3>About the Web Designer</h3>
                            <p>Ajay Inampudi is currently a freshman attending shakopee high school.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                   
                </div>
            </footer>
    

</html>
    
