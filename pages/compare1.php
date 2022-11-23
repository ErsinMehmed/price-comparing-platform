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
            <div class="buttons">
               <div class="container" style="width: 140px;">
                  <a href="reg.php" class="btn effect04" data-sm-link-text="Влез"><span>Моят акаунт</span></a>
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
            <li><a href="category.php">Категории</a></li>
            <li><a href="compare1.php">Сравни продукти</a></li>
         </ul>
      </nav>
   </header>
   <div class="bor"></div>
   <div style="text-align: center;">
      <div class="head">Влезте в профила си за да можете да сравнявате продукти !</div>
      <button style="border: none; padding: 15px 70px; cursor: pointer; color: white; font-weight: bold; border-radius: 20px; background-color: #0475bb; font-size: 18px; margin-top: 104px; margin-bottom: 160px;"><a href="reg.php" style="color: white;">Към вход</a></button>
   </div>
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