<html lang="en">
<!--Version 3.0
	Name: Matthew Scalf
	Date Completed: 9/18/18
 -->
<head> 

<!-- your webpage info goes here -->
<style>  
  td {color: #FF0000;}
    body {background-image: linear-gradient(to right, skyblue, silver);
    }
</style>
<link href="WebdevUser23.css" rel="stylesheet" type="text/css">
    <title>My First Website</title>

        <meta name="author" content="your name" />
        <meta name="description" content="" />
<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->        
        <link rel="stylesheet" href="style.css" type="text/css" />
<script src="JS/WebDevUser23_script.js"></script>
        
</head>
<body>
<li><a href="index.php">Back</a></li>
<h2>Home</h2>
<img src="https://foundrysu.com/asset/Event/6013/mancity.png" style="width:100px;height:100px;">
<h2>Here is our current standings</h2>                 
    
    </body>
</html>
<head>
	<meta charset=utf-8>
	<title>Appending Content</title>
	<style>
	article {
		width: 600px;
		margin: auto;
	}
	blockquote.co {
		float: right;
		background: #e3e3e3;
		font-size: 2em;
		width: 35%;
		text-align: center;
	}
	</style>
<link rel="stylesheet" href="Lesson7.css">
</head>
<body>
<table>
 <tr><th>Position</th><th>Team</th><th>W/L/T</th><th>Pts</th></tr>
 <tr><td>1</td><td>Liverpool</td><td>17/1/3</td><td>54</td></tr>
 <tr><td>2</td><td style="color:#FFDF00">Manchester City</td><td style="color:#FFDF00">16/3/2</td><td style="color:#FFDF00">50</td></tr>
 <tr><td>3</td><td>Tottenham</td><td>16/5/0</td><td>48</td></tr>
 <tr><td>4</td><td>Chelsea</td><td>13/3/5</td><td>44</td></tr>
 <tr><td>5</td><td>Arsenal</td><td>12/4/5</td><td>41</td></tr>
 </table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>
(function() {
	var co = $('article').find('span.co').each(function() {
		var $this = $(this);
		$('<blockquote></blockquote>', {
			class: 'co',
			text: $this.text()
		}).prependTo( $this.closest('p') );
		
	});
	
})();
</script>
<?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."\n";
?>

</html>