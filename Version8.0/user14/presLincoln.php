<!DOCTYPE html>
<html lang="en">

<head>
  <title>President Licloln</title>
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
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Style the header */
    header {
      background-color: gold;
      padding: 30px;
      text-align: center;
      font-size: 50px;
      color: white;
    }

    /* Create two columns/boxes that floats next to each other */
    nav {
      float: left;
      width: 30%;
      height: 300px;
      /* only for demonstration, should be removed */
      background: cornflowerblue;
      padding: 20px;
    }

    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }

    article {
      float: left;
      padding: 20px;
      width: 70%;
      background-color: coral;
      height: 300px;
      /* only for demonstration, should be removed */
    }

    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }

    .footer {
      padding: 20px;
      text-align: center;
      background: rgb(206, 171, 76);

    }

    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {

      nav,
      article {
        width: 100%;
        height: auto;

      }
    }

    * {
      box-sizing: border-box
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -22px;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {}

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }

    #myImg:hover {
      opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes zoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* The Close Button */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: lightsalmon;
      text-decoration: none;
      cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
      .modal-content {
        width: 100%;
      }
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
      color: lightskyblue;
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

    .container {
      position: relative;
      width: 50%;
    }

    .image {
      display: block;
      width: 100%;
      height: auto;
    }

    .overlay {
      position: absolute;
      bottom: 0;
      left: 100%;
      right: 0;
      background-color: #008CBA;
      overflow: hidden;
      width: 0;
      height: 100%;
      transition: .5s ease;
    }

    .container:hover .overlay {
      width: 100%;
      left: 0;
    }

    .text {
      color: white;
      font-size: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      white-space: nowrap;
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
  <h2>President Licloln</h2>
</header>

<section>
  <nav>
    <h5>Life as President</h5>
    <div class="container">
      <img src="images/abraham Licoln.jpeg" style="height:200px;" class="animated heartBeat" alt="Transparent MDB Logo" id="animated-img1">
      <div class="overlay">
        <div class="text">President Lincoln</div>
      </div>
    </div>

  </nav>

  <article>
    <h1>What did President Lincoln do as President</h1>
    <p>As President, he built the Republican Party into a strong national organization. Further, he rallied most of the northern Democrats to the Union cause.</p>
    <p>. On January 1, 1863, he issued the Emancipation Proclamation that declared forever free those slaves within the Confederacy.</p>
  </article>
</section>
<div class="footer">

  <div class="row">
    <aside class="col-6">
      <center><button onclick="myFunction()">Click if you liked my Biography</button></center>
    </aside>
    <aside class="col-6">
      <center><button><a href="http://localhost:8080/WebDev/Version8.0/user14/ebayAPI.php" class="nav-item nav-link active" tabindex="-1">More biography of Abraham Lincoln</a></button></center>

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