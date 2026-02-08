<?php

use PHPUnit\Framework\TestCase;
use Src\Utils\Validate;

use function PHPUnit\Framework\assertEquals;

/**
 * ValidateTest
 * @group group
 */
class ValidateTest extends TestCase
{
    private Validate $validate;
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->validate = new Validate();
    }

    /** @test */
    public function test_string()
    {
        assertEquals(true, $this->validate->string("11"));
    }

    public function test_array()
    {
        assertEquals(true, $this->validate->array(["", ""]));
    }

}
