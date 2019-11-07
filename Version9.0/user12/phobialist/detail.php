<html>
<head>
<link href="WebDevUser12.css" rel="stylesheet" type="text/css">
 <title>Details</title>
</head>
<body class ="home">
<?php 
require_once "db_connect.php";
if(isset($_GET['id'])) {
 $id = $_GET['id'];
 db();
 global $link;
 $query = "SELECT phobiaTitle, phobiaDescription, date FROM phobias WHERE id = '$id'";
 $result = mysqli_query($link, $query);
 if(mysqli_num_rows($result)==1){
 $row = mysqli_fetch_array($result);
 if($row){
 $title = $row['phobiaTitle'];
 $description = $row['phobiaDescription'];
 $date = $row['date'];
echo "
 <h1>Phobia Name:</h1>
 <h2>$title</h2>
 <h1>Phobia Description:</h1>
 <h2>$description</h2>
 <h2>Added $date</h2>
 ";
 }
 }else{
 echo 'No Phobia Listed';
 }
}
?>

<center><a href="index.php">Back</a></center>
</body>
    
</html>