<?php

use Class\Connect\Connect;
use Class\Connect\SingletonConnect;

require_once "../vendor/autoload.php";

$instance = SingletonConnect::getInstance();

var_dump($instance);


?>