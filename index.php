<?php

use Mortagus\Library\Intern\Router\Router;

require_once dirname(__FILE__) . '/Webroot/config/global.php';
require_once dirname(__FILE__) . '/Webroot/config/init_website.php';

$router = new Router(filter_input(INPUT_GET, 'url'));

$router->addGetPath('/', 'Home:Home:home', 'homepage');
$router->addGetPath('/myself', 'Resume:Presentation:index', 'presentation');
$router->addGetPath('/projectsList', 'Project:Project:list', 'projectsIndex');
$router->addGetPath('/errorOccurred', 'Error:Error:errorOccurred', 'errorOccurred');
$router->addGetPath('/exceptionOccurred', 'Error:Error:exceptionOccurred', 'exceptionOccurred');
$router->run();