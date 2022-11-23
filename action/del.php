<?php
session_start();
include 'database.php';

if(isset($_POST['submit'])){
    $id = $_POST['ansId'];
    mysqli_query($link, "DELETE FROM answear WHERE id=$id");
    $_SESSION['message'] = "Отговора е изтрит !"; 
    header('location: account.php');
}
