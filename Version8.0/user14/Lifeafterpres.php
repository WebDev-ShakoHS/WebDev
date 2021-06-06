<!DOCTYPE html>
<html lang="en">
  <head>

  <title>Life As President</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Script -->
<script type="text/javascript" src="JS/Script.js"> </script>
<script>
    listBtn.onclick = function (e) {
        list.removeChild(listItem);
    }
</script>

<head>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Style the header */
        header {
            padding: 30px;
            text-align: center;
            background: #daa778;
            color: rgb(148, 82, 82);
        }


        .header h1 {
            font-size: 40px;

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
            background-color: rgb(138, 174, 207);
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






        .card-img {
            column-count: 3;
        }

        h3 {
            column-span: all;
        }

        .navbar {
            overflow: hidden;
            background-color: rgb(42, 53, 52);
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: rgb(85, 112, 201);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
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
            text-align: left;
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
        <a href="biography.html">Home</a>
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
<header> 
  <h1> Biography </h1>
</header>
<body style="background-color:indianred">

<div class="container" >
  <h2>How Life for Abraham Lincolnas president Was.</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/abrahamlicoln3.jpeg" target="_blank">
          <img src="images/abrahamlicoln3.jpeg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4" >
      <div class="thumbnail">
        <a href="images/abrahamlicoln3.jpeg" target="_blank">
          <img src="images/abrahamlicoln3.jpeg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/abrahamlicoln3.jpeg" target="_blank">
          <img src="images/abrahamlicoln3.jpeg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="footer">
    <h2>Footer</h2>
    <div class="row">
        <aside class="col" style="background-color:rgb(66, 139, 173);">
            <center><button onclick="myFunction()">Click if you liked my Biography</button></center>
        </aside>
        <aside class="col" style="background-color:rgb(207, 218, 112);">
            <h3>sources</h3>
            <a href="https://www.w3schools.com/default.asp" class="nav-item nav-link active" tabindex="-1">W3Schools</a>
            <a href="https://www.youtube.com/channel/UCiCPv2sV_D3FqMRzzUFA2Fg" class="nav-item nav-link active"
                tabindex="-1">Biography Channel</a>
        </aside>
    </div>
</div>
</div>
</div>
<div class="footer" id="footer" style="background-color:rgb(102, 212, 69);">
    <p>
        <center>Webpage made by <a href="index.html" target="_blank">Salih</a></center>
    </p>

</div>

</body>
</html>


