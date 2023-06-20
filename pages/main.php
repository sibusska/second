<?php include 'include/layout/header.php'?>
<?php include 'include/layout/head.php'?>
<?php include 'config.php'?>


<section>
    <div class="main"> 
        <div class="main-s container">
            <div class="carousell">
                <div class="slider-one">
                    <div class="slider d-flex">
                        <div class="right-main-slider d-flex justify-content-between">
                            <img src="../img//photo.jpg" alt=""> 
                        </div>
                        <div class="left-main-slider">
                            <p class="text-slider-right">qwertyuiopsdfghjkxcvbnmgcjg djdfjfhnlKSDnflijakewr</p>
                        </div>

                    </div>
                </div>
               
                <div class="slider"><img src="../img//photo.jpg" alt=""></div>
                <div class="slider"><img src="../img//photo.jpg" alt=""></div>
            </div>
        </div>
    </div>
</section>
<div class="section">
    <div class="news">
        <div class="name container">
                <p class="name-text">новости</p>
                <div class="name-small">
                    <a class="card-text" href="news2" class="name-small"><small>Посмотреть все новости</small></a>
                </div>
        </div>
            <div class="new-novost container">
                <div class="new-novost1 d-flex justify-content-between">
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
                            <a href="news?id=<?=$id?>" class="new-class">
                                <div class="new-item">
                                    <div class="card mb-3" style="width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                <img class="icon-news" src="../img/<?= $img?>" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title fs-6"><?= $title?></h5>
                                                    <p class="card-text"><small><?= $date?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
    </div>
</div>
<section class="razdely">
        <div class="name container">
            <p class="name-text">разделы</p>
        </div>
        <div class="news-s container">
            <div class="news-right">
        <a href="http://www.example.com" class="link-block">
            <div class="new-item">
                    <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img class="icon-news" src="../img//gallochka.ico" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Полис ОМС</h5>
                                    <p class="card-text"><small>читать подробнее</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://www.example.com" class="link-block">
                <div class="new-item">
                <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img class="icon-news" src="../img//doctor_protection_hospital_heh_treatment_icon_175583.ico" class="img-fluid rounded-start" alt="..." style="padding: 4px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Программа государственных гарантий</h5>
                                    <p class="card-text"><small>читать подробнее</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a> 
            <div class="news-left">
            <a href="http://www.example.com" class="link-block">
                <div class="new-item">
                <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img class="icon-news" src="../img//heart_icon-icons.com_59178.ico" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Льготный гемодиализ</h5>
                                    <p class="card-text"><small>читать подробнее</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://www.example.com" class="link-block">
                <div class="new-item">
                <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                              <img class="icon-news" src="../img//-expand-more_89793.ico" class="img-fluid rounded-start" alt="..." style="padding: 4px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Льготное лекарственное обеспечение</h5>
                                    <p class="card-text"><small>читать подробнее</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
        </section>

<section class="main-map">
    <div class="name container">
            <p class="name-text">экономическая карта</p>
    </div>
    <div class="container">
        <div class="map">
            <div class="map-right">
                <img class="map-right" src="../img//photo.jpg" alt="">
            </div>
         <div class="map-left">
            <div class="map1">
                <div class="card mb-3" style="width: 300px;">
                        <div class="row g-0">
                        <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title text-align-items-center"><small>Card title</small></h5>
                                    <p class="card-text text-align-items-center"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    <div class="card" style="width: 300px;"> 
                        <div class="row g-0">
                        <div class="col">
                                <div class="card-body">
                                 <a href=""><small class="text-decoration-none">Last updated 3 mins ago</small></a>
                                    <h5 class="card-title"><small>Card title</small></h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="col">
                                <img src="../img/photo.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px;">
                        <div class="card" style="width: 300px;"> 
                            <div class="row g-0">
                            <div class="col">
                                    <div class="card-body">
                                    <a href=""><small class="text-decoration-none">Last updated 3 mins ago</small></a>
                                        <h5 class="card-title"><small>Card title</small></h5>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <img src="../img/photo.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="carousel-main">
    <div class="carousel-s">
    <div class="container">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel">
        <div class="slide"><img src="" alt="">
        <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="slide"><img src="../img/photo2.jpg" alt=""></div>
        <div class="slide"><img src="../img/photo.jpg" alt=""></div>
    </div>
        </div>
    </div>
</section>
<div class="row-col">
    <div class="container d-flex justify-content-around align-items-center md-4">
        <div class="col-div d-flex  justify-content-around align-items-center container">
            <div class="row1">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <a class="text-row" href="https://med.kg/"><h5>Министерство здравоохранения Кыргызской Республики</h5></a>
                </div>
            </div>
            </div>
            <div class="row2">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <a class="text-row" href="http://www.pharm.kg/"><h5>Департамент лекарственных средств и медицинских изделий при МЗ КР</h5></a>
                </div>
            </div>
            </div>
            <div class="row3">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <a class="text-row" href="#"><h5>Центр электронного здравоохранения <br> при МЗ КР</h5></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<section class="page">
        <div class="name container">
            <p class="name-text">сервисы</p>
        </div>
        <div class="news-s container">
            <div class="news-right">
            <a href="http://www.example.com" class="link-block">
                <div class="new-item">
                    <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img class="icon-news" src="../img//hospital_medical_medicine_doctor_health_sick_clinic_icon_140909.ico" class="img-fluid rounded-start" alt="..." style="padding: 7px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Covid-19</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://www.example.com" class="link-block">
                <div class="new-item">
                <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img class="icon-news" src="../img//gallochka.ico" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Статус ОМС</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="news-left">
            <a href="http://www.example.com" class="link-block">
                <div class="new-item">
                <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img class="icon-news" src="../img//chat_without_content_v2_icon-icons.com_67752.ico" class="img-fluid rounded-start" alt="..." style="padding: 8px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Открытые данные</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://www.example.com" class="link-block">
                <div class="new-item">
                <div class="card mb-3" style="width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img class="icon-news" src="../img//phone-handset_icon-icons.com_48252.ico" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Call-Центр</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
</section>

<?php include 'include/layout/footer.php'?>