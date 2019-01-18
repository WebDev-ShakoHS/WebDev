<?PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) #PHP 1: get IP address for totally not hacking reasons  
		{
    		$ip_address = $_SERVER['HTTP_CLIENT_IP'];
		}
		//whether ip is from proxy
		//whether ip is from remote address
		else { 
		    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
		    {
    		    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    }
		    else {
    		    $ip_address = $_SERVER['REMOTE_ADDR'];
		    }
        }
    
    $mysql_host = "localhost";
    $mysql_username = "aschaefer8";
    $mysql_password = "College2019!";
    $mysql_database = "c9";
    
	$fav_artist = $_POST["fav_artist"];
	$fav_song = $_POST["fav_song"];
	$email = $_POST["email_address"];
	
	function word_digit($word) { #PHP 2: convert verbal numbers (one, two, three...) into integers (1, 2, 3...)
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;    
        }
    }
    return $result;
	}
	
	function valid_email($email) { #PHP 3: Validate user's entered email. No fake news here.
		$result = trim($email);
		if (filter_var($result, FILTER_VALIDATE_EMAIL)) {
    		$validator =  "true";
		} 
		else {
    		$validator = "false";
		}
	}
	
	if (true){
	    $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	    if ($mysqli->connect_error) {
		    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    	}
    	//valid_email($email);
    	//if ($validator=="true") {
    		$statement = $mysqli->prepare("INSERT INTO songs (fav_song, fav_artist, email_address) VALUES(?, ?, ?)");
    		$statement->bind_param('sss', $fav_artist, $fav_song, $email);
    		if($statement->execute()){
				//print output text
				echo ("Thanks for responding! Your favorite song was ". $fav_song. " by ". $fav_artist. ". Good choice! ". get_current_user(). " thanks you for your input! Also, since I'm a hackerman, your IP address is ". $ip_address. "." );
				#^^ PHP 4: Display user input back at them. Also PHP 5: Show current page owner.
	    	}
			else{
				print $mysqli->error;
			}
    	//}
    	//else {
    		//echo "Please enter a valid email address.";
    	//}
	}
}
else {
    die('Error 420. Wrong method has been committed. Run away from your computer and come back 30 seconds later to see that nothing has changed.');
}
?>