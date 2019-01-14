<?php
$db = mysqli_connect('localhost','nethergolem','Aik0@wCake','story_requests')
    or die('Error connecting to MySQL server.');
?>

<html>
    <head>
        <title>Story Requests</title>
    </head>
    <body>
        <center><li><a href="webDevUser29.html">Home</a></li></center>
        <h1>Story Requests</h1>
        <?php
        $query = "SELECT * FROM requests";
        mysqli_query($db, $query) or die('Error querying database.');

        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
        echo '<form action="" method="post">';
        while ($row = mysqli_fetch_array($result))
        {
        echo  $row['title'] . ": " . $row['request'] .'<input type="submit" name="deleteItem" value="'.$row['id'].'" />'.'<input type="password" name="protection"/>'.'<br />' .'<br />';
        }
        echo '</form>';
        if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
        {
            $pass = ($_POST['protection']);
            if($pass == "@dm1n") {
                $delete = $_POST['deleteItem'];
                $sql = "DELETE FROM requests where id = $delete"; 
                mysqli_query($db, $sql) or die('Error deleting from database.');
                header('Location: '.$_SERVER['REQUEST_URI']);
            }
            else
            {
                echo "invalid password";
            }
        }
        echo '<h2>Change Entry</h2>';
        echo '<form action="" method="post">';
        echo '<input type="submit" name="" value="Run Command"/>'.'<input type="password" name="password"/>'.'<input type="textbox" name="id" placeholder="id"/>'.'<input type="textbox" name="column" placeholder="column"/>'.'<input type="textbox" name="change" placeholder="change"/>';
        echo '</form>';
        if(isset($_POST['password']))
        {
            $pass = ($_POST['password']);
            $id = ($_POST['id']);
            $col = ($_POST['column']);
            $change = ($_POST['change']);
            if($pass == "@dm1n") {
                $sql = "UPDATE `requests` SET  `$col` =  '$change' WHERE `requests`.`id` =$id;"; 
                mysqli_query($db, $sql) or die('Error with command run.');
            header('Location: '.$_SERVER['REQUEST_URI']);
            }
        }
        mysqli_close($db);
        ?>
    </body>
</html>