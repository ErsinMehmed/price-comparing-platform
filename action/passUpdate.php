<?php  
session_start();
include 'database.php';
    if(isset($_POST["submitt"]))  
    {  
        $password = $_POST["password"];
        $passwordR = $_POST["passwordR"];
        
        if($password == $passwordR){
        $query = "UPDATE admins SET password = '$password'";  
            if(mysqli_query($link, $query))  
            {  
                $_SESSION['message'] = "Данните Ви са обновени !"; 
                header('Location: dashboard.php');
            }  
        }
        else{
            $_SESSION['message'] = "Паролите не съвпадат !"; 
            header('Location: dashboard.php');
        }
    }
