<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="bg">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="product.css">
   <link rel="shortcut icon" href="image/siteLogo.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/060ba0cff2.js" crossorigin="anonymous"></script>
   <title>Erso Shopping Apple iPhone 13</title>
</head>

<body>
   <button onclick="topFunction()" id="myBtn" title="Скрол нагоре"><img src="image/up-arrow.png" alt="" width="29" height="26"></button>
   <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function() {
         scrollFunction()
      };

      function scrollFunction() {
         if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "block";
         } else {
            mybutton.style.display = "none";
         }
      }

      function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
      }

      function check() {
         if (document.getElementById("em").value.length == 0) {
            document.getElementById("em").style.backgroundColor = "#FF5733";
            document.getElementsByName('Email')[0].placeholder = 'Не сте въвели имейл';
         }
      }

      function backColor() {
         document.getElementById("em").style.backgroundColor = "transparent";
      };
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
               <a href="index.html"><img src="image/siteLogo.png" alt="Erso Shopping" height="130px" width="150px"></a>
            </div>
            <div class="search__container">
               <input class="search__input" id="search-box" type="text" placeholder="Какво търсите ?">
               <div id="suggesstion-box"></div>
            </div>
            <a href="">
               <div class="searchImgCon"><img class="searchImg" src="image/search.png" alt="" width="23px" height="23px"></div>
            </a>
            <?php
            $name = $_SESSION["username"];
            ?>
            <div class="buttons" style="margin-right: -16px;">
               <div class="container">
                  <a href="account.php" class="btn effect04" data-sm-link-text="Профил"><span><i class="fa-solid fa-user"></i> <?php echo $name; ?></span></a>
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
            <li><a href="markets.php">Магазини </a></li>
            <li><a href="category.php">Категории</a></li>
            <li><a href="compare.php">Сравни продукти</a></li>
         </ul>
      </nav>
   </header>
   <section>
      <div class="flexx">
         <div class="col">
            <div class="row">
               <div class="column" onclick="product(event, 'e')">
                  <img src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" alt="iPhone 12 64GB" onclick="imgChange(this);">
               </div>
               <div class="column" onclick="product(event, 'p')">
                  <img class="tab" src="image/1152711.apple-iphone-13-256gb-removebg-preview.png" alt="headphones" onclick="imgChange(this);">
               </div>
               <div class="column" onclick="product(event, 't')">
                  <img class="tab2" src="image/1152705.apple-iphone-13-256gb-removebg-preview.png" alt="treadmill" onclick="imgChange(this);">
               </div>
               <div class="column" onclick="product(event, 'a')">
                  <img class="tab" src="image/1152726.apple-iphone-13-256gb-removebg-preview.png" alt="coffee machine" onclick="imgChange(this);">
               </div>
            </div>
            <div class="containerf">
               <div class="expandedImge"><img id="expandedImg" src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" width="313px" height="261px"></div>
            </div>
            <div id="myModal" class="modal">
               <span class="close">&times;</span>
               <img class="modal-content" id="img01">
            </div>
            <div class="midlle">
               <div class="textt">iPhone 13 128GB Мобилни телефони</div>
               <div class="stars">
                  <span class="oc">Средна оценка за продукта: </span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="oc"> (4,9)</span>
               </div>
               <div class="price" id="price">Цена от 1 608,00лв</div>
               <div class="gb" id="gb">Варианти на продукта: <span onclick="GBB()"><span onclick="GBs()"><button onclick="openCity(event, 'London')" class="btnn">128GB</button></span></span><span onclick="GBW()"><span onclick="GB()"><button class="btnn" onclick="openCity(event, 'Paris')">256GB</button></span></span><span onclick="GBD()"><span onclick="GBt()"><button class="btnn" onclick="openCity(event, 'Tokyo')">512GB</button></span></span></div>
               <div class="roww">
                  <div class="colorr">Налични цветове: </div>
                  <div class="dot" onclick="showPopup()" style="background-color: #d02436;"></div>
                  <div class="dot" onclick="showPopupp()" style="background-color: #f9f4f0;"></div>
                  <div class="dot" style="background-color: #1b222a;"></div>
                  <div class="dot" style="background-color: #fee5e0;"></div>
                  <div class="dot" style="background-color: #286383;"></div>
                  <div>(Натиснете за да видите повече)</div>
               </div>
               <script>
                  function GBB() {
                     document.getElementById("gbb").innerHTML = "128GB";
                  };

                  function GBW() {
                     document.getElementById("gbb").innerHTML = "256GB";
                  };

                  function GBD() {
                     document.getElementById("gbb").innerHTML = "512GB";
                  };
               </script>
               <a onclick="price()" class="button" href="#popup1">$ Ще намалява ли цената?</a>
               <div class="popupp">
                  <div class="blocker" onclick="hidePopup()"></div>
                  <div class="contentss">
                     <img src="image/1152660.apple-iphone-13-128gb-removebg-preview.png" height="200px" width="200px" alt="">
                     <img src="image/1141155.apple-iphone-13-128gb-removebg-preview.png" height="300px" width="215px" alt="">
                     <img src="image/1152657.apple-iphone-13-128gb-removebg-preview.png" height="200px" width="200px" alt="">
                     <div class="closee" onclick="closee()">&times;</div>
                  </div>
               </div>
               <script>
                  const popup = document.querySelector('.popupp');

                  function showPopup() {
                     popup.classList.add('open');
                  }

                  function hidePopup() {
                     popup.classList.remove('open');
                  }
               </script>
               <div class="popuppp">
                  <div class="blocker" onclick="hidePopupp()"></div>
                  <div class="contentss">
                     <img src="image/1152672.apple-iphone-13-128gb-removebg-preview (1).png" height="200px" width="200px" alt="">
                     <img src="image/1141152.apple-iphone-13-128gb-removebg-preview.png" height="300px" width="215px" alt="">
                     <img src="image/1152669.apple-iphone-13-128gb-removebg-preview.png" height="200px" width="200px" alt="">
                     <div class="closee" onclick="closee()">&times;</div>
                  </div>
               </div>
               <script>
                  const popupp = document.querySelector('.popuppp');

                  function showPopupp() {
                     popupp.classList.add('open');
                  }

                  function hidePopupp() {
                     popupp.classList.remove('open');
                  }
               </script>
               <div id="popup1" class="overlay">
                  <div class="popup">
                     <h2>Кога ще намалее цената?</h2>
                     <div class="borderr"></div>
                     <a class="close" href="#">&times;</a>
                     <div class="content">
                        <div class="boxx">
                           Известието за намаляващи цени Ви предупреждава по имейл, ако цената на продукта падне под сумата, дадена от Вас. Цената ще бъде следена 30 дни. Най-ниската за момента е <span id="money" class="money"></span>
                        </div>
                        <div class="sendRow">
                           <div class="bText">
                              Моля за имейл на адрес
                           </div>
                           <input type="Email" onclick="backColor()" name="Email" id="em" class="inputE">
                           <div class="bText">ако цената вечв е под </div>
                           <input type="text" class="inputT" id="sPrice">
                           <div class="bText">лв.</div>
                           <input onclick="check()" type="submit" class="subBtn">
                        </div>
                        <script>
                           function price() {
                              var x = document.getElementById("price").textContent;
                              let sub = x.substr(8, 5);
                              let subb = x.substr(8, 10);
                              document.getElementById("money").textContent = subb;
                              document.getElementById("sPrice").value = sub;
                           }
                        </script>
                     </div>
                  </div>
               </div>
               <?php
               $product = 'iPhone 13';
               if (isset($_POST['productN'])) {
                  $_SESSION["productt"] = $product;
                  $add = 'Продуктът е добавен за сравнение ';
                  $done = '<i class="fa-regular fa-circle-check"></i>';
               }
               ?>
               <form action="favorite.php" method="post">
                  <input type="hidden" name="pro" value="<?php echo $product ?>">
                  <input type="hidden" name="username" value="<?php echo $name ?>">
                  <button type="submit" class="inBtn" name="add"><i class="fa-regular fa-star"></i> Добави в любими</button><span class="mess"><?php echo $_SESSION['message'];
                                                                                                                                                unset($_SESSION['message']); ?></span>
               </form>
               <div>
                  <form action="" method="post">
                     <button type="submit" name='productN' class="inBtn"><i class="fa-solid fa-repeat"></i> Сравни продукта</button><span class="mess"> <?php echo $add;
                                                                                                                                                         echo $done ?></span>
                  </form>
               </div>
            </div>

            <div class="midlleRight">
               <div class="frow">
                  <div class="b">
                     <img src="image/cpu1.png" alt="">
                     <div class="text" style="margin-top:13px;">Процесор</div>
                     <div class="texttt">Hexa-core</div>
                  </div>
                  <div class="b">
                     <img src="image/ram1.png" alt="">
                     <div class="text" style="margin-top:18px;">Рам</div>
                     <div class="texttt">4 GB</div>
                  </div>
                  <div class="b">
                     <img src="image/266876c9d5e367a5f30ca4d92a27a367.png" alt="">
                     <div class="text" style="margin-top:6px;">Дисплей</div>
                     <div class="texttt">6.1 inches</div>
                  </div>
               </div>
               <div class="frow">
                  <div class="b">
                     <img src="image/storage.png" alt="">
                     <div class="text" style="margin-top:8px;">Памет</div>
                     <div id="gbb" class="texttt">128 GB</div>
                  </div>
                  <div class="b">
                     <img src="image/camera.png" alt="">
                     <div class="text" style="margin-top:17px;">Камера</div>
                     <div class="texttt">12 MP</div>
                  </div>
                  <div class="b">
                     <img src="image/os.png" alt="">
                     <div class="text" style="margin-top:13px;">ОС</div>
                     <div class="texttt">iOS</div>
                  </div>
               </div>
            </div>
         </div>
         <script>
            function GB() {
               document.getElementById("price").innerHTML = "Цена от 1 750,00лв";
            };

            function GBs() {
               document.getElementById("price").innerHTML = "Цена от 1 608,00лв";
            };

            function GBt() {
               document.getElementById("price").innerHTML = "Цена от 2 040,00лв";
            };

            var modal = document.getElementById("myModal");
            var img = document.getElementById("expandedImg");
            var modalImg = document.getElementById("img01");

            img.onclick = function() {
               modal.style.display = "block";
               modalImg.src = this.src;
            }

            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() {
               modal.style.display = "none";
            }

            function imgChange(imgs) {
               var expandImg = document.getElementById("expandedImg");
               var imgText = document.getElementById("text");
               expandImg.src = imgs.src;
               imgText.innerHTML = imgs.alt;
               expandImg.parentElement.style.display = "block";
            }
         </script>
   </section>
   <section id="sec">
      <div id="London" class="tabcontent" style="display: block;">
         <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <div class="tabss">
               <label class="tabf" id="one-tab" for="one">Оферти с цени</label>
               <label class="tabf" id="two-tab" for="two">Описание</label>
               <label class="tabf" id="three-tab" for="three">Мнения</label>
            </div>
            <div class="panels">
               <div class="panel" id="one-panel">
                  <div class="offer">Оферти за <span>Apple iPhone 13 128GB (8 оферти)</span></div>
                  <div class="offerBody">
                     <a target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb" class="aImg"><img src="image/167163.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                        <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">Apple iPhone 13 128GB</a></div>
                        <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция | Лизинг</div>
                     </div>
                     <div class="pricee">
                        <div class="lv"><a target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">1 608,00лв</a></div>
                        <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">Към магазина ></a>
                        <div><a class="sName" target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">buybest.bg</a></div>
                     </div>
                  </div>
                  <div class="offerBody">
                     <a href="" class="aImg"><img src="image/78810.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star "></span>
                        </div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a href="">Apple iPhone 13 128GB</a></div>
                        <div class="gar">Оригинален продукт! Гаранция! Пълен комплект!</div>
                     </div>
                     <div class="priceee">
                        <div class="lv"><a href="">1 610,00лв</a></div>
                        <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" href="">Към магазина ></a>
                        <div><a class="sName" href="">mobiland.bg</a></div>
                     </div>
                  </div>
                  <div class="offerBody">
                     <a href="" class="aImg"><img src="image/89147.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                        <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a href="">Apple iPhone 13 128GB</a></div>
                        <div class="gar">Всички стоки са с 36 месеца Гаранция! Безплатна Доставка !</div>
                     </div>
                     <div class="priceeee">
                        <div class="lv"><a href="">1 660,00лв</a></div>
                        <div class="availability" id="tooltip" style="color: #d02436;">Не е наличен <span class="tooltiptext">Стоката не е налична в магазина</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" href="">Към магазина ></a>
                        <div><a class="sName" href="">mobilepoint.bg</a></div>
                     </div>
                  </div>
                  <div class="offerBody">
                     <a href="" class="aImg"><img src="image/101515.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star "></span>
                           <span class="fa fa-star "></span>
                        </div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a href="">Apple iPhone 13 128GB</a></div>
                        <div class="gar"></div>
                     </div>
                     <div class="priceeeeе">
                        <div class="lv"><a href="">1 731,00лв</a></div>
                        <div class="availability" id="tooltip">В наличност<span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" href="">Към магазина ></a>
                        <div><a class="sName" href="">shop.datacom.bg</a></div>
                     </div>
                  </div>
                  <div class="offerBody">
                     <a target="blank" href="" class="aImg"><img src="image/28641.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                        <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a target="blank" href="">Apple iPhone 13 128GB</a></div>
                        <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
                     </div>
                     <div class="priceeeeеe">
                        <div class="lv"><a target="blank" href="">1 764,00лв</a></div>
                        <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" target="blank" href="">Към магазина ></a>
                        <div><a class="sName" target="blank" href="">ozone.bg</a></div>
                     </div>
                  </div>
                  <div class="offerBody">
                     <a href="" class="aImg"><img src="image/199809.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star "></span>
                        </div>
                        <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a href="">Apple iPhone 13 128GB</a></div>
                        <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
                     </div>
                     <div class="priceeeeеe">
                        <div class="lv"><a href="">1 804,00лв</a></div>
                        <div class="availability" id="tooltip">В наличност<span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" href="">Към магазина ></a>
                        <div><a class="sName" href="">iStore.bg</a></div>
                     </div>
                  </div>
                  <div class="offerBody">
                     <a href="" class="aImg"><img src="image/39260.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a href="">Apple iPhone 13 128GB</a></div>
                        <div class="gar">Над 14К продукта на склад / ДДС фактури / Конкурентни цени</div>
                     </div>
                     <div class="priceeeeеee">
                        <div class="lv"><a href="">1 830,00лв</a></div>
                        <div class="availability" id="tooltip" style="color: #d02436;">Не е наличен<span class="tooltiptext">Стоката не е налична в магазина</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" href="">Към магазина ></a>
                        <div><a class="sName" href="">plesio.bg</a></div>
                     </div>
                  </div>
                  <div class="offerBody">
                     <a target="blank" href="" class="aImg"><img src="image/187983.jpg" alt=""></a>
                     <div class="rat">
                        <div class="stars">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                        <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                        <div class="info"><a href="">Данни за магазина</a></div>
                     </div>
                     <div class="name">
                        <div class="namee"><a target="blank" href="">Apple iPhone 13 128GB</a></div>
                        <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
                     </div>
                     <div class="priceeeeеe">
                        <div class="lv"><a target="blank" href="">1 852,00лв</a></div>
                        <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                     </div>
                     <div class="bttn">
                        <a class="bttnn" target="blank" href="">Към магазина ></a>
                        <div><a class="sName" target="blank" href="">ezona.net</a></div>
                     </div>
                  </div>
                  <h2>Описание, детайли - <span>Apple iPhone 13 128GB</span></h2>
                  <div class="tab">
                     <div class="left">
                        <table>
                           <tr>
                              <td>Дизайн</td>
                              <td>Touch Screen</td>
                           </tr>
                           <tr>
                              <td>SIM карта</td>
                              <td>Нено SIM и eSIM</td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Технически данни</h3>
                              </td>
                           </tr>
                           <tr>
                              <td>Процесорни ядра</td>
                              <td>6 ядра</td>
                           </tr>
                           <tr>
                              <td>Скорост на процесора</td>
                              <td>3.23 GHz</td>
                           </tr>
                           <tr>
                              <td>RAM</td>
                              <td>4 GB</td>
                           </tr>
                           <tr>
                              <td>Вътрешна памет</td>
                              <td>128 GB</td>
                           </tr>
                           <tr>
                              <td>Слот за карта</td>
                              <td>Не</td>
                           </tr>
                        </table>
                     </div>
                     <div class="right">
                        <div>Производител: Apple</div>
                        <div>Модел: iPhone 13 128GB</div>
                        <div class="charec">Характеристики:</div>
                        <div class="char">SIM Nano-SIM and/or eSIM Батерия Батерия В режим на готовност: До 19 часа (мултимедия) Възпроизвеждане на музика: До 75 часа Вид дислей Super Retina XDR OLED Размери на дисплея 6.1 inches Резолюция на дисплея 1170 x 2532 pixels Задна камера 12 MP, f/1.6, 26mm (wide), 1.7µm, dual pixel PDAF, sensor-shift stabilization (IBIS) 12 MP, f/2.4, 120 ? , 13mm (ultrawide) Предна камера 12 MP,...</div>
                     </div>
                  </div>
                  <div class="galleryHead">Галерия - <span>Apple iPhone12 128GB</span></div>
                  <div class="gallery">
                     <div class="first">
                        <div class="raw"><img class="ImgThumbnail" src="image/1141152.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"><img class="ImgThumbnail" src="image/1141155.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152675.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1141149.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/859255341.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152669.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152657.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152645.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152651.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152663.apple-iphone-13-128gb-removebg-preview.png" /></div>
                     </div>
                     <div class="second">
                        <div class="raw"><img class="ImgThumbnail" src="image/1152672.apple-iphone-13-128gb-removebg-preview (1).png" style="height: 114px !important;" /></div>
                        <div class="raw"><img class="ImgThumbnail" src="image/1152660.apple-iphone-13-128gb-removebg-preview.png" style="height: 114px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152705.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152711.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/Removal-589.png" style="height: 114px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" style="height: 112px !important; width: 141px;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1141137.apple-iphone-13-128gb-removebg-preview.png" style="height: 90px !important; width: 160px;" /></div>
                     </div>
                     <div class="modall">
                        <span class="closes">×</span>
                        <img class="modalImagee" id="img02" />
                     </div>
                     <script>
                        var modalEle = document.querySelector(".modall");
                        var modalImage = document.querySelector(".modalImagee");
                        Array.from(document.querySelectorAll(".ImgThumbnail")).forEach(item => {
                           item.addEventListener("click", event => {
                              modalEle.style.display = "block";
                              modalImage.src = event.target.src;
                           });
                        });
                        document.querySelector(".closes").addEventListener("click", () => {
                           modalEle.style.display = "none";
                        });
                     </script>
                  </div>
                  <div class="simOffers">Още подобни стоки от най-популярните</div>
                  <div class="oOffers">
                     <a href="">
                        <div class="bbox">
                           <img src="image/731721711.apple-iphone-12-pro-128gb.jpg" alt="">
                           <div class="ttext">
                              от 1 929,00лв
                           </div>
                           <div class="namme">
                              Apple iPhone 12 Pro 128GB
                           </div>
                           <div class="stars">
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star half"></span>
                           </div>
                        </div>
                     </a>
                     <a href="">
                        <div class="bbox">
                           <img src="image/733672095.apple-iphone-12-256gb.jpg" alt="">
                           <div class="ttext">
                              от 1 547,00лв
                           </div>
                           <div class="namme">
                              Apple iPhone 12 256GB
                           </div>
                           <div class="stars">
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star "></span>
                           </div>
                        </div>
                     </a>
                     <a href="">
                        <div class="bbox">
                           <img src="image/733672659.apple-iphone-12-pro-256gb.jpg" alt="">
                           <div class="ttext">
                              от 1 995,00лв
                           </div>
                           <div class="namme">
                              Apple iPhone 12 Pro 256GB
                           </div>
                           <div class="stars">
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                           </div>
                        </div>
                     </a>
                     <a href="">
                        <div class="bbox">
                           <img src="image/733672659.apple-iphone-12-pro-256gb.jpg" alt="">
                           <div class="ttext">
                              от 2 099,00лв
                           </div>
                           <div class="namme">
                              Apple iPhone 12 Pro 512GB
                           </div>
                           <div class="stars">
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star on"></span>
                              <span class="star "></span>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="panel d-none" id="two-panel">
                  <div class="r">
                     <div class="leftcol">
                        <table>
                           <tr>
                              <td>Дизайн</td>
                              <td>Touch Screen</td>
                           </tr>
                           <tr>
                              <td>SIM карта</td>
                              <td>Нено SIM и eSIM</td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Технически данни</h3>
                              </td>
                           </tr>
                           <tr>
                              <td>Процесорни ядра</td>
                              <td>6 ядра</td>
                           </tr>
                           <tr>
                              <td>Скорост на процесора</td>
                              <td>3.23 GHz</td>
                           </tr>
                           <tr>
                              <td>RAM <abbr title="Освен типа на процесора, размерът RAM има влияние върху скоростта на смартфоните. Ако RAM е повече, така може да се обработва повече временна информация, и така приложенията ще работят по-бързо."><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>4 GB</td>
                           </tr>
                           <tr>
                              <td>Вътрешна памет</td>
                              <td>128 GB</td>
                           </tr>
                           <tr>
                              <td>Слот за карта <abbr title="Освен вградената памет можете да ползвате и карта памет за съхранение на файловете в телефона, така капацитетът му може да се увеличи значително."><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>Не</td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Софтуер</h3>
                              </td>
                           </tr>
                           <tr>
                              <td class="tabRow">Операционна система<abbr title="В мобилните телефони, които притежават операционни системи, може да се инсталират различни програми и по този начин да се разширят функциите на телефона. Към момента най-популярни са системите Android и iOS"><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>iOS</td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Екран</h3>
                              </td>
                           </tr>
                           <tr>
                              <td>Размер на екрана</td>
                              <td>6.1"</td>
                           </tr>
                           <tr>
                              <td>Разделителна способност на дисплея</td>
                              <td>2532 x 1170</td>
                           </tr>
                           <tr>
                              <td class="tabRow">Технология на дисплея<abbr title="Измежду най-популярните дисплей разработки понастоящем OLED (също и вариантите P-OLED и AMOLED) се счита за върховата технология. Дисплеи тип TFT срещаме при по-евтините модели, а най-широкоразпространени са IPS дисплеите, имащи добър зрителен ъгъл и адекватно цветопредаване. За разлика от TFT и IPS типовете, OLED технологията позволява отделните пиксели да бъдат осветени поединично, с което черният цвят се получава при изключване на осветлението. Тази технология понякога се маркира различно от производителите (P-OLED, AMOLED и Super AMOLED и тн.), но по отношение на работния им принцип означават едно и също."><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>OLED</td>
                           </tr>
                           <tr>
                              <td>Честота на опресняване</td>
                              <td>60 Hz</td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Камера</h3>
                              </td>
                           </tr>
                           <tr>
                              <td>Резолюция на предната камера</td>
                              <td>12 MPx</td>
                           </tr>
                           <tr>
                              <td>Резолюция на задната камера</td>
                              <td>12 Мегапиксела</td>
                           </tr>
                           <tr>
                              <td>Резолюция на втората задна камера</td>
                              <td>12 MPx</td>
                           </tr>
                           <tr>
                              <td>Автофокус<abbr title="Камерата има вграден сензор който автоматично управлява настройката на фокуса."><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>Да</td>
                           </tr>
                           <tr>
                              <td>Вградена светкавица</td>
                              <td>Да</td>
                           </tr>
                           <tr>
                              <td>Ретина скенер<abbr title="Скенерът на ретина разпознава ретината на потребителя, намираща се в дъното на окото."><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>Не</td>
                           </tr>
                           <tr>
                              <td>ToF сензор<abbr title="Принципът на работа на сензора ToF (Time-of-flight) е сходен с този на LiDAR скенера, и служи за точно определяне на мястото на предмети. При това ToF сензорът използва единствен силен лазерен лъч, докато LiDAR скенерът работи с няколко, по-маломощни лазери, затова LiDAR скенерът се счита за по-прецизен от двата."><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>Не</td>
                           </tr>
                           <tr>
                              <td>Максимална резолюция на видео</td>
                              <td>3840 x 2160 @ 60 fps</td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Мултимедия</h3>
                              </td>
                           </tr>
                           <tr>
                              <td>MP3 плеър</td>
                              <td>Да</td>
                           </tr>
                           <tr>
                              <td>FM радио</td>
                              <td>Не</td>
                           </tr>
                           <tr>
                              <td>Видео плеър</td>
                              <td>Да</td>
                           </tr>
                           <tr>
                              <td>Интернет браузър</td>
                              <td>Да</td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Свтрзаемост</h3>
                              </td>
                           </tr>
                           <tr>
                              <td>Трансфер на данни</td>
                              <td>
                                 <div>Wi-Fi<abbr title="Wi-Fi технологията прави възможна бърза безжична интернет връзка, скоростта на която надхвърля многократно тази на останалите методи за пренос на данни."><i class="fa-regular fa-circle-question"></i></abbr></div>
                                 <div>AirDrop<abbr title="С AirDrop можете да споделите снимки, видеоклипове, уебсайтове и т.н. с други Apple устройства."><i class="fa-regular fa-circle-question"></i></abbr></div>
                                 <div>NFC<abbr title="Възможност за близка комуникация на смартфони или подобни мобилни устройства. При докосване или приближаване на устройствата (до няколко см) между тях става радиовръзка."><i class="fa-regular fa-circle-question"></i></abbr></div>
                                 <div>Bluetooth<abbr title="Технологията bluetooth пренася безжично сигнал на близки разстояния. Така можем да свържем телефона с друг такъв, с компютър, игрова конзола и тн."><i class="fa-regular fa-circle-question"></i></abbr></div>
                              </td>
                           </tr>
                           <tr>
                              <td>Изводи</td>
                              <td>Lightning конектор<abbr title="Apple разработиха Lightning извода замествайки предишния 30 пинов конектор. След iPhone 5 повечето нови модели разполагат с този тип извод."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           </tr>
                           <tr>
                              <td>Сензори</td>
                              <td>
                                 <div>Акселерометър</div>
                                 <div>Жироскоп</div>
                                 <div>Сензор за близост</div>
                                 Барометър
                                 <div></div>
                              </td>
                           </tr>
                           <tr>
                              <td class="hed" colspan="2">
                                 <h3>Батерия</h3>
                              </td>
                           </tr>
                           <tr>
                              <td>Капацитет на акумулатора</td>
                              <td>3240 mAh</td>
                           </tr>
                           <tr>
                              <td>Мощност на зареждане с кабел<abbr title="При по-голяма мощност на зареждане, апаратът ще се зареди по-бързо. Посочената тук стойност дава най-голямата мощност, за постигане на която при някои марки е необходимо да се използва специално пригодено зарядно."><i class="fa-regular fa-circle-question"></i></abbr></td>
                              <td>20 W</td>
                           </tr>
                           <tr>
                              <td>Безжично зареждане</td>
                              <td>Да</td>
                           </tr>
                           <tr>
                              <td>Мощност на безжично зареждане</td>
                              <td>15 W</td>
                           </tr>
                        </table>
                        <div class="bet"></div>
                     </div>
                     <div class="rightcol">
                        <div class="t">Производител: Apple</div>
                        <div class="tt">Модел: iPhone 13 128GB</div>
                        <div class="ttt">Характеристики:</div>
                        <ul class="firstUL">
                           <li>SIM Nano-SIM and/or eSIM</li>
                           <li>Батерия</li>
                           <li>Батерия В режим на готовност: До 19 часа (мултимедия) Възпроизвеждане на музика: До 75 часа</li>
                           <li>Вид дислей Super Retina XDR OLED</li>
                           <li>Размери на дисплея 6.1 inches</li>
                           <li>Резолюция на дисплея 1170 x 2532 pixels</li>
                           <li>Задна камера 12 MP, f/1.6, 26mm (wide), 1.7µm, dual pixel PDAF, sensor-shift stabilization (IBIS) 12 MP, f/2.4, 120 ? , 13mm (ultrawide)</li>
                           <li>Предна камера 12 MP, f/2.2, 23mm (wide), 1/3.6"</li>
                           <li>Основна памет 128GB</li>
                           <li>RAM памет 4GB</li>
                           <li>Процесор Apple A15 Bionic (5 nm)</li>
                           <li>Размери на устройството 146.7 x 71.5 x 7.7 mm</li>
                           <li>Bluetooth връзка 5.0, A2DP, LE</li>
                           <li>GPRS връзка Yes, with A-GPS, GLONASS, GALILEO, BDS, QZSS</li>
                           <li>Wi-Fi връзка Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</li>
                           <li>Тегло на устройството 174 g</li>
                        </ul>
                        <div class="gallHed">
                           Галерия
                        </div>
                        <div class="gallery" style="margin: 0 0 0 -10px;">
                           <div class="first">
                              <div class="raw"><img class="ImgThumbnaill" src="image/1141152.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                              <div class="raw"><img class="ImgThumbnaill" src="image/1141155.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152675.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1141149.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/859255341.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                           </div>
                           <div class="first">
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152669.apple-iphone-13-128gb-removebg-preview.png" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152657.apple-iphone-13-128gb-removebg-preview.png" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152645.apple-iphone-13-128gb-removebg-preview.png" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152651.apple-iphone-13-128gb-removebg-preview.png" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152663.apple-iphone-13-128gb-removebg-preview.png" /></div>
                           </div>
                           <div class="second">
                              <div class="raw"><img class="ImgThumbnaill" src="image/1152672.apple-iphone-13-128gb-removebg-preview (1).png" style="height: 114px !important;" /></div>
                              <div class="raw"><img class="ImgThumbnaill" src="image/1152660.apple-iphone-13-128gb-removebg-preview.png" style="height: 114px !important;" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152705.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/1152711.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                              <div class="raw"> <img class="ImgThumbnaill" src="image/Removal-589.png" style="height: 114px !important;" /></div>
                           </div>
                           <div class="second">
                              <div class="raw"> <img class="ImgThumbnail" src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" style="height: 112px !important; width: 141px;" /></div>
                              <div class="raw"> <img class="ImgThumbnail" src="image/1141137.apple-iphone-13-128gb-removebg-preview.png" style="height: 90px !important; width: 160px;" /></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="panel d-none" id="three-panel">
                  <div class="commHead">Напишете коментар за продукта <span>iPhone 13</span></div>


                  <div class="this">
                     <form action="insert.php" method="post">
                        <div class="firstt"><label for="name" id="name" class="label">Ник име: <span>(този ник, ще излиза като име над коментара Ви)</span></label></div>
                        <input type="text" name="name" placeholder="Име" value="<?php echo $name ?>" required>
                        <div><textarea name="comment" id="" cols="50" rows="10" placeholder="Вашият коментар" required></textarea></div>
                        <button class="but" name="submit">Добави коментар</button>
                     </form>
                     <div class="sub">
                        <li>Напишете тук общия си коментар, за да знаят останалите кои продукти си струват парите!</li>
                        <li>Избягвайте нецензурните изрази и копирането от други сайтове, дайте мнение от личен опит!</li>
                        <li>Запишете, препоръчвате ли продукта или не, какви забележки имате по употребата му, за какво да внимават другите ако си купуват и тн.</li>
                     </div>
                  </div>
                  <div class="commSection">
                     <?php
                     include  'database.php';
                     $sql = "SELECT * FROM comments";
                     $result = $link->query($sql);
                     if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                           $time = $row['time'];
                           $timee = substr($time, 0, 5);
                     ?>
                           <div class="boxxx">
                              <div class="nammee"><span>Име: </span><?php echo $row['name']; ?>: <?php echo $row['date'];
                                                                                                   echo ' ' . $timee ?></div>
                              <div class="bo"></div>
                              <div class="commText">- <?php echo $row['comment']; ?></div>
                           </div>
                     <?php
                        }
                     }
                     mysqli_close($link);
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="Paris" class="tabcontent">
         <div class="tabbb">
            <button class="tablinkss activex" onclick="btn(event, 'first')">Оферти с цени</button>
            <button class="tablinkss" onclick="btn(event, 'second')" style="margin-left: -5px;">Описание</button>
            <button class="tablinkss" onclick="btn(event, 'third')" style="margin-left: -5px;">Мнения</button>
         </div>
         <div id="first" class="tabcontentc" style="display: block;">
            <div class="offer">Оферти за <span>Apple iPhone 13 256GB (8 оферти)</span></div>
            <div class="offerBody">
               <a target="blank" href="https://allgsm.eu/apple-iphone-13-256gb" style="margin-right: 7px;" class="aImg"><img src="image/134489.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star "></span>
                  </div>
                  <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a target="blank" href="https://allgsm.eu/apple-iphone-13-256gb">Apple iPhone 13 256GB</a></div>
                  <div class="gar">Нови, Оригинални, Запечатани с 36 Месеца Гаранция | Лизинг</div>
               </div>
               <div class="pricee">
                  <div class="lv"><a target="blank" href="https://allgsm.eu/apple-iphone-13-256gb">1 750,00лв</a></div>
                  <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" target="blank" href="https://allgsm.eu/apple-iphone-13-256gb">Към магазина ></a>
                  <div><a class="sName" target="blank" href="https://allgsm.eu/apple-iphone-13-256gb">allgsm.eu</a></div>
               </div>
            </div>
            <div class="offerBody">
               <a href="" class="aImg"><img src="image/78810.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a href="">Apple iPhone 13 256GB</a></div>
                  <div class="gar">Оригинален продукт! Гаранция! Пълен комплект!</div>
               </div>
               <div class="priceee">
                  <div class="lv"><a href="">1 732,00лв</a></div>
                  <div class="availability" id="tooltip" style="color: #d02436;">Не е наличен <span class="tooltiptext">Стоката не е налична в магазина</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" href="">Към магазина ></a>
                  <div><a class="sName" href="">mobiland.bg</a></div>
               </div>
            </div>
            <div class="offerBody">
               <a href="" class="aImg"><img src="image/89147.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </div>
                  <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a href="">Apple iPhone 13 256GB</a></div>
                  <div class="gar">Всички стоки са с 36 месеца Гаранция! Безплатна Доставка !</div>
               </div>
               <div class="priceeee">
                  <div class="lv"><a href="">1 758,00лв</a></div>
                  <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" href="">Към магазина ></a>
                  <div><a class="sName" href="">mobilepoint.bg</a></div>
               </div>
            </div>
            <div class="offerBody">
               <a href="" class="aImg"><img src="image/101515.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                  </div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a href="">Apple iPhone 13 256GB</a></div>
                  <div class="gar"></div>
               </div>
               <div class="priceeeeе">
                  <div class="lv"><a href="">1 781,00лв</a></div>
                  <div class="availability" id="tooltip">В наличност<span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" href="">Към магазина ></a>
                  <div><a class="sName" href="">shop.datacom.bg</a></div>
               </div>
            </div>
            <div class="offerBody">
               <a target="blank" href="" class="aImg"><img src="image/104923.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </div>
                  <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a target="blank" href="">Apple iPhone 13 256GB</a></div>
                  <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
               </div>
               <div class="priceeeeеe">
                  <div class="lv"><a target="blank" href="">1 820,00лв</a></div>
                  <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" target="blank" href="">Към магазина ></a>
                  <div><a class="sName" target="blank" href="">vsichkistoki.com</a></div>
               </div>
            </div>
            <div class="offerBody">
               <a href="" class="aImg"><img src="image/199809.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </div>
                  <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a href="">Apple iPhone 13 256GB</a></div>
                  <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
               </div>
               <div class="priceeeeеe">
                  <div class="lv"><a href="">1 858,00лв</a></div>
                  <div class="availability" id="tooltip">В наличност<span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" href="">Към магазина ></a>
                  <div><a class="sName" href="">iStore.bg</a></div>
               </div>
            </div>
            <div class="offerBody">
               <a href="" class="aImg"><img src="image/39260.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                  </div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a href="">Apple iPhone 13 256GB</a></div>
                  <div class="gar">Над 14К продукта на склад / ДДС фактури / Конкурентни цени</div>
               </div>
               <div class="priceeeeеee">
                  <div class="lv"><a href="">1 903,00лв</a></div>
                  <div class="availability" id="tooltip" style="color: #d02436;">Не е наличен<span class="tooltiptext">Стоката не е налична в магазина</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" href="">Към магазина ></a>
                  <div><a class="sName" href="">plesio.bg</a></div>
               </div>
            </div>
            <div class="offerBody">
               <a target="blank" href="" class="aImg"><img src="image/187983.jpg" alt=""></a>
               <div class="rat">
                  <div class="stars">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                  </div>
                  <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                  <div class="info"><a href="">Данни за магазина</a></div>
               </div>
               <div class="name">
                  <div class="namee"><a target="blank" href="">Apple iPhone 13 256GB</a></div>
                  <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
               </div>
               <div class="priceeeeеe">
                  <div class="lv"><a target="blank" href="">1 909,00лв</a></div>
                  <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
               </div>
               <div class="bttn">
                  <a class="bttnn" target="blank" href="">Към магазина ></a>
                  <div><a class="sName" target="blank" href="">ezona.net</a></div>
               </div>
            </div>
            <h2>Описание, детайли - <span>Apple iPhone 13 256GB</span></h2>
            <div class="tab">
               <div class="left">
                  <table>
                     <tr>
                        <td>Дизайн</td>
                        <td>Touch Screen</td>
                     </tr>
                     <tr>
                        <td>SIM карта</td>
                        <td>Нено SIM и eSIM</td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Технически данни</h3>
                        </td>
                     </tr>
                     <tr>
                        <td>Процесорни ядра</td>
                        <td>6 ядра</td>
                     </tr>
                     <tr>
                        <td>Скорост на процесора</td>
                        <td>3.23 GHz</td>
                     </tr>
                     <tr>
                        <td>RAM</td>
                        <td>4 GB</td>
                     </tr>
                     <tr>
                        <td>Вътрешна памет</td>
                        <td>256 GB</td>
                     </tr>
                     <tr>
                        <td>Слот за карта</td>
                        <td>Не</td>
                     </tr>
                  </table>
               </div>
               <div class="right">
                  <div>Производител: Apple</div>
                  <div>Модел: iPhone 13 256GB</div>
                  <div class="charec">Характеристики:</div>
                  <div class="char">SIM Nano-SIM and/or eSIM Батерия Батерия В режим на готовност: До 19 часа (мултимедия) Възпроизвеждане на музика: До 75 часа Вид дислей Super Retina XDR OLED Размери на дисплея 6.1 inches Резолюция на дисплея 1170 x 2532 pixels Задна камера 12 MP, f/1.6, 26mm (wide), 1.7µm, dual pixel PDAF, sensor-shift stabilization (IBIS) 12 MP, f/2.4, 120 ? , 13mm (ultrawide) Предна камера 12 MP,...</div>
               </div>
            </div>
            <div class="galleryHead">Галерия - <span>Apple iPhone12 256GB</span></div>
            <div class="gallery">
               <div class="first">
                  <div class="raw"><img class="ImgThumbnail" src="image/1141152.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                  <div class="raw"><img class="ImgThumbnail" src="image/1141155.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152675.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1141149.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/859255341.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152669.apple-iphone-13-128gb-removebg-preview.png" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152657.apple-iphone-13-128gb-removebg-preview.png" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152645.apple-iphone-13-128gb-removebg-preview.png" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152651.apple-iphone-13-128gb-removebg-preview.png" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152663.apple-iphone-13-128gb-removebg-preview.png" /></div>
               </div>
               <div class="second">
                  <div class="raw"><img class="ImgThumbnail" src="image/1152672.apple-iphone-13-128gb-removebg-preview (1).png" style="height: 114px !important;" /></div>
                  <div class="raw"><img class="ImgThumbnail" src="image/1152660.apple-iphone-13-128gb-removebg-preview.png" style="height: 114px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152705.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152711.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/Removal-589.png" style="height: 114px !important;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" style="height: 112px !important; width: 141px;" /></div>
                  <div class="raw"> <img class="ImgThumbnail" src="image/1141137.apple-iphone-13-128gb-removebg-preview.png" style="height: 90px !important; width: 160px;" /></div>
               </div>
               <div class="modall">
                  <span class="closes">×</span>
                  <img class="modalImagee" id="img02" />
               </div>
               <script>
                  var modalEle = document.querySelector(".modall");
                  var modalImage = document.querySelector(".modalImagee");
                  Array.from(document.querySelectorAll(".ImgThumbnail")).forEach(item => {
                     item.addEventListener("click", event => {
                        modalEle.style.display = "block";
                        modalImage.src = event.target.src;
                     });
                  });
                  document.querySelector(".closes").addEventListener("click", () => {
                     modalEle.style.display = "none";
                  });
               </script>
            </div>
            <div class="simOffers">Още подобни стоки от най-популярните</div>
            <div class="oOffers">
               <a href="">
                  <div class="bbox">
                     <img src="image/731721711.apple-iphone-12-pro-128gb.jpg" alt="">
                     <div class="ttext">
                        от 1 929,00лв
                     </div>
                     <div class="namme">
                        Apple iPhone 12 Pro 128GB
                     </div>
                     <div class="stars">
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star half"></span>
                     </div>
                  </div>
               </a>
               <a href="">
                  <div class="bbox">
                     <img src="image/733672095.apple-iphone-12-256gb.jpg" alt="">
                     <div class="ttext">
                        от 1 547,00лв
                     </div>
                     <div class="namme">
                        Apple iPhone 12 256GB
                     </div>
                     <div class="stars">
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star "></span>
                     </div>
                  </div>
               </a>
               <a href="">
                  <div class="bbox">
                     <img src="image/733672659.apple-iphone-12-pro-256gb.jpg" alt="">
                     <div class="ttext">
                        от 1 995,00лв
                     </div>
                     <div class="namme">
                        Apple iPhone 12 Pro 256GB
                     </div>
                     <div class="stars">
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                     </div>
                  </div>
               </a>
               <a href="">
                  <div class="bbox">
                     <img src="image/733672659.apple-iphone-12-pro-256gb.jpg" alt="">
                     <div class="ttext">
                        от 2 099,00лв
                     </div>
                     <div class="namme">
                        Apple iPhone 12 Pro 512GB
                     </div>
                     <div class="stars">
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star "></span>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div id="second" class="tabcontentc">
            <div class="r">
               <div class="leftcol">
                  <table>
                     <tr>
                        <td>Дизайн</td>
                        <td>Touch Screen</td>
                     </tr>
                     <tr>
                        <td>SIM карта</td>
                        <td>Нено SIM и eSIM</td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Технически данни</h3>
                        </td>
                     </tr>
                     <tr>
                        <td>Процесорни ядра</td>
                        <td>6 ядра</td>
                     </tr>
                     <tr>
                        <td>Скорост на процесора</td>
                        <td>3.23 GHz</td>
                     </tr>
                     <tr>
                        <td>RAM <abbr title="Освен типа на процесора, размерът RAM има влияние върху скоростта на смартфоните. Ако RAM е повече, така може да се обработва повече временна информация, и така приложенията ще работят по-бързо."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>4 GB</td>
                     </tr>
                     <tr>
                        <td>Вътрешна памет</td>
                        <td>256 GB</td>
                     </tr>
                     <tr>
                        <td>Слот за карта <abbr title="Освен вградената памет можете да ползвате и карта памет за съхранение на файловете в телефона, така капацитетът му може да се увеличи значително."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>Не</td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Софтуер</h3>
                        </td>
                     </tr>
                     <tr>
                        <td class="tabRow">Операционна система<abbr title="В мобилните телефони, които притежават операционни системи, може да се инсталират различни програми и по този начин да се разширят функциите на телефона. Към момента най-популярни са системите Android и iOS"><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>iOS</td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Екран</h3>
                        </td>
                     </tr>
                     <tr>
                        <td>Размер на екрана</td>
                        <td>6.1"</td>
                     </tr>
                     <tr>
                        <td>Разделителна способност на дисплея</td>
                        <td>2532 x 1170</td>
                     </tr>
                     <tr>
                        <td class="tabRow">Технология на дисплея<abbr title="Измежду най-популярните дисплей разработки понастоящем OLED (също и вариантите P-OLED и AMOLED) се счита за върховата технология. Дисплеи тип TFT срещаме при по-евтините модели, а най-широкоразпространени са IPS дисплеите, имащи добър зрителен ъгъл и адекватно цветопредаване. За разлика от TFT и IPS типовете, OLED технологията позволява отделните пиксели да бъдат осветени поединично, с което черният цвят се получава при изключване на осветлението. Тази технология понякога се маркира различно от производителите (P-OLED, AMOLED и Super AMOLED и тн.), но по отношение на работния им принцип означават едно и също."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>OLED</td>
                     </tr>
                     <tr>
                        <td>Честота на опресняване</td>
                        <td>60 Hz</td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Камера</h3>
                        </td>
                     </tr>
                     <tr>
                        <td>Резолюция на предната камера</td>
                        <td>12 MPx</td>
                     </tr>
                     <tr>
                        <td>Резолюция на задната камера</td>
                        <td>12 Мегапиксела</td>
                     </tr>
                     <tr>
                        <td>Резолюция на втората задна камера</td>
                        <td>12 MPx</td>
                     </tr>
                     <tr>
                        <td>Автофокус<abbr title="Камерата има вграден сензор който автоматично управлява настройката на фокуса."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>Да</td>
                     </tr>
                     <tr>
                        <td>Вградена светкавица</td>
                        <td>Да</td>
                     </tr>
                     <tr>
                        <td>Ретина скенер<abbr title="Скенерът на ретина разпознава ретината на потребителя, намираща се в дъното на окото."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>Не</td>
                     </tr>
                     <tr>
                        <td>ToF сензор<abbr title="Принципът на работа на сензора ToF (Time-of-flight) е сходен с този на LiDAR скенера, и служи за точно определяне на мястото на предмети. При това ToF сензорът използва единствен силен лазерен лъч, докато LiDAR скенерът работи с няколко, по-маломощни лазери, затова LiDAR скенерът се счита за по-прецизен от двата."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>Не</td>
                     </tr>
                     <tr>
                        <td>Максимална резолюция на видео</td>
                        <td>3840 x 2160 @ 60 fps</td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Мултимедия</h3>
                        </td>
                     </tr>
                     <tr>
                        <td>MP3 плеър</td>
                        <td>Да</td>
                     </tr>
                     <tr>
                        <td>FM радио</td>
                        <td>Не</td>
                     </tr>
                     <tr>
                        <td>Видео плеър</td>
                        <td>Да</td>
                     </tr>
                     <tr>
                        <td>Интернет браузър</td>
                        <td>Да</td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Свтрзаемост</h3>
                        </td>
                     </tr>
                     <tr>
                        <td>Трансфер на данни</td>
                        <td>
                           <div>Wi-Fi<abbr title="Wi-Fi технологията прави възможна бърза безжична интернет връзка, скоростта на която надхвърля многократно тази на останалите методи за пренос на данни."><i class="fa-regular fa-circle-question"></i></abbr></div>
                           <div>AirDrop<abbr title="С AirDrop можете да споделите снимки, видеоклипове, уебсайтове и т.н. с други Apple устройства."><i class="fa-regular fa-circle-question"></i></abbr></div>
                           <div>NFC<abbr title="Възможност за близка комуникация на смартфони или подобни мобилни устройства. При докосване или приближаване на устройствата (до няколко см) между тях става радиовръзка."><i class="fa-regular fa-circle-question"></i></abbr></div>
                           <div>Bluetooth<abbr title="Технологията bluetooth пренася безжично сигнал на близки разстояния. Така можем да свържем телефона с друг такъв, с компютър, игрова конзола и тн."><i class="fa-regular fa-circle-question"></i></abbr></div>
                        </td>
                     </tr>
                     <tr>
                        <td>Изводи</td>
                        <td>Lightning конектор<abbr title="Apple разработиха Lightning извода замествайки предишния 30 пинов конектор. След iPhone 5 повечето нови модели разполагат с този тип извод."><i class="fa-regular fa-circle-question"></i></abbr></td>
                     </tr>
                     <tr>
                        <td>Сензори</td>
                        <td>
                           <div>Акселерометър</div>
                           <div>Жироскоп</div>
                           <div>Сензор за близост</div>
                           Барометър
                           <div></div>
                        </td>
                     </tr>
                     <tr>
                        <td class="hed" colspan="2">
                           <h3>Батерия</h3>
                        </td>
                     </tr>
                     <tr>
                        <td>Капацитет на акумулатора</td>
                        <td>3240 mAh</td>
                     </tr>
                     <tr>
                        <td>Мощност на зареждане с кабел<abbr title="При по-голяма мощност на зареждане, апаратът ще се зареди по-бързо. Посочената тук стойност дава най-голямата мощност, за постигане на която при някои марки е необходимо да се използва специално пригодено зарядно."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        <td>20 W</td>
                     </tr>
                     <tr>
                        <td>Безжично зареждане</td>
                        <td>Да</td>
                     </tr>
                     <tr>
                        <td>Мощност на безжично зареждане</td>
                        <td>15 W</td>
                     </tr>
                  </table>
                  <div class="bet"></div>
               </div>
               <div class="rightcol">
                  <div class="t">Производител: Apple</div>
                  <div class="tt">Модел: iPhone 13 256GB</div>
                  <div class="ttt">Характеристики:</div>
                  <ul class="firstUL">
                     <li>SIM Nano-SIM and/or eSIM</li>
                     <li>Батерия</li>
                     <li>Батерия В режим на готовност: До 19 часа (мултимедия) Възпроизвеждане на музика: До 75 часа</li>
                     <li>Вид дислей Super Retina XDR OLED</li>
                     <li>Размери на дисплея 6.1 inches</li>
                     <li>Резолюция на дисплея 1170 x 2532 pixels</li>
                     <li>Задна камера 12 MP, f/1.6, 26mm (wide), 1.7µm, dual pixel PDAF, sensor-shift stabilization (IBIS) 12 MP, f/2.4, 120 ? , 13mm (ultrawide)</li>
                     <li>Предна камера 12 MP, f/2.2, 23mm (wide), 1/3.6"</li>
                     <li>Основна памет 256GB</li>
                     <li>RAM памет 4GB</li>
                     <li>Процесор Apple A15 Bionic (5 nm)</li>
                     <li>Размери на устройството 146.7 x 71.5 x 7.7 mm</li>
                     <li>Bluetooth връзка 5.0, A2DP, LE</li>
                     <li>GPRS връзка Yes, with A-GPS, GLONASS, GALILEO, BDS, QZSS</li>
                     <li>Wi-Fi връзка Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</li>
                     <li>Тегло на устройството 174 g</li>
                  </ul>
                  <div class="gallHed">
                     Галерия
                  </div>
                  <div class="gallery" style="margin: 0 0 0 -10px;">
                     <div class="first">
                        <div class="raw"><img class="ImgThumbnaill" src="image/1141152.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"><img class="ImgThumbnaill" src="image/1141155.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152675.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1141149.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/859255341.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                     </div>
                     <div class="first">
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152669.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152657.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152645.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152651.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152663.apple-iphone-13-128gb-removebg-preview.png" /></div>
                     </div>
                     <div class="second">
                        <div class="raw"><img class="ImgThumbnaill" src="image/1152672.apple-iphone-13-128gb-removebg-preview (1).png" style="height: 114px !important;" /></div>
                        <div class="raw"><img class="ImgThumbnaill" src="image/1152660.apple-iphone-13-128gb-removebg-preview.png" style="height: 114px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152705.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/1152711.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                        <div class="raw"> <img class="ImgThumbnaill" src="image/Removal-589.png" style="height: 114px !important;" /></div>
                     </div>
                     <div class="second">
                        <div class="raw"> <img class="ImgThumbnail" src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" style="height: 112px !important; width: 141px;" /></div>
                        <div class="raw"> <img class="ImgThumbnail" src="image/1141137.apple-iphone-13-128gb-removebg-preview.png" style="height: 90px !important; width: 160px;" /></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="third" class="tabcontentc">
            <div class="commHead">Напишете коментар за продукта <span>iPhone 13</span></div>

            <div class="this">
               <form action="insert.php" method="post">
                  <div class="firstt"><label for="name" id="name" class="label">Ник име: <span>(този ник, ще излиза като име над коментара Ви)</span></label></div>
                  <input type="text" name="name" placeholder="Име" required>
                  <div><textarea name="comment" id="" cols="50" rows="10" placeholder="Вашият коментар" required></textarea></div>
                  <button class="but" name="submit">Добави коментар</button>
               </form>
               <div class="sub">
                  <li>Напишете тук общия си коментар, за да знаят останалите кои продукти си струват парите!</li>
                  <li>Избягвайте нецензурните изрази и копирането от други сайтове, дайте мнение от личен опит!</li>
                  <li>Запишете, препоръчвате ли продукта или не, какви забележки имате по употребата му, за какво да внимават другите ако си купуват и тн.</li>
               </div>
            </div>
            <div class="commSection">
               <?php
               include  'database.php';
               $sql = "SELECT * FROM comments";
               $result = $link->query($sql);
               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
               ?>
                     <div class="boxxx">
                        <div class="nammee"><span>Име: </span><?php echo $row['name']; ?>: <?php $date = date('d-m-y');
                                                                                             echo $date; ?></div>
                        <div class="bo"></div>
                        <div class="commText">- <?php echo $row['comment']; ?></div>
                     </div>
               <?php
                  }
               }
               mysqli_close($link);
               ?>
            </div>
         </div>
         <script>
            function btn(evt, bat) {
               var i, tabcontentf, tablinksd;
               tabcontentf = document.getElementsByClassName("tabcontentc");
               for (i = 0; i < tabcontentf.length; i++) {
                  tabcontentf[i].style.display = "none";
               }
               tablinksd = document.getElementsByClassName("tablinkss");
               for (i = 0; i < tablinksd.length; i++) {
                  tablinksd[i].className = tablinksd[i].className.replace(" activex", "");
               }
               document.getElementById(bat).style.display = "block";
               evt.currentTarget.className += " activex";
            }
         </script>
      </div>
      <div id="Tokyo" class="tabcontent">
         <div class="tabse">
            <input type="radio" name="tabs" id="tabone" checked="checked">
            <label for="tabone">Оферти с цени</label>
            <div class="tabw">
               <div class="offer">Оферти за <span>Apple iPhone 13 512GB (8 оферти)</span></div>
               <div class="offerBody">
                  <a target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb" class="aImg"><img src="image/167163.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     </div>
                     <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">Apple iPhone 13 512GB</a></div>
                     <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция | Лизинг</div>
                  </div>
                  <div class="pricee">
                     <div class="lv"><a target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">2 040,00лв</a></div>
                     <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">Към магазина ></a>
                     <div><a class="sName" target="blank" href="https://www.buybest.bg/apple-iphone-13-128gb">buybest.bg</a></div>
                  </div>
               </div>
               <div class="offerBody">
                  <a href="" class="aImg"><img src="image/78810.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                     </div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a href="">Apple iPhone 13 512GB</a></div>
                     <div class="gar">Оригинален продукт! Гаранция! Пълен комплект!</div>
                  </div>
                  <div class="priceee">
                     <div class="lv"><a href="">2 086,00лв</a></div>
                     <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" href="">Към магазина ></a>
                     <div><a class="sName" href="">mobiland.bg</a></div>
                  </div>
               </div>
               <div class="offerBody">
                  <a href="" class="aImg"><img src="image/89147.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     </div>
                     <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a href="">Apple iPhone 13 512GB</a></div>
                     <div class="gar">Всички стоки са с 36 месеца Гаранция! Безплатна Доставка !</div>
                  </div>
                  <div class="priceeee">
                     <div class="lv"><a href="">2 090,00лв</a></div>
                     <div class="availability" id="tooltip" style="color: #d02436;">Не е наличен <span class="tooltiptext">Стоката не е налична в магазина</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" href="">Към магазина ></a>
                     <div><a class="sName" href="">mobilepoint.bg</a></div>
                  </div>
               </div>
               <div class="offerBody">
                  <a href="" class="aImg"><img src="image/101515.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                     </div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a href="">Apple iPhone 13 512GB</a></div>
                     <div class="gar"></div>
                  </div>
                  <div class="priceeeeе">
                     <div class="lv"><a href="">2 123,00лв</a></div>
                     <div class="availability" id="tooltip">В наличност<span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" href="">Към магазина ></a>
                     <div><a class="sName" href="">shop.datacom.bg</a></div>
                  </div>
               </div>
               <div class="offerBody">
                  <a target="blank" href="" class="aImg"><img src="image/28641.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     </div>
                     <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a target="blank" href="">Apple iPhone 13 512GB</a></div>
                     <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
                  </div>
                  <div class="priceeeeеe">
                     <div class="lv"><a target="blank" href="">2 130,00лв</a></div>
                     <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" target="blank" href="">Към магазина ></a>
                     <div><a class="sName" target="blank" href="">ozone.bg</a></div>
                  </div>
               </div>
               <div class="offerBody">
                  <a href="" class="aImg"><img src="image/199809.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                     </div>
                     <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a href="">Apple iPhone 13 512GB</a></div>
                     <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
                  </div>
                  <div class="priceeeeеe">
                     <div class="lv"><a href="">2 195,00лв</a></div>
                     <div class="availability" id="tooltip">В наличност<span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" href="">Към магазина ></a>
                     <div><a class="sName" href="">iStore.bg</a></div>
                  </div>
               </div>
               <div class="offerBody">
                  <a href="" class="aImg"><img src="image/39260.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     </div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a href="">Apple iPhone 13 512GB</a></div>
                     <div class="gar">Над 14К продукта на склад / ДДС фактури / Конкурентни цени</div>
                  </div>
                  <div class="priceeeeеee">
                     <div class="lv"><a href="">2 209,00лв</a></div>
                     <div class="availability" id="tooltip" style="color: #d02436;">Не е наличен<span class="tooltiptext">Стоката не е налична в магазина</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" href="">Към магазина ></a>
                     <div><a class="sName" href="">plesio.bg</a></div>
                  </div>
               </div>
               <div class="offerBody">
                  <a target="blank" href="" class="aImg"><img src="image/187983.jpg" alt=""></a>
                  <div class="rat">
                     <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     </div>
                     <div id="tooltip"><img src="image/well-flat-90x18.png" alt=""><span class="tooltiptext">Магазинът е награден с тази титла според клиентските отзиви след реална покупка там.</span></div>
                     <div class="info"><a href="">Данни за магазина</a></div>
                  </div>
                  <div class="name">
                     <div class="namee"><a target="blank" href="">Apple iPhone 13 512GB</a></div>
                     <div class="gar">Нови, Оригинални, Запечатани с 24 Месеца Гаранция</div>
                  </div>
                  <div class="priceeeeеe">
                     <div class="lv"><a target="blank" href="">2 213,00лв</a></div>
                     <div class="availability" id="tooltip">В наличност <span class="tooltiptext">Стоката е налична. Магазинът може да я достави днес или на следващия работен ден.</span></div>
                  </div>
                  <div class="bttn">
                     <a class="bttnn" target="blank" href="">Към магазина ></a>
                     <div><a class="sName" target="blank" href="">ezona.net</a></div>
                  </div>
               </div>
               <h2>Описание, детайли - <span>Apple iPhone 13 512GB</span></h2>
               <div class="tab">
                  <div class="left">
                     <table>
                        <tr>
                           <td>Дизайн</td>
                           <td>Touch Screen</td>
                        </tr>
                        <tr>
                           <td>SIM карта</td>
                           <td>Нено SIM и eSIM</td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Технически данни</h3>
                           </td>
                        </tr>
                        <tr>
                           <td>Процесорни ядра</td>
                           <td>6 ядра</td>
                        </tr>
                        <tr>
                           <td>Скорост на процесора</td>
                           <td>3.23 GHz</td>
                        </tr>
                        <tr>
                           <td>RAM</td>
                           <td>4 GB</td>
                        </tr>
                        <tr>
                           <td>Вътрешна памет</td>
                           <td>512 GB</td>
                        </tr>
                        <tr>
                           <td>Слот за карта</td>
                           <td>Не</td>
                        </tr>
                     </table>
                  </div>
                  <div class="right">
                     <div>Производител: Apple</div>
                     <div>Модел: iPhone 13 512GB</div>
                     <div class="charec">Характеристики:</div>
                     <div class="char">SIM Nano-SIM and/or eSIM Батерия Батерия В режим на готовност: До 19 часа (мултимедия) Възпроизвеждане на музика: До 75 часа Вид дислей Super Retina XDR OLED Размери на дисплея 6.1 inches Резолюция на дисплея 1170 x 2532 pixels Задна камера 12 MP, f/1.6, 26mm (wide), 1.7µm, dual pixel PDAF, sensor-shift stabilization (IBIS) 12 MP, f/2.4, 120 ? , 13mm (ultrawide) Предна камера 12 MP,...</div>
                  </div>
               </div>
               <div class="galleryHead">Галерия - <span>Apple iPhone12 512GB</span></div>
               <div class="gallery">
                  <div class="first">
                     <div class="raw"><img class="ImgThumbnail" src="image/1141152.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                     <div class="raw"><img class="ImgThumbnail" src="image/1141155.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152675.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1141149.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/859255341.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152669.apple-iphone-13-128gb-removebg-preview.png" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152657.apple-iphone-13-128gb-removebg-preview.png" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152645.apple-iphone-13-128gb-removebg-preview.png" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152651.apple-iphone-13-128gb-removebg-preview.png" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152663.apple-iphone-13-128gb-removebg-preview.png" /></div>
                  </div>
                  <div class="second">
                     <div class="raw"><img class="ImgThumbnail" src="image/1152672.apple-iphone-13-128gb-removebg-preview (1).png" style="height: 114px !important;" /></div>
                     <div class="raw"><img class="ImgThumbnail" src="image/1152660.apple-iphone-13-128gb-removebg-preview.png" style="height: 114px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152705.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152711.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/Removal-589.png" style="height: 114px !important;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" style="height: 112px !important; width: 141px;" /></div>
                     <div class="raw"> <img class="ImgThumbnail" src="image/1141137.apple-iphone-13-128gb-removebg-preview.png" style="height: 90px !important; width: 160px;" /></div>
                  </div>
                  <div class="modall">
                     <span class="closes">×</span>
                     <img class="modalImagee" id="img02" />
                  </div>
                  <script>
                     var modalEle = document.querySelector(".modall");
                     var modalImage = document.querySelector(".modalImagee");
                     Array.from(document.querySelectorAll(".ImgThumbnail")).forEach(item => {
                        item.addEventListener("click", event => {
                           modalEle.style.display = "block";
                           modalImage.src = event.target.src;
                        });
                     });
                     document.querySelector(".closes").addEventListener("click", () => {
                        modalEle.style.display = "none";
                     });
                  </script>
               </div>
               <div class="simOffers">Още подобни стоки от най-популярните</div>
               <div class="oOffers">
                  <a href="">
                     <div class="bbox">
                        <img src="image/731721711.apple-iphone-12-pro-128gb.jpg" alt="">
                        <div class="ttext">
                           от 1 929,00лв
                        </div>
                        <div class="namme">
                           Apple iPhone 12 Pro 128GB
                        </div>
                        <div class="stars">
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star half"></span>
                        </div>
                     </div>
                  </a>
                  <a href="">
                     <div class="bbox">
                        <img src="image/733672095.apple-iphone-12-256gb.jpg" alt="">
                        <div class="ttext">
                           от 1 547,00лв
                        </div>
                        <div class="namme">
                           Apple iPhone 12 256GB
                        </div>
                        <div class="stars">
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star "></span>
                        </div>
                     </div>
                  </a>
                  <a href="">
                     <div class="bbox">
                        <img src="image/733672659.apple-iphone-12-pro-256gb.jpg" alt="">
                        <div class="ttext">
                           от 1 995,00лв
                        </div>
                        <div class="namme">
                           Apple iPhone 12 Pro 256GB
                        </div>
                        <div class="stars">
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                        </div>
                     </div>
                  </a>
                  <a href="">
                     <div class="bbox">
                        <img src="image/733672659.apple-iphone-12-pro-256gb.jpg" alt="">
                        <div class="ttext">
                           от 2 099,00лв
                        </div>
                        <div class="namme">
                           Apple iPhone 12 Pro 512GB
                        </div>
                        <div class="stars">
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star on"></span>
                           <span class="star "></span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <input type="radio" name="tabs" id="tabtwo">
            <label for="tabtwo">Описание</label>
            <div class="tabw">
               <div class="r">
                  <div class="leftcol">
                     <table>
                        <tr>
                           <td>Дизайн</td>
                           <td>Touch Screen</td>
                        </tr>
                        <tr>
                           <td>SIM карта</td>
                           <td>Нено SIM и eSIM</td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Технически данни</h3>
                           </td>
                        </tr>
                        <tr>
                           <td>Процесорни ядра</td>
                           <td>6 ядра</td>
                        </tr>
                        <tr>
                           <td>Скорост на процесора</td>
                           <td>3.23 GHz</td>
                        </tr>
                        <tr>
                           <td>RAM <abbr title="Освен типа на процесора, размерът RAM има влияние върху скоростта на смартфоните. Ако RAM е повече, така може да се обработва повече временна информация, и така приложенията ще работят по-бързо."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>4 GB</td>
                        </tr>
                        <tr>
                           <td>Вътрешна памет</td>
                           <td>512 GB</td>
                        </tr>
                        <tr>
                           <td>Слот за карта <abbr title="Освен вградената памет можете да ползвате и карта памет за съхранение на файловете в телефона, така капацитетът му може да се увеличи значително."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>Не</td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Софтуер</h3>
                           </td>
                        </tr>
                        <tr>
                           <td class="tabRow">Операционна система<abbr title="В мобилните телефони, които притежават операционни системи, може да се инсталират различни програми и по този начин да се разширят функциите на телефона. Към момента най-популярни са системите Android и iOS"><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>iOS</td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Екран</h3>
                           </td>
                        </tr>
                        <tr>
                           <td>Размер на екрана</td>
                           <td>6.1"</td>
                        </tr>
                        <tr>
                           <td>Разделителна способност на дисплея</td>
                           <td>2532 x 1170</td>
                        </tr>
                        <tr>
                           <td class="tabRow">Технология на дисплея<abbr title="Измежду най-популярните дисплей разработки понастоящем OLED (също и вариантите P-OLED и AMOLED) се счита за върховата технология. Дисплеи тип TFT срещаме при по-евтините модели, а най-широкоразпространени са IPS дисплеите, имащи добър зрителен ъгъл и адекватно цветопредаване. За разлика от TFT и IPS типовете, OLED технологията позволява отделните пиксели да бъдат осветени поединично, с което черният цвят се получава при изключване на осветлението. Тази технология понякога се маркира различно от производителите (P-OLED, AMOLED и Super AMOLED и тн.), но по отношение на работния им принцип означават едно и също."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>OLED</td>
                        </tr>
                        <tr>
                           <td>Честота на опресняване</td>
                           <td>60 Hz</td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Камера</h3>
                           </td>
                        </tr>
                        <tr>
                           <td>Резолюция на предната камера</td>
                           <td>12 MPx</td>
                        </tr>
                        <tr>
                           <td>Резолюция на задната камера</td>
                           <td>12 Мегапиксела</td>
                        </tr>
                        <tr>
                           <td>Резолюция на втората задна камера</td>
                           <td>12 MPx</td>
                        </tr>
                        <tr>
                           <td>Автофокус<abbr title="Камерата има вграден сензор който автоматично управлява настройката на фокуса."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>Да</td>
                        </tr>
                        <tr>
                           <td>Вградена светкавица</td>
                           <td>Да</td>
                        </tr>
                        <tr>
                           <td>Ретина скенер<abbr title="Скенерът на ретина разпознава ретината на потребителя, намираща се в дъното на окото."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>Не</td>
                        </tr>
                        <tr>
                           <td>ToF сензор<abbr title="Принципът на работа на сензора ToF (Time-of-flight) е сходен с този на LiDAR скенера, и служи за точно определяне на мястото на предмети. При това ToF сензорът използва единствен силен лазерен лъч, докато LiDAR скенерът работи с няколко, по-маломощни лазери, затова LiDAR скенерът се счита за по-прецизен от двата."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>Не</td>
                        </tr>
                        <tr>
                           <td>Максимална резолюция на видео</td>
                           <td>3840 x 2160 @ 60 fps</td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Мултимедия</h3>
                           </td>
                        </tr>
                        <tr>
                           <td>MP3 плеър</td>
                           <td>Да</td>
                        </tr>
                        <tr>
                           <td>FM радио</td>
                           <td>Не</td>
                        </tr>
                        <tr>
                           <td>Видео плеър</td>
                           <td>Да</td>
                        </tr>
                        <tr>
                           <td>Интернет браузър</td>
                           <td>Да</td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Свтрзаемост</h3>
                           </td>
                        </tr>
                        <tr>
                           <td>Трансфер на данни</td>
                           <td>
                              <div>Wi-Fi<abbr title="Wi-Fi технологията прави възможна бърза безжична интернет връзка, скоростта на която надхвърля многократно тази на останалите методи за пренос на данни."><i class="fa-regular fa-circle-question"></i></abbr></div>
                              <div>AirDrop<abbr title="С AirDrop можете да споделите снимки, видеоклипове, уебсайтове и т.н. с други Apple устройства."><i class="fa-regular fa-circle-question"></i></abbr></div>
                              <div>NFC<abbr title="Възможност за близка комуникация на смартфони или подобни мобилни устройства. При докосване или приближаване на устройствата (до няколко см) между тях става радиовръзка."><i class="fa-regular fa-circle-question"></i></abbr></div>
                              <div>Bluetooth<abbr title="Технологията bluetooth пренася безжично сигнал на близки разстояния. Така можем да свържем телефона с друг такъв, с компютър, игрова конзола и тн."><i class="fa-regular fa-circle-question"></i></abbr></div>
                           </td>
                        </tr>
                        <tr>
                           <td>Изводи</td>
                           <td>Lightning конектор<abbr title="Apple разработиха Lightning извода замествайки предишния 30 пинов конектор. След iPhone 5 повечето нови модели разполагат с този тип извод."><i class="fa-regular fa-circle-question"></i></abbr></td>
                        </tr>
                        <tr>
                           <td>Сензори</td>
                           <td>
                              <div>Акселерометър</div>
                              <div>Жироскоп</div>
                              <div>Сензор за близост</div>
                              Барометър
                              <div></div>
                           </td>
                        </tr>
                        <tr>
                           <td class="hed" colspan="2">
                              <h3>Батерия</h3>
                           </td>
                        </tr>
                        <tr>
                           <td>Капацитет на акумулатора</td>
                           <td>3240 mAh</td>
                        </tr>
                        <tr>
                           <td>Мощност на зареждане с кабел<abbr title="При по-голяма мощност на зареждане, апаратът ще се зареди по-бързо. Посочената тук стойност дава най-голямата мощност, за постигане на която при някои марки е необходимо да се използва специално пригодено зарядно."><i class="fa-regular fa-circle-question"></i></abbr></td>
                           <td>20 W</td>
                        </tr>
                        <tr>
                           <td>Безжично зареждане</td>
                           <td>Да</td>
                        </tr>
                        <tr>
                           <td>Мощност на безжично зареждане</td>
                           <td>15 W</td>
                        </tr>
                     </table>
                     <div class="bet"></div>
                  </div>
                  <div class="rightcol">
                     <div class="t">Производител: Apple</div>
                     <div class="tt">Модел: iPhone 13 512GB</div>
                     <div class="ttt">Характеристики:</div>
                     <ul class="firstUL">
                        <li>SIM Nano-SIM and/or eSIM</li>
                        <li>Батерия</li>
                        <li>Батерия В режим на готовност: До 19 часа (мултимедия) Възпроизвеждане на музика: До 75 часа</li>
                        <li>Вид дислей Super Retina XDR OLED</li>
                        <li>Размери на дисплея 6.1 inches</li>
                        <li>Резолюция на дисплея 1170 x 2532 pixels</li>
                        <li>Задна камера 12 MP, f/1.6, 26mm (wide), 1.7µm, dual pixel PDAF, sensor-shift stabilization (IBIS) 12 MP, f/2.4, 120 ? , 13mm (ultrawide)</li>
                        <li>Предна камера 12 MP, f/2.2, 23mm (wide), 1/3.6"</li>
                        <li>Основна памет 512GB</li>
                        <li>RAM памет 4GB</li>
                        <li>Процесор Apple A15 Bionic (5 nm)</li>
                        <li>Размери на устройството 146.7 x 71.5 x 7.7 mm</li>
                        <li>Bluetooth връзка 5.0, A2DP, LE</li>
                        <li>GPRS връзка Yes, with A-GPS, GLONASS, GALILEO, BDS, QZSS</li>
                        <li>Wi-Fi връзка Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</li>
                        <li>Тегло на устройството 174 g</li>
                     </ul>
                     <div class="gallHed">
                        Галерия
                     </div>
                     <div class="gallery" style="margin: 0 0 0 -10px;">
                        <div class="first">
                           <div class="raw"><img class="ImgThumbnaill" src="image/1141152.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                           <div class="raw"><img class="ImgThumbnaill" src="image/1141155.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152675.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1141149.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/859255341.apple-iphone-13-128gb-removebg-preview.png" style="width: 102px !important;" /></div>
                        </div>
                        <div class="first">
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152669.apple-iphone-13-128gb-removebg-preview.png" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152657.apple-iphone-13-128gb-removebg-preview.png" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152645.apple-iphone-13-128gb-removebg-preview.png" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152651.apple-iphone-13-128gb-removebg-preview.png" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152663.apple-iphone-13-128gb-removebg-preview.png" /></div>
                        </div>
                        <div class="second">
                           <div class="raw"><img class="ImgThumbnaill" src="image/1152672.apple-iphone-13-128gb-removebg-preview (1).png" style="height: 114px !important;" /></div>
                           <div class="raw"><img class="ImgThumbnaill" src="image/1152660.apple-iphone-13-128gb-removebg-preview.png" style="height: 114px !important;" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152705.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/1152711.apple-iphone-13-256gb-removebg-preview.png" style="height: 114px !important;" /></div>
                           <div class="raw"> <img class="ImgThumbnaill" src="image/Removal-589.png" style="height: 114px !important;" /></div>
                        </div>
                        <div class="second">
                           <div class="raw"> <img class="ImgThumbnail" src="image/1152681.apple-iphone-13-256gb-removebg-preview.png" style="height: 112px !important; width: 141px;" /></div>
                           <div class="raw"> <img class="ImgThumbnail" src="image/1141137.apple-iphone-13-128gb-removebg-preview.png" style="height: 90px !important; width: 160px;" /></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <input type="radio" name="tabs" id="tabthree">
            <label for="tabthree">Мнения</label>
            <div class="tabw">
               <div class="commHead">Напишете коментар за продукта <span>iPhone 13</span></div>

               <div class="this">
                  <form action="insert.php" method="post">
                     <div class="firstt"><label for="name" id="name" class="label">Ник име: <span>(този ник, ще излиза като име над коментара Ви)</span></label></div>
                     <input type="text" name="name" placeholder="Име" required>
                     <div><textarea name="comment" id="" cols="50" rows="10" placeholder="Вашият коментар" required></textarea></div>
                     <button class="but" name="submit">Добави коментар</button>
                  </form>
                  <div class="sub">
                     <li>Напишете тук общия си коментар, за да знаят останалите кои продукти си струват парите!</li>
                     <li>Избягвайте нецензурните изрази и копирането от други сайтове, дайте мнение от личен опит!</li>
                     <li>Запишете, препоръчвате ли продукта или не, какви забележки имате по употребата му, за какво да внимават другите ако си купуват и тн.</li>
                  </div>
               </div>
               <div class="commSection">
                  <?php
                  include 'database.php';
                  $sql = "SELECT * FROM comments";
                  $result = $link->query($sql);
                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                  ?>
                        <div class="boxxx">
                           <div class="nammee"><span>Име: </span><?php echo $row['name']; ?> <?php $date = date('d-m-y');
                                                                                             echo $date; ?></div>
                           <div class="bo"></div>
                           <div class="commText">- <?php echo $row['comment']; ?></div>
                        </div>
                  <?php
                     }
                  }
                  mysqli_close($link);
                  ?>
               </div>
            </div>
            <div class="bor"></div>
         </div>
      </div>
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