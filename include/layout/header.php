<div class="header">
    <div class="header-r container">
        <div class="header1">
            <div class="header-contact">
                <a href=""><img class="icon" src="./img/telephone-receiver_icon-icons.com_56033.ico" alt="#">Тел:+996 (312) 62 53 13</a>
            </div>
            <div class="header-contact">
                <a href=""><img class="icon" src="./img/geo_icon_160074.ico" alt="#">Адрес:720040,город Бишкек,Бульвар Эркиндик,58</a>
            </div>
        </div>

        <div class="header2">
            <div class="header-contact">
                <a href=""><img class="icon-s" src="./img/network_socialmedia_user_interface_instagram_icon_195600.ico" alt="#"></a>
            </div>
            <div class="header-contact">
                <a href=""><img class="icon-s" src="./img/facebook_logo_icon_147291.ico" alt="#"></a>
            </div>
            <div class="header-contact">
                <a href=""><img class="icon-s" src="./img/telegram_social_network_communication_chat_interaction_icon_192276.ico" alt="#"></a>
            </div>
            <?php if(empty($_COOKIE['user'])):?>
            <button type="button" class="btn btn-link-dark btn-sm border border-0">рус</button>
            <button type="button" class="btn btn-link-dark btn-sm border border-0">кырг</button>
            <button type="button" class="btn btn-link-dark btn-sm border border-0">eng</button>
            <a class="btn text-dark btn-sm" aria-current="page" href="input"><img class="icon-s" src="../img/-input_90426.ico" alt=""></a>
            <?php elseif(isset($_COOKIE['user'])):?>
            <a class="btn text-dark" aria-current="page" href="exit.php"><img class="icon-s" src="../img/exit_icon-icons.com_48304.ico" alt=""></a>
            <?php endif?>
        </div>
    </div>
</div>
<div class="logotip-s">
    <div class="logotip container">
        <div class="logo"><img class="logo" src="/img/logo.png" alt=""></div>
            <div class="title text-uppercase text-light text-align-items-center">ОБЯЗАТЕЛЬНОГО МЕДИЦИНСКОГО СТРАХОВАНИЯ <br>
        ПРИ МИНИСТЕРСТВЕ ЗДРАВООХРАНЕНИЯ КЫРГЫЗСКОЙ РЕСПУБЛИКИ
        </div>
        <div class="header-contact1">
        <form action="search" method="POST">
            <p><input type="text" name="search"> 
            
            <button type="submit">искать</button></p>
            <hr>
        </form>

        </div>
    </div>
</div>
<div class="dropdown-s">
    <ul class="ul">
        <nav>
            <div class="d-flex justify-content-around align-items-center md-4">
			    <ul class="dropdown d-flex  justify-content-around align-items-center container">
			        <li class="punkt"><a class="punkt-menu text-uppercase" href="/">главная</a></li>

                    <li>
                        <a class="punkt-menu text-uppercase dropdown" data-bs-toggle="dropdown" href="about_us" role="button" aria-expanded="false">о нас</a>
                            <ul class="dropdown-menu pod-punkt1">
                            <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="history">ИСТОРИЧЕСКАЯ СПРАВКА</a></li>
                            <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="rukovodstvo">РУКОВОДСТВО</a></li>
                            <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="position">ПОЛОЖЕНИЯ</a></li>
                            <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="vacancy">вакансия</a></li>
                            <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="work-time">ГРАФИК ПРИЕМА</a></li>
                            <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="contacts">КОНТАКТЫ</a></li>
                        </ul>
                    </li>

			        <li><a class="punkt-menu text-uppercase nav-item dropdown"  data-bs-toggle="dropdown" href="about_us" role="button" aria-expanded="false">документы</a>
                        <ul class="dropdown-menu pod-punkt2">
			                <li><a class="dropdown-item pod-punkt-menu" href="#">ЗАКОНЫ</a></li>
			                <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="#">приказы</a></li>
			                <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="#">типовые договоры</a></li>
                            <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="#">справочники</a></li>
			                <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="#">проекты документов</a></li>
			                <li><a class="dropdown-item pod-punkt-menu text-uppercase" href="#">стратегии фомс</a></li>
			            </ul>
                    </li>
			        <li><a class="punkt-menu text-uppercase nav-item dropdown" data-bs-toggle="dropdown" href="about_us" role="button" aria-expanded="false">государственные гарантии</a>
                        <ul class="dropdown-menu pod-punkt3">
			                <li><a class="dropdown-item pod-punkt-menu" href="#">ПРОГРАММА ГОСУДАРСТВЕННЫХ ГАРАНТИЙ</a></li>
			                <li><a class="dropdown-item pod-punkt-menu" href="#">ЛЕКАРСТВЕННОЕ ОБЕСПЕЧЕНИЕ</a></li>
			                <li><a class="dropdown-item pod-punkt-menu" href="#">АПТЕКИ И ИХ АДРЕСА</a></li>
                            <li><a class="dropdown-item pod-punkt-menu" href="#">ЛЬГОТНЫЕ ЛЕКАРСТВА</a></li>
			            </ul>
                    </li>
			        <li><a class="punkt-menu text-uppercase nav-item dropdown"  data-bs-toggle="dropdown" href="about_us" role="button" aria-expanded="false">бюджет</a>
                        <ul class="dropdown-menu pod-punkt4">
			                <li><a class="dropdown-item pod-punkt-menu" href="#">УТВЕРЖДЕННЫЙ БЮДЖЕТ</a></li>
			                <li><a class="dropdown-item pod-punkt-menu" href="#">КАССОВЫЙ ПЛАН</a></li>
			                <li><a class="dropdown-item pod-punkt-menu" href="#">ИСПОЛНЕНИЕ БЮДЖЕТА</a></li>
                            <li><a class="dropdown-item pod-punkt-menu" href="#">КОМПЕНСАЦИОННЫЕ ВЫПЛАТЫ</a></li>
			                <li><a class="dropdown-item pod-punkt-menu" href="#">ОБЩЕСТВЕННОЕ ОБСУЖДЕНИЕ НПА</a></li>
			                <li><a class="dropdown-item pod-punkt-menu" href="#">ОБЩЕСТВЕННОЕ ОБСУЖДЕНИЕ CCБР</a></li>
			            </ul>
                    </li>
			        <li><a class="punkt-menu text-uppercase nav-item dropdown"  data-bs-toggle="dropdown" href="about_us" role="button" aria-expanded="false">ГЕМОДИАЛИЗ</a>
                        <ul class="dropdown-menu pod-punkt5">
			                <li><a class="dropdown-item pod-punkt-menu" href="#">РЕШЕНИЕ КОМИССИИ ПО ГЕМОДИАЛИЗУ</a></li>
			            </ul>
                    </li>
                    <li class="punkt"><a class="punkt-menu text-uppercase" href="status">статус омс</a></li>
			    </ul>
            </div>		
        </nav>
    </ul>
</div>
 
