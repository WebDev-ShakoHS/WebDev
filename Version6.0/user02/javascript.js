<SCRIPT LANGUAGE="JavaScript">
    <!-- ;
    // numberguess is by Lancer - written 4 Jan 1999
    // lancer@kp.planet.gen.nz
    
    var guessme=Math.round(Math.random()*(99)+1);
    var speech='Guess my number (from 1 to 100)';
    
    function process(mystery) {
    var guess=document.forms.guessquiz.guess.value;
    var speech='"'+guess+ '" does not make sense to me.';
    document.forms.guessquiz.guess.value='';
    
    if (guess==mystery)
    {
    document.forms.guessquiz.prompt.value='Congratulations! '+mystery+' is correct!';
    alert ('Well done - the mystery number is '+mystery+'! \n\nPress this button to reload the page for another game.');
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


if (document.all||document.getElementById){
document.write('<style>.tictac{')
document.write('width:50px;height:50px;')
document.write('}</style>')
}

var sqr1
var sqr2
var sqr3
var sqr4
var sqr5
var sqr6
var sqr7
var sqr8
var sqr9
var sqr1T = 0
var sqr2T = 0
var sqr3T = 0
var sqr4T = 0
var sqr5T = 0
var sqr6T = 0
var sqr7T = 0
var sqr8T = 0
var sqr9T = 0
var moveCount = 0
var turn = 0
var mode = 1