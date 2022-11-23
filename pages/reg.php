<?php
$var = session_start();
?>
<!DOCTYPE html>
<html lang="bg">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Erso Shopping Вход</title>
   <link rel="shortcut icon" href="image/siteLogo.png">
   <link rel="stylesheet" href="reg.css">
   <script>
      function myFunctionf() {
         if (document.getElementById("first").value.length == 0) {
            document.getElementById("first").style.backgroundColor = "#FF5733";
            document.getElementsByName('Name')[0].placeholder = 'Не сте въвели име';
         }
         if (document.getElementById("second").value.length == 0) {
            document.getElementById("second").style.backgroundColor = "#FF5733";
            document.getElementsByName('Email')[0].placeholder = 'Не сте въвели имейл';
         }
         if (document.getElementById("third").value.length == 0) {
            document.getElementById("third").style.backgroundColor = "#FF5733";
            document.getElementsByName('Password')[0].placeholder = 'Не сте въвели паропа';
         }
         if (document.getElementById("fourth").value.length == 0) {
            document.getElementById("fourth").style.backgroundColor = "#FF5733";
            document.getElementsByName('PasswordR')[0].placeholder = 'Не сте въвели парола';
         }

      };

      function myFunctionx() {
         if (document.getElementById("fivth").value.length == 0) {
            document.getElementById("fivth").style.backgroundColor = "#FF5733";
            document.getElementsByName('Namee')[0].placeholder = 'Не сте въвели имейл';
         }
         if (document.getElementById("sixth").value.length == 0) {
            document.getElementById("sixth").style.backgroundColor = "#FF5733";
            document.getElementsByName('Passwordd')[0].placeholder = 'Не сте въвели парола';
         }
      };

      function myPass() {
         if (document.getElementById("fPass").value.length == 0) {
            document.getElementById("fPass").style.backgroundColor = "#FF5733";
            document.getElementsByName('Emaill')[0].placeholder = 'Не сте въвели имейл';
         }

      };

      function myFunctions() {
         document.getElementById("first").style.backgroundColor = "#eee";
      };

      function myFunctiont() {
         document.getElementById("second").style.backgroundColor = "#eee";
      };

      function myFunctionb() {
         document.getElementById("third").style.backgroundColor = "#eee";
      };

      function myFunctionq() {
         document.getElementById("fourth").style.backgroundColor = "#eee";
      };

      function myFunctiong() {
         document.getElementById("fivth").style.backgroundColor = "#eee";
      };

      function myFunctionh() {
         document.getElementById("sixth").style.backgroundColor = "#eee";
      };

      function myFunctionm() {
         document.getElementById("fPass").style.backgroundColor = "#eee";
      };
   </script>
   <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
   <header>
      <div class="headerBody">
         <div class="header">
            <div class="siteLogo">
               <a href="index.php"><img src="image/siteLogo.png" alt="Erso Shopping" height="130px" width="150px"></a>
            </div>
            <div class="search__containerr">
               <input class="search__input" type="text" placeholder="Какво търсите ?">
            </div>
            <a href="">
               <div class="searchImgCon"><img class="searchImg" src="image/search.png" alt="" width="23px" height="23px"></div>
            </a>
            <div class="buttons">
               <div class="containerr">
                  <a href="reg.php" class="btn effect04" data-sm-link-text="Влез"><span>Моят акунт</span></a>
               </div>
            </div>
            <div class="buttonsS">
               <div class="containerr">
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
            <li><a href="">Сравни продукти</a></li>
         </ul>
      </nav>
   </header>
   <?php if (isset($_SESSION['message'])) : ?>
      <div class="msg">
         <?php
         echo $_SESSION['message'];
         unset($_SESSION['message']);
         ?>
      </div>
   <?php endif ?>
   <div class="erso">
      <div class="container" id="container">
         <div class="form-container sign-up-container">
            <form action="register.php" name="myForm" method="post">
               <h1 class="h">Регистрация</h1>
               <div class="social-container">
                  <a href="#" class="fa fa-facebook"><i class="fab fa-facebook-f"></i><img src="image/F.png" alt="" height="20px" width="20px"></a>
                  <a href="#" class="fa fa-twitter"><i class="fab fa-google-plus-g"></i><img src="image/twitter-icon-white-transparent-11549537259z0sowbg17j-removebg-preview.png" alt="" height="22px" width="22px"></a>
                  <a href="#" class="fa fa-google"><i class="fab fa-linkedin-in"></i><img src="image/788-7887426_google-g-png-google-logo-white-png.png" alt="" height="22px" width="22px"></a>
               </div>
               <span>или използвайте вашия имейл за регистрация</span>
               <input onclick="myFunctions()" id="first" name="Name" type="text" placeholder="Потребителско име" oninvalid="setCustomValidity('Моля въведете потребителско име !')" oninput="setCustomValidity('')" required />
               <input onclick="myFunctiont()" id="second" name="Email" type="email" placeholder="Имейл" />
               <input onclick="myFunctionb()" id="third" name="Password" type="password" placeholder="Парола" oninvalid="setCustomValidity('Моля въведете парола !')" oninput="setCustomValidity('')" required /><img onclick="HidePas()" class="hidef" src="image/hide.png" alt="" title="Покажи парола">
               <input onclick="myFunctionq()" id="fourth" name="PasswordR" type="password" placeholder="Повторете парола" oninvalid="setCustomValidity('Моля въведете парола !')" oninput="setCustomValidity('')" required /><img onclick="HidePass()" class="hidef" src="image/hide.png" alt="" title="Покажи парола">
               <input class="btnReg" onclick="myFunctionf()" id="test" type="submit" value="Регистрация">
            </form>
         </div>
         <?php
         include 'database.php';

         if (isset($_POST['submit'])) {
            $name = $_POST['Namee'];
            "UPDATE users SET stasus = 'yes' WHERE name = '" . $name . "'";
            $password = md5($_POST['Passwordd']);

            $sql = "SELECT * FROM users WHERE name = '" . $name . "' AND password = '" . $password . "' limit 1";
            $resultt = $link->query($sql);

            if ($resultt->num_rows > 0) {
               $_SESSION["username"] = $name;
               $now = new DateTime("now", new DateTimeZone('Europe/Sofia'));
               $date = $now->format('d-m-Y');
               $queryy = "SELECT * FROM state WHERE date = '$date'";
               $result = mysqli_query($link, $queryy);
               $number = 0;

               if ($result->num_rows == 0) {
                  $insertQuery = "INSERT INTO state (date) VALUE ('$date')";
                  mysqli_query($link, $insertQuery);
               } else {
                  $number += 1;
                  $updateQuery = "UPDATE state SET visitor = visitor+1 WHERE date='$date'";
                  mysqli_query($link, $updateQuery);
               }
               echo '<script> window.location = "home.php"; </script>';
            } else {
               echo  $_SESSION['message'] = "Грешно потребителско име или парола !";
               echo '<script> window.location = "reg.php"; </script>';
            }
         }
         ?>
         <div class="form-container sign-in-container">
            <form action="#" method="post">
               <h1 class="h">Вашият профил</h1>
               <div class="social-container">
                  <a href="#" class="fa fa-facebook"><img src="image/F.png" alt="" height="20px" width="20px"></a>
                  <a href="#" class="fa fa-twitter"><img src="image/twitter-icon-white-transparent-11549537259z0sowbg17j-removebg-preview.png" alt="" height="22px" width="22px"></a>
                  <a href="#" class="fa fa-google"><img src="image/788-7887426_google-g-png-google-logo-white-png.png" alt="" height="22px" width="22px"></a>
               </div>
               <span>или използвайте вашия акаунт</span>
               <input id="fivth" name="Namee" onclick="myFunctiong()" type="text" placeholder="Потребителско име" oninvalid="setCustomValidity('Моля въведете потребителско име !')" oninput="setCustomValidity('')" required />
               <input id="sixth" name="Passwordd" onclick="myFunctionh()" type="password" placeholder="Парола" oninvalid="setCustomValidity('Моля въведете парола !')" oninput="setCustomValidity('')" required />
               <img onclick="HidePasss()" class="hidef" src="image/hide.png" alt="" title="Покажи парола">
               <a href="#" class="forgot" onclick="myFunction()">Забравена парола</a>
               <input name="submit" onclick="myFunctionx()" type="submit" value="Вход">
            </form>
         </div>
         <div class="overlay-container">
            <div class="overlay">
               <div class="overlay-panel overlay-left">
                  <h1>Добре дошли!</h1>
                  <p>За да влезете във вашия профил изполвайте вашите данни</p>
                  <button class="ghost" id="signIn">Вход</button>
               </div>
               <div class="overlay-panel overlay-right">
                  <h1>Здравейте!</h1>
                  <p>Регистрирайте се, защото с нас пазаруването е по-лесно !</p>
                  <button class="ghost" id="signUp">Регистрация</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="con" id="con">
      <form action="#" name="myForm">
         <h1 class="h">Забравена парола</h1>
         <span>Ще изпратим имейл за задаване на нова парола на регистрирания Ваш имейл адрес</span>
         <input name="Emaill" type="email" placeholder="Имейл" oninvalid="setCustomValidity('Моля въведете имейл !')" oninput="setCustomValidity('')" required />
         <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LdPKm4eAAAAABhwYgQVt38_X-Zuh_CrlEEdO_06"></div>
         <a href="#" class="forgot" onclick="enter()">Обратно към вход</a>
         <input type="submit" class="btnReg" onclick="myPass()" value="Изпрати имейл">
      </form>
   </div>
   <script>
      function HidePas() {
         var x = document.getElementById("third");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      };

      function HidePass() {
         var x = document.getElementById("fourth");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      };

      function HidePasss() {
         var x = document.getElementById("sixth");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      };

      const signUpButton = document.getElementById('signUp');
      const signInButton = document.getElementById('signIn');
      const container = document.getElementById('container');

      signUpButton.addEventListener('click', () => {
         container.classList.add("right-panel-active");
      });

      signInButton.addEventListener('click', () => {
         container.classList.remove("right-panel-active");
      });

      function myFunction() {
         document.getElementById("container").style.display = "none";
         document.getElementById("con").style.display = "block";
      }

      function enter() {
         document.getElementById("con").style.display = "none";
         document.getElementById("container").style.display = "block";
      }
   </script>
</body>

</html>