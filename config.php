<?php
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "second";

    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if(mysqli_connect_errno()){
        echo("ERROR". mysqli_connect_error());
    }
?>