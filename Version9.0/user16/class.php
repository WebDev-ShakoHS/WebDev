<!DOCTYPE html>
<html lang="en">
<!--Version 3.0
        Name:
        Date Completed:
    -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Web Dev User ## </title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggles paragraphs display
            $(".toggle-btn").click(function() {
                $("p").toggle();
            });
        });

    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

        p {
            padding: 15px;
            background: #F0E68C;
        }

    </style>
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com/WebDev" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link ">Home/index</a>
                    <a href="weatherR.php" class="nav-item nav-link " tabindex="-2">Weather</a>
                    <a href="games2.html" class="nav-item nav-link " tabindex="-2">Functions</a>
                    <a href="table.php" class="nav-item nav-link " tabindex="-2">Sports</a>
                    <a href="class.php" class="nav-item nav-link active" tabindex="-2">About me</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>
    <div class="wideMargin" id="content">

        <h3 class="text-left my-3">About me</h3>
        <button type="button" class="toggle-btn">Toggle Paragraphs</button>
        <p>

            I am 14 yrs old at Shakopee Hugh school. I like to play football, hang with friends and family, and weight lift after school. I enjoy hanging with my friends in my free time. Even if i am lifting they are their with me getting better and stronger for the football season. I prefer open water fishing than icefishing because i catch bigger fish, and im not all cramped up.
        </p>

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAGK62SBLbirdg9yulvw_auHN-C6zVWRu58j5BI9nvsPyGUVBO%3Ahttps%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fe%2Fe0%2FSNice.svg%2F1200px-SNice.svg.png&usqp=CAU">

    </div>




</body>

</html>
