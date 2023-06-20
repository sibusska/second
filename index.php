<?php
//url
$request_url = rtrim(ltrim(urldecode(parse_url($_SERVER['REQUEST_URI'],5)), '/'), '/');
$params = array_filter(explode("/", $request_url)); 
//если в url передано 2 параметр
if (count($params) == 2) {
    $dynamic_routes = [
        'offers' =>  'pages/offers.php',
    ];
    if (isset($dynamic_routes[$params[0]])) {
        $get = $params[1];
        require_once $dynamic_routes[$params[0]];
    }
    else require_once ('pages/404.php');
}
//если в url передано меньше двух параметров
elseif (count($params) < 2) {
    $routes = [
        '' => 'pages/main.php',
        'news' => 'pages/news.php',
        'main' => 'pages/main.php',
        'input' => 'pages/input.php',
        'status' => 'pages/status.php',
        'registration' => 'pages/registration.php',
        'news2' => 'pages/news2.php',
        'search' => 'pages/search.php',
        'about_us' => 'pages/about_us.php',
        'history' => 'pages/history.php',
        'rukovodstvo' => 'pages/rukovodstvo.php',
        'position' => 'pages/position.php',
        'vacancy' => 'pages/vacancy.php',
        'work-time' => 'pages/work-time.php',
        'open-date' => 'pages/open-date.php',
        'contacts' => 'pages/contacts.php',
        'contacts_prosmotr_first' => 'pages/contacts_prosmotr_first.php',




    ];
    if (isset($routes[$request_url])) require_once $routes[$request_url];
    else require_once ('pages/404.php');
}

else require_once ('pages/404.php');
?>