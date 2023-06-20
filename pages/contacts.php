<?php include 'include/layout/header.php'?>
<?php include 'include/layout/head.php'?>
<?php include 'config.php'?>   
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
    <div class="table">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Заголовок</th>
      <th scope="col">год</th>
      <th scope="col"></th>
    </tr>
  </thead>
    <?php
           

           $sql = "SELECT * FROM `contacts`;";
            $result = mysqli_query($connect, $sql);

            global $reg_user;

            if(isset($_COOKIE['users'])){
                $reg_user = $_COOKIE['users'];
            }

            if($result){ 
                while($row = mysqli_fetch_assoc($result)){ 
                    $id = $row['id'];
                    $number = $row['number'];
                    $zagalovok = $row['zagalovok'];
                    $year = $row['year'];
                    $watch_first = $row['watch_first'];
                    $watch_second = $row['watch_second'];

                   
                    
                   ?>

  <tbody>
    <tr>
      <th scope="row"><?=  $number?></th>
      <td><?=  $zagalovok?></td>
      <td><?=  $year?></td>
      <td><a href="/<?=  $watch_first?>" class="btn btn-secondary">Просмотр</a></td>
      <td><a href="/<?=  $watch_second?>" class="btn btn-secondary">за 9 мес. 2022</a></td>
    </tr>
  </tbody>
</table>
    </div>
            <?php }?>
        <?php }?>

</div>      