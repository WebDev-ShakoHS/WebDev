function changeText() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
}

var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();

/*
By Wee Family  psweesam@singnet.com.sg
Featured on JavaScript Kit (http://javascriptkit.com)
For this and over 400+ free scripts, visit http://javascriptkit.com
*/

function calc() {
first = document.loveform.name1.value.toUpperCase();
firstlength = document.loveform.name1.value.length;
second = document.loveform.name2.value.toUpperCase();
secondlength = document.loveform.name2.value.length;
var LoveCount=0;

for (Count=0; Count < firstlength; Count++) {



letter1=first.substring(Count,Count+1);

if (letter1=='L') LoveCount+=2; 
if (letter1=='O') LoveCount+=2; 
if (letter1=='V') LoveCount+=2;
if (letter1=='E') LoveCount+=2; 
if (letter1=='Y') LoveCount+=3; 
if (letter1=='O') LoveCount+=1; 
if (letter1=='U') LoveCount+=3;
}


for (Count=0; Count < secondlength; Count++) {
letter2=second.substring(Count,Count+1);
if (letter2=='L') LoveCount+=2;
if (letter2=='O') LoveCount+=2; 
if (letter2=='V') LoveCount+=2; 
if (letter2=='E') LoveCount+=2;
if (letter2=='Y') LoveCount+=3;
if (letter2=='O') LoveCount+=1;
if (letter2=='U') LoveCount+=3;
}

amount=0;

if (LoveCount> 0) amount=  5-((firstlength+secondlength)/2)
if (LoveCount> 2) amount= 10-((firstlength+secondlength)/2)
if (LoveCount> 4) amount= 20-((firstlength+secondlength)/2)
if (LoveCount> 6) amount= 30-((firstlength+secondlength)/2)
if (LoveCount> 8) amount= 40-((firstlength+secondlength)/2)

if (LoveCount>10) amount= 50-((firstlength+secondlength)/2)

if (LoveCount>12) amount= 60-((firstlength+secondlength)/2)
if (LoveCount>14) amount= 70-((firstlength+secondlength)/2)
if (LoveCount>16) amount= 80-((firstlength+secondlength)/2)
if (LoveCount>18) amount= 90-((firstlength+secondlength)/2)
if (LoveCount>20) amount=100-((firstlength+secondlength)/2)
if (LoveCount>22) amount=110-((firstlength+secondlength)/2)
if (firstlength==0 || secondlength==0) amount= "Err";
if (amount < 0) amount= 0;
if (amount >99) amount=99;

document.loveform.output.value=amount+"%";



}


</script>


<center><table width=600 cellpadding=1 cellspacing=0 border=0><tr>
<td align=center valign=top>
</TD>
</TR></TABLE>
</CENTER> 

<DIV align="center"><CENTER>
<P><STRONG>The love Test</p>


Test the love between two people by entering their names below and then calculate their compatibility.

<FORM name="loveform">

  <P><INPUT value="Dear Daniel" name="name1" type="text" size="20">  + <INPUT

  value="Hello Kitty" name="name2" type="text" size="20">  = <INPUT value name="output" type="text" size="6"> <BR>

  <BR>

  <INPUT value="Calculate!" name="calculate" type="button" value="calculate"

  onclick="calc()"> </P>



</FORM>

  </CENTER></DIV>

<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
<font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
Kit</a></font></p>