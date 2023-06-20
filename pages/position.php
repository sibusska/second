<?php include 'include/layout/header.php'?>
<?php include 'include/layout/head.php'?>
<?php include 'config.php'?>
<div class="block-1 d-flex container">
  <div id="list-example" class="list-group" style="width: 23%;display: block;padding: 10px;display:flex;">
      <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="history" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">историческая справка</a>
      <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="rukovodstvo" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">руководство</a>
      <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="position" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">положения</a>
      <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="vacancy" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">вакансия</a>
      <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="work-time" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">график приема</a>
      <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="contacts" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">контакты</a>
      <a class="list-group-item list-group-item-action text-light shadow-sm p-2 mb-1 rounded text-uppercase" href="#list-item-4" style="background-color: #083C6F;font-family: 'Source Sans Pro', normal;">открытые данные</a>

  </div>
  <div class="table" style="width: 80%;">
      <!-- <h4>положения</h4>
      <table class="table" style="width: 100%;">
          <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">заголовок</th>             
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>1
        </td>
        <td>Постановления Кабинета Министров Кыргызской Республики от 24 декабря 2021 года №339
        </td>
        <td style="width: 250px;"><a class="button btn btn-secondary" href="http://cbd.minjust.gov.kg/act/view/ru-ru/158827" target="_blank">Просмотр</a>
        </td>
      </tr>   -->


<?php  
            $sql = "SELECT * FROM `position`";
            $result = mysqli_query($connect, $sql);

            global $reg_user;

            if(isset($_COOKIE['users'])){
                $reg_user = $_COOKIE['users'];
            }

            if($result){ 
                while($row = mysqli_fetch_assoc($result)){ 
                    $id = $row['id'];
                    $number = $row['number']; 
                    $title = $row['title'];
                    $watch = $row['watch'];
                    $download = $row['download'];

                   ?>
                         <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>#
      </th>
      <th>Заголовок
      </th>
      <th>&nbsp;
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1
      </td>
      <td>Постановления Кабинета Министров Кыргызской Республики от 24 декабря 2021 года №339
      </td>
      <td style="width: 250px;"><a class="button btn btn-default" href="http://cbd.minjust.gov.kg/act/view/ru-ru/158827" target="_blank">Просмотр</a>
      </td>
    </tr> 
                      <tr>
      <td><?=  $number?>
      </td>
      <td><?=  $title?>
      </td>
      <td style="width: 250px;"><a class="button btn btn-default" download="" href="/uploads/pdf-positions/<?=  $download?>">Скачать</a> <a class="button btn btn-default" href="/uploads/polozh/Приказ  ФОМС № 50 от10.03.2022г.Об утверждении положения УУиО.pdf<?=  $watch?>" target="_blank">Просмотр</a>
      </td>
    </tr>
    <!-- <tr>
      <td>
      </td>
      <td>
      </td>
      <td style="width: 250px;"><a class="button btn btn-secondary" download="" href="/pdf-positions/">Скачать</a>
      <a class="button btn btn-secondary" href="/pdf-positions/" target="_blank">Просмотр</a>
      </td>
    </tr>  -->
  <!-- </tbody>
</table>
            <?php }?>
        <?php }?> 
</div>  -->
</div>
