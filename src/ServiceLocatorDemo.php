<?php

namespace App;

class ServiceLocatorDemo
{
    public function run(): int
    {
        \Log::debug('Hello from ' . __CLASS__);
        return 1;
    }
}
