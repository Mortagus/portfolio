<?php

use Mortagus\Library\Intern\DoctrineManager;

require_once dirname(__FILE__) . '/global.php';
require_once dirname(__FILE__) . '/init_website.php';

$doctrine = DoctrineManager::getInstance();
$doctrine->runConsoleHelper();
