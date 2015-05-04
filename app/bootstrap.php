<?php
define('APP_DIR', __DIR__);
define('ROOT_DIR', dirname(APP_DIR));
define('CONFIG_DIR', APP_DIR . '/config');
define('TEMPLATE_DIR', APP_DIR . '/templates');

include_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\ClassLoader\Psr4ClassLoader;

// Make the RCMF namespace available
$namespaceLoader = new Psr4ClassLoader();
$namespaceLoader->addPrefix('Bearwulf\\', __DIR__ . '/../src/Bearwulf/');
$namespaceLoader->register();

new Bearwulf\RCMF\DataLayer\DataLayer();