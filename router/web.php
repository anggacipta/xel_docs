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

//composerInstallation
$router->get('/xel/composer-instalation',  composerinstall::class, 'showInstalation');
$router->get('/xel/running-app',  composerinstall::class, 'showRunningApp');

//welcome
$router->get('/xel/credits',  welcome::class, 'showCredit');
$router->get('/xel/server-req',  welcome::class, 'showServerReq');
$router->get('/xel/welcome',  welcome::class, 'showWelcome');

//routing
$router->get('/xel/add-route',  routing::class, 'showAddRoute');
$router->get('/xel/request-class',  routing::class, 'showRequestClass');

//database
$router->get('/xel/connect-database',  database::class, 'showConnectDatabase');
$router->get('/xel/database-config',  database::class, 'showDatabaseConfig');
$router->get('/xel/database-xgen',  database::class, 'showXgen');

//manage-database
$router->get('/xel/database-command',  managedatabase::class, 'showDatabaseCommand');
$router->get('/xel/database-migration',  managedatabase::class, 'showDatabaseMigration');
$router->get('/xel/database-seed',  managedatabase::class, 'showDatabaseSeed');

//helpers
$router->get('/xel/array-helper',  helpers::class, 'showArrayHelper');
$router->get('/xel/cookie-helper',  helpers::class, 'showCookieHelper');

//testing
$router->get('/xel/database-testing',  testingservice::class, 'showDatabaseTesting');
$router->get('/xel/generate-data',  testingservice::class, 'showGenerateData');

//stonegem
$router->get('/xel/auth',  security::class, 'showAuth');
$router->get('/xel/encrypt',  security::class, 'showEncrypt');
$router->get('/xel/hash',  security::class, 'showHash');
$router->get('/xel/stonegem',  security::class, 'showStonegem');

//commandline
$router->get('/xel/command-line',  commandline::class, 'showCommandLine');

$router->exec();

//xel

