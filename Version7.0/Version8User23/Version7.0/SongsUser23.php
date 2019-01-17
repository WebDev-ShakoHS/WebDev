<html lang="en">
<!--Version 3.0
	Name: Matthew Scalf
	Date Completed: 9/18/18
 -->
<head>
<style>  
  td {color: #000000;}
    body {
        background-image: linear-gradient(to right, purple, lavender);
        width: 600px;
        margin: 100px auto 0;
        
}
    
</style>
<link rel="stylesheet" href="User23slider.css">
</head>
<body>
<li><a href="index.php">Back</a></li>
<img src="https://foundrysu.com/asset/Event/6013/mancity.png" style="width:100px;height:100px;">
<h1>Top 5 players</h1>
 <table>
 <tr><th>Rank</th><th>Player</th><th>Position</th></tr>
 <tr><td>1</td><td>Sergio Aguero</td><td>Forward</td></tr>
 <tr><td>2</td><td>Kevin De Bruyne</td><td>Midfielder</td></tr>
 <tr><td>3</td><td>Leroy Sane</td><td>Foward</td></tr>
 <tr><td>4</td><td>David Silva</td><td>Midfielder</td></tr>
 <tr><td>5</td><td>Raheem Steerling</td><td>Foward</td></tr>
 </table>
<div class="slider">
    <ul>
        	<li><img src="Aguero.jpg" alt="image" style="width:500px;height:500px;"></li>
		<li><img src="KDB.jpg" alt="image" style="width:500px;height:500px;"></li>
		<li><img src="https://cdn.vox-cdn.com/thumbor/IHjqF8kLZy_YdgcpkhiypzqGMc0=/0x0:5004x3354/1200x800/filters:focal(2080x87:2880x887)/cdn.vox-cdn.com/uploads/chorus_image/image/61237637/1019600102.jpg.0.jpg" style="width:500px;height:500px;" alt="image"></li>
		<li><img src="https://s.hs-data.com/bilder/spieler/gross/24781.jpg" alt="image" style="width:500px;height:500px;"></li>
		<li><img src="https://premierleague-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p103955.png" alt="image" style="width:500px;height:500px;"></li>
		<li><img src="Aguero.jpg" alt="image" style="width:500px;height:500px;"></li>
    </ul>
</div>

<div id="slider-nav">
    <button data-dir="prev">Previous</button>
    <button data-dir="next">Next</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="User23slider.js"></script>
 </body>
</html>