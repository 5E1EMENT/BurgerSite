<!DOCTYPE html>
<html lang="ru">
  <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Burger</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/main.css">

 <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANcAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA1wAAAAAAAAAAAAAAAAAAAOcAXL//AG/n/wBv5/8Ab+f/AG/n/wBv5/8Ab+f/AG/n/wBv5/8Aa9z/AGHC/wBQof8AAADPAAAAAAAAAAAAAADnAGjX/ymQ//84l///OJf//ziX//84l///OJf//x2J//8Ae///AHv//wB18P8AWrX/AAAA5wAAAAAAAAAAAAAA5wAIEP8AGzj/DiI4/w4iOP8OIjj/DiI4/w4iOP8AGzj/ABs4/wAbOP8AFy//AAcN/wAAAOcAAAAAAAAAtwAVKf8AKlX/AAAA/wAAAP8AGTL/ABw4/wAYL/8AGC//ABgv/wAYL/8AGC//ABQo/wAJE/8AAAD/AAAAtwAAAP8AMGH/ACFC/wBXV/8AgoL/AAAA/wALF/8ALl3/ADdt/wApU/8AIUL/ACFC/wAdO/8AAwb/AEpK/wAAAP8AAAD/ABUp/wAAAP8AJSX/AFBQ/wAAAP8AAAD/AAAA/wAbNv8ADRv/AA0b/wANG/8ABgz/AAAA/wApKf8AAAD/AAAA/wBXAP8ARgD/AAAA/wAAMv8MDHT/IyOH/wAAaf8AAGn/AAAZ/wAAAP8AaQD/AFsA/wBGAP8AOgD/AAAA/wAAAIcAVwD/AEYA/wAAAP8AADL/DAx0/yMjh/8AAGn/AABp/wAAGf8AAAD/AGkA/wBbAP8ARgD/ADoA/wAAAIcAAAAAAAAA5xEnQP8bP2j/Gz9o/xs/aP8bP2j/Gz9o/xs/aP8bP2j/BDRo/wAyaP8AMmj/AB9A/wAAAOcAAAAAAAAAAAAAAOc4hNf/SqD//1mn//9Zp///Waf//1mn//9CnP//Qpz//0Kc//8Eff//AHv//wBo1/8AAADnAAAAAAAAAAAAAADnQIjX/4S9//+Evf//hL3//4S9//+Evf//eLf//0Kc//9CnP//L5P//wB7//8AaNf/AAAA5wAAAAAAAAAAAAAAr1N2n/+Evf//hL3//4S9//+Evf//hL3//4S9//9bqP//Qpz//yGM//8Ae///AE2f/wAAAMcAAAAAAAAAAAAAAAAAAACvU3af/2+f1/+Evf//hL3//4S9//9bqP//Qpz//yGM//8AaNf/AE2f/wAAANcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAK8AAADnSmqP/3ir5/9Vmuf/PI3n/yGA5/8ARY//AAAA5wAAAMcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKcAAAD/AAAA/wAAAP8AAAD/AAAApwAAAAAAAAAAAAAAAAAAAAAAAAAAwAMAAIABAACAAQAAgAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAACAAQAAgAEAAMADAADgBwAA+B8AAA==" rel="icon" type="image/x-icon" />
 </head>
  

  

  <body>
    <div class="hamburger__menu--fixedbtn">
      <a class="hamburger-menu-link" href="#">
                  <div class="hamburger-menu-link__bars" id="hamburger-menu-hidden"></div>
                </a>
    </div>
             <ul class="fixed-menu">
    <li class="fixed-menu__item active">
      <a class="fixed-menu__link" href="#header" data-scroll-to="0"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="#best" data-scroll-to="1"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="#burgers-slider" data-scroll-to="2"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="#team" data-scroll-to="3"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="#menu" data-scroll-to="4"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="#reviews" data-scroll-to="5"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="#order" data-scroll-to="6"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="#footer" data-scroll-to="7"></a>
    </li>
  </ul>
  <div class="hide__menu">
              
                <ul class="mobile__nav " id="hidden-menu">
                  <li class="mobile__item-hidden">
                    <a href="#best" class="mobile__link-hidden" data-scroll-to="1">О нас</a></li>
                  <li class="mobile__item-hidden">
                    <a href="#burgers-slider" class="mobile__link-hidden" data-scroll-to="2">Бургеры</a></li>
                  <li class="mobile__item-hidden">
                    <a href="#team" class="mobile__link-hidden" data-scroll-to="3">Команда</a></li>
                  <li class="mobile__item-hidden">
                    <a href="#menu" class="mobile__link-hidden" data-scroll-to="4">Меню</a></li>
                  <li class="mobile__item-hidden">
                    <a href="#reviews" class="mobile__link-hidden" data-scroll-to="5">Отзывы</a></li>
                  <li class="mobile__item-hidden">
                    <a href="#footer" class="mobile__link-hidden" data-scroll-to="7">Контакты</a></li>
                    
                </ul>
                
              
            </div>
    <div class="wrapper">
      <div class="maincontent">

        <!--Наш header-->
        <section class="section header active" id="header">
          <div class="container">
            
            <div class="header__top">
              <div class="header__logo">
                <a href="#" class="logo">
                  <svg class="icon logo__pic" width="98.265px" height="74.317px" viewBox = "0 0 98.265 74.317" style="fill:#e25028;">
                    <use xlink:href="img/icons/logo.svg#Layer_1" />
                  </svg>
                </a>
                
              </div>
              <div class="header__nav">
                <ul class="nav">
                  <li class="nav__item">
                    <a href="#best" class="nav__link" data-scroll-to="1">О нас</a></li>
                  <li class="nav__item">
                    <a href="#burgers-slider" class="nav__link" data-scroll-to="2">Бургеры</a></li>
                  <li class="nav__item">
                    <a href="#team" class="nav__link" data-scroll-to="3">Команда</a></li>
                  <li class="nav__item">
                    <a href="#menu" class="nav__link" data-scroll-to="4">Меню</a></li>
                  <li class="nav__item">
                    <a href="#reviews" class="nav__link" data-scroll-to="5">Отзывы</a></li>
                  <li class="nav__item">
                    <a href="#footer" class="nav__link" data-scroll-to="7">Контакты</a></li>
                    <a href="#order" data-scroll-to="6" class="nav__link order-btn">Заказать</a>
                </ul>
                <div class="header__links">
                <a class="nav__link hide-btn" href="#order" data-scroll-to="6">Заказать</a>
                
              </div>
              </div>

            </div>
            
           

            

            <div class="header__content">
              <div class="header__content-left">
                <img src="img/burger.png" alt="" class="header_burger">
              </div>
              <div class="header__content-right">
                <h1 class="title header__title">мы делаем<br></h1>
                <span class="header__title-text">натуральные<br> бургеры</span>
              </div>
            </div>
            <a class="down-arrow" href="#best" data-scroll-to="1">
          <svg class="icon" width="28.685px" height="14.479px" style="fill:#fff;">
                    <use xlink:href="img/icons/arrow-scroll.svg#Layer_1" />
            </svg>
        </a>
          </div>
        </section>
        <!--Секция Мы Лучшие-->
        <section class="section best" id="best">
          <div class="container">
            <div class="wrap">
              <h2 class="title best__title-text">
                  Мы лучшие
              </h2>
              <div class="best__list">
                <div class="best__item">
                  <img src="img/icons/meat.svg" alt="" class="best__icon">
                  <div class="best__text">
                    <h3 class="best__title ">100% свежее мясо</h3>
                    <p class="best__description ">Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
                  </div>
                </div>
                <div class="best__item">
                  <img src="img/icons/hand.svg" alt="" class="best__icon ">
                  <div class="best__text hand" >
                    <h3 class="best__title">Ручная сборка</h3>
                    <p class="best__description ">Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Первое полустишие притягивает сюжетный реформаторский пафос.</p>
                  </div>
                </div>
                <div class="best__item">
                  <img src="img/icons/natural.svg" alt="" class="best__icon">
                  <div class="best__text">
                    <h3 class="best__title ">Натуральные ингредиенты</h3>
                    <p class="best__description ">Драма представляет собой деструктивный цикл. Анапест представляет собой анапест.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </section>
        <!--Секция Бургер Слайдер-->
        <section class="section slider" id="burgers-slider">

          <div class="container slider__container">

               <div class="slider__burger">
                
                    <ul class="burger__slider">
                     <li class="burger__slide active">
                       <div class="burger__left">
                         <div class="burger__consist">
                           <img src="img/burger-composition.png" alt="" class="burger__composition">
                           <span class="burger__include title">состав</span>
                           
                         </div>
                         <div class="burger__modal">
                           <ul class="ingred">
                             <li class="ingred_item">
                               <img src="img/icons/beef.svg" alt="" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Говядина</span>
                                 <span class="ingred__lot">300г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/buns.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Булочки</span>
                                 <span class="ingred__lot">100г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/salad.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Зелень</span>
                                 <span class="ingred__lot">70г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/sauce.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Соус</span>
                                 <span class="ingred__lot">150г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cucumber.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Овощи</span>
                                 <span class="ingred__lot">200г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cheese.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Сыр</span>
                                 <span class="ingred__lot">80г</span>
                               </div>
                             </li>
                           </ul>
                         </div>
                         <img src="img/burgers/Dark-Burger.png" alt="" class="burger__img">
                         <div class="burger__kkal">
                           <img src="img/icons/kkal.svg" alt="" class="burger__kkal-img">
                           <span class="burger__kkal-number title">1200<br></span>
                           <b class="burger__kkal-text title">ккал</b>
                         </div>
                       </div>
                       <div class="burger__right">
                         <h2 class="burger__title title">Dark BEEF Burger</h2>
                         <p class="burger__desc">Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                         <span class="burger__price title">500 <b class="burger__price-ruble">рублей</b></span>
                         <a class="burger__order" href="#order" data-scroll-to="6">Заказать</a>
                       </div>
                     </li>
                     <li class="burger__slide">
                       <div class="burger__left">
                         <div class="burger__consist">
                           <img src="img/burger-composition.png" alt="" class="burger__composition">
                           <span class="burger__include title">состав</span>
                         </div>
                         <div class="burger__modal">
                           <ul class="ingred">
                             <li class="ingred_item">
                               <img src="img/icons/beef.svg" alt="" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Говядина</span>
                                 <span class="ingred__lot">300г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/buns.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Булочки</span>
                                 <span class="ingred__lot">100г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/salad.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Зелень</span>
                                 <span class="ingred__lot">70г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/sauce.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Соус</span>
                                 <span class="ingred__lot">150г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cucumber.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Овощи</span>
                                 <span class="ingred__lot">200г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cheese.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Сыр</span>
                                 <span class="ingred__lot">80г</span>
                               </div>
                             </li>
                           </ul>
                         </div>
                         <img src="img/burgers/Chiken_burger.png" alt="" class="burger__img">
                         <div class="burger__kkal">
                           <img src="img/icons/kkal.svg" alt="" class="burger__kkal-img">
                           <span class="burger__kkal-number title">1100<br></span>
                           <b class="burger__kkal-text title">ккал</b>
                         </div>
                       </div>
                       <div class="burger__right">
                         <h2 class="burger__title title">Chiken Burger</h2>
                         <p class="burger__desc">Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                         <span class="burger__price title">500 <b class="burger__price-ruble">рублей</b></span>
                         <a class="burger__order" href="#order" data-scroll-to="6">Заказать</a>
                       </div>
                     </li>
                     <li class="burger__slide">
                       <div class="burger__left">
                         <div class="burger__consist">
                           <img src="img/burger-composition.png" alt="" class="burger__composition">
                           <span class="burger__include title">состав</span>
                         </div>
                         <div class="burger__modal">
                           <ul class="ingred">
                             <li class="ingred_item">
                               <img src="img/icons/beef.svg" alt="" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Говядина</span>
                                 <span class="ingred__lot">300г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/buns.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Булочки</span>
                                 <span class="ingred__lot">100г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/salad.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Зелень</span>
                                 <span class="ingred__lot">70г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/sauce.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Соус</span>
                                 <span class="ingred__lot">150г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cucumber.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Овощи</span>
                                 <span class="ingred__lot">200г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cheese.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Сыр</span>
                                 <span class="ingred__lot">80г</span>
                               </div>
                             </li>
                           </ul>
                         </div>
                         <img src="img/burgers/Cheeseburger.png" alt="" class="burger__img">
                         <div class="burger__kkal">
                           <img src="img/icons/kkal.svg" alt="" class="burger__kkal-img">
                           <span class="burger__kkal-number title">1300<br></span>
                           <b class="burger__kkal-text title">ккал</b>
                         </div>
                       </div>
                       <div class="burger__right">
                         <h2 class="burger__title title">Cheese Burger</h2>
                         <p class="burger__desc">Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                         <span class="burger__price title">500 <b class="burger__price-ruble">рублей</b></span>
                         <a class="burger__order" href="#order" data-scroll-to="6">Заказать</a>
                       </div>
                     </li>
                     <li class="burger__slide">
                       <div class="burger__left">
                         <div class="burger__consist">
                           <img src="img/burger-composition.png" alt="" class="burger__composition">
                           <span class="burger__include title">состав</span>
                         </div>
                         <div class="burger__modal">
                           <ul class="ingred">
                             <li class="ingred_item">
                               <img src="img/icons/beef.svg" alt="" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Говядина</span>
                                 <span class="ingred__lot">300г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/buns.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Булочки</span>
                                 <span class="ingred__lot">100г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/salad.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Зелень</span>
                                 <span class="ingred__lot">70г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/sauce.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Соус</span>
                                 <span class="ingred__lot">150г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cucumber.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Овощи</span>
                                 <span class="ingred__lot">200г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cheese.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Сыр</span>
                                 <span class="ingred__lot">80г</span>
                               </div>
                             </li>
                           </ul>
                         </div>
                         <img src="img/burgers/burger_sandwich.png" alt="" class="burger__img">
                         <div class="burger__kkal">
                           <img src="img/icons/kkal.svg" alt="" class="burger__kkal-img">
                           <span class="burger__kkal-number title">1350<br></span>
                           <b class="burger__kkal-text title">ккал</b>
                         </div>
                       </div>
                       <div class="burger__right">
                         <h2 class="burger__title title">Burger Sandwich</h2>
                         <p class="burger__desc">Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                         <span class="burger__price title">500 <b class="burger__price-ruble">рублей</b></span>
                         <a class="burger__order" href="#order" data-scroll-to="6">Заказать</a>
                       </div>
                     </li>
                     <li class="burger__slide">
                       <div class="burger__left">
                         <div class="burger__consist">
                           <img src="img/burger-composition.png" alt="" class="burger__composition">
                           <span class="burger__include title">состав</span>
                         </div>
                         <div class="burger__modal">
                           <ul class="ingred">
                             <li class="ingred_item">
                               <img src="img/icons/beef.svg" alt="" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Говядина</span>
                                 <span class="ingred__lot">300г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/buns.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Булочки</span>
                                 <span class="ingred__lot">100г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/salad.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Зелень</span>
                                 <span class="ingred__lot">70г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/sauce.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Соус</span>
                                 <span class="ingred__lot">150г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cucumber.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Овощи</span>
                                 <span class="ingred__lot">200г</span>
                               </div>
                             </li>
                             <li class="ingred_item">
                               <img src="img/icons/cheese.svg" class="ingred__img">
                               <div class="ingred__desc">
                                 <span class="ingred__title">Сыр</span>
                                 <span class="ingred__lot">80г</span>
                               </div>
                             </li>
                           </ul>
                         </div>
                         <img src="img/burgers/Spicy_Shrimp_Burger.png" alt="" class="burger__img">
                         <div class="burger__kkal">
                           <img src="img/icons/kkal.svg" alt="" class="burger__kkal-img">
                           <span class="burger__kkal-number title">1250<br></span>
                           <b class="burger__kkal-text title">ккал</b>
                         </div>
                       </div>
                       <div class="burger__right">
                         <h2 class="burger__title title">Spicy Shrimp Burger</h2>
                         <p class="burger__desc">Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                         <span class="burger__price title">500 <b class="burger__price-ruble">рублей</b></span>
                         <a class="burger__order" href="#order" data-scroll-to="6">Заказать</a>
                       </div>
                     </li>
                   </ul>
                   <div class="burger__arrows">
                   <a class="slider__btn down__arrow-left" href="#" >
                      <svg class="icon" width="28.685px" height="14.479px" style="fill:#fff;">
                          <use xlink:href="img/icons/arrow-scroll.svg#Layer_1" />
                      </svg>
                    </a>
                    <a class="slider__btn down__arrow-right" href="#" >
                      <svg class="icon" width="28.685px" height="14.479px" style="fill:#fff;">
                          <use xlink:href="img/icons/arrow-scroll.svg#Layer_1" />
                      </svg>
                    </a>
                 </div>
                         
                  </div>
            
          </div>
        </section>
        <!--Секция Команда-->
        <section class="section team" id="team">
          <div class="team__container">
            <div class="team__wrap">
              <h2 class="title team__title">команда</h2>
              <ul class="team__accordion">
                <li class="team__tab  ">
                  <a href="" class="team__link">
                    <span class="team__name title">Дэниэл Редклиф</span>
                  </a>
                <div class="team__content ">

                  <div class="team__content-wrap">
                    <img src="img/team-img.jpg" alt="" class="team__image">
                    <div class="team__content-maintext">
                      <span class="team__content-name ">Оператор</span>
                      <p class="team__content-text">
                        С радостью поможет подобрать идеальный бургер и оформить заказ.  
                      </p>
                    </div>
                  </div>

                </div>
                </li>
                <li class="team__tab  ">
                  <a href="" class="team__link">
                    <span class="team__name title ">Ричард Джеймс</span>
                  </a>
                  <div class="team__content ">

                   <div class="team__content-wrap">
                     <img src="img/team-img.jpg" alt="" class="team__image">
                     <div class="team__content-maintext">
                       <span class="team__content-name ">Оператор</span>
                       <p class="team__content-text">
                         С радостью поможет подобрать идеальный бургер и оформить заказ.  
                       </p>
                     </div>
                   </div>

                 </div>
               
                </li>
                <li class="team__tab">
                  <a href="" class="team__link">
                  <span class="team__name title">Джейк Финн</span>
                </a>
                <div class="team__content ">

                  <div class="team__content-wrap">
                    <img src="img/team-img.jpg" alt="" class="team__image">
                    <div class="team__content-maintext">
                      <span class="team__content-name ">Оператор</span>
                      <p class="team__content-text">
                        С радостью поможет подобрать идеальный бургер и оформить заказ.  
                      </p>
                    </div>
                  </div>

                </div>
                </li>
                <li class="team__tab ">
                  <a href="" class="team__link">
                    <span class="team__name title">Николай Иванов</span>
                  </a>
                <div class="team__content ">

                  <div class="team__content-wrap">
                    <img src="img/team-img.jpg" alt="" class="team__image">
                    <div class="team__content-maintext">
                      <span class="team__content-name ">Оператор</span>
                      <p class="team__content-text">
                        С радостью поможет подобрать идеальный бургер и оформить заказ.  
                      </p>
                    </div>
                  </div>

                </div>
                </li>
            </ul>
          </div>
        </section>
        <!--Секция Меню-->
        <section class="section menu" id="menu">
                <div class="menu__container">
                    <div class="menu__space">
                        <h2 class="title section__title-menu ">меню</h2>
                    </div>
                    <ul class="menu__list">
                        <li class="menu__item menu__item--1">
                            <a href="#" class="menu__subitle menu__subitle-meet">
                                <span  class="menu__link">для мясоедов</span>
                            </a>
                            <div class="menu__desc " >
                                <p class="menu__text">
                                    Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений.
                                    Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко
                                    относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания,
                                    как справедливо считает И.Гальперин, пространственно выбирает метр. Речевой акт редуцирует
                                    диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм
                                    сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал
                                    особенно чутко относиться к слову.
                                </p>
                            </div>
                        </li>
                        <li class="menu__item menu__item--2">
                            <a  href="#" class="menu__subitle menu__subitle-veget">
                                <span  class="menu__link">вегетерианские</span>
                            </a>
                            <div class="menu__desc" >
                                <p class="menu__text">
                                    Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений.
                                    Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко
                                    относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания,
                                    как справедливо считает И.Гальперин, пространственно выбирает метр. Речевой акт редуцирует
                                    диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм
                                    сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал
                                    особенно чутко относиться к слову.
                                </p>
                            </div>
                        </li>
                        <li class="menu__item menu__item--3">
                            <a  href="#" class="menu__subitle menu__subitle-diet">
                                <span  class="menu__link">диетические</span>
                            </a>
                            <div class="menu__desc" >
                                <p class="menu__text">
                                    Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений.
                                    Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко
                                    относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания,
                                    как справедливо считает И.Гальперин, пространственно выбирает метр. Речевой акт редуцирует
                                    диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм
                                    сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал
                                    особенно чутко относиться к слову.
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>
            </section>
        <!--Секция Отзывы-->
        <section class="section reviews" id="reviews">
          <ul class="reviews__group">
            <li class="reviews__box" style="background-image: url('img/reviews/man-1.jpg');">
              <div class="reviews__content">
                <h3 class="reviews__name">Елена Орлова</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думала, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-orlova" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>



                
              </div>
            </li>
            <li class="reviews__box" style="background-image: url('./img/reviews/man-2.jpg');">
              
              <div class="reviews__content">
                <h3 class="reviews__name">Константин Спилберг</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-spilberg" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>
              </div>
            </li>
            <li class="reviews__box" style="background-image: url('./img/reviews/man-3.jpg');">
              <div class="reviews__content">
                <h3 class="reviews__name">Лилия Яковлева</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думала, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-yak" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>
              </div>
            </li>
            <li class="reviews__box" style="background-image: url('./img/reviews/man-4.jpg');">
              <div class="reviews__content">
                <h3 class="reviews__name">Дмитрий Вербицкий</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-verb" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>
              </div>
            </li>
            <li class="reviews__box" style="background-image: url('./img/reviews/man-5.jpg');">
              <div class="reviews__content">
                <h3 class="reviews__name">Джабриель Тието</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-tieto" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>
              </div>
            </li>
            <li class="reviews__box" style="background-image: url('./img/reviews/man-6.jpg');">
              <div class="reviews__content">
                <h3 class="reviews__name">Елизавета Кукиш</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думала, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-kuk" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>
              </div>
            </li>
            <li class="reviews__box" style="background-image: url('./img/reviews/man-7.jpg');">
              <div class="reviews__content">
                <h3 class="reviews__name">Петр Аркадьевич</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-ark" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>
              </div>
            </li>
            <li class="reviews__box" style="background-image: url('./img/reviews/man-8.jpg');">
              <div class="reviews__content">
                <h3 class="reviews__name">Никита Сперанский</h3>
                <p class="reviews__text">
                  Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
                </p>
                <button data-fancybox data-src="#hidden-content-sper" class="reviews__btn fancybox-inline" href="javascript:;">Подробнее</button>
              </div>
            </li>
          </ul>
        </section>
        <!--Секция Заказать-->
        <section class="section order" id="order">
          <div class="container">
            <div class="wrap">
              <h2 class="order__title title">закажите доставку</h2>
              <div class="form">

                <form action="server.php" method="post" class="form__order" id="order__form">
                  <div class="form__content">
                    <div class="form__row">
                      <label class="form__block" for="user-name">
                        <span class="form__block-title">Имя</span>
                        <input type="text"  class="form__input" name="user-name" id="user-name" placeholder="Иван">
                      </label>
                      <label class="form__block" for="user-phone">
                        <span class="form__block-title">Телефон</span>
                        <input type="text" class="form__input" name="user-phone" id="user-phone" placeholder="88005553535">
                      </label>
                    </div>
                    <div class="form__row">
                      <label class="form__block" for="user-street">
                        <span class="form__block-title">Улица</span>
                        <input type="text" class="form__input" name="user-street" id="user-street" placeholder="Корчагина">
                      </label>
                      
                    </div>
                    <div class="form__row">
                      <label class="form__block" for="user-house">
                        <span class="form__block-title">Дом</span>
                        <input type="text" class="form__input" name="user-house" id="user-house" placeholder="72">
                      </label>
                       <label class="form__block" for="user-houseBlock">
                        <span class="form__block-title">Корпус</span>
                        <input type="text" class="form__input" name="user-houseBlock" id="user-houseBlock" placeholder="1">
                      </label>
                       <label class="form__block" for="user-apartment">
                        <span class="form__block-title">Квартира</span>
                        <input type="text" class="form__input" name="user-apartment" id="user-apartment" placeholder="207"> 
                      </label>
                       <label class="form__block" for="user-floor">
                        <span class="form__block-title">Этаж</span>
                        <input type="text" class="form__input" name="user-floor" id="user-floor" placeholder="2">
                      </label>
                    </div>
                  </div>
                  <div class="form__content-desc">
                    <div class="form__row">
                      <label class="form__block">
                        <span class="form__block-title">Комментарий</span>
                        <textarea name="user-message" id="message" class="form__area" cols="30" rows="10" placeholder="Хочу много бургеров"></textarea>
                      </label>
                      
                      
                    </div>
                    <div class="form__row">
                      <label  class="form__block">
                        <div class="form__block-radio">
                          <input id="cash" type="radio" name="pay-option" value="cash" class="cash-pay">
                          <label for="cash" class="cash-text">Потребуется сдача</label>

                          <input id="card" type="radio" name="pay-option" value="card" class="card-pay">
                          <label for="card" class="card-text">Оплата по карте</label>
                        </div>
                      </label>
                    </div>
                    <div class="form__row">
                      <label  class="form__block checkbox">
                        <input id="ready" type="checkbox" class="checkbox-call" name="dont-disturb" value="1">
                        <label for="ready" class="checked-call" >Не перезванивать</label>
                        
                      </label>
                    </div>
                    <div class="form__row">
                      
                        <button type="submit" class="form-button order-btn  " >Заказать</button>
                        <button type="reset" class="form-clear clear-btn">Очистить</button>
                      
                    </div>
                  </div>
                </form>
                <div class="form__result" id="result">
                  <div class="popup" id="hidden-content-form">
                    <h2 class="popup__title title">Спасибоо за заказ!</h2>
                    <p class="popup__text">Ваш заказ находится в очереди.Доставка осуществляется в кротчайшие сроки. Приятного аппетита! </p>
                  </div>
                </div> 

                
              </div>
            </div>
          </div>
        </section>
        
        <section class="section footer" id="footer">
          <div id="map">
            
          </div>
          
            <div class="footer__nav">
              <div class="footer__block">
              <div class="footer__contacts">
                <p class="adress">Рудный, ул.Сандригайло, д.72, 207</p>
                <a href="#" class="phone__link">
                  <span class="phone">+7 (708) 596-04-74</span>
                </a>
              </div>
              <div class="footer__social">
                  <a href="https://vk.com/flak_zwilling" class="footer__link vk__link">
                    <svg class="icon" width="36.711px" height="36.711px" viewBox = "0 0 36.711 36.711" >
                      <use xlink:href="img/icons/sprite.svg#vk" />
                    </svg>
                  </a>
                  <a href="https://www.facebook.com/daniil.nikitas?ref=bookmarks" class="footer__link fb__link">
                    <svg class="icon" width="36.711px" height="36.711px" viewBox = "0 0 36.711 36.711" >
                      <use xlink:href="img/icons/sprite.svg#fb" />
                    </svg>
                  </a>
                  <a href="#" class="footer__link insta__link">
                    <svg class="icon" width="36.663px" height="36.664px" viewBox = "0 0 36.711 36.711" >
                      <use xlink:href="img/icons/sprite.svg#inst" />
                    </svg>
                  </a>
                  <a href="https://twitter.com/DaniilNikitas" class="footer__link twitter__link">
                    <svg class="icon" width="36.711px" height="36.711px" viewBox = "0 0 36.711 36.711" >

                      <use xlink:href="img/icons/sprite.svg#tw" />
                    </svg>
                  </a>
              </div>
            </div>
          </div>
          
        </section>
        
      </div>
      <div class="modals">
         
          <div class="reviews__modals">
            <div class="popup " id="hidden-content-orlova">
              <h2 class="popup__title title">Елена Орлова</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
            <div class="popup" id="hidden-content-spilberg">
              <h2 class="popup__title title">Константин Спилберг</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
            <div class="popup" id="hidden-content-yak">
              <h2 class="popup__title title">Лилия Яковлева</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
            <div class="popup" id="hidden-content-verb">
              <h2 class="popup__title title">Дмитрий Вербицкий</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
            <div class="popup" id="hidden-content-tieto">
              <h2 class="popup__title title">Джабриель Тието</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
            <div class="popup" id="hidden-content-kuk">
              <h2 class="popup__title title">Елизавета Кукиш</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
            <div class="popup" id="hidden-content-ark">
              <h2 class="popup__title title">Петр Аркадьевич</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
            <div class="popup" id="hidden-content-sper">
              <h2 class="popup__title title">Никита Сперанский</h2>
              <p class="popup__text">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</p>
            </div>
          </div>
        </div>
      </div>
      <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
      <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.3.6/mobile-detect.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    
    <script src="js/svg4everybody.js"></script>
    <script src="js/main.js"></script>
    
  
   
    
  </body>
</html>