

// Интерактивное всплывающее меню
 $(document).ready(function(){
 	let link = $('.hamburger-menu-link');
 	let nav = $('.mobile__nav');
 	let bars = $('.hamburger-menu-link__bars');


	$(link).click(function () {
		$(nav).toggleClass('active');
		$(bars).toggleClass('active');
		});
	
	});

  $(document).ready(function(){
  	let hidden = $('.mobile__link-hidden');
  	let nav = $('.mobile__nav');
  	let bars = $('.hamburger-menu-link__bars');

	$(hidden).click(function(event) {
		$(nav).removeClass('active');
		$(bars).toggleClass('active');
	});
	
	});


// при нажатии на клавиатуру
	$(document).keyup(function(e) {
		// условие, если нажатие было на ESC
		if(e.which == 27) {
			$('.mobile__nav').removeClass('active'); // удаление класса
		}
	});

// Секция  команда

$(document).ready(function(){

	$('.team__link').click(function(e) {
		e.preventDefault();
		var $this = $(this);
		let item = $this.closest('.team__tab');
		let list = $this.closest('.team__accordion');
		let items = list.find('.team__tab');
		let content = item.find('.team__content');
		let otherContent = list.find('.team__content');
		var duration = 300;


		if(!item.hasClass('content-active')) {
			items.removeClass('content-active')
			item.addClass('content-active')

		otherContent.stop(true, true).slideUp(duration);
		content.stop(true, true).slideDown(duration);
		} else {
			content.stop(true, true).slideUp(duration);
			item.removeClass('content-active');
		}

		});
});

// Секция  меню

$(document).ready(function(){

	$('.menu__subitle').click(function(e) {
		e.preventDefault();

		var $this = $(this);
		let item = $this.closest('.menu__item');
		let link = $this.closest('.menu__subitle');
		let list = $this.closest('.menu__list');
		let items = list.find('.menu__item');
		let content = item.find('.menu__desc');
		let otherContent = list.find('.menu__desc');
		var duration = 300;


		if(!item.hasClass('active')) {
			items.removeClass('active')
			item.addClass('active')

		otherContent.stop(true, true).slideUp(duration);
		content.stop(true, true).slideDown(duration);
		} else {
			content.stop(true, true).slideUp(duration);
			item.removeClass('active');
		}
		

	});
	
});
	
	//Modal Windows
	jQuery(document).ready(function(e) {
		$('.burger__consist').on('mouseenter', function(){
			$('.burger__modal').fadeIn();
		});
		$('.burger__consist').on('mouseleave', function(){
			$('.burger__modal').fadeOut();
		});
	});
	jQuery(document).ready(function(e) {


		$("[data-fancybox]").fancybox(function(e){



	});
	});

		//Слайдер
		$(function(){
			$('.down__arrow-right').on('click', function(e){
				e.preventDefault();
				var $this = $(this),
					container = $this.closest('.slider__burger'),
					items = container.find('.burger__slide'),
					activeSlide = items.filter('.active'),
					reqItem = activeSlide.next(),
					reqIndex = reqItem.index(),
					list = container.find('.burger__slider'),
					duration = 500;

					list.animate({
						
  						'transform': -reqIndex * 'translate(100%)'
					}, duration);

			});

		});