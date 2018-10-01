function changeText() {
 document.getElementById("textChange").innerHTML="Thanks for liking my Webpage";
}
 var space = " ";
var pos = 0;
var msg = "Trang Nguyen";

 function Scroll(){
document.title = msg.substring(pos, msg.length) + space +msg.substring(0,pos);


 pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();


<!--

/*
Submitted by David Gardner (davidgardner7@yahoo.com)
Featured on JavaScript Kit (http://javascriptkit.com)
For this and over 400+ free scripts, visit http://javascriptkit.com
*/

function getpet () {

        var toyear = 1997;
        var birthyear = document.frm.inyear.value;
        var birthpet="Ox"

        x = (toyear - birthyear) % 12
        if ((x == 1) || (x == -11)) {
            birthpet="Mouse"      }
            else  {
             if (x == 0)             {
             birthpet="Ox"           }
             else  {
              if ((x == 11) || (x == -1)) {
              birthpet="Tiger"          }
              else  {
               if ((x == 10) || (x == -2)) {
               birthpet="Rabbit"         }
               else  {
                if ((x == 9) || (x == -3))  {
                birthpet="Dragon"         }
                else  {
                 if ((x == 8) || (x == -4))  { 
                 birthpet="Snake"          }
                 else  {
                  if ((x == 7) || (x == -5))  { 
                  birthpet="Horse"          }
                  else  {
                   if ((x == 6) || (x == -6))  { 
                   birthpet="Sheep"          }
                   else  {
                    if ((x == 5) || (x == -7))  {  
                    birthpet="Monkey"         }
                    else  {
                     if ((x == 4) || (x == -8))  {
                     birthpet="Chicken"        }
                     else  {
                      if ((x == 3) || (x == -9))  {
                      birthpet="Dog"            }
                      else  {
                       if ((x == 2) || (x == -10))  {
                       birthpet="Pig"             }  
                      }
                     }
                    }
                   }
                  }
                 }
                }
               }
              }
             }
            }
        document.frm.birth.value = birthpet;

}
// -->
</script>


    <p>Enter your birth year. For example: "1975" </p>
    <form NAME="frm">
      <p><input TYPE="text" SIZE="4" NAME="inyear" value="1975"> <input TYPE="button" VALUE="My pet, please"
      onClick="getpet()"> <br>
      </p>
      <p><input TYPE="text" SIZE="9" NAME="birth"> </font></p>
    </form>

<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
<font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
Kit</a></font></p>