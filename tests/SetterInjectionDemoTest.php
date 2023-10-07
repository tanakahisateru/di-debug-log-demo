<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SetterInjectionDemoTest extends TestCase
{
    public function testRun(): void
    {
        $demo = new SetterInjectionDemo();

        // ロガーなしテストが自然にできるけど、実運用でいちいち DI 設定を変えるのは面倒
        // $logger = $this->createMock(LoggerInterface::class);
        // $demo->setLogger($logger);

        $this->assertEquals(1, $demo->run());
    }
}
