<?php include 'include/layout/header.php';?>
<?php include 'include/layout/head.php';?>
<?php include 'config.php'?>

<section class="neww">
    <div class="container">
    <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }

            $sql = "SELECT * FROM `news` where id = '$id'";
            $result = mysqli_query($connect, $sql);

            global $reg_user;

            if(isset($_COOKIE['users'])){
                $reg_user = $_COOKIE['users'];
            }

            if($result){ 
                while($row = mysqli_fetch_assoc($result)){ 
                    $id = $row['id'];
                    $img = $row['img'];
                    $title = $row['title'];
                    $information = $row['information'];
                    $date = $row['date'];

                   
                    
                   ?>
        <div class="new-1">
            <img src="../img/<?=  $img?>" alt="">
        <h1 class="fs-5"><?=  $title?></h1>
        <p><small class="fst-italic"><?=  $date?></small></p>
        <p><?=  $information?></p>

        </div>
        

        
            <?php }?>
        <?php }?>
    </div>
</section>
