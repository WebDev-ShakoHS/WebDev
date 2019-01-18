(function() {
    var co = $('div.paragraph').find('span.s0').each(function() {
        var $this = $(this);
        $('<blockquote></blockquote>', {
            class: 's0',
            text: $this.text()
        }).prependTo( $this.closest('p') );
    });
})();

(function() {            
    $('html').addClass('js');
        var contactForm = {        
            container: $('#contact'),
                    
                    config: {
                        effect: 'fadeToggle',
                        speed: 500
                    },
                    
                    init: function(config) {
                        $.extend(this.config, config);
                        
                        $('<button></button>', {
                            text: 'Contact Me',
                            class: 'b0'
                        })
                        .insertAfter( 'div.link:first' )
                        .on( 'click', this.show );
                    },
                    
                    show: function() {
                    var cf = contactForm,
                        container = cf.container,
                        config = cf.config;
                        cf.close.call(container);
                        container[config.effect](config.speed);
                    },
                    
                    close: function() {
                        // this = #contact
                        var $this = $(this); // contact
                        $('<span class=close>X</span>')
                        .prependTo(this)
                        .on('click', function() {
                            // this = span
                            $this[contactForm.config.effect](contactForm.config.speed);
                        })
                    }
                };
                
                contactForm.init({
                    effect: 'fadeToggle',
                    speed: 300
                }); 
                
            })();

var space = " ";
var pos = 0;
var msg = "Coolsvile";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

pos++;
if (pos > msg.length) pos = 0;
window.setTimeout("Scroll()", 0);
}
Scroll();