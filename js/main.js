 $(document).ready(function(){
	$('.hamburger-menu-link').click(function () {
		$('.mobile__nav').toggleClass('active');
		$('.hamburger-menu-link__bars').toggleClass('active');
		});
	
	});
  $(document).ready(function(){
	$('.mobile__link-hidden').click(function(event) {
		$('.mobile__nav').removeClass('active');
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
            var $target = $(e.target);
            if ($target.closest(".mobile__item-hidden").length === 0) {
                $(".mobile__nav").removeClass("active");
            }
        });