<?php
include 'database.php';
$now = new DateTime("now", new DateTimeZone('Europe/Sofia'));
$date = $now->format('Y-m-d');
$query = "SELECT * FROM stat WHERE date = '$date'";
$result = mysqli_query($link, $query);
$number = 0;
if ($result->num_rows == 0) {
   $insertQuery = "INSERT INTO stat (date) VALUE ('$date')";
   mysqli_query($link, $insertQuery);
} else {
   $number += 1;
   $updateQuery = "UPDATE stat SET visitors = visitors+1 WHERE date='$date'";
   mysqli_query($link, $updateQuery);
}
?>
<!DOCTYPE html>
<html lang="bg">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="image/siteLogo.png">
   <link rel="stylesheet" href="home.css">
   <link rel="stylesheet" href="lightslider.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script type="text/javascript" src="jquery.js"></script>
   <script type="text/javascript" src="lightslider.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>Erso Shopping</title>
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
   <script>
      $(document).ready(function() {
         $("#search-box").keyup(function() {
            $.ajax({
               type: "POST",
               url: "read.php",
               data: 'keyword=' + $(this).val(),
               beforeSend: function() {
                  $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
               },
               success: function(data) {
                  $("#suggesstion-box").show();
                  $("#suggesstion-box").html(data);
                  $("#search-box").css("background", "#FFF");
               }
            });
         });
      });

      function selectCountry(val) {
         $("#search-box").val(val);
         $("#suggesstion-box").hide();
      }
   </script>
   <header id="navbar">
      <div class="headerBody">
         <div class="header">
            <div class="siteLogo">
               <a href="index.php"><img src="image/siteLogo.png" alt="Erso Shopping" height="130px" width="150px"></a>
            </div>
            <div class="search__container">
               <input class="search__input" id="search-box" type="text" placeholder="Какво търсите ?">
               <div id="suggesstion-box"></div>
            </div>
            <a href="#" type="submit">
               <div class="searchImgCon" onclick="c()"><img class="searchImg" src="image/search.png" alt="" width="23px" height="23px"></div>
            </a>
            <div class="buttons">
               <div class="container">
                  <a href="reg.php" class="btn effect04" data-sm-link-text="Влез"><span>Моят акунт</span></a>
               </div>
            </div>
            <div class="buttonsS">
               <div class="container">
                  <a href="#" id="plus" class="btn effect04" data-sm-link-text="Попитай"><span>Помощ</span></a>
               </div>
            </div>
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
            <li><a href="compare1.php">Сравни продукти</a></li>
         </ul>
      </nav>
   </header>
   <script>
      var first = sessionStorage.getItem("first");
   </script>
   <article>
      <div class="slideshow-container">
         <div class="mySlides fade">
            <a href="#discount"><img src="image/bg_1973.png"></a>
         </div>
         <div class="mySlides fade">
            <a href=""><img src="image/bg_1983.png"></a>
         </div>
         <div class="mySlides fade">
            <a href=""><img src="image/bg_2008.jpg"></a>
         </div>
         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <script>
         var slideIndex = 1;
         showSlides(slideIndex);

         function plusSlides(n) {
            showSlides(slideIndex += n);
         }

         function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
               slideIndex = 1
            }
            if (n < 1) {
               slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
               dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
         }
      </script>
   </article>
   <article class="secAr">
      <div class="leftcol">
         <div class="leftcolHed">
            <h1 class="h" id="catt">Kатегории</h1>
         </div>
         <div class="borderL"> </div>
         <div class="leftcolHed">
            <h1><a href="">Електроника</a></h1>
         </div>
         <div class="elecT">
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/user-interface.png" alt="" width="20px" height="20px"></div>
                     <span>Телефони</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/headphones.png" alt="" width="20px" height="20px"></div>
                     <span>Слушалки</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/portable-speaker.png" alt="" width="20px" height="20px"></div>
                     <span>Колонки</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/smart-watch.png" alt="" width="20px" height="20px"></div>
                     <span>Смарт часовници</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/handsfree.png" alt="" width="20px" height="20px"></div>
                     <span>Хенсфри слушалки</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/led-tv.png" alt="" width="20px" height="20px"></div>
                     <span>Телевизори</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/photo-camera.png" alt="" width="20px" height="20px"></div>
                     <span>Фотоапарати</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/stereo.png" alt="" width="20px" height="20px"></div>
                     <span>HiFi</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="borderL"> </div>
         <div class="leftcolHed">
            <h1><a href="">Информатика</a></h1>
         </div>
         <div class="elecT">
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/laptop-screen.png" alt="" width="20px" height="20px"></div>
                     <span>Лаптопи</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/computer.png" alt="" width="20px" height="20px"></div>
                     <span>Компютри</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/tv.png" alt="" width="20px" height="20px"></div>
                     <span>Монитори</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/keyboard.png" alt="" width="20px" height="20px"></div>
                     <span>Клавиатури</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/cpu.png" alt="" width="20px" height="20px"></div>
                     <span>Процесори</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/ram.png" alt="" width="20px" height="20px"></div>
                     <span>RAM</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/wireless-mouse.png" alt="" width="20px" height="20px"></div>
                     <span>Мишки</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/tablet.png" alt="" width="20px" height="20px"></div>
                     <span>Таблети</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/ssd-disk.png" alt="" width="20px" height="20px"></div>
                     <span>SSD хард диск</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="borderL"> </div>
         <div class="leftcolHed">
            <h1><a href="">Битова техника</a></h1>
         </div>
         <div class="elecT">
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/air-conditioner.png" alt="" width="20px" height="20px"></div>
                     <span>Климатици</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/fridge.png" alt="" width="20px" height="20px"></div>
                     <span>Хладилници</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/stove.png" alt="" width="20px" height="20px"></div>
                     <span>Фурни</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/boil.png" alt="" width="20px" height="20px"></div>
                     <span>Бойлери</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/washing-machine.png" alt="" width="20px" height="20px"></div>
                     <span>Перални</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/coffee-machine.png" alt="" width="20px" height="20px"></div>
                     <span>Кафемашини</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/microwaves.png" alt="" width="20px" height="20px"></div>
                     <span>Микроволнови</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/vacuum-cleaner.png" alt="" width="20px" height="20px"></div>
                     <span>Роботи за чистене</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="borderL"> </div>
         <div class="leftcolHed">
            <h1><a href="">Здраве и красота</a></h1>
         </div>
         <div class="elecT">
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/hair-straightener.png" alt="" width="20px" height="20px"></div>
                     <span>Преси за коса</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/hair-dryer.png" alt="" width="20px" height="20px"></div>
                     <span>Сешoар</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/trimmer.png" alt="" width="20px" height="20px"></div>
                     <span>Тример</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/epilator.png" alt="" width="20px" height="20px"></div>
                     <span>Еполатор</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/electric-toothbrush.png" alt="" width="20px" height="20px"></div>
                     <span>Ел четки</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/blanket.png" alt="" width="20px" height="20px"></div>
                     <span>Ел одеала</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="borderL"> </div>
         <div class="leftcolHed">
            <h1><a href="">Строителство и ремонт</a></h1>
         </div>
         <div class="elecT">
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/drill.png" alt="" width="20px" height="20px"></div>
                     <span>Бормашина-витоверт</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/grinder.png" alt="" width="20px" height="20px"></div>
                     <span>Ъглошлайфове</span>
                  </div>
               </a>
            </div>
            <div class="row">
               <a href="">
                  <div class="boxb">
                     <div><img src="image/solar-panel.png" alt="" width="20px" height="20px"></div>
                     <span>Слънчеви колектори</span>
                  </div>
               </a>
               <a href="">
                  <div class="boxb">
                     <div><img src="image/geothermal-energy.png" alt="" width="20px" height="20px"></div>
                     <span>Ел термопомпи</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
      <div class="rightcol">
         <div>
            <div class="articleHeading" id="discount">Топ оферти с намаление <img src="image/726476.png" alt="" width="23px" height="23px"></div>
            <div class="articleHeadingf">Продукти с цена, намаляла през последните две седмици.</div>
            <div class="col">
               <div class="row">
                  <div class="column" onclick="product(event, 'e')">
                     <img src="image/res_cc34c096d2f336c65cbe5213a5a69d44.webp" alt="iPhone 12 64GB" onclick="imgChange(this);">
                  </div>
                  <div class="column" onclick="product(event, 'p')">
                     <img class="tab" src="image/754424874.apple-airpods-max-mgyl3zm-a-mgyj3zm-a.jpg" alt="headphones" onclick="imgChange(this);">
                  </div>
                  <div class="column" onclick="product(event, 't')">
                     <img class="tab2" src="image/run.jpg" alt="treadmill" onclick="imgChange(this);">
                  </div>
                  <div class="column" onclick="product(event, 'a')">
                     <img class="tab" src="image/569405574.philips-ep2220-10.jpg" alt="coffee machine" onclick="imgChange(this);">
                  </div>
               </div>
               <div class="containerf">
                  <div class="expandedImge"><img id="expandedImg" src="image/res_cc34c096d2f336c65cbe5213a5a69d44.webp" width="400px" height="410px"></div>
                  <div id="leftcon">
                     <div id="e" class="tabcontent">
                        <div class="safe">
                           Спести 80.00лв
                        </div>
                        <div class="price">
                           <div class="fprice">1420,00лв</div>
                           <div class="sprice">1500,00лв</div>
                        </div>
                        <div class="goodss">
                           <div class="goods">
                              iPhone 12 64GB
                           </div>
                           <div class="brand">
                              <img src="image/Apple-logo.png" alt="" height="34px" width="34px">
                           </div>
                        </div>
                        <div class="buttonsT">
                           <div class="container">
                              <a href="" class="btn effect04" data-sm-link-text="Покажи"><span>Виж повече</span></a>
                           </div>
                        </div>
                        <div class="border"></div>
                        <div class="productH">
                           Защо да изберем този продукт ?
                        </div>
                        <div class="productT">
                           "Най-новия модел на Apple, иновативен с изящен дизайн"
                        </div>
                     </div>
                     <div id="p" class="tabcontent">
                        <div class="safe">
                           Спести 32.00лв
                        </div>
                        <div class="price">
                           <div class="fprice">808,00лв</div>
                           <div class="sprice">840,00лв</div>
                        </div>
                        <div class="goodss">
                           <div class="goods">
                              Apple AirPods Max
                           </div>
                           <div class="brand">
                              <img src="image/Apple-logo.png" alt="" height="34px" width="34px">
                           </div>
                        </div>
                        <div class="buttonsT">
                           <div class="container">
                              <a href="" class="btn effect04" data-sm-link-text="Покажи"><span>Виж повече</span></a>
                           </div>
                        </div>
                        <div class="border"></div>
                        <div class="productH">
                           Защо да изберем този продукт ?
                        </div>
                        <div class="productT">
                           "Изчистен и плътен 3D звук, подходящ за всяко ежедневие"
                        </div>
                     </div>
                     <div id="t" class="tabcontent">
                        <div class="safe">
                           Спести 130.00лв
                        </div>
                        <div class="price">
                           <div class="fprice">1120,00лв</div>
                           <div class="sprice">1250,00лв</div>
                        </div>
                        <div class="goodss">
                           <div class="goods">
                              Orion Travel
                           </div>
                           <div class="brands">
                              <img src="image/orion-fitness-brand-logo-removebg-preview.png" alt="" height="34px" width="96px">
                           </div>
                        </div>
                        <div class="buttonsT">
                           <div class="container">
                              <a href="" class="btn effect04" data-sm-link-text="Покажи"><span>Виж повече</span></a>
                           </div>
                        </div>
                        <div class="border"></div>
                        <div class="productH">
                           Защо да изберем този продукт ?
                        </div>
                        <div class="productT">
                           "С максимална скорост от 15.8 Km/h, една от най-бързите пътеки на пазара"
                        </div>
                     </div>
                     <div id="a" class="tabcontent">
                        <div class="safe">
                           Спести 43.00лв
                        </div>
                        <div class="price">
                           <div class="fprice">572,00лв</div>
                           <div class="sprice">615,00лв</div>
                        </div>
                        <div class="goodss">
                           <div class="goods">
                              Philips EP2220
                           </div>
                           <div class="brandw">
                              <img src="image/philips-logo-2.png" alt="" height="44px" width="54px">
                           </div>
                        </div>
                        <div class="buttonsT">
                           <div class="container">
                              <a href="" class="btn effect04" data-sm-link-text="Покажи"><span>Виж повече</span></a>
                           </div>
                        </div>
                        <div class="border"></div>
                        <div class="productH">
                           Защо да изберем този продукт ?
                        </div>
                        <div class="productT">
                           "Бърз, елегантен и иновативен, VivoBook е подходящ за всеки офис"
                        </div>
                     </div>
                  </div>
               </div>
               <script>
                  function imgChange(imgs) {
                     var expandImg = document.getElementById("expandedImg");
                     var imgText = document.getElementById("text");
                     expandImg.src = imgs.src;
                     imgText.innerHTML = imgs.alt;
                     expandImg.parentElement.style.display = "block";
                  }

                  function product(evt, cityName) {
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
                     evt.currentTarget.className += " activef";
                  }
               </script>
            </div>
            <div class="slider" id="slider">
               <div class="sliderHead">Най-продавани продукти</div>
               <div class="slide" id="slide">
                  <div class="row">
                     <a href="">
                        <img class="item" src="image/452983027.oneconcept-st-oberholz-2g.jpg" width="200px" height="200px">
                        <div class="boxe">
                           <div class="bPrice">
                              от 39,00лв
                              <div class="bName">oneConcept St.</div>
                           </div>
                           <img width="77px" height="85px" style="margin-top: -26px;" src="image/4412-oneconcept_logo-removebg-preview.png" alt="">
                        </div>
                     </a>
                  </div>
                  <div class="row">
                     <a href="">
                        <img class="item" src="image/668992617.cecotec-cafelizzia-790.jpg" height="200px" width="200px">
                        <div class="boxe">
                           <div class="bPrice">
                              от 179,00лв
                              <div class="bName">Cecotec Cafelizzia</div>
                           </div>
                           <img src="image/res_784e265edd12d8ff3223fa1017c54227.png" width="80px" height="21px" style="margin-top: 5px;" alt="">
                        </div>
                  </div>
                  <div class="row"> <a href=""><img class="item" src="image/sony-playstation-5-ps5-digital-edition-product-big-19805-1-6247544718.jpg" height="200px" width="200px">
                        <div class="boxe">
                           <div class="bPrice">от 1 619,00лв <div class="bName">Sony PlayStation 5</div>
                           </div><img src="image/1024px-Sony_logo.svg.png" width="66px" height="13px" style="margin-top: 7px;" alt="">
                        </div>
                     </a></div>
                  <div class="row">
                     <a href="">
                        <img class="itemf" src="image/501405481.logitech-g305.jpg">
                        <div class="boxe">
                           <div class="bPrice">
                              от 78,90лв
                              <div class="bName">Logitech G305</div>
                           </div>
                           <img src="image/Logitech_logo.png" width="72px" height="21px" style="margin-top: 5px;" alt="">
                        </div>
                     </a>
                  </div>
                  <div class="row">
                     <a href="">
                        <img class="itema" src="image/526475631.philips-drycare-prestige-moistureprotect-hp8281-00.jpg">
                        <div class="boxe">
                           <div class="bPrice">
                              от 135,00лв
                              <div class="bName">Philips DryCare</div>
                           </div>
                           <img src="image/1200px-Philips_logo_new.svg.png" width="72px" height="12.5px" style="margin-top: 10px;" alt="">
                        </div>
                     </a>
                  </div>
                  <div class="row">
                     <a href="">
                        <img class="iteme" src="image/797142555.xiaomi-poco-x3-pro-256gb-8gb-ram-dual.jpg" height="180px">
                        <div class="boxee">
                           <div class="bPrice">
                              от 474,00лв
                              <div class="bName">Xiaomi Poco X3</div>
                           </div>
                           <img src="image/Xiaomi_Logo_2019.png" width="72px" height="21px" style="margin-top: 4px;" alt="">
                        </div>
                     </a>
                  </div>
                  <div class="row">
                     <a href="">
                        <img class="itemh" src="image/742676184.xiaomi-mi-pro-2-fbc4025gl.jpg" height="166px" width="182px">
                        <div class="boxee">
                           <div class="bPrice">
                              от 898,00лв
                              <div class="bName">Xiaomi Mi Pro</div>
                           </div>
                           <img src="image/Xiaomi_Logo_2019.png" width="72px" height="21px" style="margin-top: 4px;" alt="">
                        </div>
                     </a>
                  </div>
                  <div class="row">
                     <a href="">
                        <img class="itemx" src="image/829345293.huawei-watch-3-pro.jpg" height="155px" width="145px">
                        <div class="boxee">
                           <div class="bPrice">
                              от 675,00лв
                              <div class="bName">Huawei Watch 3</div>
                           </div>
                           <img src="image/203-2033389_huawei-logo-png-huawei-new-logo-2019-clipart-removebg-preview.png" style="margin-top: 1px;" width="74px" height="21px" alt="">
                        </div>
                     </a>
                  </div>
               </div>
               <div><button class="ctrl-btn pro-prev"><img src="image/left-arrow (1).png" alt=""></button></div>
               <div><button class="ctrl-btn pro-next"><img src="image/right-arrow (1).png" alt=""></button></div>
            </div>
            <script>
               "use strict";

               productScroll();

               function productScroll() {
                  let slider = document.getElementById("slider");
                  let next = document.getElementsByClassName("pro-next");
                  let prev = document.getElementsByClassName("pro-prev");
                  let slide = document.getElementById("slide");
                  let item = document.getElementById("slide");

                  for (let i = 0; i < next.length; i++) {
                     let position = 0;
                     prev[i].addEventListener("click", function() {
                        if (position > 0) {
                           position -= 1;
                           translateX(position);
                        }
                     });
                     next[i].addEventListener("click", function() {
                        if (position >= 0 && position < hiddenItems()) {
                           position += 1;
                           translateX(position);
                        }
                     });
                  }

                  function hiddenItems() {
                     let items = getCount(item, false);
                     let visibleItems = slider.offsetWidth / 210;
                     return items - Math.ceil(visibleItems);
                  }
               }

               function translateX(position) {
                  slide.style.left = position * -210 + "px";
               }

               function getCount(parent, getChildrensChildren) {
                  let relevantChildren = 0;
                  let children = parent.childNodes.length;
                  for (let i = 0; i < children; i++) {
                     if (parent.childNodes[i].nodeType != 3) {
                        if (getChildrensChildren)
                           relevantChildren += getCount(parent.childNodes[i], true);
                        relevantChildren++;
                     }
                  }
                  return relevantChildren;
               }
            </script>
         </div>
      </div>
   </article>
   <article>
      <div class="topProducts">Набиращи популярност продукти</div>
      <ul id="autoWidth" class="cs-hidden">
         <li class="item-a">
            <div class="box">
               <div class="slide-img">
                  <img src="image/875862600.lenovo-ideapad-5-pro-82l90071bm.jpg" alt="" height="200px" />
                  <div class="overlay">
                     <a href="#" class="buy-btn">Виж повече</a>
                  </div>
               </div>
               <div class="detail-box">
                  <div class="type">
                     <a href="#">Lenovo Ideapad 5 Pro</a>
                     <span>Лаптопи</span>
                  </div>
                  <a href="#" class="pricee">1 600,00лв</a>
               </div>
            </div>
         </li>
         <li class="item-b">
            <div class="box">
               <div class="slide-img">
                  <img src="image/image_256.jpg" alt="" />
                  <div class="overlay">
                     <a href="#" class="buy-btn">Виж повече</a>
                  </div>
               </div>
               <div class="detail-box">
                  <div class="type">
                     <a href="#">iPhone 13 Pro Max</a>
                     <span>Мобилни телефони</span>
                  </div>
                  <a href="#" class="pricee">2 300,00лв</a>
               </div>
            </div>
         </li>
         <li class="item-c">
            <div class="box">
               <div class="slide-img">
                  <img src="image/monitor-ips-dell-24-5-alienware-aw2521hfla-1ms-gtg-1000-1-240hz-99.jpg" alt="" />
                  <div class="overlay">
                     <a href="#" class="buy-btn">Виж повече</a>
                  </div>
               </div>
               <div class="detail-box">
                  <div class="type">
                     <a href="#">Dell Alienware</a>
                     <span>Монитори</span>
                  </div>
                  <a href="#" class="pricee">499,00лв</a>
               </div>
            </div>
         </li>
         <li class="item-d">
            <div class="box">
               <div class="slide-img">
                  <img src="image/4AD5C741-8D3F-A35A-B3A4-071E48E59F18.jpg" alt="" />
                  <div class="overlay">
                     <a href="#" class="buy-btn">Виж повече</a>
                  </div>
               </div>
               <div class="detail-box">
                  <div class="type">
                     <a href="#">JBL BoomBox 2</a>
                     <span>Преносими колонки</span>
                  </div>
                  <a href="#" class="pricee">969,00лв</a>
               </div>
            </div>
         </li>
         <li class="item-e">
            <div class="box">
               <div class="slide-img">
                  <img src="image/mitsubishi-msz-hr50vf-muz-hr50vf.jpg" alt="" />
                  <div class="overlay">
                     <a href="#" class="buy-btn">Виж повече</a>
                  </div>
               </div>
               <div class="detail-box">
                  <div class="type">
                     <a href="#">Mitsubishi</a>
                     <span>Климатици</span>
                  </div>
                  <a href="#" class="pricee">2 228,00лв</a>
               </div>
            </div>
         </li>
         <li class="item-f">
            <div class="box">
               <div class="slide-img">
                  <img src="image/474764259.remington-s8540.jpg" style="padding-bottom: 21px;" alt="" />
                  <div class="overlay">
                     <a href="#" class="buy-btn">Виж повече</a>
                  </div>
               </div>
               <div class="detail-box">
                  <div class="type">
                     <a href="#">Remington</a>
                     <span>Преса за коса</span>
                  </div>
                  <a href="#" class="pricee">73,60лв</a>
               </div>
            </div>
         </li>
         <li class="item-g">
            <div class="box">
               <div class="slide-img">
                  <img src="image/187666180.samsung-rb31ferndsa.jpg" alt="" />
                  <div class="overlay">
                     <a href="#" class="buy-btn">Виж повече</a>
                  </div>
               </div>
               <div class="detail-box">
                  <div class="type">
                     <a href="#">Samsung RB31</a>
                     <span>Хладилници</span>
                  </div>
                  <a href="#" class="pricee">919,00лв</a>
               </div>
            </div>
         </li>
      </ul>
      <script type="text/javascript" src="script.js"></script>
   </article>
   <section>
      <div class="boxoHead">Изгодни оферти</div>
      <div class="firstRow">
         <div class="boxo">
            <a href="#popup1" onclick="closeFunc()">
               <div class="bodyBoxo">
                  <div class="boxColor"><img src="image/best-buy-logo-removebg-preview.png" alt="" width="94px" height="56px"></div>
                  <div class="nameBox">
                     <div class="name">BEST BUY</div>
                     <div class="sale">100% OFF</div>
                  </div>
               </div>
               <div class="borderr"> </div>
               <div class="promotion"> Купи 1, получи 1 безплатно</div>
            </a>
         </div>
         <div id="popup1" class="overlaye">
            <div class="popup" id="meg">
               <img src="image/best-buy-logo-removebg-preview.png" height="71px" width="101px" alt="">
               <a class="close" href="#myInput">&#10005</a>
               <div class="contente">
                  Купи 1, получи 1 безплатно
               </div>
               <div class="date">Изтича на 02/07/2022</div>
               <a href="https://www.buybest.bg/" target="blank"><button class="shopNow">Към сайта</button></a>
               <div class="borderz"></div>
               <div class="moreDeal">ОЩЕ 10 ОФЕРТИ</div>
               <div class="categ">Отстъпки на над 20 вида продукти</div>
               <input type="text" value="FISHGRAPECO" id="myInput" readonly="readonly">
               <div class="tooltip">
                  <button onclick="myFunction()" onmouseout="outFunc()">
                     <span class="tooltiptext" id="myTooltip">FISHGRAPECO</span>
                     Копирай
                  </button>
               </div>
               <script src="box.js"> </script>
            </div>
         </div>
         <div class="boxo">
            <a href="#popup2" onclick="closeFunc()">
               <div class="bodyBoxo">
                  <div class="boxColor" style="background-color: #FFBF00;"><img src="image/logo.png" alt="" width="110px" height="27px" style="margin-top: 47px;"></div>
                  <div class="nameBox">
                     <div class="name" style="margin-left: 18px;">OZONE.BG</div>
                     <div class="sale" style="margin-left: 62.5px;">75% OFF</div>
                  </div>
               </div>
               <div class="borderr"> </div>
               <div class="promotion">Получавате до 75% намеление при покупка на PC игри</div>
            </a>
         </div>
         <div id="popup2" class="overlaye">
            <div class="popup">
               <img src="image/ozonebg.jpg" height="68px" width="141px" alt="">
               <a class="close" href="#myInput">&#10005</a>
               <div class="contente" style="padding-top: 3px;">
                  Получавате до 75% намеление при покупка на PC игри
               </div>
               <div class="date">Изтича на 04/15/2022</div>
               <a href="https://www.ozone.bg/" target="blank"><button class="shopNow">Към сайта</button></a>
               <div class="borderz"></div>
               <div class="moreDeal">ОЩЕ 27 ОФЕРТИ</div>
               <div class="categ">Отстъпки на PC игри</div>
               <input type="text" value="VGXHGFAPERO" id="myInput" readonly="readonly">
               <div class="tooltip">
                  <button onclick="myFunction()" onmouseout="outFunc()">
                     <span class="tooltiptext" id="myTooltip">VGXHGFAPERO</span>
                     Копирай
                  </button>
               </div>
               <script src="box.js"> </script>
            </div>
         </div>
         <div class="boxo">
            <a href="#popup3" onclick="closeFunc()">
               <div class="bodyBoxo">
                  <div class="boxColor" style="background-color: #89CFF0;"><img src="image/изтеглен_файл-removebg-preview (3).png" alt="" width="110px" height="28px" style="margin-top: 46px;"></div>
                  <div class="nameBox">
                     <div class="name">ARDES</div>
                     <div class="sale" style="margin-left: 63px;">50% OFF</div>
                  </div>
               </div>
               <div class="borderr"> </div>
               <div class="promotion">50% намаление на избрани ASUS продукти</div>
            </a>
         </div>
         <div id="popup3" class="overlaye">
            <div class="popup">
               <img src="image/изтеглен_файл-removebg-preview (3).png" height="40px" width="152px" alt="">
               <a class="close" href="#myInput">&#10005</a>
               <div class="contente" style="padding-top: 5px;">
                  50% намаление на избрани ASUS продукти
               </div>
               <div class="date">Изтича на 03/12/2022</div>
               <a href="https://ardes.bg/?gclid=Cj0KCQiAr5iQBhCsARIsAPcwROPDkXf-_Mxu5F6n5STKx9sULNuPoncQSYo6tPdd-DCw9Vbgq7AjyIsaAjd5EALw_wcB" target="blank"><button class="shopNow">Към сайта</button></a>
               <div class="borderz"></div>
               <div class="moreDeal">ОЩЕ 21 ОФЕРТИ</div>
               <div class="categ">Отстъпки на мишки, монитори и други продукти на ASUS</div>
               <input type="text" value="VGXHGFAPERO" id="myInput" readonly="readonly">
               <div class="tooltip">
                  <button onclick="myFunction()" onmouseout="outFunc()">
                     <span class="tooltiptext" id="myTooltip">VGXHGFAPERO</span>
                     Копирай
                  </button>
               </div>
               <script src="box.js"> </script>
            </div>
         </div>
      </div>
      <div class="secondRow">
         <div class="boxo">
            <a href="#popup4" onclick="closeFunc()">
               <div class="bodyBoxo">
                  <div class="boxColor" style="background-color: #D3D3D3;"><img src="image/BROS-logo.png" alt="" width="100px" height="35px" style="margin-top: 40px;"></div>
                  <div class="nameBox">
                     <div class="name" style="margin-left: -39px;">BROS</div>
                     <div class="sale" style="margin-left: 51px;">30% OFF</div>
                  </div>
               </div>
               <div class="borderr"> </div>
               <div class="promotion">30% намаление на всички продукти, офертата е валидна до 3/19/2022</div>
            </a>
         </div>
         <div id="popup4" class="overlaye">
            <div class="popup">
               <img src="image/BROS-logo.png" height="42px" width="101px" alt="">
               <a class="close" href="#myInput">&#10005</a>
               <div class="contente">
                  30% намаление на всички продукти, офертата е валидна до 3/19/2022
               </div>
               <div class="date">Изтича на 3/19/2022</div>
               <a href="https://brosbg.com/" target="blank"><button class="shopNow">Към сайта</button></a>
               <div class="borderz"></div>
               <div class="moreDeal">ОЩЕ 100+ ОФЕРТИ</div>
               <div class="categ">Отстъпки на всички видове продукти</div>
               <input type="text" value="Не е нужен код" id="myInput" readonly="readonly" style="margin-left: -2px;">
               <div class="tooltip">
                  <button>
                     <span class="tooltiptext" id="myTooltip">Не е нужен код</span>
                     Виж повече
                  </button>
               </div>
            </div>
         </div>
         <div class="boxo">
            <a href="#popup5" onclick="closeFunc()">
               <div class="bodyBoxo">
                  <div class="boxColor" style="background-color: #EE4B2B;"><img src="image/etools_logo_site.png" alt="" width="116px" height="38px" style="margin-top: 38px;"></div>
                  <div class="nameBox">
                     <div class="name" style="margin-left: 30px;">ETOOLS.BG</div>
                     <div class="sale" style="margin-left: 62px;">30% OFF</div>
                  </div>
               </div>
               <div class="borderr"> </div>
               <div class="promotion">Спестете 30% при покупка на всички видове бормашини</div>
            </a>
         </div>
         <div id="popup5" class="overlaye">
            <div class="popup">
               <img src="image/etools_logo_site.png" height="48px" width="142px" alt="">
               <a class="close" href="#myInput">&#10005</a>
               <div class="contente" style="padding-top: 3px;">
                  Спестете 30% при покупка на всички видове бормашини
               </div>
               <div class="date">Изтича на 6/15/2022</div>
               <a href="https://etools.bg/" target="blank"><button class="shopNow">Към сайта</button></a>
               <div class="borderz"></div>
               <div class="moreDeal">ОЩЕ 19 ОФЕРТИ</div>
               <div class="categ">30% остъпка на всички бормашини</div>
               <input type="text" value="VGXHGFAPERO" id="myInput" readonly="readonly">
               <div class="tooltip">
                  <button onclick="myFunction()" onmouseout="outFunc()">
                     <span class="tooltiptext" id="myTooltip">VGXHGFAPERO</span>
                     Копирай
                  </button>
               </div>
               <script src="box.js"> </script>
            </div>
         </div>
         <div class="boxo">
            <a href="#popup6" onclick="closeFunc()">
               <div class="bodyBoxo">
                  <div class="boxColor" style="background-color: #555555;"><img src="image/logo_2.png" alt="" width="110px" height="28px" style="margin-top: 44px;"></div>
                  <div class="nameBox">
                     <div class="name" style="margin-left: -21px;">ULTRA</div>
                     <div class="sale" style="margin-left: 63px;">20% OFF</div>
                  </div>
               </div>
               <div class="borderr"> </div>
               <div class="promotion">Вземете 20% намаление при покупка на телевизор</div>
            </a>
         </div>
         <div id="popup6" class="overlaye">
            <div class="popup">
               <img src="image/logo_2.png" height="46px" width="154px" alt="">
               <a class="close" href="#myInput">&#10005</a>
               <div class="contente" style="padding-top: 5px;">
                  Вземете 20% намаление при покупка на телевизор
               </div>
               <div class="date">Изтича на 02/26/2022</div>
               <a href="https://www.ultra.bg/" target="blank"><button class="shopNow">Към сайта</button></a>
               <div class="borderz"></div>
               <div class="moreDeal">ОЩЕ 36 ОФЕРТИ</div>
               <div class="categ">Остъпка от 20% при покупка на телевизор</div>
               <input type="text" value="VGXHGFAPERO" id="myInput" readonly="readonly">
               <div class="tooltip">
                  <button onclick="myFunction()" onmouseout="outFunc()">
                     <span class="tooltiptext" id="myTooltip">VGXHGFAPERO</span>
                     Копирай
                  </button>
               </div>
               <script src="box.js"> </script>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="videoo">
         <div class="videoHead">Най-продаван продукт за 2021г.</div>
         <div class="disFlex">
            <iframe width="1550px" height="500" src="https://www.youtube.com/embed/rz_rus8Vg6Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="circle">
               <a href="product.html"><img class="logo" src="image/ers copy.png" alt="" height="250px" width="250px"></a>
               <div class="head">
                  Вашата нова суперсила
               </div>
               <div class="text">
                  Супер ярък екран с издръжлив дизайн. Удивително бърз чип. Значително увеличение на автономията на батерията, което ще забелязвате всеки ден.
               </div>
               <div class="circles">
                  <a href="product1.php">
                     <div class="first">
                        <img src="image/iphone-13-pro-blue-select.png" alt="" width="106px" height="124px" style="margin: -3px 0px 0px 0px;">
                     </div>
                  </a>
                  <a href="">
                     <div class="first">
                        <img src="image/Genuine-iPhone-13-Pro-Apple-Clear-Case-MagSafe-Transparent-0194252781524-20092021-01-p-removebg-preview.png" alt="" width="106px" height="96px" style="margin: 16px 0px 0px 0px;">
                     </div>
                  </a>
                  <a href="">
                     <div class="first">
                        <img src="image/Original-Apple-MU7V2ZM-A-USB-C-Power-Adapter-18W-0190198889973-08012019-01-p-removebg-preview.png" alt="" width="106px" height="96px" style="margin: 16px 0px 0px 0px;">
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="headTopCat">Топ категории</div>
      <div class="topCat">
         <div class="rowFirst">
            <div class="circleses">
               <img src="image/ws-s4-g_category_5-f_category_img-619f43db21d64.png" style="margin-top: 6px;" alt="" width="160px" height="160px">
               <div class="circText"><a href="">Лаптопи</a></div>
            </div>
            <div class="circleses">
               <img src="image/iphone-13-pro-blue-select.png" style="margin-top: 6px; margin-bottom: 9px;" alt="" width="121px" height="150px">
               <div class="circText"><a href="">Tелефони</a></div>
            </div>
            <div class="circleses">
               <img src="image/ws-s4-g_category_6-f_category_img-619f43dd3e588.png" style="margin-top: 6px;" alt="" width="160px" height="160px">
               <div class="circText"><a href="">Слушалки</a></div>
            </div>
            <div class="circleses">
               <img src="image/ws-s4-g_category_2-f_category_img-619f43d5c60fe.png" style="margin-top: 6px;" alt="" width="160px" height="160px">
               <div class="circText"><a href="">Кухненски пособи</a></div>
            </div>
            <div class="circleses">
               <img src="image/ws-s4-g_category_8-f_category_img-619f43e0c54d6.png" style="margin-top: 6px;" alt="" width="160px" height="160px">
               <div class="circText"><a href="">Здраве и красота</a></div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="linebox">
         <div class="newsletter">
            <div class="newsHead">Получавай нашия бюлетин</div>
            <div class="newsText">Сезонът на спестяванията започва сега! Направете празничното пазаруване по-лесно, като получавате най-добрите оферти във входящата си кутия.</div>
            <div class="inputFlex">
               <input type="email" class="newsEmail" placeholder="example@gmail.com">
               <a class="newsBtn" href="">Абонирай се</a>
            </div>
            <div class="sub">Абонирайки се, Вие се съгласявате с <a href="">Политиката за поверителност</a></div>
         </div>
         <div class="newsletterImg">
            <img src="image/newsletter-cover-v2.png" style="margin-top: -23px; margin-right: 48px;" width="660px" height="350px" alt="">
         </div>
      </div>
   </section>
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