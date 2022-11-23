<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="image/siteLogo.png">
  <link rel="stylesheet" href="adminpannel.css">
  <title>Erso Shopping Администраторски панел</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <?php
  include 'database.php';

  if (isset($_POST['Namee'])) {
    $name = $_POST['Namee'];
    $password = $_POST['Passwordd'];

    $sql = "SELECT * FROM admins WHERE email = '" . $name . "' AND password = '" . $password . "' limit 1";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
      echo '<script> window.location = "dashboard.php"; </script>';
    } else {
      echo '<script> alert("Неуспешно влизане !"); </script>';
    }
  }
  ?>
  <div class="container" id="container">
    <div class="form-container sign-in-container">
      <form action="#" method="post">
        <h1 class="h">Вход за админи</h1>
        <input id="fivth" name="Namee" onclick="myFunctiong()" type="email" placeholder="Имейл" />
        <input id="sixth" name="Passwordd" onclick="myFunctionh()" type="password" placeholder="Парола" oninvalid="setCustomValidity('Моля въведете парола !')" oninput="setCustomValidity('')" required />
        <img onclick="HidePasss()" class="hidef" src="image/hide.png" alt="" title="Покажи парола">
        <a href="#" class="forgot" onclick="myFunction()">Забравена парола</a>
        <button onclick="myFunctionx()">Вход</button>
      </form>
    </div>
  </div>
  <div class="con" id="con">
    <form action="#" name="myForm">
      <h1 class="h">Забравена парола</h1>
      <span>Ще изпратим имейл за задаване на нова парола на регистрирания Ваш имейл адрес</span>
      <input onclick="myFunctionm()" id="fPass" name="Emaill" type="email" placeholder="Имейл" />
      <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LdPKm4eAAAAABhwYgQVt38_X-Zuh_CrlEEdO_06"></div>
      <a href="#" class="forgot" onclick="enter()">Обратно към вход</a>
      <button class="btnReg" onclick="myPass()">Изпрати имейл</button>
    </form>
  </div>
  <script>
    function myFunctiong() {
      document.getElementById("fivth").style.backgroundColor = "#eee";
    };

    function myFunctionh() {
      document.getElementById("sixth").style.backgroundColor = "#eee";
    };

    function HidePasss() {
      var x = document.getElementById("sixth");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
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