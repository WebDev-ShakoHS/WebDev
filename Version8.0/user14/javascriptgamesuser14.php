<html>
<head>
<style>  
  td {color: #FF0000;}
  body {background-image: linear-gradient(to right, #00FFFF , #FF0000)}
  body {
		width: 600px;
		margin: auto;
		font-family: sans-serif;
	}
  #contact { 
		background-image: url('https://icdn8.digitaltrends.com/image/fortnite-nintendo-switch-1-2-640x640.jpg'); 
		padding: 1em 2em; 
		position: relative;
	}
	.js #contact {
		position: absolute;
		top: 0;
		width: 550px;
		display: none;
	}	
   #contact h2 { margin-top: 0; }
	#contact ul { padding: 0; }
	#contact li { 
		list-style: none;
        margin-bottom: 1em;}
	/* Close button on form */
	.close {
		position: absolute;
		right: 10px;
		top: 10px;
		font-weight: bold;
		font-family: sans-serif;
		cursor: pointer;
	}
    input, textarea { width: 100%; line-height: 2em;}
	input[type=submit] { width: auto;  }
	label { display: block; text-align: left; }
</style>
<script src="JS/webDevUser14_script.js"></script>
</head>
<body>
<h1><a href="index.php">Go Back</a></h1>

<p>Convert your words to numbers below!</p>
<form method='POST'>
<input type="text" name="var" placeholder='five;nine;eight'>
<input type="submit" value="Submit Number">
</form>
<?php
$word = $_POST['var'];
function word_digit($word) {
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

echo $word . ' in numbers is:' . '</br>';
echo word_digit($word)."\n";
?>

<p>Find the sum of digits below!</p>
<form method='POST'>
<input type="text" name="sumthis" placeholder='9999'>
<input type="submit" value="Submit Number">
</form>
<?php
$nums = $_POST['sumthis'];
function sum_of_digits($nums) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $digits_sum += $nums[$i];
               }
      return $digits_sum;
}
echo $nums . ' becomes ' . sum_of_digits($nums);
?>

<p>Multiply some stuff in a list!</p>
<form method='POST'>
<input type="text" name="a" placeholder='12 1 6'>
<input type="text" name="b" placeholder='8 14 2'>
<input type="submit" value="Submit Numbers">

<?php
$a = $_POST['a'];
$b = $_POST['b'];
function multiply_two_lists($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}
echo $a . ' * ' . $b . ' becomes ' . multiply_two_lists(($a), ($b))."\n";
?>
</body>
</html>