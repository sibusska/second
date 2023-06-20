<?php
include 'config.php';

if(isset($_POST['send'])){
    $id = $_POST['id'];
    $img = $_POST['img'];
    $title = $_POST['title'];
    $information = $_POST['information'];
    $date = $_POST['date'];

    $order = "INSERT INTO `news` (`img`, `title`, `information`, `date`) VALUES('$img', '$title', '$information', '$date')";

    mysqli_query($connect, $news);
    
    header('location: news');
    
}
?>