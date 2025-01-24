<?php

define("PATH", 'https://blog.loc'); //domain url
define("ROOT", dirname(__DIR__)); // root directory

define("APP", ROOT . '/app'); // app folder
define("VIEWS", APP . '/views'); // app/views folder
define("COMPONENTS", VIEWS . '/components'); // components folder
define("CONTROLLERS", APP . '/controllers');//app/controllers folder

define("CORE", ROOT . '/core');
define("PUBLIC", ROOT . '/public');

require_once CORE . "/functions.php";

$url = trim($_SERVER['REQUEST_URI'], '/');

if ($url === '' || $url === 'index.php') {
    require_once CONTROLLERS . "/index.php";

} else if ($url === 'contacts.php') {
    require_once CONTROLLERS . "/contacts.php";
} else {
    http_response_code(404);
    require_once VIEWS . "/errors/404.tmpl.php";
}


?>