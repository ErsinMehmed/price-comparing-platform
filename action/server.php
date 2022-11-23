<?php
session_start();

$name = "";
$price = "";
$brand = "";
$system = "";
$image = "";
$number = "";
$id = 0;
$edit_state = false;

include 'database.php';
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $system = $_POST['system'];
    $image = $_POST['image'];
    $number = $_POST['number'];
    $now = new DateTime("now", new DateTimeZone('Europe/Sofia'));
    $time = $now->format('H:i');
    $date = $now->format('Y-m-d');
    $sql = "INSERT INTO products (price,name,brand,system,image,number,time,date)
    VALUES('$price', '$name', '$brand', '$system', '$image', '$number', '$time', '$date')";

    mysqli_query($link, $sql);
    $_SESSION['message'] = "Записът е запазен !";
    header("location: dashboard.php");
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $system = $_POST['system'];
    $image = $_POST['image'];
    $number = $_POST['number'];
    $now = new DateTime("now", new DateTimeZone('Europe/Sofia'));
    $time = $now->format('H:i');
    $date = $now->format('Y-m-d');
    mysqli_query($link, "UPDATE products SET price='$price', name='$name', brand='$brand', system='$system', image='$image', number='$number', timeu='$time', dateu='$date' WHERE id=$id");
    $_SESSION['message'] = "Записът е обновен !";
    header('location: dashboard.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($link, "DELETE FROM products WHERE id=$id");
    $_SESSION['message'] = "Записът е изтрит!";
    header('location: dashboard.php');
}

if (isset($_GET['open'])) {
    $idd = $_GET['open'];
    $_SESSION["idd"] = $idd;
    echo $link = "<script>window.open('open.php' ,'_blank','width=523,height=364')</script>";
    echo '<script> window.location = "dashboard.php"; </script>';
}
