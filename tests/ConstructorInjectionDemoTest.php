<?php

namespace App;

use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class ConstructorInjectionDemoTest extends TestCase
{
    public function testRun(): void
    {
        $logger = $this->createMock(LoggerInterface::class);
        $demo = new ConstructorInjectionDemo($logger);
        // デフォルト null 引数だと注入されないのでつねにモックが必要。
        // 気軽に消せない公開 API になる。

        $this->assertEquals(1, $demo->run());
    }
}
