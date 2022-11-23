<?php
session_start();
?>
<!DOCTYPE html>
<html lang="bg">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="image/siteLogo.png">
   <title>Erso Shopping Магазини</title>
   <link rel="stylesheet" href="markets.css">
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
            <a href="#" type="submit">
               <div class="searchImgCon" onclick="c()"><img class="searchImg" src="image/search.png" alt="" width="23px" height="23px"></div>
            </a>
            <div class="buttons" style="margin-right: -16px;">
               <div class="container">
                  <a href="account.php" class="btn effect04" data-sm-link-text="Влез"><span><?php echo $_SESSION["username"]; ?></span></a>
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
            <li><a href="home.php">Начало</a></li>
            <li><a href="markets.php">Магазини </a></li>
            <li>
               <a href="category.php">Категории</a>
            </li>
            <li><a href="">Сравни продукти</a></li>
         </ul>
      </nav>
   </header>
   <div class="bor"></div>
   <div class="head">Всички магазини</div>
   <section>
      <div class="box">
         <div class="imgBox" style="background-color: #7aabff;">
            <img src="image/best-buy-logo-1.png" style="margin-top: 12.5px;" width="100%" alt="">
         </div>
         <div class="marHed">
            Best Buy.bg
         </div>
         <div class="off">
            35 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: #FFFF8F;">
            <img src="image/content_pic-bg-logo.png" style="margin-top: 7px !important;" width="100%" alt="">
         </div>
         <div class="marHed">
            Pic.bg
         </div>
         <div class="off">
            16 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: rgb(255,250,250);">
            <img src="image/ozone_logo_whitebkgr.png" style="margin-top: 21px !important;" height="33px" width="100%" alt="">
         </div>
         <div class="marHed">
            Ozone.bg
         </div>
         <div class="off">
            19 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: whitesmoke;">
            <img src="image/изтеглен_файл-removebg-preview (7).png" style="margin-top: 23px !important;" height="22px" width="100%" alt="">
         </div>
         <div class="marHed">
            Ardes.bg
         </div>
         <div class="off">
            41 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: #fab7b7;">
            <img src="image/logo-removebg-preview.png" style="margin-top: 13.5px !important;" height="38px" width="100%" alt="">
         </div>
         <div class="marHed">
            Emag.bg
         </div>
         <div class="off">
            36 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: #d4fad4;">
            <img src="image/skymag-200-2.png" style="margin-top: -16px !important;" height="100" width="100%" alt="">
         </div>
         <div class="marHed">
            Pic.bg
         </div>
         <div class="off">
            16 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: #EADDCA;">
            <img src="image/изтеглен_файл-removebg-preview (8).png" style="margin-top: 3px !important;" height="62px" width="100%" alt="">
         </div>
         <div class="marHed">
            DataCom.bg
         </div>
         <div class="off">
            18 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: #d0d4d1;">
            <img src="image/logo2.png" style="margin-top: 7.5px !important;" height="51px" width="100%" alt="">
         </div>
         <div class="marHed">
            Jar Computers.bg
         </div>
         <div class="off">
            24 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: transparent;">
            <img src="image/skyfon_logo2019.png" style="margin-top: 5px !important;" height="50" width="100%" alt="">
         </div>
         <div class="marHed">
            Skyfon.bg
         </div>
         <div class="off">
            27 оферти
         </div>
      </div>
      <div class="box">
         <div class="imgBox" style="background-color: #c8fdc8;">
            <img src="image/plasico-logo.png" style="margin-top: 13px !important;" height="40px" width="100%" alt="">
         </div>
         <div class="marHed">
            Plasico.bg
         </div>
         <div class="off">
            11 оферти
         </div>
      </div>
   </section>
   <script>
      function click() {
         document.getElementById("foll").innerHTML = "Последвано";
      }
   </script>
   <footer>
      <div class="flexRow">
         <div class="footText"><a href="">Помощ</a></div>
         <div class="footText"><a href="">Поверителност</a></div>
         <div class="footText"><a href="">За нас</a></div>
         <div class="footText"><a href="">Контакти</a></div>
         <div class="footText"><a href="">Реклама</a></div>
         <div class="footText"><a href="">Станете партньор</a></div>
      </div>
   </footer>
</body>

</html>