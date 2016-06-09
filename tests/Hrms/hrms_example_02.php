<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class hrms_example_02 extends TestCase
{
   /**
     * @dataProvider additionProvider
     */
    public function testExample($arr, $expected)
    {
    	$this->assertEquals($expected, \App\Helpers::reduce($arr));
    }

    public function additionProvider()
    {
        return array(
          array([1, 2, 5, 2], 10),
          array([1, 1, 7, 2], 11),
          array([1, 52, 2, 1, 1], 57)
        );
    }

    /** 
    * @expectedException Exception 
    * */
    public function testException()
    {
        \App\Helpers::reduce([1, 2, 'a']);
    }
}
