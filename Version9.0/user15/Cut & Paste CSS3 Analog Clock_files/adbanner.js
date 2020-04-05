// Prevent parameters being added to URL - Google PII maddness
if ( /(@)|(ip=)/i.test(location.search) ) {
	location.search = ''
}



var randomnumberad=Math.floor(Math.random()*10)
if (!/javascriptkit\.com(\/)*$/i.test(location.href)){ //home page test
	if (/(javatutors\/)|(dhtmltutors\/)|(howto\/)/i.test(location.href) && /\.shtml/i.test(location.href)){
		document.write('<div id="bsap_1279042" class="bsarocks bsap_dd6e9fbb78d92ec298f6119b05509777" style="margin-left: 180px; width:auto"><\/div>')
	}
	else if (randomnumberad>3){
		document.write('<script type="text/javascript">\ne9 = new Object();\ne9.size = "728x90,468x60";\ne9.noAd = 1;\n<\/script><script type="text/javascript" src="http://tags.expo9.exponential.com/tags/JavaScriptKit/ROS/tags.js"><\/script>');
	}
}


function bookmarkit(){
document.write('<div>Bookmark <b>this page</b>:</div>')
document.write('<ul style="margin-top: 5px; font-size: 90%; margin-left: 0; padding-left: 18px"><li><a href="http://www.javascriptkit.com/bookmark.php?d=deli&title='+encodeURIComponent(document.title)+'">Bookmark</a> to del.icio.us</li>')
document.write('</ul>')
}