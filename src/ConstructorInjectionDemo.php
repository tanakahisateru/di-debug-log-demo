<?php

namespace App;

use Psr\Log\LoggerInterface;

class ConstructorInjectionDemo
{
    public function __construct(
        private LoggerInterface $logger,
    ) { }

    public function run(): int
    {
        $this->logger->debug('Hello from ' . __CLASS__);
        return 1;
    }
}
