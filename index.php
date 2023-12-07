<?php

declare(strict_types = 1);

session_start();

use Contrafile\Core\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__. "/app/config.php";
require __DIR__. "/app/rotas.php";
require __DIR__. "/app/Core/helper.php";

$url = $_GET['url'] ?? "";
unset($_GET['url']);
$metodoHTTP = $_SERVER["REQUEST_METHOD"];
Router::exec($url, $metodoHTTP);
