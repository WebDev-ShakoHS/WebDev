// Wrap every letter in a span
var textWrapper = document.querySelector('.ml10 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({ loop: true })
    .add({
        targets: '.ml10 .letter',
        rotateY: [-90, 0],
        duration: 1300,
        delay: (el, i) => 45 * i
    }).add({
        targets: '.ml10',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });

<button onclick="document.getElementById('demo').innerHTML=Date()">The time is?</button>



function colorChange(elmnt, clr) {
    elmnt.style.color = clr;
}

function preferedLeague() {
    prefer = document.forms[0].league.value;
    alert("You prefer the league of " + prefer);
}


<h1 onmouseover="style.color='red'" onmouseout="style.color='black'">Mouse over this text</h1>

