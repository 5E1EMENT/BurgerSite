(function() {
	const link = $('.hamburger-menu-link'),
		closeLink = $(".hamburger-menu-link active");

	let menu = $('.mobile__nav'),
		active = 'active';


	link.click(function(event) {
		menu.addClass(active);
	});

	closeLink.click(function() {
		menu.removeClass(active); // удаление класса
	});
$(document).keyup(function(e) {

		// условие, если нажатие было на  ESC
		if(e.which == 27) {
			menu.removeClass(active); // удаление класса
		}
	});
$(document).mouseup(function(e) {
		// если не на область блока меню
		if(!menu.has(e.target).length) {
			menu.removeClass(active); // удаление класса
		}
	});
})();