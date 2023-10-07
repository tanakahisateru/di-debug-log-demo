<?php

namespace App;

use Psr\Log\LoggerAwareTrait;

class SetterInjectionDemo
{
    use LoggerAwareTrait;

    public function run(): int
    {
        $this->logger?->debug('Hello from ' . __CLASS__);
        return 1;
    }
}
