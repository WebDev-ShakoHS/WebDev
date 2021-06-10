<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$agent = $reason = $income = "";
$agent_err = $reason_err = $income_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate agent
    $input_agent = trim($_POST["agent"]);
    if(empty($input_agent)){
        $agent_err = "Please enter one of our lawyers.";
    } elseif(!filter_var($input_agent, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $agent_err = "Please enter a valid agent.";
    } else{
        $agent = $input_agent;
    }
    
    // Validate reason
    $input_reason = trim($_POST["reason"]);
    if(empty($input_reason)){
        $reason_err = "Please enter a reason.";     
    } else{
        $reason = $input_reason;
    }
    
    // Validate income
    $input_income = trim($_POST["income"]);
    if(empty($input_income)){
        $income_err = "Please enter your annual income.";     
    } elseif(!ctype_digit($input_income)){
        $income_err = "Please enter a positive integer value.";
    } else{
        $income = $input_income;
    }
    
    // Check input errors before inserting in database
    if(empty($agent_err) && empty($reason_err) && empty($income_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO requests (agent, reason, income) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_agent, $param_reason, $param_income);
            
            // Set parameters
            $param_agent = $agent;
            $param_reason = $reason;
            $param_income = $income;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            padding: 20px;
            margin-top: 75px;
        }

    </style>
</head>
<body>
<header>
    <!--Start Navbar-->
    <ul class="menu">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../team.php">Our Team</a></li>
        <li><a href="../clients.php">Clients</a></li>
        <li><a href="../reviews.php">Reviews</a></li>
        <li><a href="../CRUD/index.php">Requests</a></li>
        <li style="float:right"><a href="../account.php" class="active">My ULS</a></li>

    </ul>
</header>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Request</h2>
                    </div>
                    <p>Please fill this form and submit to request consultation from a lawyer.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($agent_err)) ? 'has-error' : ''; ?>">
                            <label>Agent</label>
                            <input type="text" name="agent" class="form-control" value="<?php echo $agent; ?>">
                            <span class="help-block"><?php echo $agent_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($reason_err)) ? 'has-error' : ''; ?>">
                            <label>Reaosn</label>
                            <textarea name="reason" class="form-control"><?php echo $reason; ?></textarea>
                            <span class="help-block"><?php echo $reason_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($income_err)) ? 'has-error' : ''; ?>">
                            <label>Income</label>
                            <input type="text" name="income" class="form-control" value="<?php echo $income; ?>">
                            <span class="help-block"><?php echo $income_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>