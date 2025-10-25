<?php

// definir constante para controlar o fluxo da aplicação
define('CONTROL', true);

// incluir arquivos
$routes = require_once('inc/routes.php');

// definir rota
$route = $_GET['route'] ?? 'home';

if (!in_array($route, $routes)) {
    $route = '404';
}

// fluxo das rotas 
switch ($route) {
    case 'home':
        require_once 'inc/header.php';
        require_once 'inc/home.php';
        require_once 'inc/footer.php';
        break;
    case '404':
        require_once 'inc/header.php';
        require_once 'inc/404.php';
        require_once 'inc/footer.php';
        break;
}
