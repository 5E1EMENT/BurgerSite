 $(document).ready(function(){
	$('.hamburger-menu-link').click(function () {
		$('.mobile__nav').toggleClass('active');
		$('.hamburger-menu-link__bars').toggleClass('active');
		});
	});


// при нажатии на клавиатуру
	$(document).keyup(function(e) {

		// условие, если нажатие было на ESC
		if(e.which == 27) {
			$('.mobile__nav').removeClass('active'); // удаление класса
		}
	});

	// при нажатии на мышку
	// при нажатии на мышку
	$(document).mouseup(function(e) {
		// если не на область блока меню
		var menuBlock = $('.mobile__nav');
		var active = $('.active');
		if(!menuBlock.has(e.target).length) {
			menuBlock.removeClass(active); // удаление класса
		}
	});