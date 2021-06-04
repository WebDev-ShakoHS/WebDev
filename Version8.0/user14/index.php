

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salih's World of Knowledge</title>
    <link rel="icon" type="images/x-icon" href="images/Hat1.png" />

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Version 3.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Script -->
    <script type="text/javascript" src="JS/Script.js"> </script>
    <script>
        listBtn.onclick = function(e) {
            list.removeChild(listItem);
        }
    </script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Style the header */
        header {
            padding: 80px;
            text-align: center;
            background: #daa778;
            color: rgb(148, 82, 82);
        }


        .header h1 {
            font-size: 40px;

        }


        .navbar {
            overflow: hidden;
            background-color: rgb(61, 158, 187);

        }




        .row {
            display: flex;
            flex-wrap: wrap;
        }


        .side {
            flex: 30%;
            background-color: #41b68f;
            padding: 20px;
        }


        .main {
            flex: 70%;
            background-color: rgb(192, 124, 112);
            padding: 20px;
            margin: unset;
        }


        .fakeimg {
            background-color: rgb(120, 170, 226);
            width: 100%;
            padding: 20px;
        }


        .footer {
            padding: 20px;
            text-align: center;
            background: rgb(206, 171, 76);

        }

        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 700px) {
            .row {
                flex-direction: row-reverse;
            }
        }



        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .navbar a {
                float: inline-start;
                width: 100%;

            }
        }

        .card-img {
            column-count: 3;
        }

        h3 {
            column-span: all;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="index.html" aria-posinset="text-align: left;">
                <i class="fa fa-google-wallet fa-3x aria-hidden=" style="color: darkgoldenrod;" true></i>
            </a>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="aboutme.HTML">About creator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Users/309761/Applications/mampstack/apache2/htdocs/WebDev/Version2.0/webDevUser14.html">My
                            first webpage</a>
                    </li>
                    </li>
                    <a href="games.html" style="color:rgb(78, 144, 206)"><i class="fa fa-gamepad fa-3x" aria-hidden="true" class="animated heartBeat" alt="Transparent MDB Logo" id="animated-img1"></i></a>

                    </li>
                </ul>
                <!-- Left links -->

                <div class="ml-auto d-flex align-items-center">
                    <a href="index.php" type="button" class="btn btn-link px-3 me-2">
                        Login
                    </a>
                    <a href="form.php" type="button" class="btn btn-primary me-3" style="text-decoration: steelblue;">
                        Sign up for free
                    </a>
                    <a class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <!-- Collapsible wrapper -->

            <!-- Container wrapper -->
    </nav>
    <!-- End of Navbar -->

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            /* Float four columns side by side */
            .column {
                float: left;
                width: 25%;
                padding: 0 10px;
            }

            /* Remove extra left and right margins, due to padding */
            .row {
                margin: 0 -5px;
            }w

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive columns */
            @media screen and (max-width: 600px) {
                .column {
                    width: 100%;
                    display: block;
                    margin-bottom: 20px;
                }
            }

            /* Style the counter cards */
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                padding: 16px;
                text-align: center;
                background-color:greenyellow;
            }
        </style>
    </head>

    <body>

        <center>


            <h2>Salih's World of Knowledge</h2>

        </center>


        <div class="row">
            <div class="column">
                <div class="card">
                    <h3>Abraham Lincoln's Biography</h3>
                    <a href="https://youtu.be/L80_q2tPveo">Biography of Abraham Licncoln</a><BR>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>US History</h3>
                    <a href="/history/native_americans.php">Native Americans</a><BR>
                    <a href="/history/colonial_america/">Colonial America</a><br>
                    <a href="/history/american_revolution.php">American Revolution</a><BR>
                    <a href="/history/us_1800s/industrial_revolution.php">Industrial Revolution</a><BR>
                    <a href="/history/civil_war.php">American Civil War</a><BR>
                    <a href="/history/westward_expansion/">Westward Expansion</a><BR>
                    <a href="/history/us_1900s/great_depression.php">The Great Depression</a><BR>
                    <a href="/history/civil_rights/">Civil Rights Movement</a><BR>
                    <a href="/history/cold_war/summary.php">Cold War</a><BR>
                    <a href="/history/us_1800s/">Pre-1900s</a><BR>
                    <a href="/history/us_1900s/">1900 to Present</a><BR>
                    <a href="/history/us_government.php">US Government</a><BR>
                    <a href="/geography/us_states/">US State History</a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>World Historry</h3>
                    <a href="/history/mesopotamia/ancient_mesopotamia.php">Ancient Mesopotamia</a><BR>
                    <a href="/history/china/ancient_china.php">Ancient China</a><BR>
                    <a href="/history/ancient_egypt.php">Ancient Egypt</a><BR>
                    <a href="/history/ancient_greece.php">Ancient Greece</a><BR>
                    <a href="/history/ancient_rome.php">Ancient Rome</a><BR>
                    <a href="/history/africa/">Ancient Africa</a><BR>
                    <a href="/history/middle_ages_timeline.php">Middle Ages</a><BR>
                    <a href="/history/islam/">Islamic Empire</a><BR>
                    <a href="/history/renaissance.php">Renaissance</a><BR>
                    <a href="/history/aztec_maya_inca.php">Aztec, Maya, Inca</a><BR>
                    <a href="/history/french_revolution/">French Revolution</a><BR>
                    <a href="/history/world_war_i/">World War 1</a><BR>
                    <a href="/history/world_war_ii/">World War 2</a><BR>
                    <a href="/history/art/">Art History</a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Science</h3>
                    <a href="/science/biology/">Biology</a><BR>
                    <a href="/science/chemistry/">Chemistry</a><BR>
                    <a href="/science/earth_science/">Earth Science</a><BR>
                    <a href="/science/environment/">Environment</a><BR>
                    <a href="/science/physics/">Physics</a><BR>
                    <a href="/animals.php">Animals</a><BR>
                    <a href="/money/">Money and Economics</a><BR>
                    <a href="/kidsmath/">Math</a>
                </div>
            </div>
        </div>


    </body>

    </html>