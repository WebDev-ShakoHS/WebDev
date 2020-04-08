<?php 
	// connect to the database
	$con = mysqli_connect('localhost', 'root', '', 'like');

	if (isset($_POST['liked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "INSERT INTO likes (userid, postid) VALUES (1, $postid)");
		mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$postid");

		echo $n+1;
		exit();
	}
	if (isset($_POST['unliked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=1");
		mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");
		
		echo $n-1;
		exit();
	}

	// Retrieve posts from the database
	$posts = mysqli_query($con, "SELECT * FROM posts");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Like and unlike system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- display posts gotten from the database  -->
    <?php while ($row = mysqli_fetch_array($posts)) { ?>

    <div class="post">
        <?php echo $row['text']; ?>

        <div style="padding: 2px; margin-top: 5px;">
            <?php 
					// determine if user has already liked this post
					$results = mysqli_query($con, "SELECT * FROM likes WHERE userid=1 AND postid=".$row['id']."");

					if (mysqli_num_rows($results) == 1 ): ?>
            <!-- user already likes post -->
            <span class="unlike fa fa-thumbs-up" data-id="<?php echo $row['id']; ?>"></span>
            <span class="like hide fa fa-thumbs-o-up" data-id="<?php echo $row['id']; ?>"></span>
            <?php else: ?>
            <!-- user has not yet liked post -->
            <span class="like fa fa-thumbs-o-up" data-id="<?php echo $row['id']; ?>"></span>
            <span class="unlike hide fa fa-thumbs-up" data-id="<?php echo $row['id']; ?>"></span>
            <?php endif ?>

            <span class="likes_count"><?php echo $row['likes']; ?> likes</span>
        </div>
    </div>

    <?php } ?>



    <!DOCTYPE html>
    <html lang="en">
    <!--Version 3.0
        Name:Tate Hartmann
        Date Completed:
    -->

    <head>
        <link rel='icon' href='images/favicon.ico' type='image/x-icon' />
        <link href="CSS/night.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="SHS WebDev Menu Sample">

        <title>FAQ</title>

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
            .greatDays {
                color: yellow;
                
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
                        <a href="dice.php" class="nav-item nav-link">Dice</a>
                        <a href="classes.html" class="nav-item nav-link" tabindex="-1">Classes</a>
                        <a href="races.html" class="nav-item nav-link" tabindex="-2">Races</a>
                        <a href="characters.php" class="nav-item nav-link" tabindex="-2">Characters</a>
                        <a href="faq.php" class="nav-item nav-link active" tabindex="-2">FAQ</a>
                        <a href="contact.html" class="nav-item nav-link" tabindex="-2">Contact</a>
                        <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                    </div>
                    <div class="navbar-nav ml-auto">

                    </div>
                </div>
            </nav>
        </div>



        <div class="time"></div>
        <h1 class="wideMargin white">FAQ</h1>
        <div>
            <dl>
                <dt>Is DnD Satanic?</dt>
                <dd>NO</dd>
                <dt>Is DnD worth my time?</dt>
                <dd>Yes</dd>
                <dt>What is the energy consumption rate of one joule per second. One watt is also defined as the current flow of one ampere with voltage of one volt.</dt>
                <dd>Watt?</dd>
                <dt>What edition do ou play??</dt>
                <dd>Fifth edition.</dd>
            </dl>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


            <script>
                (function() {

                    $('dd').filter(':nth-child(n+4)').addClass('hide');

                    $('dl').on('mouseenter', 'dt', function() {
                        $(this)
                            .next()
                            .slideDown(200)
                            .siblings('dd')
                            .slideUp(200);
                    });
                })();

            </script>
        </div>
        <div class="wideMargin" id="footer">
         
<p>
                Webpage made with love.
            </p>
        </div>
        <script src="JS/SampleJS.js"></script>

    </body>

    </html>
