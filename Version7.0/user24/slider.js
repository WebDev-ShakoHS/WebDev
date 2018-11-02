(function($) {
	var sliderUL = $('div.slider').css('overflow', 'hidden').children('ul'),
		imgs = sliderUL.find('img'),
		imgWidth = imgs[0].width, // 600
		imgsLen = imgs.length, // 4
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400

	$('#slider-nav').show().find('button').on('click', function() {
		var direction = $(this).data('dir'),
			loc = imgWidth; // 600

		// update current value
		( direction === 'next' ) ? ++current : --current;

		// if first image
		if ( current === 0 ) {
			current = imgsLen;
			loc = totalImgsWidth - imgWidth; 
			direction = 'next';
		} else if ( current - 1 === imgsLen ) { 
			current = 1;
			loc = 0;
		}

		transition(sliderUL, loc, direction);
	});

	function transition( container, loc, direction ) {
		var unit; // -= +=

		if ( direction && loc !== 0 ) {
			unit = ( direction === 'next' ) ? '-=' : '+=';
		}

		container.animate({
			'margin-left': unit ? (unit + loc) : loc
		});
	}

})(jQuery); //slider

(function() {
	var co = $('span.co').each(function() {
		var $this = $(this);
		$('<blockquote></blockquote>', {
			class: 'co',
			text: $this.text()
		}).prependTo($this.closest('p'));
	});
})(); //block text

(function() {	
$('html').addClass('js');
var contactForm = {
	container: $('#contact'),
	config: {
		effect: 'slideToggle',
		speed: 500
	},
	init: function(config) {
		$.extend(this.config, config);
		$('<button></button>', {
			text: 'Contact Me'
		})
			.insertAfter( 'article:first' )
			.on( 'click', this.show );
	},
	show: function() {
		var cf = contactForm,
			container = cf.container,
			config = cf.config;
		if ( container.is(':hidden') ) {
			contactForm.close.call(container);
			container[config.effect](config.speed);
		}
	},
	close: function() {
		var $this = $(this), // #contact
			config = contactForm.config;
		if ( $this.find('span.close').length ) return;
		$('<span class=close>X</span>')
			.prependTo(this)
			.on('click', function() {
				// this = span
				$this[config.effect](config.speed);
			})
	}
};
reviewForm.init({
	// effect: 'fadeToggle',
	speed: 300
});
})(); //contact box