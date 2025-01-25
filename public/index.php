<?php


require_once(dirname(__DIR__) . "/config/config.php");


require_once CORE . "/functions.php";

require_once(CORE . "/classes/DB.php");

$db_config = require_once(CONFIG . "/db.php");
$db = new DB($db_config);

$db2 = new DB($db_config);
dump([$db, $db2]);
dd([$db, $db2]);

require_once(CORE . "/router.php");


?>