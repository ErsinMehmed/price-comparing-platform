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
   <link rel="stylesheet" href="category.css">
   <title>Erso Shopping Категории</title>
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
   <div class="bor">

   </div>
   <section>
      <div class="secName">Популярни категории</div>
      <div class="row">
         <div class="box">
            <div class="imgcolorr"><img src="image/3100.jpg" alt=""></div>
            <div class="imgNamme">Лаптопи</div>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/4793.jpg" alt=""></div>
            <div class="imgNamme">Таблети</div>
         </div>
         <div class="box">
            <a href="mobile.php">
               <div class="imgcolorr"><img src="image/3277.jpg" alt=""></div>
               <div class="imgNamme">Мобилни телефони</div>
            </a>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/3174.jpg" alt=""></div>
            <div class="imgNamme">Кафемашини</div>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/3164.jpg" height="100px" alt=""></div>
            <div class="imgNamme">Телевизори</div>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/3172.jpg" alt=""></div>
            <div class="imgNamme">Климатици</div>
         </div>
      </div>
      <div id="myBtnContainer">
         <span onclick="vs()"><button class="bttn active" onclick="filterSelection('all')">Всички категории</button></span>
         <span onclick="info()"> <button class="bttn" onclick="filterSelection('cars')">Информатика</button></span>
         <span onclick="el()"><button class="bttn" onclick="filterSelection('ell')">Електроника</button></span>
         <span onclick="hel()"><button class="bttn" onclick="filterSelection('fruits')">Здраве и красота</button></span>
         <span onclick="bil()"><button class="bttn" onclick="filterSelection('colors')">Строителство и ремонт</button></span>
         <span onclick="teh()"><button class="bttn" onclick="filterSelection('animals')">Битова техника</button></span>
      </div>


      <div class="catName" id="catName">
         Всички категории
      </div>
      <script>
         function vs() {
            document.getElementById("catName").innerHTML = "Всички категории";
         }

         function info() {
            document.getElementById("catName").innerHTML = "Информатика";
         }

         function el() {
            document.getElementById("catName").innerHTML = "Електроника";
         }

         function hel() {
            document.getElementById("catName").innerHTML = "Здраве и красота";
         }

         function bil() {
            document.getElementById("catName").innerHTML = "Строителство и ремонт";
         }

         function teh() {
            document.getElementById("catName").innerHTML = "Битова техника";
         }
      </script>
      <div class="containerr">
         <div class="filterDiv all">
            <div class="imgNameе">Всички категори >></div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/3100.jpg" alt=""></div>
            <div class="imgName">Лаптопи</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/3142.jpg" alt=""></div>
            <div class="imgName">Компютри</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/719832909.lg-27gn850-b.jpg" width="95px" height="100px" alt=""></div>
            <div class="imgName">Монитори</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/633100356.hp-hyperx-origins-core-hx-kb7rdx-us.jpg" width="120px" height="100px" style="padding-bottom: 25px;" alt=""></div>
            <div class="imgName">Клавиатури</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/3139.jpg" alt=""></div>
            <div class="imgName">Процесори</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/837367314.kingston-fury-beast-16gb-2x8gb-ddr4-3200mhz-kf432c16bbk2-16.jpg" width="115px" height="100px" style="padding-bottom: 10px;" alt=""></div>
            <div class="imgName">RAM</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/4357.jpg" alt=""></div>
            <div class="imgName">Мишки</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/4793.jpg" alt=""></div>
            <div class="imgName">Таблети</div>
         </div>
         <div class="filterDiv cars">
            <div class="imgcolor"> <img src="image/438649327.kingston-a400-2-5-240gb-sata3-sa400s37-240g.jpg" width="115px" height="100px" style="padding-bottom: 12px;" alt=""></div>
            <div class="imgName">SSD</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/3277.jpg" alt=""></div>
            <div class="imgName">Мобилни телефони</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/3109.jpg" alt=""></div>
            <div class="imgName">Слушалки</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/7331.jpg" alt=""></div>
            <div class="imgName">Колонки</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/7323.jpg" alt=""></div>
            <div class="imgName">Смарт часовници</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/515647488.jabra-talk-25-100-92310900-60.jpg" width="55px" height="100px" style="padding-bottom: 13px;" alt=""></div>
            <div class="imgName">Хендсфри слушалки</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/3164.jpg" height="100px" alt=""></div>
            <div class="imgName">Телевизори</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/40.jpg" alt=""></div>
            <div class="imgName">Фотоапарати</div>
         </div>
         <div class="filterDiv ell">
            <div class="imgcolor"> <img src="image/3401.jpg" height="100px" alt=""></div>
            <div class="imgName">HiFi</div>
         </div>
         <div class="filterDiv fruits">
            <div class="imgcolor"> <img src="image/470788985.remington-s8598.jpg" height="100px" alt=""></div>
            <div class="imgName">Преси за коса</div>
         </div>
         <div class="filterDiv fruits">
            <div class="imgcolor"> <img src="image/227775143.remington-silk-ac9096.jpg" height="100px" alt=""></div>
            <div class="imgName">Сешоари</div>
         </div>
         <div class="filterDiv fruits">
            <div class="imgcolor"> <img src="image/504399981.philips-oneblade-qp2520-30.jpg" height="100px" alt=""></div>
            <div class="imgName">Тримери</div>
         </div>
         <div class="filterDiv fruits">
            <div class="imgcolor"> <img src="image/493907701.braun-silk-epil-9-sensosmart-9-700.jpg" height="100px" alt=""></div>
            <div class="imgName">Епилатори</div>
         </div>
         <div class="filterDiv fruits">
            <div class="imgcolor"> <img src="image/859728186.philips-hx6232-41.jpg" height="100px" alt=""></div>
            <div class="imgName">Електрически четки</div>
         </div>
         <div class="filterDiv fruits">
            <div class="imgcolor"> <img src="image/735687600.ayco-aeb-222.jpg" height="100px" alt=""></div>
            <div class="imgName">Електрически одеала</div>
         </div>
         <div class="filterDiv colors">
            <div class="imgcolor"> <img src="image/4780.jpg" height="100px" alt=""></div>
            <div class="imgName">Бормашини</div>
         </div>
         <div class="filterDiv colors">
            <div class="imgcolor"> <img src="image/4768.jpg" height="100px" alt=""></div>
            <div class="imgName">Ъглошлайф</div>
         </div>
         <div class="filterDiv colors">
            <div class="imgcolor"> <img src="image/5193.jpg" height="100px" alt=""></div>
            <div class="imgName">Слънчеви колектори</div>
         </div>
         <div class="filterDiv colors">
            <div class="imgcolor"> <img src="image/821277471.mitsubishi-fdcw60vnx-a.jpg" height="100px" alt=""></div>
            <div class="imgName">Термопомпи</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/3172.jpg" height="100px" alt=""></div>
            <div class="imgName">Климатици</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/696780114.gorenje-rf4141ps4.jpg" height="100px" alt=""></div>
            <div class="imgName">Хладилници</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/3169.jpg" height="100px" alt=""></div>
            <div class="imgName">Фурни</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/818384121.tesy-simpateco-slim-ctv-80-38-30-b12-tsr.jpg" height="100px" alt=""></div>
            <div class="imgName">Бойлери</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/719534226.bosch-wau28s60by.jpg" height="100px" alt=""></div>
            <div class="imgName">Перални</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/3174.jpg" height="100px" alt=""></div>
            <div class="imgName">Кафемашини</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/499015105.samsung-ms23k3513as.jpg" height="100px" alt=""></div>
            <div class="imgName">Микроволнови</div>
         </div>
         <div class="filterDiv animals">
            <div class="imgcolor"> <img src="image/7221.jpg" height="100px" alt=""></div>
            <div class="imgName">Роботи за почистване</div>
         </div>
      </div>

      <script>
         filterSelection("all")

         function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
               w3RemoveClass(x[i], "show");
               if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
         }

         function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
               if (arr1.indexOf(arr2[i]) == -1) {
                  element.className += " " + arr2[i];
               }
            }
         }

         function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
               while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);
               }
            }
            element.className = arr1.join(" ");
         }
         var btnContainer = document.getElementById("myBtnContainer");
         var btns = btnContainer.getElementsByClassName("bttn");
         for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
               var current = document.getElementsByClassName("active");
               current[0].className = current[0].className.replace(" active", "");
               this.className += " active";
            });
         }
      </script>
   </section>
   <section>
      <div class="cName">Избрани предложения</div>
      <div class="roww">
         <div class="box">
            <div class="imgcolorr"><img src="image/465054131.acme-act03.jpg" height="100px" alt=""></div>
            <div class="imgNamme">ACME ACT03 <div>Смарт часовник</div>
            </div>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/794723076.acoustique-quality-kentaur-303.jpg" height="100px" alt=""></div>
            <div class="imgNamme">Acoustique Quality <div>HiFi уредба</div>
            </div>
         </div>
         <div class="box">
            <a href="mobile.php">
               <div class="imgcolorr"><img src="image/618005512.arielli-abm-4406b.jpg" height="100px" alt=""></div>
               <div class="imgNamme">Arielli ABM-4406B <div>Пекарна</div>
               </div>
            </a>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/458100763.aeg-dbb5660hm-60cm.jpg" height="100px" alt=""></div>
            <div class="imgNamme">AEG DBB5660HM 60cm <div>Aбсорбатор</div>
            </div>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/685420377.black-decker-bcd003c1.jpg" height="100px" alt=""></div>
            <div class="imgNamme">Black & Decker BCD003C1 <div>Винтоверт</div>
            </div>
         </div>
         <div class="box">
            <div class="imgcolorr"><img src="image/467807197.philips-multigroom-series-3000-mg3710-15.jpg" height="100px" alt=""></div>
            <div class="imgNamme">Philips Multigroom <div>Машинка за подстригване</div>
            </div>
         </div>
      </div>
      <div class="cName">Наши партньори</div>
      <div class="rowww">
         <img src="image/43467.jpg" alt="">
         <img src="image/154089.jpg" alt="">
         <img src="image/60422.jpg" alt="">
         <img src="image/43499.jpg" alt="">
         <img src="image/106665.jpg" alt="">
         <img src="image/84620.jpg" alt="">
         <img src="image/21427.jpg" alt="">
      </div>
   </section>
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