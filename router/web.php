<?php
require_once __DIR__.'/../vendor/autoload.php';

use setup\config\routerv1;
use setup\middleware\Auth;
new setup\config\bootstrap();

$router = new routerv1();
$router->setPrefix("web");

//landing page1
$router->get('/', Service::class, 'index');

//xel-dashboard
$router->get('/xel', xeldocs::class, 'xeltest');
$router->get('/xel-dash', xeldocs::class, 'xeldash');
$router->get('/xel-dash/create', xeldocs::class, 'createXel');
$router->post('/xel-dash/insert', xeldocs::class, 'insertXel');
$router->get('/xel-dash/edit/{id}',  xeldocs::class, 'editXel');
$router->post('/xel-dash/update/{id}',  xeldocs::class, 'updateXel');
$router->post('/xel-dash/delete/{id}', xeldocs::class, 'deleteXel');
$router->get('/xel-dash/categories', xeldocs::class, 'showCategories');
$router->get('/xel-dash/create/categories', xeldocs::class, 'createCategories');
$router->post('/xel-dash/insert/categories', xeldocs::class, 'insertCategories');
$router->get('/xel-dash/edit/categories/{id}',  xeldocs::class, 'editCategories');
$router->post('/xel-dash/update/categories/{id}',  xeldocs::class, 'updateCategories');
$router->post('/xel-dash/delete/categories/{id}', xeldocs::class, 'deleteCategories');

//composerInstallation
$router->get('/composer-instalation',  composerinstall::class, 'showInstalation');
$router->get('/running-app',  composerinstall::class, 'showRunningApp');

//welcome
$router->get('/credits',  welcome::class, 'showCredit');
$router->get('/server-req',  welcome::class, 'showServerReq');
$router->get('/welcome',  welcome::class, 'showWelcome');


$router->exec();

//xel

