<?php



require '../app/Autoloader.php';
Autoloader::register();





if (isset($_GET['controller']) && isset($_GET['action'])) {  
    if (!class_exists($_GET['controller'])) {
    Controller::error404();
    echo 'erreur 1';
    die;
    }

    $controller = new $_GET['controller'];
    $methode = $_GET['action'];

    if (!method_exists($controller, $methode)) {
        Controller::error404();
        echo 'erreur 2';
        die;
    }
    
    else {
        $controller->$methode();
    }
   
} 
else  if (!isset($_GET['controller']) or !isset($_GET['action'])) {
    $index = new Controller;
    $index->render('index');
}