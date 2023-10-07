<?php

use Psr\Log\LoggerInterface;

class Log
{
    public static function debug($message)
    {
        global $container;
        $container->get(LoggerInterface::class)->debug($message);
    }
}
