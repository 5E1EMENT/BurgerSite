

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
		var duration = 500;


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
    var width = link.outerWidth();
    let reqWidth = width + content.outerWidth() + 'px';



    if(!item.hasClass('active')) {
      items.removeClass('active').stop().animate({width : width}, duration);
      item.addClass('active').stop().animate({width : reqWidth}, duration);

    // otherContent.stop(true, true).slideUp(duration);
    // content.stop(true, true).slideDown(duration);
    } else {
      // content.stop(true, true).slideUp(duration);
      item.removeClass('active').stop().animate({width : width}, duration);
    }
    // if(reqParent.hasClass(activeItem)) {
    //    reqParent.removeClass(activeItem).stop().animate({width : width}, duration);
    //  } else {
    //    item.removeClass(activeItem).stop().animate({width : width}, duration);
    //    reqParent.addClass(activeItem).stop().animate({width : reqWidth}, duration);
    //  }
    

  });
  
});
	
	

		//Слайдер
		$(function(){
			// var index = 0;
      var moveSlide = function(container, slideNum) {
                var 
                    items = container.find('.burger__slide'),
                    activeSlide = items.filter('.active'),
                    reqItem = items.eq(slideNum),
                    reqIndex = reqItem.index(),
                    list = container.find('.burger__slider'),
                    // nextItem = activeSlide.next(),
                    // prevItem = activeSlide.prev(),
                    duration = 500;
                    if (reqItem.length) {
                      var reqTransform = -reqIndex * 100;
                      list.css({"transform": 'translateX('+reqTransform+'%)'}, duration);
                    reqItem.addClass('active').siblings().removeClass('active');
                    }
      }

			$('.slider__btn').on('click', function(e){
                e.preventDefault();

                  var $this = $(this),
                   container = $this.closest('.slider__burger'),
                   items = $('.burger__slide' , container),
                   activeItem = items.filter('.active'),
                   nextItem =  activeItem.next(),
                   prevItem = activeItem.prev();


                   if($this.hasClass('down__arrow-right')){

                      if(nextItem.length) {
                        moveSlide(container, nextItem.index());
                      } else {
                        moveSlide(container, items.first().index());
                      }

                    

                  } else {
                        if(prevItem.length) {
                        moveSlide(container, prevItem.index());
                      } else {
                        moveSlide(container, items.last().index());
                      }

                   }

                


                    
                    
                    // index++;
                    // if (index == items.length) {
                    	// index = 0;
                    // }

                    // console.log(index)
                
            });
     

             // var $this = $(this),
             //        container = $this.closest('.slider__burger'),
             //        items = container.find('.burger__slide'),
             //        activeSlide = items.filter('.active'),
             //        reqItem = activeSlide.prev(),
             //        reqIndex = reqItem.index(),
             //        list = container.find('.burger__slider'),
             //        // nextItem = activeSlide.next(),
             //        // prevItem = activeSlide.prev(),
             //        duration = 500;
             //        if (reqItem.length) {
             //          var reqTransform = -reqIndex * 100;
             //          list.css({"transform": 'translateX('+reqTransform+'%)'}, duration);
             //        reqItem.addClass('active').siblings().removeClass('active');
             //        }
         


            // $('.down__arrow-left').on('click', function(e) {
            // 	 e.preventDefault();
            // 	 var $this = $(this),
            //         container = $this.closest('.slider__burger'),
            //         items = container.find('.burger__slide'),
            //         activeSlide = items.filter('.active'),
            //         reqItem = activeSlide.prev(),
            //         list = container.find('.burger__slider'),
            //         duration = 500;

            //         index--;
            //         if (index < 0) {
            //         	index = items.length - 1;
            //         }

            //         var reqTransform = -index * 100;


            //         list.css({"transform": 'translateX('+reqTransform+'%)'}, duration);
            //         reqItem.addClass('active').siblings().removeClass('active');

            // })

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

	//One Page Scroll
  $(window).on('load resize',resizeFunc());

function resizeFunc(){
  console.log($(window).width());
  if($(window).width() >= '480') {
    const display = $('.maincontent');
const sections = $('.section');

let inScroll = false;

const mobileDetect = new MobileDetect(window.navigator.userAgent);
const isMobile = mobileDetect.mobile();

const switchMenuActiveClass = sectionEq => {
  $('.fixed-menu__item').eq(sectionEq).addClass('active')
    .siblings().removeClass('active');
}

const performTransition = sectionEq => {
  if (inScroll) return
  inScroll = true

  const position = (sectionEq * -100) + '%';

  display.css({
    'transform': `translate(0, ${position})`,
    '-webkit-transform': `translate(0, ${position})`
  })

  sections.eq(sectionEq).addClass('active')
    .siblings().removeClass('active');

  setTimeout(() => {
    inScroll = false;
    switchMenuActiveClass(sectionEq);
  }, 1300);
}

const difineSections = sections => {
  const activeSection = sections.filter('.active');
  return {
    activeSection: activeSection,
    nextSection: activeSection.next(),
    prevSection: activeSection.prev()
  }
}

const scrollToSection = direction => {
  const section = difineSections(sections)

  if (inScroll) return;

  if (direction === 'up' && section.nextSection.length) { // вниз
    performTransition(section.nextSection.index())
  }

  if (direction === 'down' && section.prevSection.length) { // вверх
    performTransition(section.prevSection.index())
  }
}

$('.wrapper').on({
  wheel: e => {
    const deltaY = e.originalEvent.deltaY;
    let direction = (deltaY > 0) 
      ? 'up' 
      : 'down'

    scrollToSection(direction);
  },
  touchmove: e => (e.preventDefault())
});


$(document).on('keydown', e => {
  const section = difineSections(sections);

  if (inScroll) return

  switch (e.keyCode) {
    case 40: // вверх
      if (!section.nextSection.length) return;
      performTransition(section.nextSection.index());
      break;

    case 38: //вниз
      if (!section.prevSection.length) return;
      performTransition(section.prevSection.index());
      break;
  }
});

if (isMobile) {
  $(window).swipe({
    swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
      console.log(direction);
      scrollToSection(direction);
    }
  })
}


$('[data-scroll-to]').on('click touchstart', e => {
  e.preventDefault();
  const $this = $(e.currentTarget);
  const sectionIndex = parseInt($this.attr('data-scroll-to'));

  performTransition(sectionIndex);
});
  } else {
    console.log('no!');
    $('.wrapper').css('overflow', 'visible');

  }
}
	

