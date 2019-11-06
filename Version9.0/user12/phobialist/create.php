<html>
<head>
<title>Add Phobias to List</title>
<link href="WebDevUser12.css" rel="stylesheet" type="text/css">
</head>
<body class = "home">
<h1>Add to Phobia List</h1>
<form method="post" action="create.php">
 <p>Phobia Name: </p>
 <input name="phobiaTitle" type="text">
 <p>Brief Phobia Description: </p>
 <input name="phobiaDescription" type="text">
 <br>
 <input type="submit" name="submit" value="submit">
</form>
</body>
    
<?php
    require_once("db_connect.php");
    if(isset($_POST["submit"])){
        $title = $_POST["phobiaTitle"];
        $description = $_POST["phobiaDescription"];
        //connect to database
     db();
     global $link;
     $query = "INSERT INTO phobias(phobiaTitle, phobiaDescription, date) VALUES ('$title', '$description', now())";
    $insertPhobia = mysqli_query($link, $query);
    if($insertPhobia){
        echo "Successful.";
    }else{
        echo mysqli_error($link);
    }
    mysqli_close($link);
 }
?>
</html>

<a href="index.php">Back</a>