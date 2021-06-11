<!DOCTYPE html>
<html lang="en">
<!--Version 4.0
        Name:
        Date Completed:
    -->

<head>
   <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16"
    href="images/MessiHead.ico/favicon-16x16.png">
    
    <title>MESSI Site</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebDev Version 4.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
        menu {
            margin: 0;
            padding: 0;
        }

        .wideMargin {
            margin: 15px;
        }

        footer {
            font-size: 12px;
            text-align: center;
            position: absolute;
            top: 80%;
            left: 45%;
            font-size: medium;
        }

        .fullwidth {
            width: 100%;
        }

        #rainbow>td:hover {
            background-color: black;
        }
    </style>
</head>

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <menu>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="https://www.fcbarcelona.com/en/football/first-team/players/4974/lionel-messi" class="navbar-brand">The Messi Site</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index1.php" class="nav-item nav-link active">Home</a>
                    <a href="Biography.php" class="nav-item nav-link">Biography</a>
                    <a href="statsAndGames.php" class="nav-item nav-link">Stats</a>
                    <a href="Trophies.php" class="nav-item nav-link">Trophies</a>
                    <a href="SHOP.php" class="nav-item nav-link">Messi Shop</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link active">CART</a>
                    <a href="login.php" class="nav-item nav-link active">Login</a>
                    <a href="logout.php" class="nav-item nav-link active">Logout</a> 
                </div>
            </div>
        </nav>
    </menu>
    <!---------------------------------- End the nav-bar ------------------------------------->

    <main class="wideMargin">

        <h1 class="text-center my-3 title" tabindex="0">Messi's Most outstanding Stats!</h1>
        <!-- Edit this line for the title of your page -->

        <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Put your content below this line ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
        <table class="table">
            <tbody>
                <tr>
                <td><div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Games
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Barcelona-778</a>
                <a class="dropdown-item" href="#">Argentina-144</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Total Games-922</a>
            </div></td>
                <td><div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trophies
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">La Liga-10</a>
                <a class="dropdown-item" href="#">Champions League-4</a>
                <a class="dropdown-item" href="#">Copa Del Rey-7</a>
                <a class="dropdown-item" href="#">Club World Cup-3</a>
                <a class="dropdown-item" href="#">Euro Super Cup-3</a>
                <a class="dropdown-item" href="#">Spanish Super Cup-8</a>
                <a class="dropdown-item" href="#">U-20 World Cup-1</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Total Trophies-34</a>
            </div></td>
                <td><div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Stats
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Goals-778</a>
                <a class="dropdown-item" href="#">Assists-224</a>
            </div>
        </div></td>
                </tr>
        
        </div>
        
        </div>
        
        <SCRIPT LANGUAGE="JavaScript">
// numberguess is by Lancer - written 4 Jan 1999
// lancer@kp.planet.gen.nz

var guessme=Math.round(Math.random()*(49)+1);
var speech='Guess Messis favorite number (from 1 to 50)';

function process(mystery) {
var guess=document.forms.guessquiz.guess.value;
var speech='"'+guess+ '" does not make sense to me.';
document.forms.guessquiz.guess.value='';

if (guess==mystery)
{
document.forms.guessquiz.prompt.value='Congratulations! '+mystery+' is correct!';
alert ('Well done - the number is '+mystery+'! \n\nPress this button to reload the page for another game.');
speech='';
document.location=document.location;
}

if (mystery<guess)
{
speech='Less than '+ guess;
}

if (mystery>guess)
{
speech='Greater than '+ guess;
}

if (guess=='')
{
speech='You didn\'t guess anything!'
}

document.forms.guessquiz.prompt.value=speech; document.forms.guessquiz.guess.focus();

}

// end hide -->
</SCRIPT>

<FORM onSubmit="" NAME="guessquiz">
<CENTER>
<TABLE ALIGN="CENTER" BGCOLOR="#888888" BORDER="3" CELLPADDING="5">
<TR>
<TD BGCOLOR="#004080">
<FONT COLOR="#ffffff" FACE="Arial"><B>Guess Messi's favorite number (from 1 to 50)</B></FONT>
</TD>
</TR>
<TR>
<TD>
<CENTER>
<INPUT TYPE="text" NAME="prompt" SIZE="31" MAXLENGTH="40" VALUE="Guess Messis favorite number (from 1 to 50)"><BR>
<INPUT TYPE="text" NAME="guess" SIZE="3" MAXLENGTH="3" VALUE="">
<INPUT TYPE="button" VALUE="Guess" onClick='process(guessme)'>
</CENTER>
</TD>
</TR>
</TABLE>
</CENTER>
</FORM>
        
        <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Make sure all your content is above this line ↑↑↑↑↑↑↑↑↑-->
    </main>

</body>
<!---------------------------------- Begin the footer ------------->
<footer>
    <div class="foot">
        <span class="title">Follow Messi Here!</span>
        <table id="footerTable">
            <tr>
                <td>
                    <a href="https://www.facebook.com/leomessi"><i class="fa fa-facebook fa-3x"
                            aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="https://twitter.com/TeamMessi"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="https://www.instagram.com/leomessi/"><i class="fa fa-instagram fa-3x"
                            aria-hidden="true"></i></a>
                </td>
            </tr>
        </table>
    </div>
</footer>
<!---------------------------------- End the footer ------------->
</html>