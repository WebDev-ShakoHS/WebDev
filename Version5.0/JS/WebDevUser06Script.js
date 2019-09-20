var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll(Uint32Array);

<style>
.bg1 {
background-image: url(images/my_image.jpg); 
}
</style>

<body id="page_body">

<script>
function changeBGImage(whichImage){
     document.getElementById('page_body').className="bg"+whichImage;
}
</script> 
