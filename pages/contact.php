<!DOCTYPE html>
<html lang="bg">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="image/siteLogo.png">
   <link rel="stylesheet" href="contact.css">
   <script src="https://kit.fontawesome.com/d4b9f98a5c.js" crossorigin="anonymous"></script>
   <title>Erso Shopping Контакти</title>
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
   <div class="aboutHed">Контакти</div>
   <div class="raw">
      <div class="box">
         <i class="fa-solid fa-location-dot fa-4x"></i>
         <div class="boxHead">Нашия офис</div>
         <div class="boxText">гр. София, ул. "Кузман Шапкарев", София център</div>
      </div>
      <div class="box">
         <i class="fa-solid fa-phone fa-4x"></i>
         <div class="boxHead">Телефон</div>
         <div class="boxText">Варна: +359 894328433</div>
         <div class="boxText">София: +359 895549382</div>
      </div>
      <div class="box">
         <i class="fa-solid fa-fax fa-4x"></i>
         <div class="boxHead">Факс</div>
         <div class="boxText">Варна: +052 655932</div>
         <div class="boxText">София: +052 356711</div>
      </div>
      <div class="box">
         <i class="fa-solid fa-envelope fa-4x"></i>
         <div class="boxHead">Имейл</div>
         <div class="boxText" style="margin-top: 15px;">ersoshopping@gmail.com</div>
      </div>
   </div>
   <div class="row">
      <div class="conBody">
         <div class="conHead">
            Контакти
         </div>
         <div class="flex">
            <div class="input">
               <div style="margin-left: 50px; margin-bottom: 4px;"><i class="fa-regular fa-envelope"></i><label for="email"> Имейл:</label></div>
               <input type="email" id="email" placeholder="Въведете имейл">
            </div>
            <div class="input">
               <div style="margin-left: 51px; margin-bottom: 4px;"><i class="fa-regular fa-user"></i><label for="email"> Име:</label></div>
               <input type="email" id="email" placeholder="Въведете име">
            </div>
         </div>
         <div style="margin-left: 50px; margin-bottom: 4px; margin-top: 25px;"><i class="fa-regular fa-message"></i><label for="email"> Съобщение:</label></div>
         <textarea name="" id="" cols="50" rows="10" placeholder="Напишете вашето съобщение тук"></textarea>
         <input type="submit" value="изпрати">
         <div class="soc">Контакти в социалните мрежи:</div>
         <div class="effect jaques">
            <div class="buttons">
               <a href="#" class="fb" title="Join us on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
               <a href="#" class="tw" title="Join us on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
               <a href="#" class="pinterest" title="Join us on Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
               <a href="#" class="insta" title="Join us on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               <a href="#" class="in" title="Join us on Linked In"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.4925153393465!2d23.32339895057411!3d42.69329112188306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa857266e44cb5%3A0x7401124a748f416f!2z0YPQuy4g4oCe0JrRg9C30LzQsNC9INCo0LDQv9C60LDRgNC10LLigJwsIDEwMDAg0KHQvtGE0LjRjyDRhtC10L3RgtGK0YAsINCh0L7RhNC40Y8!5e0!3m2!1sbg!2sbg!4v1647563236140!5m2!1sbg!2sbg" width="623.5" height="622" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>
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