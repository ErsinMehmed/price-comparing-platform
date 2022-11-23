<?php
session_start();
include 'database.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $id = $_POST['user_id'];
    $question = $_POST['quest'];
    $quest_id = $_POST['id'];
    $quest_user = $_POST['question'];
    $date = date("j F Y");
    $noww = new DateTime("now", new DateTimeZone('Europe/Sofia') );
    $time = $noww->format('H:i');


    $sql = "INSERT INTO answear (user_idd, answear, email, question, date, time)
                            VALUES ('$id','$question','$email','$quest_user','$date','$time')";
    if (mysqli_query($link, $sql)) {
        $_SESSION['message'] = "Отговора е изпратен упешно !";
        header('location: dashboard.php');
    } else {
        echo '<script> alert("Неуспешно добавяне !"); </script>';
    }
    mysqli_query($link, "DELETE FROM questions WHERE id=$quest_id");
}
