<?php
include 'config.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password."ghfhgjhfgygj");

    $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
        
    if($result){
         $row = mysqli_fetch_assoc($result);
 
        
        setcookie('user', $email, time() + 36000, "/");
        header('Location: /');

    }else{
        echo('ghfhgjhfgygj');
    }
    ?>