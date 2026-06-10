<?php
require_once 'Model.php';
require_once 'View.php';
require_once 'Controller.php';

$model = new Model();
$view = new View($model);
$controller = new Controller($model);

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
    case 'somar':
        $controller->somar();
        break;
    case 'subtrair':
        $controller->subtrair();
        break;
    case 'multiplicar':
        $controller->multiplicar();
        break;
    case 'dividir':
        $controller->dividir();
        break;
    }
}

echo $view->output();