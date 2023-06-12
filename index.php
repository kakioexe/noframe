<?php
define("ROOT_PATH", __DIR__ . "/");

require ROOT_PATH . "vendor/autoload.php";

use App\Controller\HomeController;

$controller = new HomeController();

$controller->index();
