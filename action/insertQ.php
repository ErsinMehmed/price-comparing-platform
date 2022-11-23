<?php
session_start();
include 'database.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $select = $_POST['topic'];
    $id = $_POST['id'];
    $question = $_POST['question'];
    $date = date("j F Y");
    $noww = new DateTime("now", new DateTimeZone('Europe/Sofia') );
    $time = $noww->format('H:i');

    $sql = "INSERT INTO questions (user_id, email, question, date, topic, time)
                            VALUES ('$id','$email','$question','$date','$select','$time')";
    if (mysqli_query($link, $sql)) {
        $_SESSION['message'] = "Въпроса беше изпратен успешно !";
        header('location: account.php');
    } else {
        echo '<script> alert("Неуспешно добавяне !"); </script>';
    }
}
