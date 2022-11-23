<?php
session_start();
include 'database.php';

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $product = $_POST['product'];
    mysqli_query($link, "DELETE FROM favorite WHERE username='$user' AND productName='$product'");
    $_SESSION['message'] = "Продукта е премахнат от любими !"; 
    header('location: account.php');
}
