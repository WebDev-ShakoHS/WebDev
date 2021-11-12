<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://yahoo-finance15.p.rapidapi.com/api/yahoo/qu/quote/AAPL,MSFT,FB,NFLX,AMZN,GOOGL",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: yahoo-finance15.p.rapidapi.com",
		"x-rapidapi-key: e3cec6a7dbmsh6f1a6acdd1315dfp17d288jsn73a4cbdbedd1"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$data = json_decode($response,true);




?>





<!DOCTYPE html>

<head>

    <link rel="icon" type="image/x-icon" href="images/favicon copy.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/finalstyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/finalscript.js"></script>

    <title>Quotes</title>

    <style>



        .price {
        line-height: 25px;
        }

        .bigger{
        font-size: 18px;
        margin-bottom: 7px;
        margin-top: 7px;
        }
    </style>    
</head>


<body>
<div class="menu">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">


        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="topnav">
                <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="aboutUsDiscord.html" class="nav-item nav-link ">About Us</a>
                <a href="leadershipSocialMedia.html" class="nav-item nav-link">Leadership</a>
                <a href="tradePortfolio.html" class="nav-item nav-link">Profits</a>
                <a href="http://localhost:8080/WebDev2/Version7.0/user04/api.php" class="nav-item nav-link active">Stock Prices</a>
                <a href="http://localhost:8080/WebDev2/Version7.0/user04/index.php" class="nav-item nav-link">Trade Journal</a>
            </div>
        </div>
    </nav>
</div>

<div>

</div>

<body>


    

    <div class="report-container">
        <h1 class="space3"><?php echo $data->name; ?>Stock Prices</h1>
        <div class="price bigger">
        <?php echo $response; ?>
       
            <div class="bigger space3"><Span>Apple: </span><?php echo $data[0]['ask']; ?></div>
            <div class="bigger space3"><Span>Microsoft: </span> <?php echo $data[1]['ask'] ; ?></div>
            <div class="bigger space3"><Span>Facebook: </span> <?php echo $data[2]['ask'] ; ?></div>
            <div class="bigger space3"><Span>Netflix: </span><?php echo $data[3]['ask'] ; ?></div>
            <div class="bigger space3"><Span>Amazon: </span><?php echo $data[4]['ask'] ; ?></div>
            <div class="bigger space3"><Span>Google: </span><?php echo $data[5]['ask'] ; ?></div>
        </div>
    </div>
    
    <p class="size space">

        The stock market is hard to follow and impossible to predict and new traders and investors may find it challenging to make their way through the market without being swallowed by it or without losing money. Here are some top blue sticker companies whose stocks consistently grow and gain money. The prices update in real time and these are some of the most secure and reliable companies to invest in making them a great place to start or expand your portfolio with.

    </p>

</body>
<footer class="page-footer font-small blue-grey lighten-5 margin">

    <div style="background-color: #04c40d;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 size">Follow The Option Guys on our Instagram!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Instagram-->
                    <a class="ins-ic">
                        <button type="button" class="btn btn-ins"><i class="fa fa-instagram left"></i>
                            <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/theoptionguys?utm_medium=copy_link">Instagram</a></button>
                    </a>

                </div>
                <!-- Grid column -->


                <!-- Grid row-->

            </div>
        </div>

        <div>

            <footer class="page-footer font-small green pt-4">



                <div class="container-fluid text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">

                            <!-- Content -->
                            <h5 class="text-uppercase">The Option Guys</h5>
                            <p>The Option Guys is dedicated to making our community stronger and bigger through the
                                distribution of knowledge of investing and trading strategy to help you achieve
                                financial security .</p>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none pb-3">

                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">

                            <!-- Links -->
                            <h5 class="text-uppercase">Helpful Pages</h5>

                            <ul class="list-unstyled">
                                <li class="padding">
                                    <a href="#">About Us</a>
                                </li>
                                <li class="padding">
                                    <a href="#">Profits</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">

                            <!-- Links -->
                            <h5 class="text-uppercase">Social Media</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://discord.gg/FHJAxSvpHP" onclick="myFunction()">The Option Guys Discord</a></button>
                                </li>
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://www.instagram.com/optionstender/">Optionstender</a>
                                </li>
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/prodigystocks?utm_medium=copy_link">ProdigyStocks</a>
                                </li>
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/stockshare_?utm_medium=copy_link">StockShare_</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/theoptionguys?utm_medium=copy_link">The Option Guys</a>
                </div>
                <!-- Copyright -->

            </footer>
        </div>
    </div>
</footer>
</html>