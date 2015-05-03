<?php
include_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\ClassLoader\Psr4ClassLoader;

$namespaceLoader = new Psr4ClassLoader();
$namespaceLoader->addPrefix('Bearwulf\\', __DIR__ . '/../src/Bearwulf/');
$namespaceLoader->register();