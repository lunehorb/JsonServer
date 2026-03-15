<?php
/**
 * Tests for JsonServerMock
 */

use PHPUnit\Framework\TestCase;
use Jsonservermock\Jsonservermock;

class JsonservermockTest extends TestCase {
    private Jsonservermock $instance;

    protected function setUp(): void {
        $this->instance = new Jsonservermock(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Jsonservermock::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
