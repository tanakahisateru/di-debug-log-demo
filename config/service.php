<?php

use App\SetterInjectionDemo;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use function DI\autowire;
use function DI\get;

return [
    LoggerInterface::class => autowire(Logger::class)
        ->constructor('app', [get(StreamHandler::class)]),
    StreamHandler::class => autowire()
        ->constructor('php://stdout'),

    // セッターインジェクションはオートワイヤリングに向かない
    SetterInjectionDemo::class => autowire()
        ->method('setLogger', get(LoggerInterface::class)),
];
