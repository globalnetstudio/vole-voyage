$(function() {
	// Configuration
	var animationSpeed = 700;
	var pause = 5000;

	// Cache Slider DOM
	var $slider = $('#slider');

	// buttons
	var next = $('#next-btn');
	var previous = $('#previous-btn');

	// Mover last slide before first slide
	$('#slider .slide:last').insertBefore($('#slider .slide:first'));

	// Mostrar la primer imagen con un margen de -100%
	$slider.css('margin-left', '-' + 100 + '%');

	function moveRight() {
		$slider.animate({ marginLeft: '-' + 200 + '%' }, animationSpeed, function() {
			$('#slider .slide:first').insertAfter('#slider .slide:last');
			$slider.css('margin-left', '-' + 100 + '%');
		});
	}

	function moveLeft() {
		$slider.animate({ marginLeft: 0 }, animationSpeed, function() {
			$('#slider .slide:last').insertBefore('#slider .slide:first');
			$slider.css('margin-left', '-' + 100 + '%');
		});
	}

	// Botón mover a la derecha
	next.on('click', function() {
		moveRight();
	});

	// Boton mover a la izquierda
	previous.on('click', function() {
		moveLeft();
	});

	var interval;

	function autoplay() {
		interval = setInterval(function() {
			moveRight();
		}, pause);
	}

	function pauseSlider() {
		clearInterval(interval);
	}

	$slider.on('mouseenter', pauseSlider).on('mouseleave', autoplay);

	autoplay();
});