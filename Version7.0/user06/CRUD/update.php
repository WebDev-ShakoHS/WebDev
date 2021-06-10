<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$agent = $reason = $income = "";
$agent_err = $reason_err = $income_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate agemt
    $input_agent = trim($_POST["agent"]);
    if(empty($input_agent)){
        $agent_err = "Please enter a agent.";
    } elseif(!filter_var($input_agent, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $agent_err = "Please enter a valid agent.";
    } else{
        $agent = $input_agent;
    }
    
    // Validate reason 
    $input_reason = trim($_POST["reason"]);
    if(empty($input_reason)){
        $reason_err = "Please enter an reason.";     
    } else{
        $reason = $input_reason;
    }
    
    // Validate income
    $input_income = trim($_POST["income"]);
    if(empty($input_income)){
        $income_err = "Please enter the income amount.";     
    } elseif(!ctype_digit($input_income)){
        $income_err = "Please enter a positive integer value.";
    } else{
        $income = $input_income;
    }
    
    // Check input errors before inserting in database
    if(empty($agent_err) && empty($reason_err) && empty($income_err)){
        // Prepare an update statement
        $sql = "UPDATE employees SET agent=?, reason=?, income=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_agent, $param_reason, $param_income, $param_id);
            
            // Set parameters
            $param_agent = $agent;
            $param_reason = $reason;
            $param_income = $income;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $agent = $row["agent"];
                    $reason = $row["reason"];
                    $income = $row["income"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Request</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($agent_err)) ? 'has-error' : ''; ?>">
                            <label>Agent</label>
                            <input type="text" name="agent" class="form-control" value="<?php echo $agent; ?>">
                            <span class="help-block"><?php echo $agent_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($reason_err)) ? 'has-error' : ''; ?>">
                            <label>Reason</label>
                            <textarea name="reason" class="form-control"><?php echo $reason; ?></textarea>
                            <span class="help-block"><?php echo $reason_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($income_err)) ? 'has-error' : ''; ?>">
                            <label>Income</label>
                            <input type="text" name="income" class="form-control" value="<?php echo $income; ?>">
                            <span class="help-block"><?php echo $income_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>