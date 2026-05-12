<?php
/**
 * Tests for ZoneVault
 */

use PHPUnit\Framework\TestCase;
use Zonevault\Zonevault;

class ZonevaultTest extends TestCase {
    private Zonevault $instance;

    protected function setUp(): void {
        $this->instance = new Zonevault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zonevault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
