<?php

require_once 'vendor/autoload.php';
require_once 'autoload.php';
// require_once '../configuracion.php'; para dps

Mustache_Autoloader::register();

$templates = new Templates();
$page = $templates->getPageURL();
// echo $page;
$data = $templates->data($page);

echo $templates->render($page, $data);
