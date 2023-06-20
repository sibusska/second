<?php include 'include/layout/header.php'?> 
<?php include 'include/layout/head.php'?>
<?php include 'config.php'?>
                   <div class="block-1 justify-content-between container">
                        <div class="block_list">
                            <div id="list-example" class="list-group" style="width: 23%;display: inline-block;padding: 10px;">
                                <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="history" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">историческая справка</a>
                                <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="rukovodstvo" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">руководство</a>
                                <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="position" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">положения</a>
                                <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="vacancy" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">вакансия</a>
                                <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="work-time" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">график приема</a>
                                <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="contacts" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">контакты</a>
                                <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="#list-item-4" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">открытые данные</a>

                            </div>
                        </div>
<?php
            $sql = "SELECT * FROM `rukovodstvo`";
            $result = mysqli_query($connect, $sql);


            if($result){ 
                while($row = mysqli_fetch_assoc($result)){ 
                    $id = $row['id'];
                    $img = $row['img'];
                    $name = $row['name'];
                    $post = $row['post'];
                   ?>
                   <div class="block-cards d-flex row container" style="display: inline-block;justify-content:space-between;">
                        <div class="card justify-content-between mb-4 md-4 d-flex" style="width: 16rem;">
                            <img src="../rukovodstvo_image/<?=  $img?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?=  $name?></h5>
                                <p class="card-text fst-italic"><?=  $post?></p>
                            </div>
                        </div>
                   </div> 
                </div>  
            <?php }?>
        <?php }?>