<?php
/**
 * Tests for DiodeRhythm
 */

use PHPUnit\Framework\TestCase;
use Dioderhythm\Dioderhythm;

class DioderhythmTest extends TestCase {
    private Dioderhythm $instance;

    protected function setUp(): void {
        $this->instance = new Dioderhythm(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dioderhythm::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
