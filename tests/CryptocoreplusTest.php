<?php
/**
 * Tests for CryptoCorePlus
 */

use PHPUnit\Framework\TestCase;
use Cryptocoreplus\Cryptocoreplus;

class CryptocoreplusTest extends TestCase {
    private Cryptocoreplus $instance;

    protected function setUp(): void {
        $this->instance = new Cryptocoreplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptocoreplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
