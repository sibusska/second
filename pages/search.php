<?php include 'include/layout/header.php';?>
<?php include 'include/layout/head.php';?>
<?php include 'config.php'?>

<?php 
        $result = $_POST['search'];
        
        $sql = "SELECT * FROM `news` WHERE `title` LIKE '%$result%' or `information` LIKE '%$result%'";
        $result = mysqli_query($connect, $sql);

        // echo($result);
 
        if($result){
            while($row = mysqli_fetch_assoc($result)){ 
                if($row){
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
            <?php  }
           else echo 'ничего не найдено';
            
        
        }  
            
            ?>
        <?php }
        
          
        
