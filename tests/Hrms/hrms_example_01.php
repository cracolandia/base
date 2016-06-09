<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class hrms_example_01 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(5 > 2);
        $this->assertFalse(2 > 5);

        $this->assertEquals(10, '10');

        $this->assertEmpty([]);
        $this->assertNotEmpty([99]);
    }
}
