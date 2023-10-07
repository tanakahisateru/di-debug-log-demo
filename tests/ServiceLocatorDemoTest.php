<?php

namespace App;

use DI\Container;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use function DI\autowire;

class ServiceLocatorDemoTest extends TestCase
{
    public function testRun(): void
    {
        $demo = new ServiceLocatorDemo();
        $this->assertEquals(1, $demo->run());
    }

    protected function setUp(): void
    {
        parent::setUp();

        // グローバルサービスロケーター
        require_once __DIR__ . '/../config/global.php';

        // ダミーコンテナ
        global $container;
        $container = new Container([
            // ダミーロガー
            LoggerInterface::class => autowire(Logger::class)
                ->constructor('app'),
        ]);

        // ダミーをやるにしたってグローバルな環境が必要で、抜き出して他所で使いにくい。
        // つまり、クラスが独立した汎用モジュールにならない。これは単体なのか!?
    }
}
