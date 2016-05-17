$(function() {
	// Configuration
	var animationSpeed = 700;
	var pause = 5000;

	// Cache Slider DOM
	var $slider = $('#slider');

	// Obtener el valor del id del body
	var pageName = $('body').attr('id');

	// Cantidad de Slides
	var slidesCount = $slider.find('.slide');

	// buttons
	var next = $('#next-btn');
	var previous = $('#previous-btn');

	// Agregar una clase con sufijo indice
	$slider.find('.slide').each(function(index) {
		index++;
		$(this).addClass('slide-' + index);
	});

	// Mover last slide before first slide
	$slider.find('.slide:last').insertBefore($slider.find('.slide:first'));

	switch(pageName) {
		case 'about':
			$slider.find('.slide:first').insertAfter($slider.find('.slide:last'));
			break;
		case 'services':
			$slider.find('.slide-5').insertAfter($slider.find('.slide-4'));
			$slider.find('.slide-1').insertAfter($slider.find('.slide-5'));
			break;
		case 'contact':
			$slider.find('.slide:last').insertBefore($slider.find('.slide:first'));
			break;
	}

	// Mostrar la primer imagen con un margen de -100%
	$slider.css('margin-left', '-' + 100 + '%');

	function moveRight() {
		$slider.animate({ marginLeft: '-' + 200 + '%' }, animationSpeed, function() {
			$slider.find('.slide:first').insertAfter($slider.find('.slide:last'));
			$slider.css('margin-left', '-' + 100 + '%');
		});
	}

	function moveLeft() {
		$slider.animate({ marginLeft: 0 }, animationSpeed, function() {
			$slider.find('.slide:last').insertBefore($slider.find('.slide:first'));
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