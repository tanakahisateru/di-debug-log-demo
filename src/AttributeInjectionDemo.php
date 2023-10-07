<?php

namespace App;

use DI\Attribute\Inject;
use Psr\Log\LoggerInterface;

class AttributeInjectionDemo
{
    #[Inject]
    private ?LoggerInterface $logger = null;

    public function run(): int
    {
        $this->logger?->debug('Hello from ' . __CLASS__);
        return 1;
    }
}
