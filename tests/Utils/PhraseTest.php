<?php

use PHPUnit\Framework\TestCase;
use Src\Utils\Phrase;

use function PHPUnit\Framework\assertEquals;

/**
 * ClassNameTest
 * @group group
 */
class PhraseTest extends TestCase
{
    private Phrase $phrase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->phrase = new Phrase();
    }

    /** @test */
    public function test_title()
    {
        assertEquals("Hello World", $this->phrase->title("55"));
    }

    /** @test */
    public function test_upper()
    {
        assertEquals("HELLO WORLD", $this->phrase->upper("hello world"));
    }

    /** @test */
    public function test_lower()
    {
        assertEquals("hello world", $this->phrase->lower("HELLO WORLD"));
    }

    /** @test */
    public function test_upFirst()
    {
        assertEquals("Hello world", $this->phrase->upFirst("hello world"));
    }

}
