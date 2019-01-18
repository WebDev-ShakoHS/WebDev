(function($) {
    var sliderUL = $('div.slider').children('ul'),
        imgs = sliderUL.find('img'),
        imgHeight = imgs[0].height, // 700
        imgsLen = imgs.length, // 5
        current = 1,
        totalImgsHeight = imgsLen * imgHeight; // 3500
    
    console.log(imgsLen);
    
    $('#slider-nav').show().find('button').on('click', function() {
        var direction = $(this).data('dir'),
            loc = imgHeight; // 700
        
        // update current value
        ( direction === 'next' ) ? ++current : --current;
        
        // if first image
        if ( current === 0 ) {
            current = imgsLen;
            loc = totalImgsHeight - imgHeight; // 3500 - 700 = 2800
            direction = 'next';
        } else if ( current - 1 === imgsLen ) { // are we at end? should we reset?
            current = 1;
            loc = 0;
        }
        
        transition(sliderUL, loc, direction);
    });
    
    function transition( container, loc, direction ) {
        var unit; // -= or +=
        
        if ( direction && loc !== 0 ) {
            unit = ( direction === 'next' ) ? '-=' : '+=';
        }
        
        container.animate({
            'margin-top': unit ? (unit + loc) : loc
        })
    }
    
})(jQuery);

var space = " ";
var pos = 0;
var msg = "OOooOOFFf";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();