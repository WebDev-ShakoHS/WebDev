<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                        <h1>View Post</h1>
                    </div>
                    <div class="faq_container">
   <div class="faq">
      <div class="faq_question">Title</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><?php echo $row["name"];?></div>
           </div>        
    </div>
 </div>
    <div class="faq_container">
   <div class="faq">
      <div class="faq_question">Feedback</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><?php echo $row["address"];?></div>
           </div>        
    </div>
 </div>
    <div class="faq_container">
   <div class="faq">
      <div class="faq_question">Name</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><?php echo $row["salary"];?></div>
           </div>        
    </div>
 </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
 $(document).ready(function() {
 
    $('.faq_question').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
            $(this).closest('.faq').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }
 
    });
 
});
</script>
<style>
/*FAQS*/
.faq_question {
    margin: 0px;
    padding: 0px 0px 5px 0px;
    display: inline-block;
    cursor: pointer;
    font-weight: bold;
}
 
.faq_answer_container {
    height: 0px;
    overflow: hidden;
    padding: 0px;
}
</style>
</body>
</html>
