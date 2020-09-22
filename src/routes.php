<?php
use core\Router;

$router = new Router();

// instanciando as rotas
$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');


$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@del');