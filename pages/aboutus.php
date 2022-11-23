<!DOCTYPE html>
<html lang="bg">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="image/siteLogo.png">
   <link rel="stylesheet" href="aboutus.css">
   <title>Erso Shopping За нас</title>
</head>

<body>
   <button onclick="topFunction()" id="myBtn" title="Скрол нагоре"><img src="image/up-arrow.png" alt="" width="29" height="26"></button>
   <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function() {
         scrollFunction()
      };

      function scrollFunction() {
         if (document.body.scrollTop > 561 || document.documentElement.scrollTop > 561) {
            mybutton.style.display = "block";
         } else {
            mybutton.style.display = "none";
         }
      }

      function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
      }
   </script>
   <header id="navbar">
      <div class="headerBody">
         <div class="header">
            <div class="siteLogo">
               <a href="index.php"><img src="image/siteLogo.png" alt="Erso Shopping" height="130px" width="150px"></a>
            </div>
            <div class="search__container">
               <input class="search__input" type="text" placeholder="Какво търсите ?">
            </div>
            <a href="#">
               <div class="searchImgCon" onclick="c()"><img class="searchImg" src="image/search.png" alt="" width="23px" height="23px"></div>
            </a>
            <div class="buttons">
               <div class="container">
                  <a href="reg.html" class="btn effect04" data-sm-link-text="Влез"><span>Моят акунт</span></a>
               </div>
            </div>
            <div class="buttonsS">
               <div class="container">
                  <a href="#" id="plus" class="btn effect04" data-sm-link-text="Попитай"><span>Помощ</span></a>
               </div>
            </div>
            <div class="notify"><span id="notifyType" class=""></span></div>
            <script>
               $("#plus").click(function() {
                  $(".notify").toggleClass("aactive");
                  $("#notifyType").toggleClass("success");

                  setTimeout(function() {
                     $(".notify").removeClass("aactive");
                     $("#notifyType").removeClass("success");
                  }, 3000);
               });
            </script>
         </div>
         <div class="headText">
            <div class="compare">Лесно сравнение на цени и над</div>
            <div id="offers">20 000</div>
            <div class="compare"> продукта от</div>
            <div id="offers">300</div>
            <div class="compare">магазина</div>
         </div>
      </div>
      <nav>
         <ul id="main">
            <li><a href="index.php">Начало</a></li>
            <li><a href="">Магазини </a></li>
            <li>
               <a href="category.php">Категории</a>
            </li>
            <li><a href="">Сравни продукти</a></li>
         </ul>
      </nav>
   </header>
   <div class="parallax"></div>
   <div class="aboutHed">За нас</div>
   <section>
      <div class="raww">
         <div class="box">
            <div class="boxName">Продукти</div>
            <img src="image/icons8-products-64.png" height="100px" alt="">
            <div class="raww">
               <div id="nbr" class="imgName">20000</div><span>+</span>
            </div>
         </div>
         <div class="boxe">
            <div class="boxName">Посетители</div>
            <img src="image/icons8-customer-64.png" height="90px" alt="">
            <div class="raww">
               <div id="nbrr" class="imgName">100000</div><span>+</span>
            </div>
         </div>
         <div class="box">
            <div class="boxNamee">Магазини</div>
            <img src="image/shops (1).png" height="82px" alt="">
            <div class="rawww">
               <div id="nbrrr" class="imgName">3000</div><span>+</span>
            </div>
         </div>
      </div>
      <script>
         var speed = 1;

         function incEltNbr(id) {
            elt = document.getElementById(id);
            endNbr = Number(document.getElementById(id).innerHTML);
            incNbrRec(0, endNbr, elt);
         }

         function incNbrRec(i, endNbr, elt) {
            if (i <= endNbr) {
               elt.innerHTML = i;
               setTimeout(function() {
                  incNbrRec(i + 100, endNbr, elt);
               }, speed);
            }
         }

         function incNbr() {
            incEltNbr("nbr");
         }

         function incNbr() {
            incEltNbr("nbrr");
         }

         function incNbr() {
            incEltNbr("nbrrr");
         }

         incEltNbr("nbr");
         incEltNbr("nbrr");
         incEltNbr("nbrrr");
      </script>
      <div class="storyy">Нашата история</div>
      <div class="line"></div>
      <div class="color">

         <div class="raw">
            <div class="colorr">
               <img src="image/screen.png" alt="" class="storyImg">
            </div>
            <div class="b">
               <div class="textStory">
                  Идеята за Erso Shopping започва с нуждата от за надежден инструмент/средство за сравнение на цени, оферти и продукти. Фокусът първо беше върху продуктов каталог, а не толкова върху това да съсдаем платформа за сравнение на цени. Erso Shopping е една от най-популярните български платформи за сравнение на цени и продукти, която предоставя надежден справочник за онлайн пазаруване, подпомагащ магазините с онлайн асортимент и клиентите им при правене на покупки от 2008 година досега. Сайтът привлича над 1 млн. потенциални купувачи месечно, които информирано могат да направят своя избор от над 300 електронни магазини и над 20 хил. оферти.
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <div class="story">Нашата мисия</div>
      <div class="line"></div>
      <div class="colore">
         <div class="raw">
            <div class="bb">
               <div class="textStoryy">
                  Мисията на Erso Shopping е да обобщи и направи сравними продуктите и цените им, за да могат бъдещите клиенти лесно и бързо да откриват по желани от тях параметри най-подходящата оферта. Erso Shopping се стреми, да подбере най-подходящите продукти за своите поситители и постоянно да разширява своя асортимент от продукти. С непрекъснатото развитие на платформата и свързаните услуги младият екип се стреми да повиши удоволствието и да опрости целия процеса при онлайн пазаруването, за да може този икономичен търговски модел да придобие по-широка популярност.
               </div>
            </div>
            <div class="colorrr">
               <img src="image/Untitled.png" alt="" class="storyImgg">
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="n">Нашата история по години</div>
      <div class="line"></div>
      <div class="calendar">
         <div class="tab">
            <div class="row">
               <div><label for="l">2007</label></div>
               <div><label for="e">2008</label></div>
               <div><label for="r">2011</label></div>
               <div><label for="w">2013</label></div>
               <div><label for="g">2014</label></div>
               <div><label for="v">2016</label></div>
            </div>
            <div class="rows">
               <input type="radio" id="l" name="e" class="tablinks" checked onclick="openCity(event, 'London')">
               <div class="border"></div>
               <input type="radio" id="e" name="e" class="tablinks" onclick="openCity(event, 'Tokyo')">
               <div class="border"></div>
               <input type="radio" id="r" name="e" class="tablinks" onclick="openCity(event, 'Ersin')">
               <div class="border"></div>
               <input type="radio" id="w" name="e" class="tablinks" onclick="openCity(event, 'Four')">
               <div class="border"></div>
               <input type="radio" id="g" name="e" class="tablinks" onclick="openCity(event, 'Five')">
               <div class="border"></div>
               <input type="radio" id="v" name="e" class="tablinks" onclick="openCity(event, 'Six')">
            </div>
         </div>

         <div id="London" class="tabcontent" style="display: block;">
            <h3>Началото</h3>
            <img src="image/start.png" alt="">
            <p>Ерсин Хюсеин с група опитни програмисти започва разработването Erso Shopping и слага началото на проекта.</p>
         </div>

         <div id="Tokyo" class="tabcontent">
            <h3>Стартирането</h3>
            <img src="image/calendar.png" alt="">
            <p>Erso Shopping е публикуван в уеб пространството. Позволява на всеки посетител да разгледа каталог от продукти, предлагани от различни физически и онлайн магазини.</p>
         </div>

         <div id="Ersin" class="tabcontent">
            <h3>Промяната</h3>
            <img src="image/exchange.png" alt="">
            <p>Платформата променя идеите и визията си, като предоставя на потребителите да сравняват цени и продукти.</p>
         </div>

         <div id="Four" class="tabcontent">
            <h3>Израстването</h3>
            <img src="image/growth.png" alt="">
            <p>Erso Shopping получава признание от асоциацията на бългърските бизнесмени в интернет. Това помага платформата да придобие популярност и да стане предпочитана платформа за ставнение на цени и продукти.</p>
         </div>
         <div id="Five" class="tabcontent">
            <h3>Разширяването</h3>
            <img src="image/enlarge.png" alt="">
            <p>Компанията подписва договор с доказани онлайн търговци на пазара като: Buy Best, Ozone.bg, iStore.bg и още много. </p>
         </div>
         <div id="Six" class="tabcontent">
            <h3>Разработването</h3>
            <img src="image/coding.png" alt="">
            <p>Потребителите имат възможност да изтеглят приложението на телефоните си.</p>
         </div>
      </div>
   </section>
   <div class="n">Нашите мениджъри</div>
   <div class="line"></div>
   <section class="dFlex">
      <div class="conntainer">
         <img src="image/e7e560ba05000efc70740fdfe07bb2d5.jpg" height="321px" alt="Avatar" class="image" style="width:100%">
         <div class="des">
            <div>ИТ Мениджър</div>
         </div>
         <div class="middle">
            <img src="image/software-developer.png" alt="">
            <div class="text">Димитър Филипов</div>
         </div>
      </div>
      <div class="conntainer">
         <img src="image/803d3447787219b6b66e4e4d98c147b9.jpg" height="321px" alt="Avatar" class="image" style="width:100%">
         <div class="des">
            <div>HR Мениджър</div>
         </div>
         <div class="middle">
            <img src="image/hr.png" alt="">
            <div class="text">Петър Генадиев</div>
         </div>
      </div>
      <div class="conntainer">
         <img src="image/b2a44ac197827d08717ef3149b6ff09a.jpg" height="321px" alt="Avatar" class="image" style="width:100%">
         <div class="des">
            <div>CR Мениджър</div>
         </div>
         <div class="middle">
            <img src="image/handshake.png" alt="">
            <div class="text">Евгени Матрев</div>
         </div>
      </div>
   </section>
   <div class="n">Награди и признания</div>
   <div class="line"></div>
   <section>
      <div class="textt">
         След дълги години на трудности и заплахи Erso Shopping получи признание от различни асоциации. Сложи отпечатък в историята на бългърският уеб пазар.
      </div>
      <div class="dFlex">
         <div class="imgBox">
            <img src="image/сайт-на-годината-removebg-preview.png" height="100px" alt="">
         </div>
         <div class="imgBox">
            <img src="image/image__1_-removebg-preview.png" height="80px" style="margin-top: 10px;" alt="">
         </div>
         <div class="imgBox">
            <img src="image/20170817_partner_WMA.png" height="80px" style="margin-top: 15px;" alt="">
         </div>
         <div class="imgBox">
            <img src="image/изтеглен_файл-removebg-preview (6).png" height="100px" alt="">
         </div>
      </div>
   </section>
   <script>
      function openCity(evt, cityName) {
         var i, tabcontent, tablinks;
         tabcontent = document.getElementsByClassName("tabcontent");
         for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
         }
         tablinks = document.getElementsByClassName("tablinks");
         for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
         }
         document.getElementById(cityName).style.display = "block";
         evt.currentTarget.className += " active";
      }
   </script>
   <footer>
      <div class="flexRow">
         <div class="footText"><a href="">Помощ</a></div>
         <div class="footText"><a href="">Поверителност</a></div>
         <div class="footText"><a href="aboutus.php">За нас</a></div>
         <div class="footText"><a href="contact.php">Контакти</a></div>
         <div class="footText"><a href="">Реклама</a></div>
         <div class="footText"><a href="">Станете партньор</a></div>
      </div>
   </footer>
</body>

</html>