<?php

namespace App;

use PHPUnit\Framework\TestCase;

class AttributeInjectionDemoTest extends TestCase
{

    public function testRun()
    {
        $demo = new AttributeInjectionDemo();
        $this->assertEquals(1, $demo->run());

        // テスト: ロガーがあるのかないのかすらわからない
        // DI設定: オートワイヤリング
        // 実装では好き勝手にコメントアウトできる
    }
}
