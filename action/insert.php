<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $date = date("j F Y");
    $noww = new DateTime("now", new DateTimeZone('Europe/Sofia') );
    $time = $noww->format('H:i');

    $sql = "INSERT INTO comments (name, comment, date, time)
                            VALUES ('$name','$comment', '$date', '$time')";
    if (mysqli_query($link, $sql)) {
        header('Location: product.php');
    } else {
        echo '<script> alert("Неуспешно добавяне !"); </script>';
    }
}
