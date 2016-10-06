<?php

// imports all the top-level functions
use function Eloquent\Phony\Phpunit\Phony\any;
use function Eloquent\Phony\Phpunit\Phony\anyOrder;
use function Eloquent\Phony\Phpunit\Phony\anyOrderSequence;
use function Eloquent\Phony\Phpunit\Phony\checkAnyOrder;
use function Eloquent\Phony\Phpunit\Phony\checkAnyOrderSequence;
use function Eloquent\Phony\Phpunit\Phony\checkInOrder;
use function Eloquent\Phony\Phpunit\Phony\checkInOrderSequence;
use function Eloquent\Phony\Phpunit\Phony\equalTo;
use function Eloquent\Phony\Phpunit\Phony\inOrder;
use function Eloquent\Phony\Phpunit\Phony\inOrderSequence;
use function Eloquent\Phony\Phpunit\Phony\mock;
use function Eloquent\Phony\Phpunit\Phony\mockBuilder;
use function Eloquent\Phony\Phpunit\Phony\on;
use function Eloquent\Phony\Phpunit\Phony\onStatic;
use function Eloquent\Phony\Phpunit\Phony\partialMock;
use function Eloquent\Phony\Phpunit\Phony\restoreGlobalFunctions;
use function Eloquent\Phony\Phpunit\Phony\setExportDepth;
use function Eloquent\Phony\Phpunit\Phony\setUseColor;
use function Eloquent\Phony\Phpunit\Phony\spy;
use function Eloquent\Phony\Phpunit\Phony\spyGlobal;
use function Eloquent\Phony\Phpunit\Phony\stub;
use function Eloquent\Phony\Phpunit\Phony\stubGlobal;
use function Eloquent\Phony\Phpunit\Phony\wildcard;

class PhonyTest extends PHPUnit_Framework_TestCase
{
    public function testPhony()
    {
        $this->markTestIncomplete();
    }
}
