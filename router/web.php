<?php
require_once __DIR__.'/../vendor/autoload.php';

use setup\config\routerv1;
use setup\middleware\Auth;
new setup\config\bootstrap();

$router = new routerv1();
$router->setPrefix("web");

//landing page
$router->get('/', Service::class, 'index');
$router->get('/xel', xeldocs::class, 'xeltest');

//xel-dashboard
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

//auth
$router->get('/xel/admin/login', authcontroller::class, 'getLogin');
$router->get('/xel/admin/register', authcontroller::class, 'getRegister');
$router->get('/xel/admin/testing', authcontroller::class, 'testingUid');
$router->get('/xel/admin/logout', authcontroller::class, 'logout');
$router->post('/xel/admin/post-register', authcontroller::class, 'setNewUser');
$router->post('/xel/admin/post-login', authcontroller::class, 'loginXel');

//bsd
$router->get('/xel/basedata',  bsd::class, 'showBasedata');
$router->get('/xel/service',  bsd::class, 'showService');
$router->get('/xel/display',  bsd::class, 'showDisplay');

//Instalation
$router->get('/xel/app-server',  instalation::class, 'showAppServer');
$router->get('/xel/apache-server',  instalation::class, 'showApacheServer');
$router->get('/xel/composer',  instalation::class, 'showComposer');

//welcome
$router->get('/xel/credits',  welcome::class, 'showCredit');
$router->get('/xel/server-req',  welcome::class, 'showServerReq');
$router->get('/xel/welcome',  welcome::class, 'showWelcome');

//routing
$router->get('/xel/overview',  routing::class, 'showOverview');
$router->get('/xel/router-gemstone',  routing::class, 'showRouterGemstone');
$router->get('/xel/router-middleware',  routing::class, 'showMiddleware');

//security
$router->get('/xel/gemstone-csrf',  security::class, 'showGemstoneCSRF');
$router->get('/xel/gemstone-xss',  security::class, 'showGemstoneXSS');

//database
$router->get('/xel/setup-database',  database::class, 'showSetupDatabase');
$router->get('/xel/future-dbms',  database::class, 'showFutureDBMS');
$router->get('/xel/xgen-query',  database::class, 'showXgenQuery');

//utility-class
$router->get('/xel/helper',  utility::class, 'showHelper');

//stonegem
$router->get('/xel/auth',  security::class, 'showAuth');
$router->get('/xel/encrypt',  security::class, 'showEncrypt');
$router->get('/xel/hash',  security::class, 'showHash');
$router->get('/xel/stonegem',  security::class, 'showStonegem');

//filestorage
$router->get('/xel/file-storage',  filestorage::class, 'showFileStorage');

//unit-testing
$router->get('/xel/unit-testing',  unittesting::class, 'showUnitTesting');

$router->exec();

//xel

