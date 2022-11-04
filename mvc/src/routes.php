<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/newUser', 'UsersController@addNewUser');
$router->post('/newUser', 'UsersController@addNewUserAction');

$router->get('/users/{id}/update', 'UsersController@updateUser');
$router->post('/users/{id}/update', 'UsersController@updateUserAction');

$router->get('/users/{id}/delete', 'UsersController@deleteUserAction');
