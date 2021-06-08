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
        }

        w

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: inline-start;
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
            background-color: khaki;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Style the header */
        header {
            padding: 60px;
            text-align: center;
            background: #daa778;
            color: rgb(148, 82, 82);
        }


        .header h1 {
            font-size: 40px;

        }


        .navbar {
            overflow: clip;
            background-color: rgb(61, 158, 187);

        }




        .row {
            display: flex;
            flex-wrap: wrap;
        }


        .side {
            flex: 30%;
            background-color: cornflowerblue;
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

        .navbar {
            overflow: visible;
            background-color: rgb(42, 53, 52);
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: lightsalmon;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: center;
            overflow: clip;


        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: skyblue;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;

            background-color: #dba864;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .dropdown-content a:hover {
            background-color: rgb(238, 150, 150);
        }

        .dropdown:hover .dropdown-content {
            display: inline-table;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="biography.php">Home</a>
        <a href="login.php" class="nav-item nav-link active">Login</a>
        <div class="dropdown">
            <button class="dropbtn">page bar
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="http://localhost:8080/WebDev/Version8.0/user14/index.php">Page 2</a>
                <a href="http://localhost:8080/WebDev/Version8.0/user14/presLincoln.php">Page 3</a>
                <a href="http://localhost:8080/WebDev/Version8.0/user14/Lifeafterpres.php">Page 4</a>
            </div>`
        </div>
    </div>

</body>
<!------end of nav bar------->
 
</head>

<body style=background-color:darkslategray;>

    <center>
        <div style=background-color:lightsalmon;>

            <h2>Salih's World of Knowledge</h2>
            

    </center>


    <div class="row">
        <div class="column">
            <div class="card">
                <h3>Biography</h3>
                <a href="https://youtu.be/L80_q2tPveo">Abraham Licncoln</a><BR>
                <a href="/history/art/">Artists</a><br>
                <a href="/history/civil_rights/">Civil Rights Leaders</a><br>
                <a href="/biography/entrepreneurs/">Entrepreneurs</a><br>
                <a href="/biography/explorers/">Explorers</a><br>
                <a href="/biography/scientists/scientists_and_inventors.php">Inventors and Scientists</a><br>
                <a href="/biography/uspresidents/">US Presidents</a><br>
                <a href="/biography/world_leaders/">World Leaders</a><br>
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
                <a href="https://edu.gcfglobal.org/en/computerbasics/what-is-a-computer/1/">computer</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <aside class="col-4">
                <center><button onclick="myFunction()">Click if you liked my Biography</button></center>
            </aside>
            <aside class="col-4">
                <center><button><a href="http://localhost:8080/WebDev/Version8.0/user14/ebayAPI.php" class="nav-item nav-link active" tabindex="-1">More biography of Abraham Lincoln</a></button></center>

            </aside>
            <aside class="col-4">
                <center><button><a href="http://localhost:8080/WebDev/Version8.0/user14/CRUD/index.php" class="nav-item nav-link active" tabindex="-1">Check books Written by Abraham Lincoln</a></button></center>

            </aside>
            <aside class="col">
                <h3>sources</h3>
                <a href="https://www.w3schools.com/default.asp" class="nav-item nav-link active" tabindex="-1">W3Schools</a>
                <a href="https://www.youtube.com/channel/UCiCPv2sV_D3FqMRzzUFA2Fg" class="nav-item nav-link active" tabindex="-1">Biography Channel</a>
            </aside>
        </div>
    </div>
    </div>
    </div>
    <div class="footer" id="footer">
        <p>
            <center>Webpage made by <a href="index.html" target="_blank">Salih</a></center>
        </p>

    </div>


</body>

</html>