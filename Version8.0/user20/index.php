<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
    
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="tab">
            <a href="frankocean.html">Frank Ocean</a>
            <a href="Tyler.html" class="tablinks" onclick="openCity(event, 'Tyler')">Tyler</a>
            <a href="Jcole.html" class="tablinks" onclick="openCity(event, 'J cole')">J cole</a>
            <a href="kanye.html" class="tablinks" onclick="openCity(event, 'Kanye')">Kanye</a>
            <a href="index.php" class="tablinks" onclick="openCity(event, 'Index')">Index</a>
            <a href="eBAY.API.PHP" class="tablinks" onclick="openCity(event, 'Yeezys')">Yeezy</a>
        </div>
        
        <div id="Frank Ocean" class="tabcontent">
         
          <span onclick="this.parentElement.style.display='none'"></span>
        </div>
        
        <div id="Tyler" class="tabcontent">
          
          <span onclick="this.parentElement.style.display='none'"></span>
        </div>
        
        
        <div id="J cole" class="tabcontent">
          
        `  <span onclick="this.parentElement.style.display='none'"></span>
        
        <div id="Kanye" class="tabcontent">
            
            <span onclick="this.parentElement.style.display='none'"></span>
          </div>
          <div id="INDEX" class="tabcontent">
		
            ` <span onclick="this.parentElement.style.display='none'"></span>
        </div> 
        <div id="Yeezy" class="tabcontent">
		
	</div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Artists Salaries</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add more artists</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Most_Popular_Album</th>";
                                        echo "<th>Albums_Made</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['Most_Popular_Album'] . "</td>";
                                        echo "<td>" . $row['Albums_Made'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>