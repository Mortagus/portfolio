<?php

namespace Mortagus;

// Start session
session_name(SESSION_NAME);
session_start();

use Mortagus\Library\Intern\Autoloader;
use Mortagus\Library\Intern\ErrorManager;
use Mortagus\Library\Intern\SessionManager;

//chargement doctrine
require_once ROOT . DS . 'vendor' . DS . 'autoload.php';

if (php_sapi_name() == "cli") {
    require_once INT_LIB_DIR . DS . 'DoctrineManager.php';
} else {
    //autoloader
    require_once INT_LIB_DIR . DS . 'Autoloader.php';
    Autoloader::register();

    //gestion des erreurs
    ErrorManager::register();

    //gestion des tableaux superglobaux
}