<?php

use PHPUnit\Framework\TestCase;
use MyPhpLib\Encoder;

class EncoderTest extends TestCase {
    public function testEncode() {
        $this->assertEquals('SGVsbG8gd29ybGQ=', Encoder::encode('Hello world'));
    }

    public function testDecode() {
        $this->assertEquals('Hello world', Encoder::decode('SGVsbG8gd29ybGQ='));
    }
}
