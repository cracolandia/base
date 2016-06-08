<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Sylvio_ExampleTest extends TestCase
{
    /*
        Teste simples para introdução ao mundo dos Testes,
        Os testes são assert para a verificação:
        true
        false
        equals
        empty
        not empty
    */
    public function testBasicExample()
    {
        $this->assertTrue(1 < 2);
        $this->assertFalse(1 > 2);

        $this->assertEquals(1, '1');

        $this->assertEmpty([]);
        $this->assertNotEmpty([1]);
    }
}
