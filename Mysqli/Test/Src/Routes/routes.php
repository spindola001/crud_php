<?php

include "../../vendor/autoload.php";

use App\Controllers\Cadastro\CadastroCliente;
// use App\Controllers\IndexController;

$request = $_SERVER['REQUEST_URI'];

// print_r($request);

$requestPath = explode('/', $request);

// print_r($requestPath);
// die;

$controller = $requestPath[1];
$method = $requestPath[2] ?? '';

if (!empty($method)) {
    $params = $requestPath;
    // unset($params[1]);
    // unset($params[2]);
} else {
    $method = 'index';
}

$params['query_string'] = explode('&', $_SERVER['QUERY_STRING']);

switch ($controller) {
    case 'cadastroCliente':
        $controller = new CadastroCliente();
        break;
    
    default:
        // $controller = new IndexController();
        break;
}

echo "$controller->$method(".print_r($params).")";