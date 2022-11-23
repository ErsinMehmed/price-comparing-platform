<?php
session_start();
include 'database.php';
if (isset($_POST['add'])) {
    $name = $_POST['pro'];
    $user = $_POST['username'];
    $sql = "SELECT * FROM favorite WHERE username='$user' AND productName='$name'";
    $result = mysqli_query($link, $sql);
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO favorite (productName, username)
            VALUES ('$name','$user')";
        if (mysqli_query($link, $sql)) {
            $_SESSION['message'] = ' Продуктът е добавен в любими <i class="fa-regular fa-circle-check"></i>';
            header('Location: product.php');
        } else {
            echo '<script> alert("Неуспешно добавяне !"); </script>';
        }
    } else {
        $_SESSION['message'] = ' Продуктът вече е добавен в любими <i class="fa-solid fa-circle-exclamation"></i>';
        header('Location: product.php');
    }
}
