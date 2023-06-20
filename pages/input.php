<?php include 'include/layout/header.php'?>
<?php include 'include/layout/head.php'?>
<section>
<div class="bag-cloth">
    <div class="form w-25 mx-auto container">
    <h2 class="mt-3 mb-3 text-center text-dark">Войти</h2>
        <form action="input_add.php" method="POST">
            <div class="mb-3 row">
                <p><label for="staticEmail" class="col-sm-2 col-form-label">Email</label></p>
                <input type="email" class="form-control" name="email" id="staticEmail" placeholder="введите ваш email">
            </div>
            <div class="mb-3 row">
                <p><label for="inputPassword" class="col-sm-2 col-form-label">Password</label></p>
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="введите пароль">
            </div>  
            <button type="submit" class="btn bg-dark text-white bg-gradient w-100 rounded-pill" name="send">Отправить</button>
        </form>
    </div>
</div>
</section>