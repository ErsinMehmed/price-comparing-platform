<?php
session_start();
include 'database.php';

$name = $_POST['Name'];
$email = $_POST['Email'];
$password = ($_POST['Password']);
$passwordR = ($_POST['PasswordR']);
$sql = "SELECT email FROM users WHERE email = '$email'";
$sqll = "SELECT name FROM users WHERE name = '$name'";
$result = $link->query($sql);
$resultt = $link->query($sqll);
if ($resultt->num_rows == 0) {
   if ($result->num_rows == 0) {
      if ($password == $passwordR) {
         if (strlen($password) <= '7') {
            $_SESSION['message'] = "Паролата трябва да е повече от 7 символа !";
            header("location: reg.php");
         } elseif (!preg_match("#[A-Z]+#", $password)) {
            $_SESSION['message'] = "Паролата трябва да съдържа поне една главна буква !";
            header("location: reg.php");
         } elseif (!preg_match("#[0-9]+#", $password)) {
            $_SESSION['message'] = "Паролата трябва да съдържа поне една цифра !";
            header("location: reg.php");
         } elseif (!preg_match("#[a-z]+#", $password)) {
            $_SESSION['message'] = "Паролата трябва да съдържа поне една малка буква !";
            header("location: reg.php");
         } else {
            $password = md5($_POST['Password']);
            $sql = "INSERT INTO users (Name,Email,Password)
                     VALUES ('$name','$email','$password')";
            if (mysqli_query($link, $sql)) {
               $_SESSION['message'] = "Успешна регистрация !";
               header("location: reg.php");
            } else {
               echo "Error: " . $sql . ":-" . mysqli_error($link);
            }
            mysqli_close($link);
         }
      } else {
         $_SESSION['message'] = "Въведените пароли не съвпадат !";
         header("location: reg.php");
      }
   } else {
      $_SESSION['message'] = "Имейла вече е регистриран в системата !";
      header("location: reg.php");
   }
} else {
   $_SESSION['message'] = "Потребителското име вече е регистрирано в системата !";
   header("location: reg.php");
}
