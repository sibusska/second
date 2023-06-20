<?php

setcookie('user', $email, time() - 36000, "/");
header('Location:/')
?>