<?php

namespace App;

use Psr\Log\LoggerAwareTrait;

class SetterInjectionDemo
{
    use LoggerAwareTrait;

    // ↑ こういうの
    // protected ?LoggerInterface $logger = null;
    // public function setLogger(LoggerInterface $logger): void

    public function run(): int
    {
        $this->logger?->debug('Hello from ' . __CLASS__);
        return 1;
    }
}
