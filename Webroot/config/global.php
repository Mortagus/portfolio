<?php
namespace Mortagus;

// Path folders to the root
define('DS', '/');
//define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(dirname(__FILE__))));
define('WEB_DIR', ROOT . DS . 'Webroot');
define('CFG_DIR', WEB_DIR . DS . 'config');

define('SRC_DIR', ROOT . DS . 'Modules');
define('MDL_DIR', ROOT . DS . 'Model');
define('LIB_DIR', ROOT . DS . 'Library');

define('EXT_LIB_DIR', LIB_DIR . DS . 'Extern');
define('INT_LIB_DIR', LIB_DIR . DS . 'Intern');

// Session time
define('SESSION_NAME', 'MyWebSiteSessionID');
define('SESSION_TIME', 36000);

//website title base
define('WEB_TITLE', 'Portfolio');

// Data Base Name
define('DB_DRIVER', 'pdo_mysql');

if (isset($_SERVER['SERVER_NAME'])) {
    switch ($_SERVER['SERVER_NAME']) {
        case 'website.dev':
            define('BASE_URL', 'http://website.dev');
            define('DB_NAME', 'MortagusWebsite');
            define('DB_USER', 'root');
            define('DB_PWD', 'root');
            define('DB_HOST', 'localhost');
            define('IS_DEV_MOD', true);
            break;
        default:
            define('BASE_URL', 'http://localhost/projects/PortFolio/');
            define('DB_NAME', 'PortFolio');
            define('DB_USER', 'root');
            define('DB_PWD', 'root');
            define('DB_HOST', 'localhost');
            define('IS_DEV_MOD', true);
    }
} else {
    define('BASE_URL', 'http://localhost/');
    define('DB_NAME', 'MortagusWebsite');
    define('DB_USER', 'root');
    define('DB_PWD', '');
    define('DB_HOST', 'localhost');
    define('IS_DEV_MOD', true);
}

// Path folders to the BASE_URL
define('GLB_RSC', BASE_URL . DS . 'Webroot' . DS . 'resources');

define('EXT_GLB_RSC_URL', GLB_RSC . DS . 'extern');
define('INT_GLB_RSC_URL', GLB_RSC . DS . 'intern');

define('CSS_URL', BASE_URL . DS . 'Webroot' . DS . 'public' . DS . 'css');
define('JS_URL', BASE_URL . DS . 'Webroot' . DS . 'public' . DS . 'js');

// Path to files
define('GLB_PATH', ROOT . DS . 'Webroot' . DS . 'resources');

function globalLog() {
    echo 'DS =>' . DS . '<br>' . PHP_EOL;
    echo 'ROOT =>' . ROOT . '<br>' . PHP_EOL;
    echo 'WEB_DIR =>' . WEB_DIR . '<br>' . PHP_EOL;
    echo 'CFG_DIR =>' . CFG_DIR . '<br>' . PHP_EOL;
    echo 'SRC_DIR =>' . SRC_DIR . '<br>' . PHP_EOL;
    echo 'MDL_DIR =>' . MDL_DIR . '<br>' . PHP_EOL;
    echo 'LIB_DIR =>' . LIB_DIR . '<br>' . PHP_EOL;
    echo 'EXT_LIB_DIR =>' . EXT_LIB_DIR . '<br>' . PHP_EOL;
    echo 'INT_LIB_DIR =>' . INT_LIB_DIR . '<br>' . PHP_EOL;
    echo 'SESSION_NAME =>' . SESSION_NAME . '<br>' . PHP_EOL;
    echo 'SESSION_TIME =>' . SESSION_TIME . '<br>' . PHP_EOL;
    echo 'WEB_TITLE =>' . WEB_TITLE . '<br>' . PHP_EOL;
    echo 'DB_NAME =>' . DB_NAME . '<br>' . PHP_EOL;
    echo 'DB_DRIVER =>' . DB_DRIVER . '<br>' . PHP_EOL;
    echo 'BASE_URL =>' . BASE_URL . '<br>' . PHP_EOL;
    echo 'DB_USER =>' . DB_USER . '<br>' . PHP_EOL;
    echo 'DB_PWD =>' . DB_PWD . '<br>' . PHP_EOL;
    echo 'DB_HOST =>' . DB_HOST . '<br>' . PHP_EOL;
    echo 'IS_DEV_MOD =>' . IS_DEV_MOD . '<br>' . PHP_EOL;
    echo 'GLB_RSC =>' . GLB_RSC . '<br>' . PHP_EOL;
    echo 'EXT_GLB_RSC_URL =>' . EXT_GLB_RSC_URL . '<br>' . PHP_EOL;
    echo 'INT_GLB_RSC_URL =>' . INT_GLB_RSC_URL . '<br>' . PHP_EOL;
    echo 'CSS_URL =>' . CSS_URL . '<br>' . PHP_EOL;
    echo 'JS_URL =>' . JS_URL . '<br>' . PHP_EOL;
    echo 'GLB_PATH =>' . GLB_PATH . '<br>' . PHP_EOL;
}