<?php

use App\App;
use DI\ContainerBuilder;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/global.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAttributes(true);
$containerBuilder->addDefinitions(__DIR__ . '/../config/service.php');
$container = $containerBuilder->build();

$container->get(App::class)->run();
