<?php
            $sql = "SELECT * FROM `rukovaditeli`";
            $result = mysqli_query($connect, $sql);

            global $reg_user;

            if(isset($_COOKIE['users'])){
                $reg_user = $_COOKIE['users'];
            }

            if($result){ 
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $rukovaditeli = $row['rukovaditeli'];
                    $year = $row['year'];

                   ?>
                    <div class="card-body container">
                        <h1 class="card-subtitle">Руководители Фонда ОМС и периоды их работы:</h1>
                        <p class="card-text"><?=  $rukovaditeli?> <?=  $year?>гг. <br></p>
                    </div>
            <?php }?>
        <?php }?>