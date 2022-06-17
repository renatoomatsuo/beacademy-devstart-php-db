<?php

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

function createRoute(string $controllerName, string $methodName)
{
    return [
        'controller' => $controllerName,
        'method' => $methodName
    ];
}

$routes = [
    '/' => createRoute(IndexController::class , 'indexAction'),
    '/login' => createRoute(IndexController::class , 'loginAction'),
    '/produtos' => createRoute(ProductController::class , 'listAction'),
    '/produtos/adicionar' => createRoute(ProductController::class , 'addAction'),
    '/produtos/editar' => createRoute(ProductController::class , 'editAction'),
    '/produtos/excluir' => createRoute(ProductController::class , 'deleteAction'),
    '/produtos/relatorio' => createRoute(ProductController::class , 'reportAction'),
    '/categorias' => createRoute(CategoryController::class , 'listAction'),
    '/categorias/adicionar' => createRoute(CategoryController::class , 'addAction'),
    '/categorias/editar' => createRoute(CategoryController::class , 'editAction'),
    '/categorias/excluir' => createRoute(CategoryController::class , 'deleteAction')
];

$url = explode('?', $_SERVER['REQUEST_URI'])[0];


if (!isset($routes[$url])) {
    (new ErrorController())->notFoundAction();
    exit;
}
$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

return (new $controllerName())->$methodName();
