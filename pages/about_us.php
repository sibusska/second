<?php include 'include/layout/header.php'?>
<?php include 'include/layout/head.php'?>
<?php include 'config.php'?>

<?php
            $sql = "SELECT * FROM `about_us`";
            $result = mysqli_query($connect, $sql);

            global $reg_user;

            if(isset($_COOKIE['users'])){
                $reg_user = $_COOKIE['users'];
            }

            if($result){ 
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $title = $row['title'];
                    $info = $row['info'];
                   

                   ?>
                 <div class="block-1 container" style="display:flex;">
                    <div id="list-example" class="list-group" style="width: 30%;display: inline-block;padding: 10px;">
                            <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="history" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">историческая справка</a>
                            <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="rukovodstvo" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">руководство</a>
                            <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="position" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">положения</a>
                            <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="vacancy" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">вакансия</a>
                            <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="work-time" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">график приема</a>
                            <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="contacts" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">контакты</a>
                            <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="#list-item-4" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">открытые данные</a>

                        </div>
                        <div class="card-body container">
                            <h5 class="card-title"><?=  $title?></h5>
                            <p class="card-text mb-2"><?=  $info?></p>
                            <h6 class="card-subtitle">Руководители Фонда ОМС и периоды их работы:</h6>
                            <p class="card-text"><br></p>
                        </div>
                </div>
            <?php }?>
        <?php }?>
 