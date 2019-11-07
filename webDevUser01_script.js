
function changeText() {
 document.getElementById("textChange").innerHTML="The Cheese Blesses You.";
}

    
    var space = " ";
var pos = 0;
var msg = "User 1";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();
<head>
<title>You must love me</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="copyright" content="http://www.javascriptbank.com" />
<script type="text/javascript"> flag=1 function f1() { alert("Yes. you are right ") } function f() { if(flag==1) { Bn.style.top=90 Bn.style.left=500 flag=2 } else if(flag==2) { Bn.style.top=90 Bn.style.left=50 flag=3 } else if(flag==3) { Bn.style.top=235 Bn.style.left=360 flag=1 } } </script>
</head>
<body>
<h1 style="position:absolute; left:220px; top:175px; width:auto; height:210px;">Do you love me?</h1>
<div id="By" style="position:absolute; left:285px; top:235px; width:210px; height:210px;">
	<input type="button" value=" yes " onclick="f1undefined)" />
</div>
<div id="Bn" style="position:absolute; left:360px; top:235px; width:210px; height:210px;">
	<input type="button" value=" no " onmouseover="fundefined)" />
</div>
</body>
</html>