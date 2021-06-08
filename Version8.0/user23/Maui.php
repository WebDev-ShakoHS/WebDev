<html lang="en">
<!--Version 7.0 
	Name: Joey St. George
	Date Completed:
    -->

<head>
    <link rel="icon" type="image/x-icon" href="images/JS6.ico" />

    <title>Maui</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev JavaScript Practice">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Maui.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/Maui.js"></script>
    <script src="JS/all.js"></script>

    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Put your .js files here ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->

</head>

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link">Places To Visit</a>
                    <a href="South-Island.php" class="nav-item nav-link" tabindex="-1">South Island</a>
                    <a href="Paris.php" class="nav-item nav-link" tabindex="-1">Paris</a>
                    <a href="Bora-Bora.php" class="nav-item nav-link" tabindex="-1">Bora Bora</a>
                    <a href="Maui.php" class="nav-item nav-link active" tabindex="-1">Maui</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->

    <!--------------------------------Button--------------------------------->
    <button onclick="topFunction()" id="topBtn" title="Go to top">Top of Page</button>
    <script>

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };
    </script>

    <!--------------------------------Content------------------------------------->
    <br>
    <h1>
        <center>Maui, Hawaii</center>
    </h1>
    <br>
    <div>
        <embed width="100%" height="100%" src="https://www.youtube.com/embed/yGCKbSSBUxE?autoplay=1&mute=1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></embed>

    </div>

    <div id="text2">
        <div>
            <center>
                <h2>Best Places to Stay</h2>
            </center>
            <br>
            <br>
            <center><strong>
                    <p><a href="https://www.tripadvisor.com/Hotel_Review-g60634-d101352-Reviews-Hyatt_Regency_Maui_Resort_and_Spa-Lahaina_Maui_Hawaii.html"
                            target="_blank" rel="noopener noreferrer">1. Hyatt Regency Maui Resort and Spa</a></p>
                </strong>

                <p> Situated on 40 oceanfront acres on Ka'anapali Beach, this AAA 4-Diamond award-winning resort is an
                    authentic Hawaiian experience set in tropical paradise. Each of 810 renovated guestrooms, 31 suites,
                    affords Hawaiian elegance with private lanais and panoramic views. Amenities include oceanfront spa,
                    an athletic club, half-acre pool with waterfalls and slides, golf, and tennis. Activities include
                    Drums of the Pacific Lu'au, Tour of the Stars rooftop stargazing, cultural lessons, water sports,
                    shopping on property and nearby, and wildlife tours with penguins, flamingos and more. World-class
                    dining at Japengo, 'Umalu, Swan Court and Son’z—emphasize using locally grown ingredients to provide
                    unique cuisine to suit every palate.

                </p>
                <img src="images/Maui/Hyatt.jpeg" alt="Image of the Hyatt Regency Maui Resort and Spa" width=80%>
            </center>
        </div>

        <br>
        <br>
        <br>

        <div>
            <center><strong>
                    <p><a href="https://www.tripadvisor.com/Hotel_Review-g609129-d4459053-Reviews-Andaz_Maui_At_Wailea_Resort-Wailea_Maui_Hawaii.html"
                            target="_blank" rel="noopener noreferrer">2. Andaz Maui At Wailea Resort</a></p>
                </strong>
                <p>
                    The Pacific Ocean greets you from the moment you arrive at Andaz Maui at Wailea Resort. Discover a
                    new lifestyle experience in Maui with indulgent amenities that renew your spirit. Dip your toes in
                    the sand, explore Hawaii’s wonders, or lounge poolside with a tropical cocktail. As the best place
                    to stay in Maui, you’ll feel at home in our beautiful guestrooms, suites and villas with ocean or
                    pool views. Relax on your private lanai, dine on locally sourced cuisine at our four restaurants, or
                    plan the wedding of a lifetime on an oceanfront lawn along the coast. Renew your senses at the spa
                    and tap into the energy of the local culture.
                </p>
                <img src="images/Maui/Andaz.jpeg" alt="Image of the Andaz Maui At Wailea Resort" width=80%>
            </center>
        </div>

        <br>
        <br>
        <br>

        <div>
            <center><strong>
                    <p><a href="https://www.tripadvisor.com/Hotel_Review-g60634-d90119-Reviews-Royal_Lahaina_Resort-Lahaina_Maui_Hawaii.html"
                            target="_blank" rel="noopener noreferrer">3. Royal Lahaina Resort</a></p>
                </strong>
                <p>
                    Set amidst 27 acres of tropical gardens, fronting the best and most exclusive stretch of Kaanapali
                    Beach, the Royal Lahaina Resort is a truly unique Hawaiian Resort. The resort’s natural beauty,
                    traditional Hawaiian ambiance, and dedication to five-star service offers guests a timeless and
                    subtle elegance providing for the ultimate in relaxation and tranquility. The resort’s original
                    garden and oceanfront cottage accommodations evoke a quaint beachside experience reminiscent of
                    Hawaii’s Plantation Era; while the 12-story Lahaina Kai Tower features luxurious island-inspired
                    guestrooms and suites celebrating the artistry, environment and culture of Hawaii.

                    The resort features a restaurant and lounge, two oceanfront swimming pools, a beach activities
                    center, fitness room, massage services, is adjacent to the two championship Kaanapali Golf Courses,
                    and has been named among the top 100 tennis destinations in the world, with an 11-court Tennis
                    Ranch.
                </p>
                <img src="images/Maui/Royal.jpeg" alt="Image of the Royal Lahaina Resort" width=80%>
            </center>
        </div>
    </div>
</body>

<!---------------------------------Footer------------------------------------>
<!-- Footer -->
<footer id="footer" class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Content -->
                <a class="weatherwidget-io" href="https://forecast7.com/en/20d80n156d33/maui-county/?unit=us"
                    data-label_1="Maui" data-label_2="Weather" data-days="5" data-theme="gray">Maui Weather</a>
                <script>
                    !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
                </script>


            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <a id="links" href="http://shakonet.isd720.com/WebDev/" target="_blank"
                                rel="noopener noreferrer">PROJECTS</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a id="links" href="https://www.shakopee.k12.mn.us/" target="_blank"
                                rel="noopener noreferrer">ABOUT
                                US</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a id="links" href="https://www.smore.com/z45xm" target="_blank"
                                rel="noopener noreferrer">BLOG</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a id="links" href="https://www.shakopeesabers.com/" target="_blank"
                                rel="noopener noreferrer">AWARDS</a>
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Contact details -->
                <h5 class="font-weight-bold text-uppercase mb-4">Contact Us</h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <i class="fa fa-home mr-3"></i> 100 17th Ave W, Shakopee, MN 55379
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> 225838@shakopeeschools.org
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-phone mr-3"></i> (952) 496-5152
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                <!-- Social buttons -->
                <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                <!-- Facebook -->
                <a id="links" type="button" class="btn-floating btn-fb">
                    <i class="fa fa-facebook-f fa-3x"></i>
                </a>
                <!-- Twitter -->
                <a id="links" type="button" class="btn-floating btn-tw">
                    <i class="fa fa-twitter fa-3x"></i>
                </a>
                <!-- Google +-->
                <a id="links" ype="button" class="btn-floating btn-gplus">
                    <i class="fa fa-google-plus fa-3x"></i>
                </a>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        <!--link->
        <a id="links" href="https://mdbootstrap.com/"> </a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>