<?php include 'include/layout/header.php'?>
<?php include 'include/layout/head.php'?>
<?php include 'config.php'?>
<div class="new-novost container">
                <?php
                    $sql = "SELECT * FROM `news`";
                    $result = mysqli_query($connect, $sql);

                    if($result){
                        while($row = mysqli_fetch_assoc($result)){ 
                            $id = $row['id'];
                            $img = $row['img'];
                            $title = $row['title'];
                            $date = $row['date'];

                        ?>
                        <div class="new-novost1 d-flex justify-content-between">
                            <a href="news?id=<?=$id?>" class="new-class">
                                <div class="card" style="width: 18rem;">
                                    <img src="../img/<?= $img?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark"><?= $title?></h5>
                                        <p class="card-text text-dark"><small><?= $date?></small></p>
                                        
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    <?php }  
                    ?>
                </div>
            </div>