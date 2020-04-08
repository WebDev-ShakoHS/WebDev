<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $class = $race = "";
$name_err = $class_err = $race_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate class
    $input_class = trim($_POST["class"]);
    if(empty($input_class)){
        $class_err = "Please enter a class.";     
    } else{
        $class = $input_class;
    }
    
  
    // Check input errors before inserting in database
    if(empty($name_err) && empty($class_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO characters (name, class) VALUES (?, ?)";
    }
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_class);
            
            // Set parameters
            $param_name = $name;
            $param_class = $class;
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: characters.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);

?>



<html>
<html lang="en">
<!--Version 3.0
        Name:Tate Hartmann
        Date Completed:
    -->

<head>
    <link rel='icon' href='images/favicon.ico' type='image/x-icon' />
    <link href="CSS/day.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Create</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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

    </style>
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">DND</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="dice.html" class="nav-item nav-link">Dice</a>
                    <a href="classes.html" class="nav-item nav-link" tabindex="-1">Classes</a>
                    <a href="races.html" class="nav-item nav-link" tabindex="-2">Races</a>
                    <a href="#" class="nav-item nav-link active" tabindex="-2">Characters</a>
                    <a href="faq.php" class="nav-item nav-link" tabindex="-2">FAQ</a>
                    <a href="contact.html" class="nav-item nav-link " tabindex="-2">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
</div>
                    <div class="navbar-nav ml-auto">

                    </div>
                </div>
            </nav>
        </div>
        

                <body>
                   
    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add characters to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($class_err)) ? 'has-error' : ''; ?>">
                            <label>Class</label>
                            <textarea name="class" class="form-control"><?php echo $class; ?></textarea>
                            <span class="help-block"><?php echo $class_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="characters.php" class="btn btn-default">Cancel</a>
                    </form>
                

                    <div class="wideMargin" id="footer">
                        <p>

                            Webpage made with love.
                        </p>
                    </div>
                    <script src="JS/SampleJS.js"></script>
    </body>
    </body>

</html>

