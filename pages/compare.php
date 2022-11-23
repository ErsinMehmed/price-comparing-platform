<?php
session_start();
error_reporting(0);
$product = $_SESSION["product"];
$productt = $_SESSION["productt"];
?>
<!DOCTYPE html>
<html lang="bg">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="compare.css">
   <link rel="shortcut icon" href="image/siteLogo.png">
   <title>Erso Shopping Сравни Продукти</title>
   <script src="https://kit.fontawesome.com/d4b9f98a5c.js" crossorigin="anonymous"></script>
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
   <header id="navbar">
      <div class="headerBody">
         <div class="header">
            <div class="siteLogo">
               <a href="index.html"><img src="image/siteLogo.png" alt="Erso Shopping" height="130px" width="150px"></a>
            </div>
            <div class="search__container">
               <input class="search__input" type="text" placeholder="Какво търсите ?">
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
            <li><a href="home.php">Начало</a></li>
            <li><a href="markets.php">Магазини </a></li>
            <li><a href="category.php">Категории</a></li>
            <li><a href="compare.php">Сравни продукти</a></li>
         </ul>
      </nav>
   </header>
   <div class="bor"></div>
   <div class="head">Сравнение на продукти - <span><?php echo $product ?></span> <i class="fa-solid fa-arrow-right-arrow-left"></i> <span><?php echo $productt ?></span></div>
   <section>
      <?php
      include 'database.php';
      $sql = "SELECT * FROM products WHERE name='$product'";
      $result = $link->query($sql);
      while ($row = $result->fetch_assoc()) {

      ?>
         <div class="col">
            <div class="box">
               <div class="div-img">
                  <img src="<?= $row['image']; ?>" alt="" class="">
               </div>
               <div class="boxName">
                  <?= $row['name']; ?>
               </div>
            </div>
            <div class="price"><?= 'от ' . $row['price'] . ',00лв.'; ?></div>
            <div class="detail">
               Детайли
            </div>
            <div class="det"><i class="fa-solid fa-mobile-screen-button"></i> Дизайн:</div>
            <div class="deta"><?= $row['design']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-industry"></i> Производител:</div>
            <div class="deta"><?= $row['brand']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-database"></i> Вътрешна памет:</div>
            <div class="deta"><?= $row['space']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-memory"></i> RAM:</div>
            <div class="deta"><?= $row['ram']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-code"></i> Операционна система:</div>
            <div class="deta" style="margin-bottom: 25px;"><?= $row['system']; ?></div>
            <a class="back" href="<?= $row['link']; ?>">Обратно към продукта</a>
         </div>
      <?php
      }
      ?>
      <?php
      include 'database.php';
      $sql = "SELECT * FROM products WHERE name='$productt'";
      $result = $link->query($sql);
      while ($row = $result->fetch_assoc()) {
      ?>
         <div class="col">
            <div class="box">
               <div class="div-img">
                  <img src="<?= $row['image']; ?>" alt="" class="">
               </div>
               <div class="boxName">
                  <?= $row['name']; ?>
               </div>
            </div>
            <div class="price"><?= 'от ' . $row['price'] . ',00лв.'; ?></div>
            <div class="detail">
               Детайли
            </div>
            <div class="det"><i class="fa-solid fa-mobile-screen-button"></i> Дизайн:</div>
            <div class="deta"><?= $row['design']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-industry"></i> Производител:</div>
            <div class="deta"><?= $row['brand']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-database"></i> Вътрешна памет:</div>
            <div class="deta"><?= $row['space']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-memory"></i> RAM:</div>
            <div class="deta"><?= $row['ram']; ?></div>
            <div class="bord"></div>
            <div class="det"><i class="fa-solid fa-code"></i> Операционна система:</div>
            <div class="deta" style="margin-bottom: 25px;"><?= $row['system']; ?></div>
            <a class="back" href="<?= $row['link']; ?>">Обратно към продукта</a>
         </div>
      <?php
      }
      ?>
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